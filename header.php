<?php include "koneksi.php"; ?>
<html>
<head>

  <title>UAS Agung</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <!-- <link href="../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="asset/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
   
    <!-- Custom Icon -->
    <link rel="stylesheet" href="asset/icon/css/all.min.css">
   
    <!-- Custom Icon -->
    <!-- <link rel="icon" type="image/png" href="../asset/card-2.jpg"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="../asset/project.css" rel="stylesheet"> -->

    <!-- Bootstrap core JavaScript -->
    <script src="asset/jquery/jquery.min.js"></script> 
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/jquery/popper.min.js"></script>
    <script src="asset/jquery/alert.js"></script>
    <script src="asset/password.js"></script>
    <!-- Data table script -->
      <link rel="stylesheet" type="text/css" href="asset/DataTables/datatables.min.css"/>
      <script type="text/javascript" src="asset/DataTables/datatables.min.js"></script>
      <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
            $(".form-sembunyi").hide();
            $("#pilih_status").change(function(){
              $(".form-sembunyi").show();  
            });
        });
      </script>
    <!-- Data table -->
</head>
<body>
<style>
  
</style>