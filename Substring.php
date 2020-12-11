<html>
    <body>
        <form method="post">
            Enter a string : <input type="text" name="a"/><br/>
            Enter a string to check if it is present in first string : <input type="text" name="b"/>
            <br/><br/><input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $b=$_POST["b"];
            $a_len=strlen($a);
            $b_len=strlen($b);
            if($a_len<$b_len)
            {
                echo"Given substring is not present in Upper string.";
            }
            else
            {
                $count=0;
                for($i=0;$i<=$a_len-$b_len;$i++)
                {
                    for($j=0;$j<$b_len;$j++)
                    {
                        if($a[$i+$j]==$b[$j])
                        {
                            if($j==$b_len-1)
                            {
                                $count++;
                            }
                        }
                        else
                            break;
                    }
                }
                if($count==0)
                    echo"Given substring is not present in Upper string.";
                else
                    echo"Given substring is found ".$count." times in Upper string.";
            }
        }
    ?>
    </body>
</html>