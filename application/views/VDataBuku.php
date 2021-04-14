<table border="1px">
	<tr>
		<td colspan="7">
		</td>
	</tr>
	<tr>
		<th>No Buku</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
		<th>Jenis Buku</th>
		<th>Status</th>
	</tr>
	<?php
	if(!empty($DataBuku))
	{
		foreach($DataBuku as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->no_buku; ?></td>
		<td><?php echo $ReadDS->judul; ?></td>
		<td><?php echo $ReadDS->pengarang; ?></td>
		<td><?php echo $ReadDS->tahun_terbit; ?></td>
		<td><?php echo $ReadDS->jenis_buku; ?></td>
		<td><?php echo $ReadDS->status; ?></td>
		<td>
			
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>

