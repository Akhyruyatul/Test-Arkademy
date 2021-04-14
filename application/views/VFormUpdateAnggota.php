<form action="<?php echo site_url('Data/UpdateDataAnggota'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="id_anggota" value="<?php echo $detail['id_anggota']; ?>"required>
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td>:</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>:</td>
		<td>
			<input type="text" name="kota" value="<?php echo $detail['kota']; ?>" required>
		</td>
	</tr>
	<tr>
		<td>No Telp </td>
		<td>:</td>
		<td>
			<input type="text" name="no_telp" value="<?php echo $detail['no_telp']; ?>" required>
		</td>
	</tr> 
	<tr>
		<td>Tanggal lahir </td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_lahir" value="<?php echo $detail['tgl_lahir']; ?>"required>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
