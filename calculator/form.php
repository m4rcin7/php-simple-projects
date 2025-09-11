<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #1e1e2f;
        color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .calculator {
        background: #2c2c3e;
        padding: 20px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        width: 300px;
        text-align: center;
    }

    h1 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #00d4ff;
    }

    label {
        display: block;
        text-align: left;
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: none;
        outline: none;
        font-size: 1rem;
    }

    input {
        background: #3a3a50;
        color: #f5f5f5;
    }

    select {
        background: #3a3a50;
        color: #f5f5f5;
        cursor: pointer;
    }

    button {
        background: #00d4ff;
        color: #1e1e2f;
        font-size: 1rem;
        font-weight: bold;
        padding: 10px;
        width: 100%;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: #00aacc;
    }
</style>

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