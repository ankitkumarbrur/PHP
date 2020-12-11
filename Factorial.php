<html>
    <body>
        <form method="post">
            Enter a number to find factorial : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            if(is_numeric($a))
                fact($a);
        }
        else
            echo 'Enter only Numeric Values';
        
        function fact($a)
        {
            if($a==0)
                echo 'Factorial of 0 is 1.';
            elseif($a==1)
                echo 'Factorial of 1 is 1.';
            else
            {
                $fac=1;
                for($i=2;$i<=$a;$i++)
                {
                    $fac*=$i;
                }
                echo 'Factorial of '.$a.' is '.$fac.'.';
            }
        }
    ?>
    </body>
</html>