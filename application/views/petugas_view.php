<html>
	<head>
		<title>Petugas</title>
	</head>
	<body>
		<table width="800px" height="600px" border="1px" align="center">
			<tr height="100px">
				<td>
					<a href="<?php echo site_url('Data/DataAnggota'); ?>">Data Anggota</a>
					<a href="<?php echo site_url('Data/DataBuku'); ?>">Data Buku</a>
					<a href="<?php echo site_url('Data/DataPinjam'); ?>">Data Pinjam</a>
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
