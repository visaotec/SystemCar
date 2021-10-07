
        <?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">

<?php $this->load->view('layout/sidebar'); ?>
   
<div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                        <i class="<?php echo $icone_view; ?> bg-blue"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo ?></h5>
                                <span><?php echo $sub_titulo ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="left" title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                </li>
                             
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?php if ($message = $this->session->flashdata('sucesso')): ?>
                <div class="row">
                <div class="col-md-12">
                <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                    <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message ?></strong> 
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                    </button>
                     </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header"><?php echo (isset($sistema) ? '<i class="far fa-clock "></i>&nbsp;Ultima alteração:&nbsp;' . formata_data_banco_com_hora ($sistema->sistema_data_alteracao) : ''); ?></div>
                        <div class="card-body">
                        <form class="forms-sample"name="form_index"method="POST">

                                <div class="form-group row">
                                    
                                   <div class="col-md-6 mb-20">
                                   <label>Razão Social</label>
                                    <input type="text" class="form-control" name="sistema_razao_social" value="<?php echo (isset($sistema) ? $sistema->sistema_razao_social : set_value('sistema_razao_social')); ?>">
                                    <?php echo form_error('sistema_razao_social', '<div class="text-danger">', '</div>'); ?>
                                   </div>

                                   <div class="col-md-6 mb-20">
                                   <label>Nome Fantasia</label>
                                    <input type="text" class="form-control" name="sistema_nome_fantasia" value="<?php echo (isset($sistema) ? $sistema->sistema_nome_fantasia : set_value('sistema_nome_fantasia')); ?>">
                                    <?php echo form_error('sistema_nome_fantasia', '<div class="text-danger">', '</div>'); ?>
                                   </div>

                                </div>

                                <div class="form-group row">
                                    
                                    <div class="col-md-3 mb-20">
                                    <label>CNPJ</label>
                                     <input type="text" class="form-control cnpj" name="sistema_cnpj" value="<?php echo (isset($sistema) ? $sistema->sistema_cnpj : set_value('sistema_cnpj')); ?>">
                                     <?php echo form_error('sistema_cnpj', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-3 mb-20">
                                    <label>Insc. estadual</label>
                                     <input type="text" class="form-control" name="sistema_ie" value="<?php echo (isset($sistema) ? $sistema->sistema_ie : set_value('sistema_ie')); ?>">
                                     <?php echo form_error('sistema_ie', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-3 mb-20">
                                    <label>Telefone fixo</label>
                                     <input type="text" class="form-control phone_with_ddd" name="sistema_telefone_fixo" value="<?php echo (isset($sistema) ? $sistema->sistema_telefone_fixo : set_value('sistema_telefone_fixo')); ?>">
                                     <?php echo form_error('sistema_telefone_fixo', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-3 mb-20">
                                    <label>Telefone celular</label>
                                     <input type="text" class="form-control sp_celphones" name="sistema_telefone_movel" value="<?php echo (isset($sistema) ? $sistema->sistema_telefone_movel : set_value('sistema_telefone_movel')); ?>">
                                     <?php echo form_error('sistema_telefone_movel', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                 </div>

                                 <div class="form-group row">
                                    
                                    <div class="col-md-2 mb-20">
                                    <label>CEP</label>
                                     <input type="text" class="form-control cep" name="sistema_cep" value="<?php echo (isset($sistema) ? $sistema->sistema_cep : set_value('sistema_cep')); ?>">
                                     <?php echo form_error('sistema_cep', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-4 mb-20">
                                    <label>Endereço</label>
                                     <input type="text" class="form-control" name="sistema_endereco" value="<?php echo (isset($sistema) ? $sistema->sistema_endereco : set_value('sistema_endereco')); ?>">
                                     <?php echo form_error('sistema_endereco', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-2 mb-20">
                                    <label>Número</label>
                                     <input type="text" class="form-control" name="sistema_numero" value="<?php echo (isset($sistema) ? $sistema->sistema_numero : set_value('sistema_numero')); ?>">
                                     <?php echo form_error('sistema_numero', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-3 mb-20">
                                    <label>Cidade</label>
                                     <input type="text" class="form-control" name="sistema_cidade" value="<?php echo (isset($sistema) ? $sistema->sistema_cidade : set_value('sistema_cidade')); ?>">
                                     <?php echo form_error('sistema_cidade', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-1 mb-20">
                                    <label>UF</label>
                                     <input type="text" class="form-control uf" name="sistema_estado" value="<?php echo (isset($sistema) ? $sistema->sistema_estado : set_value('sistema_estado')); ?>">
                                     <?php echo form_error('sistema_estado', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                 </div>

                                 <div class="form-group row">
                                    
                                    <div class="col-md-6 mb-20">
                                    <label>URL do site</label>
                                     <input type="text" class="form-control" name="sistema_site_url" value="<?php echo (isset($sistema) ? $sistema->sistema_site_url : set_value('sistema_site_url')); ?>">
                                     <?php echo form_error('sistema_site_url', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-6 mb-20">
                                    <label>E-mail</label>
                                     <input type="email" class="form-control" name="sistema_email" value="<?php echo (isset($sistema) ? $sistema->sistema_email : set_value('sistema_email')); ?>">
                                     <?php echo form_error('sistema_email', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                 </div>

                                 <div class="form-group row">
                                    
                                    <div class="col-md-12 mb-20">
                                    <label>Descrição do ticket de estacionamento</label>
                                     <textarea class="form-control" name="sistema_texto_ticket"><?php echo (isset($sistema) ? $sistema->sistema_texto_ticket : set_value('sistema_texto_ticket')); ?></textarea>
                                     <?php echo form_error('sistema_texto_ticket', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                 </div>

                                <button type="submit" class="btn btn-primary mr-2">&nbsp;<i class="far fa-save"></i></button>
                                <a class="btn btn-info" href="<?php echo base_url('/'); ?>">&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y'); ?> System Car. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Desenvolvido <i class="fas fa-code text-dark"></i>&nbsp;por:&nbsp;<a href="http://topnacional.com/" class="text-dark" target="_blank">Visaotec Sistemas</a></span>
        </div>
    </footer>
    
</div>


