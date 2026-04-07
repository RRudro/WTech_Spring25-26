<!DOCTYPE html>
<?php
session_start();
$Error = $_SESSION["usernameError"] ?? "";
unset($_SESSION["usernameError"]);
?>
<html>
    <body>
        <form method = "post" action ="../Controller/LoginValidation.php" >
            <table>
                <tr>
                    <td>
                        <label> User Name: </label>
                    </td>
                    <td>
                        <input type = "text" name = "username"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Password: </label>
                    </td>
                    <td>
                        <input type = "password" name = "password"/>
                    </td>
                </tr>
                <tr>
                    <td> 

                    </td>
                    <td>
                        <?php
                        echo "<p style = 'color: red'>$Error </p>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> 

                    </td>
                    <td> 
                        <input type ="submit" name="submit"/>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>/