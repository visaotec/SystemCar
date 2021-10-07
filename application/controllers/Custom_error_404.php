<?php
/**
 * Autor: Isaias de Oliveira
 * E-mail: visaotec.com@gmail.com
 */
defined('BASEPATH') OR exit('Ação não permitida');

class Custom_error_404 extends CI_Controller {

public function index() {

    $this->load->view('custom_error_404');
}
}
