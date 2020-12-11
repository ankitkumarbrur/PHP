<form method="POST">
    <select name="language">
    <option value="0">ENGLISH</option>
    <option value="1">FRENCH</option>
    <option value="2">SPANISH</option>
    <option value="3">RUSSIAN</option>
    <option value="4">ITALIAN</option>
    </select>
    <input type="submit" name="submit"><br/>
</form>
<?php
    if(isset($_POST["submit"]))
    {
        switch($_POST["language"])
        {
            case 0:
                echo"Hello";
                break;
            case 1:
                echo"Bonjour";
                break;
            case 2:
                echo"Hola";
                break;
            case 3:
                echo"Привет";
                break;
            case 4:
                echo"Ciao";
                break;
        }
    }