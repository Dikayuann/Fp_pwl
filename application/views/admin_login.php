<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Bimbelindo</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: url('background.jpg') no-repeat center center;
			background-size: cover;
		}

		.login-container {
			background-color: rgba(255, 255, 255, 0.9);
			padding: 40px;
			border-radius: 15px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 400px;
			text-align: center;
		}

		.login-container img {
			width: 80px;
			margin-bottom: 10px;
		}

		.login-container h1 {
			font-size: 24px;
			margin: 30px 0;
			color: #2b5c87;
			margin-bottom: 90px;
		}

		.login-container p {
			margin: 0 0 60px;
			color: #666;
			margin-bottom: 30px;
		}

		.login-container input {
			width: 95%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}

		.login-container button {
			width: 100%;
			padding: 10px;
			background-color: #2b5c87;
			border: none;
			border-radius: 5px;
			color: white;
			font-size: 16px;
			cursor: pointer;
			margin-bottom: 20px;
		}

		.login-container button:hover {
			background-color: #4a7db1;
		}

		/* Styling for the messages */
		.message {
			margin: 20px 0;
			padding: 10px;
			border-radius: 5px;
			font-size: 16px;
		}

		.message.success {
			background-color: #d4edda;
			color: #155724;
			border: 1px solid #c3e6cb;
		}

		.message.error {
			background-color: #f8d7da;
			color: #721c24;
			border: 1px solid #f5c6cb;
		}

	</style>
</head>
<body>
<div class="login-container">
	<img src="images/logo.png" alt="Logo Bimbelindo">
	<h1>Bimbelindo</h1>
	<p>Gunakan Email admin anda</p>

	<!-- Display success or error messages -->
	<?php if ($this->session->flashdata('success')): ?>
		<div class="message success">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->session->flashdata('error')): ?>
		<div class="message error">
			<?php echo $this->session->flashdata('error'); ?>
		</div>
	<?php endif; ?>

	<form action="<?php echo site_url('Admin_login/authenticate'); ?>" method="post">
		<input type="text" name="username" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<button type="submit">Login</button>
	</form>
</div>
</body>
</html>
