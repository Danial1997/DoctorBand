<?php

$telegram = json_decode(
    file_get_contents("https://api.telegram.org/bot113422787:AAGmxRD5ABzfGlEqMm4f0WzwavrHQeMCiNw/getMe")
);

if($telegram->ok == true){
    echo "<h1>اطلاعات ربات</h1>";
    echo "<b>نام کاربری </b>: ".$telegram->result->username;
    echo "<br/><b> نام ربات </b>: ".$telegram->result->first_name;
}else{
    echo "مشکلی پیش آمد";
}
