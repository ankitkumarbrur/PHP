<html>
    <body>
        <form method="post">
            Enter birthdate(dd-mm-yyyy) : <input type="text" name="a"/>
            &nbsp&nbsp&nbsp&nbsp<input type="submit" value="submit" name="submit"/>
        </form>
        
    <?php 
        if(isset($_POST["submit"]))
        {
            $inp=$_POST["a"];
            $arr=explode('-',$inp);
            $target_days=mktime(0,0,0,$arr[1],$arr[2],$arr[0]);
            $today=time();
            $seconds=$target_days-$today;
            $daysleft=(int)($seconds/86400);
            print($daysleft);
        }
    ?>
    </body>
</html>