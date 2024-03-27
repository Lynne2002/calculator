<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
    function calculator($num1, $operator, $num2){
        switch($operator){
            case "+":
                return $num1 + $num2;
            case "-":
                return $num1 - $num2;
            case "*":
                return $num1 * $num2;
            case "/":
                return $num1 / $num2;
            case "%":
                return $num1 % $num2;
    }
}
function displayName($name){
    echo "Welcome $name";
}

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        displayName($name);
        $result = calculator($num1, $operator, $num2);
        echo"<h3>Calculator</h3>";
        echo "Result: $result";
    }
    ?>

    <form method="post">
        <label for="name">Please enter your name</label>
        <input type="text" name="name">
        <br><br>
        <label for="name">Enter first num</label>
        <input type="text" name="num1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
        <label for="name">Enter second num</label>
        <input type="text" name="num2">
        <input type="submit" name='submit' value="Calculate">
    </form>
   
    
    
</body>
</html>

