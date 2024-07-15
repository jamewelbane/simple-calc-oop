<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Simple Calculator using OOP</h1>
        <form action="includes/calc.inc.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="num1">Enter a number</label>
                <input type="number" name="num1" class="form-control" id="num1" placeholder="Enter a number" required>
            </div>
            <div class="form-group">
                <label for="operator">Operator</label>
                <select name="operator" class="form-control" id="operator" required>
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="div">/</option>
                    <option value="mul">*</option>
                </select>
            </div>
            <div class="form-group">
                <label for="num2">Enter a number</label>
                <input type="number" name="num2" class="form-control" id="num2" placeholder="Enter a number" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
