<html lang="en">
<head>
<title>SIJAPA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SIJAPA Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/responsive.css">
</head>
<body>
    <!-- Header Content -->

    <div class="header_container">
        <div class="container" >
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <!-- <img src="path/to/your/logo.png" alt="Logo" style="width: 50px; height: auto; margin-left: 10px;"> -->
                            <a href="#">
                                <div style="font-family: Arial, sans-serif; font-size: 36px;  color:##000080 " class="logo_text">SIJAPA</div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li class="active"><a href="#">Beranda</a></li>

                                <li class="nav-item dropdown">
                                    <a style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080 "class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Form
                                    </a>
                                    <div style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080"class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?=base_url('User_Formulir_pelaporan')?>">Form Pelaporan Kerusakan</a>
                                        <a class="dropdown-item" href="<?=base_url('User_Formulir_perencanaan')?>">Form Usulan Perencanaan</a>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tabel Data
                                    </a>
                                    <div style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?=base_url('User_Tabel_Pelaporan')?>">Tabel Pelaporan Kerusakan</a>
                                        <a class="dropdown-item" href="<?=base_url('User_Tabel_Perencanaan')?>">Tabel Usulan Perencanaan</a>

                                    </div>
                                </li>
                                
                                <li><a style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080" href="<?=base_url('User_Peta')?>">Peta</a></li>
                                <li><a style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080" href="<?=base_url('User_Data')?>">Data</a></li>
                                <li><a style="font-family: Arial, sans-serif; font-weight: bold; font-size: 18px;  color:##000080" href="#">Tentang</a></li>

                            </ul>


                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        
    </div>