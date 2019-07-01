    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('siswa');?>">
                        <i class="material-icons">group</i> Siswa
                    </a>
                </li>
                <li class="active">
                    <i class="material-icons">edit</i>Edit
                </li>
        <?php 
        // ERROR Warning
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        // ATRIBUT
        $atribut = '';

        // FORM OPEN
        echo form_open(base_url('siswa/edit/'.$siswa->id_siswa), $atribut);
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
                            <form class="form-horizontal" action="<?= base_url('siswa/edit/'.$siswa->id_siswa)?>" method="post">

                                <!-- <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Id siswa</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="id_siswa" type="text" class="form-control" placeholder="Id siswa" value="<?php echo $siswa->id_siswa ?>" required>
                                            </div>
                                            <?php 
                                                // var_dump($siswa);
                                                // exit();
                                            ?>
                                        </div>
                                    </div>
                                </div> -->

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nis</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nis" type="text" class="form-control" placeholder="Nis" value="<?php echo $siswa->nis ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama siswa</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nama" type="text" class="form-control" placeholder="Nama siswa" value="<?php echo $siswa->nama?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Kelas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                
                                                <select name="kelas_id" id="kelas_id" class="form-control show-tick">
                                                    <option value="">-- Pilih Kelas --</option>
                                                    <?php 
                                                        foreach ($kelas as $kelas) {
                                                        echo '<option value="'.$kelas->id_kelas.'" name="kelas_id">'.$kelas->kelas.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Tempat Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ttl" type="text" class="form-control" placeholder="Tempat tanggal Lahir" value="<?php echo $siswa->ttl ?>" required>
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
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo $siswa->alamat ?>" required>
                                            </div>
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
                                                   <option value="<?php echo $siswa->agama ?>" required>-Pilih Agama-</option>
                                                   <option value="Islam">Islam</option>
                                                   <option value="Katolik">Katolik</option>
                                                   <option value="Kristen">Kristen</option>
                                                   <option value="Hindu">Hindu</option>
                                                   <option value="Budha">Budha</option>   
                                               </select>
                                           
                                        </div>
                                    </div>
                                </div>      

                                          
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">
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