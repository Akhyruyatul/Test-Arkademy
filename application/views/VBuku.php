<table border="1px">
	<tr>
		<td colspan="7">
			<a href="<?php echo site_url('Data/VFormAddBuku'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>No Buku</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
		<th>Jenis Buku</th>
		<th>Status</th>
		<th>Tools</th>
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
			<a href="<?php echo site_url('Data/DataBuku/'.$ReadDS->no_buku.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Data/DeleteDataBuku/'.$ReadDS->no_buku) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>

