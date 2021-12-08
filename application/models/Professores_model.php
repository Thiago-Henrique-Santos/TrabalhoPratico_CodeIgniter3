<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Professores_model extends CI_Model
{
    public function listarProfessores()
    {
        $consulta = $this->db->select("id, nome")->from("professor")->get();
        return $consulta->result();
    }

    public function exibirProfessores()
    {
        $id = $this->input->post("campo_professor");
        $consulta = $this->db->select("*")->from("professor")->where("id = $id")->get();
        return $consulta->result();
    }

    public function exibirProfessoresDadosAdicionais()
    {
        $id = $this->input->post("campo_professor");
        $consulta = $this->db->select("turma.serie, turma.nome AS 'nomeTurma', disciplina.nome AS 'nomeDisciplina'")->from("professor, turma, disciplina")->where("professor.id = $id and turma.id = disciplina.id_turma and professor.id = disciplina.id_professor")->get();
        return $consulta->result();
    }

    public function cadastrarProfessor()
    {
        $dados = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'masp' => $this->input->post('masp'),
            'senha' => $this->input->post('senha')
        );
        $this->db->insert("professor", $dados);
    }

    public function removerProfessor()
    {
        $id = $this->input->post("campo_professor");
        $this->db->where('id', $id);
        $this->db->delete('professor');
    }

    public function atualizarProfessorBD()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $dados = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'masp' => $this->input->post('masp'),
            'senha' => $this->input->post('senha')
        );
        $this->db->update("professor", $dados);
    }
}
