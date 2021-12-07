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

	public function cadastrar($opcao)
	{
		if ($opcao == 'aluno') {
			$this->load->model("Turmas_Model");
			$dados['turmas'] = $this->Turmas_Model->listarTurmas();
			$this->load->view("cadastrarAluno", $dados);
		} elseif ($opcao == 'professor') {
			$this->load->view("cadastrarProfessor");
		} elseif ($opcao == 'turma') {
			$this->load->view("cadastrarTurma");
		} elseif ($opcao == 'disciplina') {
			$this->load->model("Turmas_Model");
			$dados['turmas'] = $this->Turmas_Model->listarTurmas();
			$this->load->model("Professores_Model");
			$dados['professores'] = $this->Professores_Model->listarProfessores();
			$this->load->view("cadastrarDisciplina", $dados);
		}
	}

	public function cadastrarBD($opcao)
	{
		if ($opcao == "aluno") {
			$this->load->model("Alunos_model");
			$this->Alunos_model->cadastrarAluno();
			$this->load->view("menu");
		} else if ($opcao == "professor") {
			$this->load->model("Professores_model");
			$this->Professores_model->cadastrarProfessor();
			$this->load->view("menu");
		} else if ($opcao == "turma") {
			$this->load->model("Turmas_model");
			$this->Turmas_model->cadastrarTurma();
			$this->load->view("menu");
		} else if ($opcao == "disciplina") {
			$this->load->model("Disciplinas_model");
			$this->Disciplinas_model->cadastrarDisciplina();
			$this->load->view("menu");
		}
	}

	public function voltar()
	{
		$this->load->view('menu');
	}
}
