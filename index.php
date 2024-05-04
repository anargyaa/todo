<!DOCTYPE html>
<html data-theme="light">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://cdn.tailwindcss.com"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
		*{
			font-family: "Lexend Deca", sans-serif;
		}
	</style>
</head>
<body>
	<div class="flex w-full">
		<div class="w-96">
			<?php 
				include 'asset/sidebar.php'; 
			?>
		</div>
		<div class="w-full p-4 max-h-screen overflow-auto">
			<?php
				if (isset($_GET['v'])) {
					if ($_GET['v'] == 'review') {
						include 'review.php';
					}
					elseif ($_GET['v'] == 'taskmanage') {
						include 'taskmanage.php';
					}
					elseif ($_GET['v'] == 'usermanage') {
						include 'usermanage.php';
					}
				} else {
					include 'list.php';
				}

			?>
		</div>
	</div>
</body>
</html>