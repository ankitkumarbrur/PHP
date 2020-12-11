<html>
    <body>
        <form method="post">
            Enter an string to replace first 'the' with 'that' : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $a=$_POST["a"];
            $a=preg_replace('/the/','That',$a,1);
            echo $a;
        }
    ?>
    </body>
</html>