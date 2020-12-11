<html>
    <body>
        <form method="post">
            Enter n to print first n even numbers : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
        
    <?php 
        if(isset($_POST["submit"]))
        {
            $n=$_POST["a"];
            $count=1;
            echo "First n even numbers are : ";
            for($i=0;$count<=$n;$i++)
            {
                if($i%2==0)
                {
                    echo $i." ";
                    $count++;
                }
            }
           
        }
    ?>
    </body>
</html>