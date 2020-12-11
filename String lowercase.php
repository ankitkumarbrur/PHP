<html>
    <body>
        <form method="post">
            Enter a string to check if it is in lowercase : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $mat="/[A-Z]/";
            if(!preg_match($mat,$a))
            {
                echo'Entered string is in lowercase';
            }
            else
                echo'Entered string is NOT in lowercase';
        }
    ?>
    </body>
</html>