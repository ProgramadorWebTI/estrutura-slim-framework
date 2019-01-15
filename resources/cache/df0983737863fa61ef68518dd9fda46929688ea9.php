<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('default.parts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="jumbotron">
            <h1>Navbar example</h1>
            <p class="lead">Projeto Base</p>
        </div>
        <div class="container"> 
            <?php echo $__env->yieldContent('content'); ?> 
        </div>

    <script src="<?php echo e(BASE_URL."node_modules/jquery/dist/jquery.min.js"); ?>"></script>
    <script src="<?php echo e(BASE_URL."node_modules/popper/popper.min.js"); ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>