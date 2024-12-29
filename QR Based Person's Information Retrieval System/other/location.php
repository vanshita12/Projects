<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$etag="etag"; 
$loc="https://www.google.com/maps/@20.9269723,77.7402553,17z?entry=ttu";
$message= $etag." ".$loc;
echo $message;
/*function get_client_ip(){
    $ipaddress='';
    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        $ipaddress=$_SERVER['HTTP_CLIENT_IP'];
    }elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipaddress=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }elseif(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ipaddress=$_SERVER['HTTP_X_FORWARDED'];
    }elseif(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ipaddress=$_SERVER['HTTP_FORWARDED_FOR'];
    }elseif(isset($_SERVER['HTTP_FORWARDED'])){
        $ipaddress=$_SERVER['HTTP_FORWARDED'];
    }elseif(isset($_SERVER['REMOTE_ADDR'])){
        $ipaddress=$_SERVER['REMOTE_ADDR'];
    }else{
        $ipaddress='UNKNOWN';
    }
    return $ipaddress;
}
echo get_client_ip();
$PublicIP=get_client_ip();
$json=file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json=json_decode($json,true);
$country=$json['country'];
$state=$json['state'];
$city=$json['city'];
echo $country;
echo $state;
echo $city;*/

?>
</body>
</html>