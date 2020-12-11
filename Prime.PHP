<html>
    <body>
        <form method="post">
            Enter a number to check prime : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            if(is_numeric($a))
                check_prime($a);
        }
        else
            echo 'Enter only Numeric Values';
        
        function check_prime($a)
        {
            $flag=true;
            for($i=2;$i<=$a/2;$i++)
            {
                if($a%$i==0)
                    $flag=false;
            }
            if($flag)
                echo $a.' is a prime number';
            else
                echo $a.' is a composite numer';
        }
    ?>
    </body>
</html>