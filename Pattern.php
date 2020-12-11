<html>
    <body>
    <form method="post">
            Enter n : <input type="text" name="a"/><br/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <br/><br/><br/>
    <?php
        if(isset($_POST["submit"]))
        {
            $n=$_POST["a"];
            for($i=0;$i<$n;$i++)
            {
                for($j=0;$j<=$i;$j++)
                    echo "*";
                echo '<br/>';
            }
        }
    ?>
    </body>
</html>