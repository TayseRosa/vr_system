            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Tdopbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto ">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">

                            <nav class="navbar">
                                <!--Redes sociais-->

                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo @$nome_usu; ?></span>
                                    <img class="img-profile rounded-circle" src="../img/sem-foto.jpg">

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                        Editar Perfil
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php if (@$pag == null) { 
                        @include_once("home.php"); 
                        
                        } else if (@$pag==$menu1) {
                        @include_once(@$menu1.".php");
                        
                        } else if (@$pag==$menu2) {
                        @include_once(@$menu2.".php");

                         } else if (@$pag==$menu3) {
                        include_once(@$menu3.".php");

                        } else if (@$pag==$menu4) {
                        @include_once(@$menu4.".php");

                        } else if (@$pag==$menu5) {
                        @include_once(@$menu5.".php");

                        } else if (@$pag==$menu6) {
                        @include_once(@$menu6.".php");
                        
                        } else {
                        @include_once("home.php");
                        }
                        ?>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

            
        </div>
        <!-- End of Page Wrapper -->

        </div>
        <!-- End of Page Wrapper -->