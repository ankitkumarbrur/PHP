<html>
    <body>
        <form method="post">
            Enter n to print fibonacci : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
        <?php 
            if(isset($_POST["submit"]))
            {
                $num =$_POST["a"];  
                echo "<h3>Fibonacci series using recursive function:</h3>";  
                function fib($num)
                {  
                    if($num == 0)
                    {
                        return 0;  
                    }
                    else if( $num == 1)
                    {
                        return 1;
                    }
                    else
                    {  
                        return (fib($num-1) + fib($num-2));  
                    }   
                }  
                for ($i = 0; $i < $num; $i++)
                {  
                    echo fib($i)."  ";
                }
            }   
        ?>
</body>
</html>