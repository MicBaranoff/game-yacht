<!DOCTYPE html>
<html lang=en>
<head>
    <?php
    $proto ='https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $title='Share Title';
    $desc='Share Description!';
    $url='https://dev-mffamily.hyperr.ru/static/img/share.jpg';
    $urlvk='https://dev-mffamily.hyperr.ru/static/img/share.jpg';
    ?>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=icon href=/favicon.ico>
    <link rel=image_src href="<?= $url ?>">
    <meta property=og:locale content=ru_RU>
    <meta property=og:type content=website>
    <meta property=og:title content="<?=$title?>">
    <meta property=og:description content="<?=$desc?>">
    <meta property=og:url content=<?=$proto?>>
    <meta property=og:site_name content="<?=$title?>">
    <meta property=og:image content="<?= $url ?>">
    <meta property="vk:image"  content="<?= $urlvk ?>" />
    <meta property=og:image:width content=1200>
    <meta property=og:image:height content=631>
    <meta name=twitter:card content=summary>
    <meta name=twitter:image content="<?= $url ?>">
    <meta name=title content="<?=$title?>">
    <meta name=description content="<?=$desc?>">
    <meta name=mrc__share_title content="<?=$title?>">
    <meta name=mrc__share_description content="<?=$desc?>">
    <title><?=$title?></title>
    <script>
        window.location = "https://dev-mffamily.hyperr.ru/"
    </script>
</head>
<body>
</body>
</html>
