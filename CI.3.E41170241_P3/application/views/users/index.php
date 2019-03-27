<html>
<head>
	<title>List User</title>
</head>
<body>
	<center><h1>List User</h1></center>
	<center><?php echo anchor('user/add','Create User'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($users as $user){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $user->nama ?></td>
			<td><?php echo $user->alamat ?></td>
			<td><?php echo $user->pekerjaan ?></td>
			<td>
			    <?php echo anchor('user/edit/'.$user->id,'Edit'); ?>
            	<?php echo anchor('user/delete/'.$user->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

	<center><a href="<?= base_url().'index.php/login/logout' ?>">Logout</a></center>
</body>
</html>
