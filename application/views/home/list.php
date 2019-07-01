<section class="content">
    <div class="container-fluid">
       
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
                       

                    <p></p><p></p><p>
<div class="jumbotron">
  <h1 class="display-4" style="center">&nbsp SELAMAT DATANG!</h1>
  <p class="lead">"Masa Depanmu Di Bentuk Dengan Apa Yang Kau Lakukan Hari Ini"</p>
  <hr class="my-4">
  <p></p>
</div>
                  
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