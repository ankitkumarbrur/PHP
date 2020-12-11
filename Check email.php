<html>
    <body>
        <form method="post">
            Enter a mail_id to check if it is valid or not : <input type="text" name="a"/>
            <br/><br/><input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $valid= "/[a-zA-Z0-9_.]+@[a-zA-Z0-9]+.[a-zA-Z]+/";
            if(preg_match($valid,$a))
                echo "MAIL IS VALID";
            else
                echo "MAIL IS NOT VALID";
        }
    ?>
    </body>
</html>