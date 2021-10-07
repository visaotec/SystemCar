
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
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom"  title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom" title="Listar <?php echo $this->router->fetch_class(); ?>" href="<?php echo base_url($this->router->fetch_class()); ?>">Listar&nbsp;<?php echo $this->router->fetch_class(); ?></a>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                <div class="card-header"><?php echo (isset($estacionado) ? '<i class="far fa-clock "></i>&nbsp;Ultima alteração:&nbsp;' .formata_data_banco_com_hora ($estacionado->estacionar_data_alteracao) : ''); ?></div>
                                    <div class="card-body">
                                    
                   <form class="forms-sample" name="form_core" method="post">

               <div class="row mb-3">

             <div class="col-md-4 mb-3">
             <label for="">Categoria</label>
             <select class="form-control precificacao" name="estacionar_precificacao_id" <?php echo (isset($estacionado) ? 'disabled' : '') ?>>

            <option value="">Escolha...</option>

            <?php foreach ($precificacoes as $preco): ?>

                <?php if (isset($estacionado)): ?>

                    <option value="<?php echo $preco->precificacao_id ?>" <?php echo ($preco->precificacao_id == $estacionado->estacionar_precificacao_id ? 'selected' : '') ?>><?php echo $preco->precificacao_categoria ?></option>                                                

                <?php else: ?>

                    <option value="<?php echo $preco->precificacao_id ?><?php echo $preco->precificacao_valor_hora ?>"><?php echo $preco->precificacao_categoria ?></option>

                <?php endif; ?>

            <?php endforeach; ?>
        </select>
        <?php echo form_error('estacionar_precificacao_id', '<div class="text-danger">', '</div>') ?>
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Valor hora</label>
        <input type="text" class="form-control estacionar_valor_hora" name="estacionar_valor_hora" value="<?php echo (isset($estacionado->estacionar_valor_hora) ? $estacionado->estacionar_valor_hora : '0,00') ?>" readonly="">
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Número vaga</label>
        <input type="number" class="form-control" name="estacionar_numero_vaga" value="<?php echo (isset($estacionado) ? $estacionado->estacionar_numero_vaga : set_value('estacionar_numero_vaga')) ?>" <?php echo (isset($estacionado) ? 'readonly' : '') ?>>
        <?php echo form_error('estacionar_numero_vaga', '<div class="text-danger">', '</div>') ?>
    </div>

</div>

<div class="row mb-3">

    <div class="col-md-4 mb-3">
        <label for="">Placa veículo</label>
        <input type="text" class="form-control placa" name="estacionar_placa_veiculo" value="<?php echo (isset($estacionado) ? $estacionado->estacionar_placa_veiculo : set_value('estacionar_placa_veiculo')) ?>" <?php echo (isset($estacionado) ? 'readonly' : '') ?>>
        <?php echo form_error('estacionar_placa_veiculo', '<div class="text-danger">', '</div>') ?>
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Marca veículo</label>
        <input type="text" class="form-control" name="estacionar_marca_veiculo" value="<?php echo (isset($estacionado) ? $estacionado->estacionar_marca_veiculo : set_value('estacionar_marca_veiculo')) ?>" <?php echo (isset($estacionado) ? 'readonly' : '') ?>>
        <?php echo form_error('estacionar_marca_veiculo', '<div class="text-danger">', '</div>') ?>
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Modelo veículo</label>
        <input type="text" class="form-control" name="estacionar_modelo_veiculo" value="<?php echo (isset($estacionado) ? $estacionado->estacionar_modelo_veiculo : set_value('estacionar_modelo_veiculo')) ?>" <?php echo (isset($estacionado) ? 'readonly' : '') ?>>
        <?php echo form_error('estacionar_modelo_veiculo', '<div class="text-danger">', '</div>') ?>
    </div>

</div>

<div class="row mb-3">

    <div class="col mb-3">
        <label for="">Data entrada</label>
        <input type="text" class="form-control" name="estacionar_data_entrada" value="<?php echo (isset($estacionado) ? formata_data_banco_com_hora($estacionado->estacionar_data_entrada) : formata_data_banco_com_hora(date('y-m-d H:i:s'))) ?>" readonly="">
    </div>

    <div class="col mb-3">
        <label for="">Data saída</label>
        <?php if (isset($estacionado) && $estacionado->estacionar_status == 1): ?>
            <input type="text" class="form-control" name="estacionar_data_saida" value="<?php echo (isset($estacionado) ? formata_data_banco_com_hora($estacionado->estacionar_data_saida) : formata_data_banco_com_hora(date('y-m-d H:i:s'))) ?>" readonly="">
        <?php else: ?>
            <input type="text" class="form-control" name="estacionar_data_saida" value="<?php echo formata_data_banco_com_hora(date('y-m-d H:i:s')) . '&nbsp;|&nbsp;Em aberto' ?>" readonly="">
        <?php endif; ?>

        <?php echo form_error('estacionar_data_entrada', '<div class="text-danger">', '</div>') ?>
    </div>

    <div class="col mb-3">

        <label for="">Tempo decorrido (horas e minutos)</label>

        <?php
        $data_entrada = new DateTime(isset($estacionado) ? $estacionado->estacionar_data_entrada : date('Y-m-d H:i:s'));
        $data_saida = new DateTime(date('Y-m-d H:i:s'));

        $diff = $data_saida->diff($data_entrada);

        $hours = $diff->h;
        $hours += ($diff->days * 24);

        $tempo_decorrido = $hours . '.' . $diff->i; //Concatena as horas com os minutos

        if (isset($estacionado)) {
            $valor_devido = intval($estacionado->estacionar_valor_hora) * $tempo_decorrido;
        } else {
            $valor_devido = '0,00';
        }

        if (str_replace('.', '', $tempo_decorrido) <= '015') {

            $valor_devido = '0,00';
        }
        ?>

        <input type="text" class="form-control" name="estacionar_tempo_decorrido" value="<?php echo (isset($estacionado) && $estacionado->estacionar_status == 1 ? ($estacionado->estacionar_tempo_decorrido) : $tempo_decorrido) ?>" readonly="">                                    
    </div>

</div>

<?php if (isset($estacionado)): ?>
    <div class="row mb-3">

        <div class="col-md-6 mb-3">
            <label for="">Valor a pagar</label>
            <input type="text" class="form-control" name="estacionar_valor_devido" value="<?php echo (isset($estacionado) && $estacionado->estacionar_status == 1 ? $estacionado->estacionar_valor_devido : $valor_devido) ?>" readonly="">
        </div>

        <div class="col-md-6 mb-3">
            <label for="">Forma de pagamento</label>

            <select class="form-control" name="estacionar_forma_pagamento_id"  <?php echo (isset($estacionado) && $estacionado->estacionar_status == 1 ? 'disabled' : '') ?>>
                <option value="">Escolha...</option>

                <?php foreach ($formas_pagamentos as $forma): ?>

                    <?php if ($estacionado): ?>

                        <option value="<?php echo $forma->forma_pagamento_id; ?>" <?php echo ($forma->forma_pagamento_id == $estacionado->estacionar_forma_pagamento_id ? 'selected' : '' ) ?>><?php echo $forma->forma_pagamento_nome; ?></option>


                    <?php endif; ?>

                <?php endforeach; ?>

            </select>
            <?php echo form_error('estacionar_forma_pagamento_id', '<div class="text-danger">', '</div>') ?>

        </div>

    </div>
<?php endif; ?>

<div class="">
    <?php if (isset($estacionado)): ?>
        <input type="hidden" name="estacionar_id" value="<?php echo $estacionado->estacionar_id ?>"/>
    <?php endif; ?>

    <?php if (isset($estacionado) && $estacionado->estacionar_status == 1): ?>
        <button type="submit" class="btn btn-success mr-2 disabled" value="" disabled>Encerrada</button>
    <?php else: ?>
        <a title="Cadastrar ordem de estacionamento" href="javascript:void(0)" class="btn btn btn-primary mr-2" data-toggle="modal" data-target="#cadastrar">Salvar</i></a>                            
    <?php endif; ?>
    <a href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-light">Voltar</a>
</div>

<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel"><i class="ik ik-alert-octagon text-danger"></i>&nbsp;&nbsp;Confirmação de dados!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <span class="text-dark font-weight-bold"><?php echo $texto_modal; ?></span></br>
                <p></p>
                Clique em <span class="text-primary font-weight-bold">"Sim"</span> para prosseguir.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
                <button type="submit" class="btn btn-primary mr-2" value="">Sim</button>
            </div>
        </div>
    </div>
</div>

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


        