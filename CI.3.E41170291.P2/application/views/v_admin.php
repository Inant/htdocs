<!DOCTYPE html>
<html>
<head>
	<title>Membuat login</title>
</head>
<body>
	<h1>Login mantap</h1>
	<h2>Haai kawan<?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>