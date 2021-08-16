<!-------------------------------------------------------------
===================load content dynamic========================
-------------------------------------------------------------->
<?php    
    use Core\Auth;
    use Config\Server;
    use Controllers\ViewController as ViewController;    
    
    $objView = new ViewController();
    $views = $objView->getViewController();
    if ($views =="login") {
        require_once './Views/login/'.$views.'-view.php';
    }else if($views == '404'){
        require_once './Views/404/'.$views.'-view.php';
    }else{       
        Auth::accessMain();          
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo Server::SERVER ?>assets/img/anony.jpg">
    <title>Dashboard - SB Admin</title>
    <link href="<?php echo Server::SERVER; ?>assets/css/styles.css" rel="stylesheet" />
    <script src="<?php echo Server::SERVER ?>assets/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
   
    <!--Navbar-->
    <?php require 'navbar.php'; ?>

    <!--Modal Change Password-->
    <?php require 'modalChangePassword.php'; ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">                  

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Usuario
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo Server::SERVER; ?>user/">Administrar usuario</a>
                                <!-- <a class="nav-link" href="#">Light Sidenav</a> -->
                            </nav>
                        </div>

                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                            </nav>
                        </div> -->
                      
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Bienvenido</div>                   
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid">
                    <?php include $views; ?>
                </div>
            </main>          

        </div>
    </div>

    <script src="<?php echo Server::SERVER ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo Server::SERVER ?>Views/layout/scripts.js" type="module"></script>

    <!--Change Script Dynamic-->
    <?php Auth::changeScript(); ?>

</body>

</html>

    <!--End load content dynamic--->
<?php } ?>