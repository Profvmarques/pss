<?php

session_start();
$codigoCaptcha = substr(md5(time()), 0, 5);

$_SESSION['captcha'] = $codigoCaptcha;


$imagemCaptcha = imagecreatefrompng("../img/fundocaptch.png");

$fonteCaptcha = imageloadfont("../img/anonymous.gdf");

$corCaptcha = imagecolorallocate($imagemCaptcha, 255, 0, 0);

imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);


header("Content-type: image/png");

imagepng($imagemCaptcha);

imagedestroy($imagemCaptcha);
?>