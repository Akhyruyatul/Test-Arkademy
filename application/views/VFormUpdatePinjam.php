<form action="<?php echo site_url('Data/UpdateDataPinjam'); ?>" method="post">
<table>
	<tr>
		<td>Id Anggota</td>
		<td>:</td>
		<td><input type="hidden" name="no_pinjam" value="<?php echo $detail['no_pinjam']; ?>"required>
			<input type="text" name="id_anggota" value="<?php echo $detail['id_anggota']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>No Buku </td>
		<td>:</td>
		<td>
			<input type="text" name="no_buku" value="<?php echo $detail['no_buku']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>Tanggal Pinjam</td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_pinjam" value="<?php echo $detail['tgl_pinjam']; ?>" required>
		</td>
	</tr>
	<tr>
		<td>Tanggal Kembali</td>
		<td>:</td>
		<td>
			<input type="date" name="tgl_kembali" value="<?php echo $detail['tgl_kembali']; ?>" required>
		</td>
	</tr> 
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
