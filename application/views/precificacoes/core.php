
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
                                <div class="card-header"><?php echo (isset($precificacao) ? '<i class="far fa-clock "></i>&nbsp;Ultima alteração:&nbsp;' .formata_data_banco_com_hora ($precificacao->precificacao_data_alteracao) : ''); ?></div>
                                    <div class="card-body">
                                    <form class="forms-sample" name="form_core" method="POST">

                                            <div class="form-group row">
                                                
                                               <div class="col-md-4 mb-20">
                                               <label>Categoria</label>
                                                <input type="text" class="form-control" name="precificacao_categoria" value="<?php echo (isset($precificacao) ? $precificacao->precificacao_categoria : set_value('precificacao_categoria')); ?>">
                                                <?php echo form_error('precificacao_categoria', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-2 mb-20">
                                               <label>Valor hora</label>
                                                <input type="text" class="form-control money" name="precificacao_valor_hora" value="<?php echo (isset($precificacao) ? $precificacao->precificacao_valor_hora : set_value('precificacao_valor_hora')); ?>">
                                                <?php echo form_error('precificacao_valor_hora', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-2 mb-20">
                                               <label>Valor da mensalidade</label>
                                                <input type="text" class="form-control money" name="precificacao_valor_mensalidade" value="<?php echo (isset($precificacao) ? $precificacao->precificacao_valor_mensalidade : set_value('precificacao_valor_mensalidade')); ?>">
                                                <?php echo form_error('precificacao_valor_mensalidade', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-2 mb-20">
                                               <label>Número de vagas</label>
                                                <input type="number" class="form-control" name="precificacao_numero_vagas" value="<?php echo (isset($precificacao) ? $precificacao->precificacao_numero_vagas : set_value('precificacao_numero_vagas')); ?>">
                                                <?php echo form_error('precificacao_numero_vagas', '<div class="text-danger">', '</div>'); ?>
                                               </div>

                                               <div class="col-md-2 mb-20">
                                               <label>Ativa</label>
                                                <select class="form-control" name="precificacao_ativa">
                                                    <?php if (isset($precificacao)) : ?>
                                                  <option value="0"<?php echo ($precificacao->precificacao_ativa == 0 ? 'selected' : '') ?>>Não</option>
                                                  <option value="1"<?php echo ($precificacao->precificacao_ativa == 1 ? 'selected' : '') ?>>Sim</option>
                                                    <?php else: ?>
                                                        <option value="0">Não</option>
                                                        <option value="1">Sim</option>
                                                    <?php endif; ?>
                                                </select>
                                               </div>

                                            </div>

                                             <?php if (isset($precificacao)) : ?>
                                             <div class="form-group row">
                                                <div class="col-md-12">
                                                 <input type="hidden" class="form-control" name="precificacao_id" value="<?php echo $precificacao->precificacao_id; ?>">
                                                </div>
                                             </div>
                                             <?php endif; ?>
                                            <button type="submit" class="btn btn-primary mr-2">&nbsp;<i class="far fa-save"></i></button>
                                            <a class="btn btn-info" href="<?php echo base_url($this->router->fetch_class()); ?>">&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y'); ?> Sistem Car. Todos os direitos reservados.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Desenvolvido <i class="fas fa-code text-dark"></i>&nbsp;por:&nbsp;<a href="http://topnacional.com/" class="text-dark" target="_blank">Visaotec Sistemas</a></span>
                    </div>
                </footer>
                
            </div>


        