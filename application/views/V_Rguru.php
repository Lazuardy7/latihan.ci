<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Read Guru</title>
</head>
<body>
<a href="<?=base_url()?>"><button>Kembali</button></a>
<div align="center">
	
<h1>Table Guru</h1>
<a href="<?=site_url('welcome/create/guru')?>"><button>Tambah Data Guru</button></a>
<table border="1">
	<tr>
		<td>NIP</td>
		<td>Nama</td>
		<td>Tgl Lahir</td>
		<td align="center">Action</td>
	</tr>
	<?php foreach ($table as $t) { ?>
	<tr>
		<td><?=$t['nip']?></td>
		<td><?=$t['nama']?></td>
		<td><?=$t['tgl_lahir']?></td>
		<td>
			<a href="<?=site_url('welcome/update/guru/'.$t['id_guru'])?>"><button>Update</button></a>
			<a href="<?=site_url('welcome/delete/guru/'.$t['id_guru'])?>"><button>Hapus</button></a>
				
		</td>
	</tr>
	<?php } ?>
</table>

</div>
</body>
</html>