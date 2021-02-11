<?php

require_once "config/config.php";
require_once "assets/libs/vendor/autoload.php";

if (isset($_POST['username'])) {
  echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rumah Sakit Holid</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url() ?>assets/css/simple-sidebar.css" rel="stylesheet">
  <!-- Css Sweetalert2 -->
  <link href="<?= base_url() ?>assets/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">
  <!-- Css Datatables -->
  <link href="<?= base_url() ?>assets/libs/datatables/datatables.min.css" rel="stylesheet">
  <style>
    .swal2-popup {
      font-size: 1.4rem;
    }
  </style>

</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a href="#"><span class="text-primary"><b>Rumah Sakit</b></span>
          </a>
        </li>
        <li>
          <a href="#">Dashboard</a>
        </li>
        <li>
          <a href="<?= base_url() ?>pasien/data_pasien.php">Data Pasien</a>
        </li>
        <li>
          <a href="<?= base_url() ?>dokter/data_dokter.php">Data Dokter</a>
        </li>
        <li>
          <a href="<?= base_url() ?>poliklinik/data_poli.php">Data Poliklinik</a>
        </li>
        <li>
          <a href="<?= base_url() ?>obat/data_obat.php">Data Obat</a>
        </li>
        <li>
          <a href="<?= base_url() ?>rekammedis/data_rm.php">Rekam Medis</a>
        </li>
        <li>
          <a href="<?= base_url() ?>auth/logout.php"><span class="text-danger">Logout</span></a>
        </li>
      </ul>
    </div>

    <div id="page-content-wrapper">
      <div class="container-fluid">