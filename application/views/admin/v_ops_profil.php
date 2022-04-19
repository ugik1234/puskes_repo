<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
$profil = getProfil();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script language="JavaScript">
    var txt = "Update Post | <?= $profil->nama_puskesmas ?>   ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
      document.title = txt;
      txt = txt.substring(1, txt.length) + txt.charAt(0);
      segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
  </script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'upload/images/kab_bangka.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/font-awesome/css/font-awesome.min.css' ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/daterangepicker/daterangepicker.css' ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/datepicker/datepicker3.css' ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/iCheck/all.css' ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/colorpicker/bootstrap-colorpicker.min.css' ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/select2/select2.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    $this->load->view('admin/v_header');
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $this->load->view('admin/v_menu');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pengaturan
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Pengaturan</a></li>
          <li class="active">Data Puskesmas</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Puskesmas</h3>
          </div>
          <form action="<?php echo base_url() . 'admin/pengaturan/update_profil' ?>" method="post" enctype="multipart/form-data">

            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Nama Puskesmas</label>
                  <input type="text" name="nama_puskesmas" class="form-control" value="<?= $data['nama_puskesmas'] ?>" placeholder="" required />
                </div>
                <div class="col-md-12">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" placeholder="" required />
                </div>
                <div class="col-md-6">
                  <label>No Telp</label>
                  <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>No Whatsapp</label>
                  <input type="text" name="no_wa" class="form-control" value="<?= $data['no_wa'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Facebook</label>
                  <input type="text" placeholder="contoh : https://m.facebook.com/profile.php?id=113094176771018" name="sos_fb" class="form-control" value="<?= $data['sos_fb'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Twitter</label>
                  <input type="text" name="sos_twiter" class="form-control" value="<?= $data['sos_twiter'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Instagram</label>
                  <input type="text" name="sos_ig" class="form-control" value="<?= $data['sos_ig'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Youtube</label>
                  <input type="text" name="sos_yt" class="form-control" value="<?= $data['sos_yt'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Linked In</label>
                  <input type="text" name="sos_linkedin" class="form-control" value="<?= $data['sos_linkedin'] ?>" placeholder="" />
                </div>
                <div class="col-md-6">
                  <label>Kata Sambutan</label>
                  <textarea type="text" name="kata_sambutan" class="form-control"><?= $data['kata_sambutan'] ?></textarea>
                </div>
              </div>

              <!-- /.col -->
              <!-- <div class="col-md-12"> -->
              <div class="row">

                <div class="col-md-6">
                  <br>
                  <!-- <div class="box-body"> -->
                  <div class="form-group">
                    <label>Logo</label>
                    <?php if (!empty($data['logo'])) {
                      echo "<br><img src='" . base_url('upload/images/' . $data['logo']) . "' style='max-width : 300px; max-height: 100px '/>";
                    } ?>
                    <input type="file" name="logos" style="width: 100%;">
                    <span>*Jika tidak diganti kosongkan</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <br>
                  <!-- <div class="box-body"> -->
                  <div class="form-group">
                    <label>Kepala Puskesmas</label>
                    <?php if (!empty($data['kapus_img'])) {
                      echo "<br><img src='" . base_url('upload/images/' . $data['kapus_img']) . "' style='max-width : 300px; max-height: 100px '/>";
                    } ?>
                    <input type="file" name="kapus_imgs" style="width: 100%;">
                    <span>*Jika tidak diganti kosongkan</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.form group -->
        <div class="form-group">
          <div class="col-md-2">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Update</button>
            </div>
          </div>


        </div>
        <!-- /.box-body -->
    </div>
  </div>
  <!-- /.row -->
  <!-- </div> -->
  <!-- /.box-body -->

  <!-- </div> -->
  </div>
  <!-- /.box -->

  <!-- /.box -->
  </form>

  <!-- /.box -->
  </div>
  <!-- /.col (right) -->
  </div>
  <!-- /.row -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--Footer-->
  <?php
  $this->load->view('admin/v_footer');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets_old/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/select2/select2.full.min.js' ?>"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/input-mask/jquery.inputmask.extensions.js' ?>"></script>
  <!-- date-range-picker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/daterangepicker/daterangepicker.js' ?>"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/colorpicker/bootstrap-colorpicker.min.js' ?>"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url() . 'assets_old/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/iCheck/icheck.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets_old/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/ckeditor/ckeditor.js' ?>"></script>
  <!-- Page script -->

  <script>
    $(function() {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.

      CKEDITOR.replace('ckeditor');


    });
  </script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {
        "placeholder": "dd/mm/yyyy"
      });
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {
        "placeholder": "mm/dd/yyyy"
      });
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      });
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
  </script>
</body>

</html>