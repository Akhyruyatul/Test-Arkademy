<form action="<?php echo site_url('Data/AddDataPinjam'); ?>" method="post">

	<table>

	<tr>
		<td>No Pinjam</td>
		<td>:</td>
		<td><input type="text" name="no_pinjam" required><br></td>
	</tr>

	<tr>
		<td>Id Anggota </td>
		<td>:</td>
		<td>
			<input type="text" name="id_anggota"required>
		</td>
	</tr>
	<tr>
		<td>No Buku</td>
		<td>:</td>
		<td>
			<input type="text" name="no_buku"required>
		</td>
	</tr>
	<tr>
		<td>Tanggal Pinjam</td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_pinjam"required>
		</td>
	</tr>
	<tr>
		<td>Tanggal Kembali</td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_kembali"required>
		</td>
	</tr>

	</table>
	<input type="submit" name="simpan" value="Simpan">
</form>


