<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yuru Online</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/css/app.css']); ?>
</head>
<body>
    <div id="app"></div> <!-- This is where your Vue app will mount -->
</body>
</html>
<?php /**PATH /home/motho/Documents/Work/yuru/yuru-base/resources/views/index.blade.php ENDPATH**/ ?>