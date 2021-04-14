<form action="<?php echo site_url('Data/AddDataAnggota'); ?>" method="post">

	<table>

	<tr>
		<td>Id Anggota</td>
		<td>:</td>
		<td><input type="text" name="id_anggota" required><br></td>
	</tr>

	<tr>
		<td>Nama </td>
		<td>:</td>
		<td>
			<input type="text" name="nama"required>
		</td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td>:</td>
		<td>
			<input type="text" name="alamat"required>
		</td>
	</tr>
	<tr>
		<td>Kota </td>
		<td>:</td>
		<td>
			<input type="text" name="kota"required>
		</td>
	</tr>
	<tr>
		<td>No Telp </td>
		<td>:</td>
		<td>
			<input type="text" name="no_telp"required>
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir </td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_lahir"required>
		</td>
	</tr>
	

	</table>
	<input type="submit" name="simpan" value="Simpan">
</form>


