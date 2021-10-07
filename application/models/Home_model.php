<?php
/**
 * Autor: Isaias de Oliveira
 * E-mail: visaotec.com@gmail.com
 */
defined('BASEPATH') OR exit('Ação não permitida');

class Home_model extends CI_Model {

   public function get_total_vagas() {

          $this->db->select_sum('precificacao_numero_vagas');
          $this->db->where('precificacao_ativa', 1);

          return $this->db->get('precificacoes')->row();

   }

   public function get_total_mensalidades() {

           $this->db->select('FORMAT(SUM(mensalidade_valor_mensalidade), 2) as total_mensalidades');

           return $this->db->get('mensalidades')->row();
   }

      public function get_mensalidades_vencidas() {
       
       $this->db->where('mensalidade_data_vencimento <', date('Y-m-d'));
       $this->db->where('mensalidade_status', 0);

        return $this->db->get('mensalidades')->result();

   }

     public function get_total_avulsos() {

           $this->db->select('FORMAT(SUM(estacionar_valor_devido), 2) as total_avulsos');

           return $this->db->get('estacionar')->row();
   }

   public function count_all($table = NULL, $condition =NULL) {

        $this->db->from($table);

        if ($condition) {

            $this->db->where($condition);

        }
        return $this->db->count_all_results();

   }


}