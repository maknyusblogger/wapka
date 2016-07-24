<?php
ini_set('user_agent','Opera/8.01 (J2ME/MIDP; Opera Mini/1.2.3214/1724; en; U; ssr)');
// ini_set adalah fungsi User agent yang akan di gunakan wap kita untuk menelusuri halaman situs target sebagai bot...
$wpc=file_get_contents('http://youtube.com/?'.$_SERVER['QUERY_STRING']);
// Nah kalo yg ini fungsi vital ny yaitu yg dinamakan file_get_content
$wpc=preg_replace('#<div>(.*?)<div class="hd3">(.*?)#s', '', $wpc);
// fungsi preg_replace kalo yg ini fungsinya adalah untuk menghilangkan suatu div,html,ads,link,image dll
$wpc=str_replace('<a class="link" href="/games.php','<a href="http:/games.php',$wpc);
//fungsi str_replace adalah fungsinya untuk mengganti sebuah div,link,image dll sesuai keinginan kita
echo $wpc;
// ini fungsinya untuk menampilkan hasil grab kita..
?>
