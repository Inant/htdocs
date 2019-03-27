<html>
<head>
	<title>Membuat form validation</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('form/aksi'); ?>
        <label>Nama</label><br/>
        <?php echo form_error('nama'); ?>
		<input type="text" name="nama"><br/>
        <label>Email</label><br/>
        <?php echo form_error('email'); ?>
        <input type="text" name="email"><br/>
        <?php echo form_error('konfir_email'); ?>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>