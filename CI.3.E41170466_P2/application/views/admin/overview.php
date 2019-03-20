<!DOCTYPE html>
<html lang="en">

<head>
<<?php $this->load->view("admin/_partial/head"); ?>
  
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <<?php $this->load->view("admin/_partial/navbar"); ?>
          <!-- /.container-fluid -->

          <!-- Sticky Footer
        </div> -->
          <<?php $this->load->view("admin/_partial/stickyfooter") ?>

        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <<?php $this->load->view("admin/_partial/logoutmodal"); ?>

      <!-- Bootstrap core JavaScript-->
      <script src="assets/jquery/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="assets/jquery-easing/jquery.easing.min.js"></script>

      <!-- Page level plugin JavaScript-->
      <script src="assets/chart.js/Chart.min.js"></script>
      <script src="assets/datatables/jquery.dataTables.js"></script>
      <script src="assets/datatables/dataTables.bootstrap4.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>

      <!-- Demo scripts for this page-->
      <script src="js/demo/datatables-demo.js"></script>
      <script src="js/demo/chart-area-demo.js"></script>

    </body>

    </html>
