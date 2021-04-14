<html>
	<head>
		<title>PERPUSTKAAN</title>
	</head>
	<body>
		<table width="800px" height="600px" border="1px" align="center">
			<tr height="100px">
				<td>
					<h1 class="display-4 " align="center">Laporan Data Buku Perpustakaan</h1>

				</td>
			</tr>
			<tr height="500px">
				<td>
					<?php $this->load->view($content); ?>
					<br>

					<a href="#">export PDF</a>
					<a href="<?php echo site_url('Login/logout'); ?>">Logout</a>
					
				</td>
			</tr>
		</table>
	</body>
</html>
