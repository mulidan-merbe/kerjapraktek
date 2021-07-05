<!doctype html>
<html class="no-js h-100" lang="en">
  <?php $this->load->view('pembimbing/template/head') ?>
      <!-- MDBootstrap Datatables  -->
      <link href="<?php echo base_url('assets/template') ?>/back/MDB-Free/css/addons/datatables.min.css" rel="stylesheet">
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php $this->load->view('pembimbing/template/sidebar') ?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <?php $this->load->view('pembimbing/template/header') ?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">Data Konsultasi</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
             <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Ubah Penilaian Lapangan
                    <button style="float: right;" type="button" class="btn btn-sm btn-warning" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></h6>
                  </div>
                  <div class="card-body " style="min-height: 375px;"> 
                      <div class="">
                        <div class="card-body">
                          <?php if($this->session->flashdata('msg')){echo $this->session->flashdata('msg');} ?>
                          <form method="post" action="<?= base_url('pembimbing/KP_TI_A02C/ubahData') ?>" enctype="multipart/form-data">
                          <?php foreach ($ubah as $data){ ?>
                          <div class="row">
                            <div class="col-md-8 offset-md-2">
                              
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <input type="text"  class="form-control" value="<?= $data->NIM ?>" disabled>
                              </div>
                                <input type="hidden" name="Id_duaC" class="form-control" value="<?= $data->Id_duaC ?>">
                                <input type="hidden" name="NIM" class="form-control" value="<?= $data->NIM ?>" >
                            </div>
                          </div> 
                       
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                            <table class="table  mb-0 table-bordered">
                              <tr>
                                <td ><b>Kerajian dan Aktivitas di Lapangan</b></td>
                                <td><input type="number" name="Nilai_satu" class="form-control" value="<?= $data->Nilai_satu ?>" ><?= form_error('Nilai_satu', '<small class="text-danger pl-3">', '</small>') ?>
                              </td>
                                  
                              </tr>
                              <tr>
                                <td><b>Kemampuan Mengemukakan Ide</b></td>
                                <td><input type="number" name="Nilai_dua" class="form-control" value="<?= $data->Nilai_dua ?>" >
                                <?= form_error('Nilai_dua', '<small class="text-danger pl-3">', '</small>') ?></td>

                              </tr>
                              <tr>
                                <td><b>Kemampuan Menganalisa Persoalan</b></td>
                                <td><input type="number" name="Nilai_tiga" class="form-control" value="<?= $data->Nilai_tiga ?>" ><?= form_error('Nilai_tiga', '<small class="text-danger pl-3">', '</small>') ?></td>
                              </tr>
                               <tr>
                                <td><b>Kemampuan Memberikan Solusi</b></td>
                                <td><input type="number" name="Nilai_empat" class="form-control"value="<?= $data->Nilai_empat ?>" >
                                  <?= form_error('Nilai_empat', '<small class="text-danger pl-3">', '</small>') ?></td>
                              </tr>
                              <tr>
                                <td><b>Hasil Penugasan</b></td>
                                <td><input type="number" name="Nilai_lima" class="form-control" value="<?= $data->Nilai_lima ?>" >
                                  <?= form_error('Nilai_lima', '<small class="text-danger pl-3">', '</small>') ?></td>
                              </tr>
                               <?php } ?>
                            </table>
                            </div>
                          </div><br>
                          <p>* Pastikan satuan penilaian adalah <strong>( 1-100 )</strong></p>
                          <button type="submit" class="btn btn-primary">simpan</button>
                          <button type="reset" class="btn btn-info">Reset</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                  </div>
                 </div>
                </div>  
             </div>
             </div>
          
 
         
  <?php $this->load->view('pembimbing/template/footer') ?>
  <!-- MDBootstrap Datatables  -->
  <script type="text/javascript" src="<?php echo base_url('assets/template') ?>/back/MDB-Free/js/addons/datatables.min.js"></script>
  <script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  });
</script>