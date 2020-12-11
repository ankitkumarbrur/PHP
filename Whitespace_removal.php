<html>
    <body>
        <form method="post">
            Enter an string to remove whitespaces : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $len=strlen($a);
            $arr;
            $j=0;
            for($i=0;$i<$len;$i++)
            {
                if($a[$i]!=" ")
                {
                    $arr[$j++]=$a[$i];
                }
            }
            $a=implode('',$arr);
            echo 'Array after removing whitespaces :- '.$a;
        }
    ?>
    </body>
</html>