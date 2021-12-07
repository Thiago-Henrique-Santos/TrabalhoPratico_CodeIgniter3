<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Turmas_model extends CI_Model
{
    public function listarTurmas()
    {
        $consulta = $this->db->select("id, nome, serie")->from("turma")->get();
        return $consulta->result();
    }

    public function cadastrarTurma()
    {
        $dados = array(
            'nome' => $this->input->post('nome'),
            'serie' => $this->input->post('campo_serie')
        );
        $this->db->insert("turma", $dados);
    }
}
