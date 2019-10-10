<?php echo $this->session->flashdata('hasil'); ?>
<table>
	<tr>
		<th>ID PESAN RS</th>
		<th>ID RS</th>
		<th>NAMA</th>
		<th>TANGGAL</th>
		<th>WAKTU</th>
		<th>AKSI</th>
	</tr>
	<?php
	if (is_array($pesan_rs) || is_object($pesan_rs))
	{
		foreach ($pesan_rs as $rs)
		{
			echo "<tr>
			<td>$rs->id_pesanrs</td>
			<td>$rs->id_rs</td>
			<td>$rs->nama</td>
			<td>$rs->tgl_pesan</td>
			<td>$rs->waktu_pesan</td>
			<td>".anchor('C_pesanrs/update/'.$rs->id_pesanrs,'Edit Pesan')."
			".anchor('C_pesanrs/delete/'.$rs->id_pesanrs,'Batal Pesan')."</td>
			</tr>";
		}
	}
	?>
</table>