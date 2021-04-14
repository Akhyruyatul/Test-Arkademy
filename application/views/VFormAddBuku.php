<form action="<?php echo site_url('Data/AddDataBuku'); ?>" method="post">

	<table>

	<tr>
		<td>No Buku</td>
		<td>:</td>
		<td><input type="text" name="no_buku" required><br></td>
	</tr>

	<tr>
		<td>Judul </td>
		<td>:</td>
		<td>
			<input type="text" name="judul"required>
		</td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td>:</td>
		<td>
			<input type="text" name="pengarang"required>
		</td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td>
			<input type="text" name="tahun_terbit"required>
		</td>
	</tr>
	<tr>
		<td>Jenis Buku</td>
		<td>:</td>
		<td>
			<input type="text" name="jenis_buku"required>
		</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>
			<input type="text" name="status">
		</td>
	</tr>
	

	</table>
	<input type="submit" name="simpan" value="Simpan">
</form>


