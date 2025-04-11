<?php

    //Calculate the sunrise time for Delhi, India
    //Latitude: 28.7041° North
    //Longitude: 77.1025° East
    //Zenith ~= 90
    //offset: +5.5 GMT
    
    echo "Delhi, India\n";
    echo("Date: " . date("D M d Y"));
    echo("<br>Sunrise time: ");
    echo(date_sunrise(time(),SUNFUNCS_RET_STRING, 28.7041,77.1025,90.5,5.5));
    echo("<br>Sunset time: ");
    echo(date_sunset(time(),SUNFUNCS_RET_STRING,28.7041,77.1025,90.6,5.5));
echo "<br>"; 
echo "Program by Diya Bhutani(2220100243)";

?>