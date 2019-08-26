<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        .calc, .result {
            width: 330px;
            background: #bdbcbb;
            margin: 100px auto;
            border-radius: 5px;
            padding: 10px 20px 50px 20px;
        }
        .input1 {
            font-size: 17px;
            width: 290px;
            margin: 5px;
            border-radius: 5px;
            padding: 10px;   
        }
        .options {
            font-size: 19px;
            width: 150px;
            margin: 5px;
            border-radius: 5px;
            padding: 9px;
        }
        .submit1 {
            background: #0070c9;
            border-radius: 5px;
            color: #fafafa;
            border: none;
            font-size: 17px;
            width: 150px;
            height: 30px;
        }
        .name {
            text-align: center;
            color: #fafafa;
        }
    </style>   
</head>
<body>
    <div class="calc">
        <form action='calc.php' method='GET'>
        <h2 class="name">CALCULATOR</h2>
            <table>
                <tr>
                    <td colspan="2"><input class="input1" type="number" name="num1" value="" required="required" placeholder="Number 1"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="input1" type ="number" name="num2" value ="" required="required" placeholder="Number 1"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    <select class="options" name="operator">
                        <option >None</option>
                        <option >+</option>
                        <option >-</option>
                        <option >/</option>
                        <option >*</option>
                        <option >exp</option>
                    </select>
                    </td>
                    <td><input class="submit1" type = "submit" name = "submit" value = "="></td>
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
                case "None":
                    $ans = "Error";
                    break;
                case "+":
                    $ans = $n1 + $n2;
                    break;
                case "-":
                    $ans =  $n1 - $n2;
                    break;
                case "*":
                    $ans =  $n1 * $n2;
                    break;
                case "/":
                    $ans =  $n1 / $n2;
                    break;
                case "exp":
                    $ans = pow($n1, $n2);
            }
        }  
    ?>
    <div class="result">
    <tr>
        <td colspan="2">
        <?php if (isset($_GET['submit'])){ ?>  
        <input  type='text' value = "<?php echo $ans ?>" class="input1">
        <?php } else {?>
        <input type='text' value ="0" class="input1">
        <?php }?>
        </td>
        <td></td>
    </tr>
    </div>
</body>
</html>