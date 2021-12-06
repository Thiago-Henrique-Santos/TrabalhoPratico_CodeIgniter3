<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alunos_model extends CI_Model
{
	public function listarAlunos()
	{
		$consulta = $this->db->select("id, nome")->from("aluno")->get();
		return $consulta->result();
	}

	public function exibirAlunos()
	{
		$id = $this->input->post("campo_aluno");
		$consulta = $this->db->select("aluno.*, turma.serie, turma.nome AS 'nomeTurma'")->from("aluno, turma")->where("aluno.id = $id and aluno.id_turma = turma.id")->get();
		return $consulta->result();
	}

	public function exibirAlunosDadosAdicionais()
	{
		$id = $this->input->post("campo_aluno");
		$consulta = $this->db->select("disciplina.nome AS 'nomeDisc'")->from("aluno, turma, disciplina")->where("aluno.id = $id and turma.id = aluno.id_turma and disciplina.id_turma = turma.id")->get();
		return $consulta->result();
	}
}