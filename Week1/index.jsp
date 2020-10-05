<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <legend>Calculator</legend>
    <form action="calculator.php" method="get">
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
    </form>
</body>