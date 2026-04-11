<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<h1> This is a log in Form </h1>";
        ?> 
        <form>
            <table>
                <tr> 
                    <td> <p> User Name: </p> </td>
                    <td> <input type= "text"/> </td>
                </tr>
                <tr>
                    <td> <p> Password: </p></td>
                    <td> <input type ="password"/> </td>
                </tr>
                <tr>
                    <td> <input type = "submit"/> </td>
                </tr>
            </table>
        </form>
    <?php
    echo "<h1 style = 'color: red'>Hello World</h1>";
    $text1 = "Hello php";
    $text2 = "Web Tech";
    echo "<h1> php Initiated $text1 </h1>";
    ?>
    <?php
    // $variable1= 10.5;
    // $variable2= 20;
    // echo $variable1 + $variable2;
    // $cars = array("WebTech", "C#", "OOP1");
    // var_dump($cars);
    $car = array("Course"=>"WebTech", "Section"=> "C", "ClassTime"=> "10.20-12.20");
    echo $car["Section"];
    ?> 


    </body>
</html>