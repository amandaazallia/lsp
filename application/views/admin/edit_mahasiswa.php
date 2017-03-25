
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Tambah Data Mahasiswa</h1>
    <ol class="breadcrumb">
      <li><a href="../index.html">Home</a></li>
      <li><a href="javascript:void(0)">Forms</a></li>
      <li class="active">Layouts</li>
    </ol>
    <div class="page-header-actions">
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
      data-toggle="tooltip" data-original-title="Edit">
        <i class="icon wb-pencil" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
      data-toggle="tooltip" data-original-title="Refresh">
        <i class="icon wb-refresh" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
      data-toggle="tooltip" data-original-title="Setting">
        <i class="icon wb-settings" aria-hidden="true"></i>
      </button>
    </div>
  </div>
  <div class="page-content">
    <div class="panel">
      <?php if(isset($pesan)){
        echo "<div class='alert alert-success alert-dismissible'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;";
        echo "</button>";
        echo "  <h4><i class='icon fa fa-check'></i> Sukses!</h4>";
        echo "<h5>$pesan</h5>";
        echo "</div>";
      }?>
      <div class="panel-heading">
        <h3 class="panel-title">Data Mahasiswa</h3>
      </div>
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-12">
            <!-- Example Horizontal Form Label Sizing -->
            <div class="example-wrap">
              <div class="example">
                <?php
                  echo form_open_multipart('admin/save_data_mahasiswa');?>
                <form class="form-horizontal" enctype="multipart/form-data">
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">NIM Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_nim"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Mahasiswa Jurusan Id</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_jurusan_id"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Nama Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_nama"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Id Jurusan Mahasiswa</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="mahasiswa_jurusan_id">
                          <?php foreach ($tbl_jurusan->result() as $key => $row) {  ?>
                          <option <?php echo ($this->input->post("mahasiswa_jurusan_id")=="<?php echo $row->jurusan_id; ?>")?"selected":"";?> value="<?php echo $row->jurusan_id; ?>"><?php echo $row->jurusan_id; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Tempat Lahir Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_tempat_lahir"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Tanggal Lahir Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_tgl_lahir"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="mahasiswa_jekel"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Alamat</label>
                    <div class="col-sm-9">
                      <textarea name="mahasiswa_alamat" class="maxlength-textarea form-control" data-plugin="maxlength" data-placement="bottom-right-inside"
                      maxlength="100" rows="3" placeholder="This textarea has a limit of 100 chars."></textarea>
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="inputSizingLarge">Created by</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSizingLarge" name="userinput"
                      placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group form-group-lg">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-animate btn-animate-side btn-success btn-lg">
                        <span><i class="icon wb-download" aria-hidden="true"></i>Save</span>
                      </button>
                    </div>
                  </div>

                  </div>
                  <!-- End Example Maxlength Textarea -->
                </div>


                </form>
                <?php form_close(); ?>

              </div>
            </div>
            <!-- End Example Horizontal Form Label Sizing -->
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>

  (function(document, window, $) {
    'use strict';

    var Site = window.Site;

    $(document).ready(function($) {
      Site.run();
    });

    window.edit = function() {
      $('.click2edit').summernote({
        focus: true
      });
    };
    window.save = function() {
      $('.click2edit').destroy();
    };
  })(document, window, jQuery);
</script>
