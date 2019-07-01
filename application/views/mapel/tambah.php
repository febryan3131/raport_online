<section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('mapel');?>">
                        <i class="material-icons">library_books</i> Mapel
                    </a>
                </li>
                <li class="active">
                    <i class="material-icons">archive</i>Tambah
                </li>
            </ol>
        <?php 
        // ERROR Warning
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        // // ATRIBUT
        // $atribut = '';

        // // FORM OPEN
        // echo form_open(base_url('mapel/tambah'), $atribut);
        ?>
            <!-- <div class="block-header">
                <h2>DATA SISWA</h2>
            </div> -->            
            
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $title ?>
                            </h2>
                            <div class="body">                          
                            <form class="form-horizontal" action="<?=base_url('mapel/tambah');?>" method="post">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Kode Mapel</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="kode_mapel" type="text" class="form-control" placeholder="Kode Mapel" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Mapel</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nama_mapel" type="text" class="form-control" placeholder="Nama Mapel" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                               <!--  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Mapel</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                               <select name="nama_mapel" placehoder="-Pilih Mapel-">
                                                   <option value=""disabled selected>-Pilih Mapel -</option>
                                                   <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                                   <option value="Matematika">Matematika</option>
                                                   <option value="PKN">PKN</option>
                                                   <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                   <option value="Agama">Agama</option>   
                                               </select>  
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                               <select name="keterangan" placehoder="-Keterangan-" required>
                                                   <option value=""disabled selected>-Keterangan-</option>
                                                   <option value="wajib">Wajib</option>
                                                   <option value="tambahan">Tambahan</option>
                                               </select>
                                        </div>
                                    </div>
                                </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Guru</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="guru_id" id="guru_id" class="form-control show-tick">
                                                    <option value="">-- Pilih guru --</option>
                                                    <?php 
                                                        foreach ($guru as $guru) {
                                                        echo '<option value="'.$guru->id_guru.'" name="guru_id">'.$guru->nama.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Semester</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                             <select name="semester" placehoder="-Semester-" required>
                                                   <option value=""disabled selected>-Semester-</option>
                                                   <option value="Ganjil/I">Ganjil/I</option>
                                                   <option value="Genap/II">Genap/II</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

 
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">

                                        <input type="reset" name="reset" class="btn btn-danger m-t-15 waves-effect" value="Reset">                              
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
  
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url('plugins/jquery-countto/jquery.countTo.js');?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url('plugins/raphael/raphael.min.js');?>"></script>
    <script src="<?=base_url('plugins/morrisjs/morris.js');?>"></script>

    <!-- ChartJs -->
    <script src="<?=base_url('plugins/chartjs/Chart.bundle.js');?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.resize.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.pie.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.categories.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.time.js');?>"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?=base_url('plugins/jquery-inputmask/jquery.inputmask.bundle.js');?>"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url('plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('js/admin.js');?>"></script>

    <!-- Demo Js -->
    <script src="<?=base_url('js/demo.js');?>"></script>
</body>

</html>