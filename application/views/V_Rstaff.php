<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Read Staff</title>
</head>
<body>
<a href="<?=base_url()?>"><button>Kembali</button></a>
<div align="center">
	
<h1>Table Staff</h1>
<a href="<?=site_url('welcome/create/staff')?>"><button>Tambah Data Staff</button></a>
<table border="1">
	<tr>
		<td>NIP</td>
		<td>Nama</td>
		<td>Tgl Lahir</td>
		<td align="center">Action</td>
	</tr>
	<?php foreach ($table as $t) { ?>
	<tr>
		<td><?=$t['nama']?></td>
		<td><?=$t['jabatan']?></td>
		<td><?=$t['tgl_lahir']?></td>
		<td>
			<a href="<?=site_url('welcome/update/staff/'.$t['id_staff'])?>"><button>Update</button></a>
			<a href="<?=site_url('welcome/delete/staff/'.$t['id_staff'])?>"><button>Hapus</button></a>
				
		</td>
	</tr>
	<?php } ?>
</table>

</div>
</body>
</html>