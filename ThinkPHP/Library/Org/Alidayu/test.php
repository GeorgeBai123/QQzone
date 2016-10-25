<?php
	header("content-type:text/html;charset=utf-8;");
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 
    if(!empty($_GET)){
    	 $num=$_GET['num'];
    }
   $yzm = rand(1000,9999);
   echo $yzm;
    // $httpdns = new HttpdnsGetRequest;
    // $client = new ClusterTopClient("4272","0ebbcccfee18d7ad1aebc5b135ffa906");
    // $client->gatewayUrl = "http://api.daily.taobao.net/router/rest";
    // var_dump($client->execute($httpdns,"6100e23657fb0b2d0c78568e55a3031134be9a3a5d4b3a365753805"));

    $appkey = '23467693';
    $secret = '655ce468bee83af107397db391005cde';

    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new AlibabaAliqinFcSmsNumSendRequest;
    $req->setExtend("123456");
    $req->setSmsType("normal");
    $req->setSmsFreeSignName("微言微语");
    $req->setSmsParam("{\"code\":\"$yzm\"}");
    $req->setRecNum($num);
    $req->setSmsTemplateCode("SMS_18185033");
    $resp = $c->execute($req);
    var_dump($resp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="#" method="get">
		<input type="text" name="num">
		<button>tijiao</button>
	</form>
</body>
<script>
	
</script>
</html>