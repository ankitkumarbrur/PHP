<html>
    <body>
        <form method="post">
            Enter a string to check pallindrome : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $b=$a;
            $len=strlen($a);
            $j=$len-1;
            for($i=0;$i<$len/2;$i++)
            {
                $temp=$a[$i];
                $a[$i]=$a[$j];
                $a[$j]=$temp;
                $j--;
            }
            if($b==$a)
                echo'Entered string is a pallindrome';
            else
                echo'Entered string is not a pallindrome';
        }
    ?>
    </body>
</html>