<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<?php $this->load->view('admin/menu') ?>
<main role="main" class="container">
	<h1>Level</h1>
	<a href="<?php echo base_url('Level/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>#</th>
				<th>Name</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value->name ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Level/ubah/'.$value->id) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Level/hapus/'.$value->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('admin/footer') ?>