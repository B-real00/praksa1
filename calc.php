<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
   
</head>
<body>
    <form action='calc.php' method='GET'>
    <div class="calc">
        <table>
            <tr>
                <td>Number 1</td>
                <td><input type="number" name="num1" value="" required="required" placeholder="Number 1"></td>
            </tr>
            <tr>
                <td>Number 2</td>
                <td><input type ="number" name="num2" value ="" required="required" placeholder="Number 1"></td>
            </tr>
            <tr>
                <td>
                <select name="operator">
                <option value = "none">None</option>
                    <option value = "addition">+</option>
                    <option value = "subtraction">-</option>
                    <option value = "division">/</option>
                    <option value = "multiplication">*</option>
                    <option value = "exponential">exp</option>
                </select>
                </td>
                <td><input type = "submit" name = "submit" value = "="></td>
            </tr> 
        </table>
    </form> 
    </div>
    
    
    <?php
        
        $ans='';
        if (isset($_GET['submit'])){
            $n1 = $_GET['num1'];
            $n2 = $_GET['num2'];
            $op = $_GET['operator'];

            
            switch($op){
                case "none":
                    $ans = "Error";
                    break;
                case "addition":
                    $ans = $n1 + $n2;
                    break;
                case "subtraction":
                    $ans =  $n1 - $n2;
                    break;
                case "multiplication":
                    $ans =  $n1 * $n2;
                    break;
                case "division":
                    $ans =  $n1 / $n2;
                    break;
                case "exponential":
                    $ans = pow($n1, $n2);
            }
        }
        
        echo $ans;
        
    ?>
</body>
</html>