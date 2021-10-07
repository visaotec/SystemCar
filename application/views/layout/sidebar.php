                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a data-toggle="tooltip" data-placement="bottom" title="Voltar para Home" class="header-brand" href="<?php echo base_url('/');?>">
                            <div class="logo-img">
                               <img src="<?php echo base_url('public/src/img/car.svg');?>" class="header-brand-img" alt="Sistem Car"> 
                            </div>
                            <span class="text">System Car</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                     </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Menu</div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i><span>Home</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'estacionar' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Estacionar" href="<?php echo base_url('estacionar'); ?>"><i class="fas fa-parking"></i><span>Estacionar</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'mensalistas' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar mensalistas" href="<?php echo base_url('mensalistas'); ?>"><i class="fas fa-users"></i><span>Mensalistas</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'mensalidades' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar mensalidades" href="<?php echo base_url('mensalidades'); ?>"><i class="fas fa-hand-holding-usd"></i><span>Mensalidades</span></a>
                                </div>

                                
                                <div class="nav-lavel">Administração</div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'precificacoes' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar precificacoes" href="<?php echo base_url('precificacoes'); ?>"><i class="ik ik-dollar-sign"></i><span>Precificações</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'formas' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar formas de pagamento" href="<?php echo base_url('formas'); ?>"><i class="fas fa-comment-dollar"></i><span>Formas de pagamento</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'usuarios' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?> ">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar usuários" href="<?php echo base_url('usuarios'); ?>"><i class="ik ik-users"></i><span>Usuários</span></a>
                                </div>
                                <div class="nav-item <?php echo ($this->router->fetch_class() == 'sistema' && $this->router->fetch_method() == 'index' ? 'active' : '' );  ?>">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Gerenciar sistema" href="<?php echo base_url('sistema'); ?>"><i class="ik ik-settings"></i><span>Sistema</span></a>
                                </div>
                                
                            </nav>
                        </div>
                    </div>
                </div>