<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Data Mata Kuliah</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('Mahasiswa/index');?>">Mata Kuliah</a></li>
      <li class="active">Semua Data Mata Kuliah</li>
    </ol>
  </div>
  <div class="page-content">
    <!-- Panel Table Add Row -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title">Semua Data Mata Kuliah</h3>
      </header>
      <div id="exampleTableAddToolbar">
      </div>
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped width-full" id="exampleTableAdd">
          <thead>
            <tr>
              <th>No</th>
              <th>Semester</th>
              <th>ID Mahasiswa</th>
              <th>ID Mata Kuliah</th>
              <th>Nilai Krs</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $no = 1;
            foreach ($all_krs as $key) {
            ?>
            <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $key['krs_semester'];?></td>
              <td><?php echo $key['krs_mahasiswa_id'];?></td>
              <td><?php echo $key['krs_makul_id'];?></td>
              <td><?php echo $key['krs_nilai'];?></td>
              <td><?php echo $key['krs_status'];?></td>
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
