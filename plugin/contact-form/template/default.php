<html>

	<head>

	</head>

	<body>

		<div><b>Name</b>: <?php echo $data['contact-form-name']; ?></div>
		<div><b>E-mail</b>: <?php echo $data['contact-form-mail']; ?></div>
		<div><b>Website</b>: <?php echo $data['contact-form-website']; ?></div>
		<div><b>Message</b>: <?php echo nl2br($data['contact-form-message']); ?></div>

	</body>

</html>
