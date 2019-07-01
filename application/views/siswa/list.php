<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li class="active">
                    <a href="<?=base_url('siswa');?>">
                        <i class="material-icons">group</i> Siswa
                    </a>
                </li>
               
            </ol>
    <?php 
    //Notifikasi
    if ($this->session->flashdata('sukses')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
    }
    ?>
        <!-- <div class="block-header">
            <h2>DATA SISWA</h2>
        </div> -->


        <!-- Condensed Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <?php echo $title ?>
                            <!-- <small>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</small> -->
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

                    <p></p><p></p><p>

                    <a class="btn btn-success btn-md" href="<?=base_url('siswa/tambah');?>">
                     <i class="material-icons">add_circle</i> Data Baru</a></td>

                    <center><input type="button" class="btn btn-primary" onclick="printDiv('cetakArea')" value="Cetak Document" /> </center>
                    
                    </div>

                    <div class="body table-responsive" id="cetakArea">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>     
                                    <th>Agama</th>                               
                                    <th>Tempat Tanggal Lahir</th>                                                        
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                                   
                                $i = 1; 
                                foreach($siswa as $siswa){ 
                                    ?>
                                    <tr>
                                        <th scope="row"><?=$i;?></th> <!-- sesuai dg database -->
                                        <!-- <td><?=$siswa->id_siswa;?></td> -->
                                        <td><?=$siswa->nis;?></td>
                                        <td><?=$siswa->nama;?></td> 
                                        <td><?=$siswa->kelas;?></td> 
                                        <td><?=$siswa->alamat;?></td>
                                        <td><?=$siswa->agama;?></td>
                                        <td><?=$siswa->ttl;?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?= base_url('siswa/edit/'.$siswa->id_siswa)?>">Edit</a>

                                            <?php 
                                                // Link Delete
                                                     include('delete.php');
                                            ?>
                                            
                                        </td>   
                                    </tr>
                                    <?php
                                
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Condensed Table -->
    </div>
</section>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

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