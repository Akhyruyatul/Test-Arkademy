<table border="1px">
	<tr>
		<td colspan="7">
		</td>
	</tr>
	<tr>
		<th>No Pinjam</th>
		<th>ID Anggota</th>
		<th>No Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal kembali</th>
	</tr>
	<?php
	if(!empty($DataPinjam))
	{
		foreach($DataPinjam as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->no_pinjam; ?></td>
		<td><?php echo $ReadDS->id_anggota; ?></td>
		<td><?php echo $ReadDS->no_buku; ?></td>
		<td><?php echo $ReadDS->tgl_pinjam; ?></td>
		<td><?php echo $ReadDS->tgl_kembali; ?></td>
		<td>
			
		</td>
		
	</tr>

	<?php		
		}
	}
	?>
</table>

