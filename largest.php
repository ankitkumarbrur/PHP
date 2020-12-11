<html>
    <body>
        <h2>Enter three numbers to get the largest!</h2>
        <form method="post" action="">
            1st&nbsp:&nbsp&nbsp<input type="text" name="first"/><br/>
            2nd&nbsp:&nbsp<input type="text" name="second"/><br/>
            3rd&nbsp:&nbsp&nbsp<input type="text" name="third"/><br/>
            <br/><input name='submit' type="submit" value="Submit"/>
        </form>
    <?php
        if(isset($_POST['submit']))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];
            $c=$_POST['third'];
            if(is_numeric($a)&&is_numeric($b)&&is_numeric($c))
                largest($a,$b,$c);
            else
                echo'Enter Only Numeric values ';
        }
        function largest($a,$b,$c)
        {
            if($a>$b)
            {
                if($a>$c)
                    echo $a." is the largest number ";
            }
            elseif($b>$c)
                echo $b." is the largest number ";
            else
                echo $c." is the largest number ";
                    
        }
    ?>
    </body>
</html>