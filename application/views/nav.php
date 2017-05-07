<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php echo base_url("Cliente/cadastrar") ?>"><i class="material-icons left">group_add</i>Cadastrar</a></li>
    <li><a href="<?php echo base_url("Cliente/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
    <li><a href="<?php echo base_url("Cliente/buscar") ?>"><i class="material-icons left">search</i>Buscar</a></li>
</ul>
<nav class="teal darken-2" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo">AAPP</a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">supervisor_account</i>Clientes<i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <li><a href="#">Perfil</a></li>
            <li><a href="index.php">Sair</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-purple"><i class="material-icons left">supervisor_account</i>Clientes</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url("Cliente/cadastrar") ?>"><i class="material-icons left">group_add</i>Cadastrar</a></li>
                                <li><a href="<?php echo base_url("Cliente/listar") ?>"><i class="material-icons left">toc</i>Listar todos</a></li>
                                <li><a href="<?php echo base_url("Cliente/buscar") ?>"><i class="material-icons left">search</i>Buscar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="">Sair</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
