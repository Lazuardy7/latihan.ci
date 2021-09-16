<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Siswa</title>
</head>
<body>
<form method="POST" action="<?=site_url('welcome/do_create/staff')?>">
	
<div align="center">
	<h1>Create Data taff</h1>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name="jabatan"></td>
		</tr>
		<tr>
			<td>tgl_lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" value="Simpan">
			</td>
		</tr>
	</table>
</div>

</form>
</body>
</html>