<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Data Jurusan</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('Mahasiswa/index');?>">Jurusan</a></li>
      <li class="active">Semua Data Jurusan</li>
    </ol>
  </div>
  <div class="page-content">
    <!-- Panel Table Add Row -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title">Semua Data Jurusan</h3>
      </header>
      <div id="exampleTableAddToolbar">
      </div>
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped width-full" id="exampleTableAdd">
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama Jurusan</th>
              <th>Status Jurusan</th>
              <th><center>Action</center></th>
            </tr>
          </thead>

          <tbody>
            <?php
            $no = 1;
            foreach ($all_jurusan as $key) {
            ?>
            <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $key['jurusan_id'];?></td>
              <td><?php echo $key['jurusan_nama'];?></td>
              <td><?php echo $key['jurusan_status'];?></td>
              <td align="center">
                   
                  <a href="<?php echo base_url('Admin/delete_jurusan/'.$key['jurusan_id']);?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-icon btn-danger"><i class="icon wb-trash"></i></a>
              </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
    <!-- End Panel Table Add Row -->

  </div>
</div>
<!-- End Page -->

  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-bootstrap/dataTables.bootstrap.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-tabletools/dataTables.tableTools.js');?>"></script>

  <script>
      (function(document, window, $) {
        'use strict';

        var Site = window.Site;

        $(document).ready(function($) {
          Site.run();
        });


        (function() {
          $(document).ready(function()
          {
            var defaults = $.components.getDefaults("dataTable");

            var t = $('#exampleTableAdd').DataTable(defaults);

            $('#exampleTableAddBtn').on('click', function() {
              t.row.add([
                'Adam Doe',
                'New Row',
                'New Row',
                '30',
                '2015/10/15',
                '$20000'
              ]).draw();
            });
          });
        })();
      })(document, window, jQuery);
    </script>
