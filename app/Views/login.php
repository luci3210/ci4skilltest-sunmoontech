<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>	


<?php if(session()->get('success')): ?>
<div class="alert alert-danger" role='alert'>

<p> <?= session()->get('success') ?> </p>
	
</div>
<?php endif; ?>
<form class="form-signin" action="/" method="post">
   <h2 class="h3 mb-3 font-weight-normal text-center">LogIn</h2>

<div class="input-group mb-3">
  <input type="text" class="form-control" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
</div>

<div class="input-group mb-3">
  <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" placeholder="Password">
</div>

<?php if (isset($validation)): ?>
<div class="alert alert-danger" role='alert'>

<small> <?= $validation->listErrors() ?> </small>
	
</div>

<?php endif; ?>




  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <a href="/register" class="btn btn-lg btn-primary btn-block">Register</a>
  <p class="mt-5 mb-3 text-muted">&copy; SunMoonTech (Skill Test) 2017-2020</p>
</form>
</body>
</html>
