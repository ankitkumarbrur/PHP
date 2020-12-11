<html>
    <body>
        <form method="post">
            Enter an array to sort : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $b=$_POST["a"];
            $a=explode(' ',$b);
            $len=count($a);
            for($i=0;$i<$len-1;$i++)
            {
                for($j=$i+1;$j<$len;$j++)
                {
                    if($a[$i]>$a[$j])
                    {
                        $temp=$a[$i];
                        $a[$i]=$a[$j];
                        $a[$j]=$temp;
                    }
                }
            }
            echo 'Sorted array : ';
            foreach($a as $r)
            {
                echo $r.' ';
            }
        }
    ?>
    </body>
</html>