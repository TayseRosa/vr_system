<!-- Page Wrapper -->
<div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <img src="../img/logo2.png" alt="Logo" width="40">
        <div class="sidebar-brand-text mx-3">Aluno</div>
    </a>


    <!-- Heading -->
    <div class="sidebar-heading">
        Painel do aluno
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?pag=<?php echo $menu3 ?>">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#ModalPerfil">
            <i class="fas fa-user"></i>
            <span>Editar Perfil</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-table" aria-hidden="true"></i>
            <span>Tabela nutricional</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">            
                <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>">Cadastro</a>
                <a class="collapse-item" href="index.php?pag=alunos&funcao=novo"> Lista</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fa fa-calculator"></i>
            <span>Calculadora rotular</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="https://rotulagem.com.br/" target="_blank">
        <i class="fa fa-building" aria-hidden="true"></i>
            <span>Sobre o programa</span>
        </a>
    </li>  
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="../logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sair</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->

        