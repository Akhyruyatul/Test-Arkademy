<table border="1px">
	<tr>
		<td colspan="7">
			<a href="<?php echo site_url('Data/VFormAddPinjam'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>No Pinjam</th>
		<th>ID Anggota</th>
		<th>No Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal kembali</th>
		<th>Tools</th>
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
			<a href="<?php echo site_url('Data/DataPinjam/'.$ReadDS->no_pinjam.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Data/DeleteDataPinjam/'.$ReadDS->no_pinjam) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>

