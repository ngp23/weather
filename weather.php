
<?php
    //if the data is zip
    if($_GET["zip"]){
        $zip = $_GET["zip"];
        sleep(2);
        //use this url
        $url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=imperial&appid=1f3e02829880f7eaed1fc29864fd9692";
        //exports the data to weather.html
        $fp = fopen($url, "r");
        $contents="";
        while ($more=fread($fp,1000)) {
            $contents.=$more;
        }
        echo $contents;
    }
    //If the users want the data according the longtude and latitude
    $long = $_GET["long"];
    $lat = $_GET["lat"];
    sleep(2);
    //use this url
    $url = "http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&units=imperial&appid=1f3e02829880f7eaed1fc29864fd9692";
    //exports data to weather.html
    $fp = fopen($url, "r");
    $contents="";
    while ($more=fread($fp,1000)) {
        $contents.=$more;
    }
    echo $contents;

?>
