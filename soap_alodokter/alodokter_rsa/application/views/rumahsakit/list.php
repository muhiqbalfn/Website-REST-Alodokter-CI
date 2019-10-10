<?php echo $this->session->flashdata('hasil'); ?>
<table>
	<tr>
		<th>ID RS</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>TELEPON</th>
	</tr>
	<?php
	if (is_array($rumahsakit) || is_object($rumahsakit))
	{
		foreach ($rumahsakit as $rs)
		{
			echo "<tr>
			<td>$rs->id_rs</td>
			<td>$rs->nama_rs</td>
			<td>$rs->alamat_rs</td>
			<td>$rs->tlp_rs</td>

			</tr>";
		}
	}
	?>
</table>


<!-- <td>".anchor('rumahsakit/edit/'.$rs->id_rs,'Edit')."
		".anchor('rumahsakit/delete/'.$rs->id_rs,'Delete')."</td> -->