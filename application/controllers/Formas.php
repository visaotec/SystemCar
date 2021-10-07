<?php
/**
 * Autor: Isaias de Oliveira
 * E-mail: visaotec.com@gmail.com
 */
defined('BASEPATH') OR exit('Ação não permitida');

class Formas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }
    public function index() {
    
        $data = array(

            'titulo' => 'Formas de pagamento cadastradas',
            'sub_titulo' => 'Listando formas de pagamento',
            'icone_view' => 'fas fa-comment-dollar',
            'styles' => array(
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
             ),
            'scripts' => array(   
            'plugins/datatables.net/js/jquery.dataTables.min.js',
            'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
            'plugins/datatables.net/js/estacionamento.js',
             ),
            'formas' => $this->core_model->get_all('formas_pagamentos'),
        );
        /*
          echo '<pre>';
          print_r ($data['precificacoes']);
          exit();
          */

        $this->load->view('layout/header', $data);
        $this->load->view('formas/index');
        $this->load->view('layout/footer');
    }

    public function core($forma_pagamento_id = NULL) {
  
        if (!$this->ion_auth->is_admin()) {
        $this->session->set_flashdata('info', 'Não tem permissão para  Cadastrar ou Editar formas de pagamento!');
        redirect($this->router->fetch_class());
        }

         if (!$forma_pagamento_id) {
          //Cadastrando
          $this->form_validation->set_rules('forma_pagamento_nome', 'Forma de pagamento', 'trim|required|min_length[4]|max_length[40]|is_unique[formas_pagamentos.forma_pagamento_nome]');
            
          if ($this->form_validation->run()) {

              $data = elements (

                  array(
                    'forma_pagamento_nome',
                    'forma_pagamento_ativa',
                   
                  ), $this->input->post() 

               );

               $data = html_escape($data);

               $this->core_model->insert('formas_pagamentos', $data);
               redirect($this->router->fetch_class());

          } else {
         // Erro de validação
         $data = array(

          'titulo' => 'Cadastrar formas de pagamento ',
          'sub_titulo' => 'Cadastrando formas de pagamento',
          'icone_view' => 'fas fa-comment-dollar',
          'styles' => array(
          'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
           ),
          'scripts' => array(   
          'plugins/datatables.net/js/jquery.dataTables.min.js',
          'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
          'plugins/datatables.net/js/estacionamento.js',
           ),

      );

            $this->load->view('layout/header', $data);
            $this->load->view('formas/core');
            $this->load->view('layout/footer');

          }

         } else {

            if (!$this->core_model->get_by_id('formas_pagamentos', array('forma_pagamento_id' => $forma_pagamento_id))) {
                $this->session->set_flashdata('error', 'Forma de pagamento não encontrada!');
                redirect($this->router->fetch_class());

            } else {
            //Editando
            $this->form_validation->set_rules('forma_pagamento_nome', 'Forma de pagamento', 'trim|required|min_length[4]|max_length[40]|callback_pagamento_nome_check');
            
            if ($this->form_validation->run()) {

                $data = elements (

                    array(
                      'forma_pagamento_nome',
                      'forma_pagamento_ativa',
                     
                    ), $this->input->post() 

                 );

                 $data = html_escape($data);

                 $this->core_model->update('formas_pagamentos', $data, array('forma_pagamento_id' => $forma_pagamento_id));
                 redirect($this->router->fetch_class());

            } else {
           // Erro de validação
           $data = array(

            'titulo' => 'Editar formas de pagamento ',
            'sub_titulo' => 'Editando formas de pagamento',
            'icone_view' => 'fas fa-comment-dollar',
            'styles' => array(
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
             ),
            'scripts' => array(   
            'plugins/datatables.net/js/jquery.dataTables.min.js',
            'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
            'plugins/datatables.net/js/estacionamento.js',
             ),
            'forma' => $this->core_model->get_by_id('formas_pagamentos', array('forma_pagamento_id' => $forma_pagamento_id)),
        );

                $this->load->view('layout/header', $data);
                $this->load->view('formas/core');
                $this->load->view('layout/footer');

            }
         }

         }
       
    }

    public function pagamento_nome_check($forma_pagamento_nome) {

        $forma_pagamento_id = $this->input->post('forma_pagamento_id');

        if ($this->core_model->get_by_id('formas_pagamentos', array('forma_pagamento_nome' => $forma_pagamento_nome, 'forma_pagamento_id !=' => $forma_pagamento_id))) {

            $this->form_validation->set_message('pagamento_nome_check', 'Essa forma de pagamento já existe');

            return FALSE;

        }else{

            return TRUE;
        }

 
    }

    public function del($forma_pagamento_id = NULL) {

        if (!$this->ion_auth->is_admin()) {
        $this->session->set_flashdata('info', 'Não tem permissão para EXCLUIR!');
         redirect($this->router->fetch_class());
        }

        if (!$this->core_model->get_by_id('formas_pagamentos', array('forma_pagamento_id' => $forma_pagamento_id))) {
            $this->session->set_flashdata('error', 'Forma de pagamento não encontrada!');
            redirect($this->router->fetch_class());

        } else {
         
        $this->core_model->delete('formas_pagamentos', array('forma_pagamento_id' => $forma_pagamento_id));
        redirect($this->router->fetch_class());

        }

    }
}