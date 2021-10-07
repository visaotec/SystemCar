<?php
/**
 * Autor: Isaias de Oliveira
 * E-mail: visaotec.com@gmail.com
 */
defined('BASEPATH') OR exit('Ação não permitida');

class Mensalidades_model extends CI_Model {
  
    public function get_all() {
         
        $this->db->select([
            'mensalidades.*',  
            'precificacoes.precificacao_id',  
            'precificacoes.precificacao_categoria',
            'precificacoes.precificacao_valor_mensalidade',    
            'mensalistas.mensalista_id',    
            'mensalistas.mensalista_nome',
            'mensalistas.mensalista_cpf',
            'mensalistas.mensalista_dia_vencimento',      
         ]);

         $this->db->join('precificacoes','precificacao_id = mensalidade_precificacao_id', 'LEFT');
         $this->db->join('mensalistas','mensalista_id = mensalidade_mensalista_id', 'LEFT');

         return $this->db->get('mensalidades')->result();

    }

}