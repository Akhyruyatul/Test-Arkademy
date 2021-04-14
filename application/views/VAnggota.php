<table border="1px">
	<tr>
		<td colspan="7">
			<a href="<?php echo site_url('Data/VFormAddAnggota'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Anggota</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Kota</th>
		<th>No telp</th>
		<th>Tanggal lahir</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataAnggota))
	{
		foreach($DataAnggota as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_anggota; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td><?php echo $ReadDS->kota; ?></td>
		<td><?php echo $ReadDS->no_telp; ?></td>
		<td><?php echo $ReadDS->tgl_lahir; ?></td>
		<td>
			<a href="<?php echo site_url('Data/DataAnggota/'.$ReadDS->id_anggota.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Data/DeleteDataAnggota/'.$ReadDS->id_anggota) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>

