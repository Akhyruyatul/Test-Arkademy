<html>
	<head>
		<title>PERPUSTKAAN</title>
	</head>
	<body>
		<table width="800px" height="600px" border="1px" align="center">
			<tr height="100px">
				<td>
					<a href="<?php echo site_url('Data/DataAnggota'); ?>">Data Anggota</a>
					<a href="<?php echo site_url('Data/DataBuku'); ?>">Data Buku</a>
					<a href="<?php echo site_url('Data/DataPinjam'); ?>">Data Pinjam</a>
					<a href="<?php echo site_url('Data/Logout'); ?>">Logout</a>
				</td>
			</tr>
			<tr height="500px">
				<td>
					<?php $this->load->view($content); ?>
				</td>
			</tr>
		</table>
	</body>
</html>
