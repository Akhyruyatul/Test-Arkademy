<form action="<?php echo site_url('Data/UpdateDataBuku'); ?>" method="post">
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input type="hidden" name="no_buku" value="<?php echo $detail['no_buku']; ?>"required>
			<input type="text" name="judul" value="<?php echo $detail['judul']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>Pengarang </td>
		<td>:</td>
		<td>
			<input type="text" name="pengarang" value="<?php echo $detail['pengarang']; ?>"required>
		</td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td>
			<input type="text" name="tahun_terbit" value="<?php echo $detail['tahun_terbit']; ?>" required>
		</td>
	</tr>
	<tr>
		<td>Jenis Buku</td>
		<td>:</td>
		<td>
			<input type="text" name="jenis_buku" value="<?php echo $detail['jenis_buku']; ?>" required>
		</td>
	</tr> 
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>
			<input type="text" name="status" value="<?php echo $detail['status']; ?>"required>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
