<html>
    <body>
        <h3> Login </h3>
        <form method="post">
            Username : <input type="text" name="user"/><br/><br/>
            Password :&nbsp&nbsp<input type="password" name="pass"/>
            <br/><br/><input type="submit" value="Login" name="submit"/>
        </form>
    <?php 
        if(isset($_POST["submit"]))
        {
            $flag=false;
            $conn=mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, "login_info");
            if (!$conn)
                die("Connection failed: " . mysqli_connect_error());
            $query1 = 'SELECT username, password FROM login';
            $result1 = mysqli_query($conn, $query1);
            while($row = mysqli_fetch_assoc($result1))
            {
                if($_POST["user"]==$row["username"]&&$row["password"]==$_POST["pass"])
                {
                    $flag=true;
                    break;
                }
            }
            if($flag==false)
            {
                echo"Please enter valid username and password.";
            }
            else
                echo"Login sucessfull!!";
        }
    ?>
    </body>
</html>