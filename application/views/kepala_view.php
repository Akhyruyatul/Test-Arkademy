<html>
	<head>
		<title>Perpustakaan</title>
	</head>
	<body>
		<table width="800px" height="600px" border="1px" align="center">
			<tr height="100px">
				<td>
					<a href="<?php echo site_url('DataBuku/laporan'); ?>">Laporan Data Buku</a>
					<a href="<?php echo site_url('DataBuku/LaporanPinjam'); ?>">Laporan Data Pinjam</a>
					<a href="<?php echo site_url('Login/logout'); ?>">Logout</a>
				</td>
			</tr>
			<tr height="500px">
				<td>
					 <h1 class="display-4">Selamat Datang !</h1>
   					 <h5>Anda Login Sebagai, <?php echo $this->session->userdata('level') ?> Perpustakaan.</h5>
				</td>
			</tr>
		</table>
	</body>
</html>

