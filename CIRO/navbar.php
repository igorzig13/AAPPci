<div id="navbarmenu" class="navbar-fixed">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?php echo base_url("Usuarios/cadastrar") ?>"><i class="material-icons left">person_add</i>Cadastrar</a></li>
        <li><a href="<?php echo base_url("Usuarios/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="<?php echo base_url("Clientes/cadastrar") ?>"><i class="material-icons left">group_add</i>Cadastrar</a></li>
        <li><a href="<?php echo base_url("Clientes/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
        <li><a href="<?php echo base_url("Clientes/buscar") ?>"><i class="material-icons left">search</i>Buscar</a></li>
    </ul>
    <ul id="dropdown3" class="dropdown-content">
        <li><a href="<?php echo base_url("Vendas/cadastrar") ?>"><i class="material-icons left">add_shopping_cart</i>Cadastrar</a></li>
        <li><a href="<?php echo base_url("Vendas/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
    </ul>
    <ul id="dropdown4" class="dropdown-content">
        <li><a href="<?php echo base_url("Produtos/cadastrar") ?>"><i class="material-icons left">library_add</i>Cadastrar</a></li>
        <li><a href="<?php echo base_url("Produtos/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
    </ul>
    <ul id="dropdown5" class="dropdown-content">
        <li><a href="<?php echo base_url("Gastos/cadastrar") ?>"><i class="material-icons left">add_box</i>Cadastrar</a></li>
        <li><a href="<?php echo base_url("Gastos/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
    </ul>
    <nav class="white" role="navigation">
        <!--<div class="nav-wrapper container">-->
        <div class="nav-wrapper " style="padding: 0 5% 0 5%;">
            <a href="<?php echo base_url(); ?>" class="brand-logo valign-wrapper">
                <!--<span class="white-text">Açaí</span><span class="green-text text-accent-4">deira</span>-->
                <img src="<?= base_url() ?>includes/logo.png" height="58px"/>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse  purple-text darken-3"><i class="material-icons">menu</i></a>

            <ul id="menutopo" class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li><a href="<?php echo base_url() ?>"><i class="material-icons">home</i></a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">account_circle</i>Usuarios<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons left">supervisor_account</i>Clientes<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="material-icons left">shopping_cart</i>Vendas<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown4"><i class="material-icons left">library_books</i>Produtos<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="material-icons left">local_shipping</i>Gastos<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a href="<?php echo base_url("Login/logout") ?>"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="<?php echo base_url() ?>"><i class="material-icons left">home</i>Início</a></li>
                <li class="divider"></li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">account_circle</i>Usuarios</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo base_url("Usuarios/cadastrar") ?>"><i class="material-icons left">person_add</i>Cadastrar</a></li>
                                    <li><a href="<?php echo base_url("Usuarios/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">supervisor_account</i>Clientes</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo base_url("Clientes/cadastrar") ?>"><i class="material-icons left">group_add</i>Cadastrar</a></li>
                                    <li><a href="<?php echo base_url("Clientes/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
                                    <li><a href="<?php echo base_url("Clientes/buscar") ?>"><i class="material-icons left">search</i>Buscar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">shopping_cart</i>Vendas</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo base_url("Vendas/cadastrar") ?>"><i class="material-icons left">add_shopping_cart</i>Cadastrar</a></li>
                                    <li><a href="<?php echo base_url("Vendas/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">library_books</i>Produtos</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo base_url("Vendas/cadastrar") ?>"><i class="material-icons left">library_add</i>Cadastrar</a></li>
                                    <li><a href="<?php echo base_url("Vendas/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">local_shipping</i>Gastos</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo base_url("Gastos/cadastrar") ?>"><i class="material-icons left">add_box</i>Cadastrar</a></li>
                                    <li><a href="<?php echo base_url("Gastos/listar") ?>"><i class="material-icons left">toc</i>Listar</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url("Login/logout") ?>"><i class="material-icons left">power_settings_new</i>Sair</a></li>
            </ul>
        </div>
    </nav>
</div>