<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disciplinas_model extends CI_Model
{
    public function cadastrarDisciplina()
    {
        $dados = array(
            'nome' => $this->input->post('nome'),
            'ano' => $this->input->post('ano'),
            'id_professor' => $this->input->post('campo_professor'),
            'id_turma' => $this->input->post('campo_turma')
        );
        $this->db->insert("disciplina", $dados);
    }
}
