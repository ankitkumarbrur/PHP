<?php   
    $color=array('white','green','red');
    for($i=0;$i<3;$i++)
        print($color[$i]," ");
    print("<br/>")
    sort($color);
    print("<ul>")
    for($i=0;$i<3;$i++)
        print("<li>".$color[$i]."</li>");
    print("</ul>")
?>