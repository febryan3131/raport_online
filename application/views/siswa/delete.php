<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?php echo $siswa->id_siswa ?>"></i> Delete
</button>

<div class="modal modal-danger fade" id_siswa="Delete<?php echo $siswa->id_siswa ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hid_siswaden="true">&times;</span>
				</button>
				<h4 class="modal-title">Menghapus Data</h4>
			</div>
			<div class="modal-body">
				<p>Anda yakin ingin menghapus data ini..?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Tidak, batalkan</button>
				<a href="<?php echo base_url('siswa/delete/'.$siswa->id_siswa) ?>" class="btn btn-danger pull-right"> Ya, Hapus Data</a>	
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
  <!-- /.modal -->
