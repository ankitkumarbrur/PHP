<html>
    <body>
        <form method="post">
            Enter n to get sum of first n odd numbers : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $sum=0;
            $n=$_POST["a"];
            $count=1;
            for($i=1;$count<=$n;$i++)
            {
                if($i%2!=0)
                {
                    $sum+=$i;
                    $count++;
                }
            }
            echo 'Sum of first '.$n.' odd numbers is :'.$sum;
        }
    ?>
    </body>
</html>