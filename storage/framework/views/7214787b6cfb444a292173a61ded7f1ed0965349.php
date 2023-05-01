<html>
<head>
    <link rel="stylesheet" href="/css/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">

    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <script src="/js/map.js"></script>

    <title>My Travels</title>
</head>

<body class="container">

<header>
    <h1>My Travels</h1>
</header>

<div class="main">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<div class="footer clearfix">
    <?php echo $__env->yieldContent('footer'); ?>
</div>


<?php echo $__env->yieldContent('script'); ?>


</body>
</html>
<?php /**PATH /var/www/resources/views/main.blade.php ENDPATH**/ ?>