<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author">
    <meta name="description">
    <meta name="keyword">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <!-- DataTables Css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.22/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.2/datatables.min.css"/>
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- FusionCharts -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- jQuery-FusionCharts -->
    <script type="text/javascript" src="https://rawgit.com/fusioncharts/fusioncharts-jquery-plugin/develop/dist/fusioncharts.jqueryplugin.min.js"></script>
    <!-- Fusion Theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <title>IPB University</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">IPB University</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo ($segment=='Beranda') ? 'active': '' ?>">
                    <a class="nav-link" href="<?php echo site_url('Beranda'); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo ($segment=='Program_Studi') ? 'active': '' ?>">
                    <a class="nav-link" href="<?php echo site_url('Program_Studi'); ?>">Program Studi</a>
                </li>
                <li class="nav-item <?php echo ($segment=='Mahasiswa') ? 'active': '' ?>">
                    <a class="nav-link" href="<?php echo site_url('Mahasiswa'); ?>">Mahasiswa</a>
                </li>
                <li class="nav-item dropdown <?php echo ($segment=='Agama' || $segment=='Hobi') ? 'active': ''?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo site_url('Agama'); ?>">Agama</a>
                    <a class="dropdown-item" href="<?php echo site_url('Hobi'); ?>">Hobi</a>
                    <!--div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a-->
                    </div>
                </li>
                <!--li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li-->
                </ul>
            </div>
        </div>
    </nav>