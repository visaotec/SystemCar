</div>

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Pesquisar..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i><span>Home</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('estacionar'); ?>"><i class="fas fa-parking"></i><span>Estacionar</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('mensalistas'); ?>"><i class="fas fa-users"></i><span>Mensalistas</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('mensalidades'); ?>"><i class="fas fa-hand-holding-usd"></i><span>Mensalidades</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('usuarios'); ?>"><i class="fas fa-user"></i><span>Usuários</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('precificacoes'); ?>"><i class="ik ik-dollar-sign"></i><span>Precificações</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('formas'); ?>"><i class="fas fa-comment-dollar"></i><span>Formas de pagamento</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="<?php echo base_url('sistema'); ?>"><i class="ik ik-settings"></i><span>Sistema</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="mailto:visaotec.com@gmail.com"><i class="fas fa-at"></i><span>Desenvolvedor</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="https://www.topnacional.com" target="_blank"><i class="fas fa-globe"></i><span>Site</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url('public/src/js/vendor/modernizr-2.8.3.min.js');?>"></script>
        <script src="<?php echo base_url('public/src/js/vendor/jquery-3.3.1.min.js');?>"></script>
        <script src="<?php echo base_url('public/plugins/popper.js/dist/umd/popper.min.js');?>"></script>
        <script src="<?php echo base_url('public/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('public/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js');?>"></script>
        <script src="<?php echo base_url('public/plugins/screenfull/dist/screenfull.js');?>"></script>
  
        <script src="<?php echo base_url('public/dist/js/theme.min.js');?>"></script>

        <?php if (isset($scripts)) : ?>

        <?php foreach ($scripts as $script) : ?>

            <script src="<?php echo base_url('public/' . $script);?>"></script>

       <?php endforeach; ?>

        <?php endif; ?>
   
    </body>
</html>
