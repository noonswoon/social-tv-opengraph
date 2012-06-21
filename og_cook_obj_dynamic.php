<?php

    $params = array();
    if(count($_GET) > 0) {
        $params = $_GET;
    } else {
        $params = $_POST;
    }
    // defaults
    if($params['showTitle'] == "") $params['showTitle'] = "dTVshow";
    if($params['showLocale'] == "") $params['showLocale'] = "th_TH";
    if($params['showImage'] == "") $params['showImage'] = "default";
    if($params['description'] == "") $params['description'] = "someDescription";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 

     <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# og_chatterbox: http://ogp.me/ns/fb/og_chatterbox#">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
        <!-- Open Graph meta tags -->
        <meta property="fb:app_id" content="197422093706392" />
        <meta property="og:type" content="og_chatterbox:recipe"/>  <!-- need to change this -->
        <meta property="og:url" content="http://chatterbox.mobi/opengraph/og_cook_obj_dynamic.php?fbrefresh=1&showTitle=<?= $params['showTitle'] ?>&showImage=<?= $params['showImage'] ?>&showLocale=<?= $params['showLocale'] ?>" /> <!-- these get parameter determine the details -->
        <meta property="og:title" content="<?= $params['showTitle'] ?>"/>
        <meta property="og:image"  content="http://chatterbox.mobi/images/tvshows/<?= $params['showImage'] ?>.png" /> 
    </head>
    <body><?= $params['showTitle'] ?>
    </body>
</html>