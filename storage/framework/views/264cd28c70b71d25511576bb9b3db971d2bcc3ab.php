<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($title); ?></title>
</head>
<body>
    <h1>Hola, <?php echo e($names); ?> <?php echo e($surnames); ?></h1>
    <p><?php echo $body; ?></p>
    <p>Te invitamos a disfrutar todos nuestros productos</p>
     
    <p>Gracias,</p>
    <?php echo e(config('app.name')); ?><br>
</body>
</html><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/emails/compra-realizada.blade.php ENDPATH**/ ?>