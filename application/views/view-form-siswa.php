<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Form Siswa</title>
</head>
<body>
	<div class="container">
<form method="post" action="<?php echo base_url(); ?>index.php/datasiswa/save">
	<label>Nama : </label>
	<input class="form-control form-control-sm" type="text" name="nama"> <br/>
	<label>NIS : </label>
	<input class="form-control form-control-sm" type="text" name="nis"> <br/>
	<label>Tanggal Lahir : </label>
	<input class="form-control form-control-sm" type="date" name="tgl_lahir"> <br/>
	<label>Tempat Lahir : </label>
	<input class="form-control form-control-sm" type="text" name="tmp_lahir"> <br/>
	<label>Alamat : </label>
    <textarea class="form-control form-control-sm" name="alamat"></textarea><br/><br/>
	<label>Jenis Kelamin : </label>
	<input type='radio' name='jenis_kelamin' value='pria' />Pria
        <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan<br/>
    <label>Agama : </label>
    <select class="form-control form-control-sm" name="agama">
    	<option value="islam">Islam</option>
    	<option value="kristen">Kristen</option>
    	<option value="katholik">Katholik</option>
    	<option value="hindu">Hindu</option>
    	<option value="budha">Budha</option>
		<option value="protestan">Protestan</option>
		<option value="konghucu">Konghucu</option>
    </select><br/>
    
    <input class="btn btn-primary"  type="submit" name="tombol" value="Simpan"/>
</form>
</div>
</body>
</html>
