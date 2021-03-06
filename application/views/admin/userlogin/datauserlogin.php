
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          User Login
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">User Login</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
              <div><a href="<?=base_url()?>userlogin_control/formtambahuser" class="btn btn-primary">Tambah User</a></div>
              <br>
              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Nama User</th>
                    <th class="hidden-phone">Password</th>
                    <th class="hidden-phone">Hak Akses</th>
                    
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no=1;
                    foreach ($isiuser as $isi ) {
                  ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$isi->userNama?></td>
                    <td><?=$isi->userPassword?></td>
                    <td><?=$isi->userHakakses?></td>
                    <td>
                      <?php
                        if($isi->userHakakses!='Pimpinan'){
                      ?>
                        <a class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ini?')" href="<?=base_url()?>userlogin_control/hapus/<?=$isi->userId?>">Hapus</a>
                      <?php
                        }
                      ?>  
                    </td>
                  </tr>
                  <?php    
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>                  
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


