<!DOCTYPE html>
<html lang="en-us">


<!-- Mirrored from bootstrap-material.fusetheme.com/vertical-layout-below-toolbar-left-navigation/user-interface-page-layouts-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 15:48:07 GMT -->
<head>
    <title>Blank</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" rel="stylesheet">

    <!-- STYLESHEETS -->
    <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
    
    

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}" >

</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
    <main>
        <div id="wrapper">
            <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
                <div class="aside-content-wrapper">
                    <div class="aside-content bg-primary-700 text-auto">

                        <div class="aside-toolbar">

                            <div class="logo">
                                <span class="logo-icon">F</span>
                                <span class="logo-text">FUSE</span>
                            </div>

                            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                                <i class="icon icon-backburger"></i>
                            </button>

                        </div>

                        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                            <li class="subheader">
                                <span>APPS</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-calendar.html" data-url="user-interface-page-layouts-blank.html">

                                    <i class="icon s-4 icon-calendar-today"></i>

                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="nav-item" role="tab" id="heading-ecommerce">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-ecommerce" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">

                                    <i class="icon s-4 icon-cart"></i>

                                    <span>Ecommerce</span>
                                </a>
                                <ul id="collapse-ecommerce" class='collapse ' role="tabpanel" aria-labelledby="heading-ecommerce" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-products.html" data-url="user-interface-page-layouts-blank.html">

                                            <span>Products</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-product.html" data-url="user-interface-page-layouts-blank.html">

                                            <span>Product</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-orders.html" data-url="user-interface-page-layouts-blank.html">

                                            <span>Orders</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-todo.html" data-url="user-interface-page-layouts-blank.html">

                                    <i class="icon s-4 icon-checkbox-marked"></i>

                                    <span>To-Do</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>PAGES</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-profile.html" data-url="user-interface-page-layouts-blank.html">

                                    <i class="icon s-4 icon-account"></i>

                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-helper-classes.html" data-url="user-interface-page-layouts-blank.html">

                                    <i class="icon s-4 icon-help-circle"></i>

                                    <span>Helper Classes</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>
            <div class="content-wrapper">
                <nav id="toolbar" class="bg-white">

                    <div class="row no-gutters align-items-center flex-nowrap">

                        <div class="col">
                        </div>

                        <div class="col-auto">

                            <div class="row no-gutters align-items-center justify-content-end">

                                <div class="user-menu-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar-wrapper">
                                            <img class="avatar" src="/images/avatars/profile.jpg">
                                            <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                        </div>
                                        <span class="username mx-3 d-none d-md-block">John Doe</span>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-account"></i>
                                                <span class="px-3">My Profile</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-email"></i>
                                                <span class="px-3">Inbox</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="status text-green icon-checkbox-marked-circle"></i>
                                                <span class="px-3">Online</span>
                                            </div>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-logout"></i>
                                                <span class="px-3">Logout</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="content custom-scrollbar">

                    <div class="page-layout blank p-6">

                        <h2>Blank page</h2>

                    </div>

                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ mix('js/all.js') }}"></script>
    
    
</body>



</html>