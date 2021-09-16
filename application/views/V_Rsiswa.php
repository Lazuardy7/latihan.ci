<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Read Siswa</title>
</head>
<body>
<a href="<?=base_url()?>"><button>Kembali</button></a>
<div align="center">
	
<h1>Table Siswa</h1>
<a href="<?=site_url('welcome/create/siswa')?>"><button>Tambah Data Siswa</button></a>
<table border="1">
	<tr>
		<td>NISN</td>
		<td>Nama</td>
		<td>Tgl Lahir</td>
		<td align="center">Action</td>
	</tr>
	<?php foreach ($table as $t) { ?>
	<tr>
		<td><?=$t['nisn']?></td>
		<td><?=$t['nama']?></td>
		<td><?=$t['tgl_lahir']?></td>
		<td>
			<a href="<?=site_url('welcome/update/siswa/'.$t['id_siswa'])?>"><button>Update</button></a>
			<a href="<?=site_url('welcome/delete/siswa/'.$t['id_siswa'])?>"><button>Hapus</button></a>
				
		</td>
	</tr>
	<?php } ?>
</table>

</div>
</body>
</html>