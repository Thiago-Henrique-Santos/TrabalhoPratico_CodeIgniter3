<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador extends CI_Controller
{
	public function index()
	{
		$this->load->view('menu');
	}

	public function selecionar($opcao)
	{
		if ($opcao == 'aluno') {
			$this->load->model('Alunos_model');
			$dados['alunos'] = $this->Alunos_model->listarAlunos();
			$this->load->view('escolher_aluno', $dados);
		} elseif ($opcao == 'professor') {
			$this->load->model('Professores_model');
			$dados['professores'] = $this->Professores_model->listarProfessores();
			$this->load->view('escolher_professor', $dados);
		}
	}

	public function exibir($opcao)
	{
		if ($opcao == 'aluno') {
			$this->load->model('Alunos_model');
			$dados['alunos'] = $this->Alunos_model->exibirAlunos();
			$dados['alunosDadosAdicionais'] = $this->Alunos_model->exibirAlunosDadosAdicionais();
			$this->load->view('exibir_aluno', $dados);
		} elseif ($opcao == 'professor') {
			$this->load->model('Professores_model');
			$dados['professores'] = $this->Professores_model->exibirProfessores();
			$dados['professoresDadosAdicionais'] = $this->Professores_model->exibirProfessoresDadosAdicionais();
			$this->load->view('exibir_professor', $dados);
		}
	}

	public function voltar()
	{
		$this->load->view('menu');
	}
}
