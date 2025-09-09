<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Calculator</title>

<body>
    <h1>PHP Calculator</h1>
    <form method="post" action="calculate.php">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" id="number1" required>
        <br><br>
        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br><br>
        <label for="number2">Number 2:</label>
        <input type="number" name="number2" id="number2" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>
</body>

</html>