<?php echo form_open('C_pesanrs/update');?>
<?php echo form_hidden('id_pesanrs', $pesan_rs[0]->id_pesanrs);?>
<?php echo form_hidden('username', $this->session->userdata('uname') );?>
<table>
	<tr>
		<td>ID PESAN RS</td>
		<td><?php echo form_input('', $pesan_rs[0]->id_pesanrs, "disabled");?></td>
	</tr>
	<tr>
		<td>ID RS</td>
		<td><?php echo form_input('id_rs', $pesan_rs[0]->id_rs);?></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><?php echo form_input('nama', $pesan_rs[0]->nama);?></td>
	</tr>
	<tr>
		<td>TANGGAL</td>
		<td><?php echo form_input('tgl_pesan', $pesan_rs[0]->tgl_pesan);?></td>
	</tr>
	<tr>
		<td>WAKTU</td>
		<td><?php echo form_input('waktu_pesan', $pesan_rs[0]->waktu_pesan);?></td>
	</tr>
		<tr>
		<td colspan="2">
			<?php echo form_submit('submit','Simpan');?>
			<?php echo anchor('C_rumahsakit1','Kembali');?>
		</td>
	</tr>
</table>
<?php
echo form_close();
?>