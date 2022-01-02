<?php require_once 'requires/functions.php'; ?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="img/icons/favicon.png">
	<title><?php echo SITE_NAME; ?></title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<img src="img/icons/favicon.png" width="30" height="30" alt="Cut Your URL logo" style="margin-right: 10px;">
				<a class="navbar-brand" href="<?php echo get_url();?>"><?php echo SITE_NAME; ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 30px;">
						<li class="nav-item" style="padding-right: 10px;">
							<a class="nav-link active" aria-current="page" href="<?php echo get_url();?>">Главная</a>
						</li>
						<?php if($isAuth): ?>
							<li class="nav-item" style="padding-right: 10px;">
								<a class="nav-link active" href="<?php echo get_url('profile.php');?>">Профиль</a>
							</li>
						<?php endif; ?>
						<li class="nav-item" style="padding-right: 10px;">
							<a class="nav-link active" aria-current="page" href="<?php echo get_url('top.php');?>">Топ пользователей</a>
						</li>
					</ul>
					<form class="d-flex" action="../actions/add_link.php" method="post">
						<input type="hidden" value="<?php echo $_SESSION['user']['id'];?>" name="user-id"> <!-- позволяет передать id, чтобы никому не было видно -->
						<input class="form-control me-2" type="text" placeholder="Ссылка" aria-label="Ссылка" autocomplete="off" name="link">
						<button class="btn btn-success" type="submit"><i class="bi bi-plus-lg"></i></button>
					</form>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<?php if($isAuth): ?>
							<span style="display: flex; align-items: center; padding-right: 10px;">Здравствуйте, <?php echo $userName ?></span>
						<?php endif; ?>
						<li class="nav-item">
							<a href="<?php echo get_url('actions/logout.php');?>" class="btn btn-primary">Выйти</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>