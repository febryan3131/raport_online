<section class="content">
        <div class="container-fluid">
             <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('guru');?>">
                        <i class="material-icons">person</i> Guru
                    </a>
                </li>
                <li class="active">
                    <i class="material-icons">archive</i>Tambah
                </li>
            </ol>
        <?php 
        // ERROR Warning
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        // ATRIBUT
        $atribut = '';

        // FORM OPEN
        echo form_open(base_url('guru/tambah'), $atribut);
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
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">                          
                            <form class="form-horizontal" action="<?=base_url('guru/tambah');?>" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nip</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nip" type="text" class="form-control" placeholder="Nip" required>
                                            </div>
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
                                                <input name="nama" type="text" class="form-control" placeholder="Nama guru" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                               <select name="jenis_kelamin" placehoder="-Pilih Jenis Kelamin-">
                                                   <option value=""disabled selected>-Pilih jenis kelamin-</option>
                                                   <option value="Laki-laki">Laki-laki</option>
                                                   <option value="Perempuan">Perempuan</option>
                                                   
                                               </select>
                                           
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                               <select name="agama" placehoder="-Pilih Agama-">
                                                   <option value=""disabled selected>-Pilih Agama-</option>
                                                   <option value="Islam">Islam</option>
                                                   <option value="Katolik">Katolik</option>
                                                   <option value="Kristen">Kristen</option>
                                                   <option value="Hindu<">Hindu</option>
                                                   <option value="Budha">Budha</option>   
                                               </select>
                                           
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="username" type="text" class="form-control" placeholder="Username" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="password" type="text" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                               <select name="status" placehoder="-Pilih Status-">
                                                   <option value=""disabled selected>-Pilih Status-</option>
                                                   <option value="Aktif">Aktif</option>
                                                   <option value="Honor">Honor</option>
                                                   
                                                  </select>
                                           
                                        </div>
                                    </div>
                                </div> -->

                                

                                <!--  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Guru Bidang</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="guru_bidang" type="text" class="form-control" placeholder="Guru bidang" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>No Telp</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="no_telp" type="text" class="form-control" placeholder="No Telp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                               <!--  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>No Telp</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="no_telp" type="text" class="form-control" placeholder="No Telp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">                                                
                                                <input name="tgl_lahir" type="text" class="form-control date" placeholder="Ex: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="jk" class="form-control show-tick">
                                                    <option value="">-- Please select --</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Telp.</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="telp" type="text" class="form-control" placeholder="Telpon">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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