<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <form method="post">
            <label>First operand</label>
            <input type="text" name="firstOperand"></br>
            <label>Operator</label>
            <select name="operator" id="operator">
                <option value="Add">Add</option>
                <option value="Minus">Minus</option>
                <option value="Multi">Multi</option>
                <option value="Devide">Devide</option>
            </select><br>
            <label>Second operand</label>
            <input type="text" name="secondOperand"></br>
            <button type="submit">Calculator</button>
    </fieldset>
    </form>
    <h1>Result</h1>
    <?php
    class Calculator
    {
        function calculate($first, $second, $operator)
        {
            if ($operator == "Devide" && $second == 0) {
                throw new Exception("Devided by zero!");
            } else {
                if ($operator == "Add") {
                    echo $first . " + " . $second . " = " . ($first + $second);
                }
                if ($operator == "Minus") {
                    echo $first . " - " . $second . " = " . ($first - $second);
                }
                if ($operator == "Multi") {
                    echo $first . " x " . $second . " = " . ($first * $second);
                }
                if ($operator == "Devided") {
                    echo $first . " / " . $second . " = " . ($first / $second);
                }
            }
        }
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $first = $_POST["firstOperand"];
        $second = $_POST["secondOperand"];
        $operator = $_POST["operator"];

        try {
            $Quang = new Calculator;
            $Quang->calculate($first, $second, $operator);
        } catch (Exception $e) {
            echo "Message: " . $e->getMessage();
        }
    }
    ?>
</body>

</html>