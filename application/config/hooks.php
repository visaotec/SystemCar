<?php

/* Autor: Isaias de oliveira */
/* E-mail: visaotec.com@gmail.com */

defined('BASEPATH') OR exit('No direct script access allowed');


$hook['display_override'][] = array(
    'class' => '',
    'function' => 'compress',
    'filename' => 'compress.php',
    'filepath' => 'hooks'
);

/* End of file compress.php */
/* Location: ./system/application/config/hooks.php */