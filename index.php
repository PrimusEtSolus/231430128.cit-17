<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav a {
            color: white;
            margin: 5px 10px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }

        h2, h3 {
            color: #333;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .exercise {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }

        .exercise h3 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"],
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Responsive nav and layout */
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 8px 0;
            }
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to PHP Exercises</h1>
    <p>Explore various PHP exercises and learn coding concepts</p>
</header>

<nav>
    <a href="#exercise1">Exercise 1</a>
    <a href="#exercise2">Exercise 2</a>
    <a href="#exercise3">Exercise 3</a>
    <a href="#exercise7">Exercise 7</a>
    <a href="#exercise8">Exercise 8</a>
    <a href="#exercise9">Exercise 9</a>
    <a href="#exercise10">Exercise 10</a>
    <a href="#exercise11">Exercise 11</a>
    <a href="#exercise12">Exercise 12</a>
</nav>

<div class="container">

    <!-- Exercise 1 -->
    <div class="exercise" id="exercise1">
        <h3>1. Introduce Yourself</h3>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="form-group">
                <label for="color">Favorite Color:</label>
                <input type="text" name="color" id="color" required>
            </div>
            <input type="submit" name="submit_intro" value="Submit">
        </form>
        <?php
        if (isset($_POST['submit_intro'])) {
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars($_POST['age']);
            $color = htmlspecialchars($_POST['color']);
            echo "<p>Hi, I'm <strong>$name</strong>, I am <strong>$age</strong> years old, and my favorite color is <strong>$color</strong>.</p>";
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <div class="exercise" id="exercise2">
        <h3>2. Simple Math</h3>
        <form method="post">
            <div class="form-group">
                <label for="a">Number 1:</label>
                <input type="number" name="a" id="a" required>
            </div>
            <div class="form-group">
                <label for="b">Number 2:</label>
                <input type="number" name="b" id="b" required>
            </div>
            <input type="submit" name="submit_math" value="Calculate">
        </form>
        <?php
        if (isset($_POST['submit_math'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $quotient = ($b == 0) ? 'undefined (division by zero)' : ($a / $b);

            echo "<p>Sum: " . ($a + $b) . "<br>
            Difference: " . ($a - $b) . "<br>
            Product: " . ($a * $b) . "<br>
            Quotient: $quotient</p>";
        }
        ?>
    </div>

    <!-- Exercise 3 -->
    <div class="exercise" id="exercise3">
        <h3>3. Area and Perimeter of a Rectangle</h3>
        <form method="post">
            <div class="form-group">
                <label for="length">Length:</label>
                <input type="number" name="length" id="length" required>
            </div>
            <div class="form-group">
                <label for="width">Width:</label>
                <input type="number" name="width" id="width" required>
            </div>
            <input type="submit" name="submit_rect" value="Calculate">
        </form>
        <?php
        if (isset($_POST['submit_rect'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo "<p>Area: $area<br>Perimeter: $perimeter</p>";
        }
        ?>
    </div>

    <!-- Exercise 7 -->
    <div class="exercise" id="exercise7">
        <h3>7. Check Even or Odd</h3>
        <form method="post">
            <div class="form-group">
                <label for="number7">Enter a number:</label>
                <input type="number" name="number7" id="number7" required>
            </div>
            <input type="submit" name="submit_evenodd" value="Check">
        </form>
        <?php
        if (isset($_POST['submit_evenodd'])) {
            $num = $_POST['number7'];
            echo ($num % 2 == 0) ? "<p>$num is even.</p>" : "<p>$num is odd.</p>";
        }
        ?>
    </div>

    <!-- Exercise 8 -->
    <div class="exercise" id="exercise8">
        <h3>8. Largest of Three Numbers</h3>
        <form method="post">
            <div class="form-group"><label>Number 1:</label><input type="number" name="n1" required></div>
            <div class="form-group"><label>Number 2:</label><input type="number" name="n2" required></div>
            <div class="form-group"><label>Number 3:</label><input type="number" name="n3" required></div>
            <input type="submit" name="submit_largest" value="Find Largest">
        </form>
        <?php
        if (isset($_POST['submit_largest'])) {
            $largest = max($_POST['n1'], $_POST['n2'], $_POST['n3']);
            echo "<p>The largest number is $largest.</p>";
        }
        ?>
    </div>

    <!-- Exercise 9 -->
    <div class="exercise" id="exercise9">
        <h3>9. Simple Interest Calculator</h3>
        <form method="post">
            <div class="form-group"><label>Principal:</label><input type="number" name="principal" required></div>
            <div class="form-group"><label>Rate (%):</label><input type="number" name="rate" required></div>
            <div class="form-group"><label>Time (years):</label><input type="number" name="time" required></div>
            <input type="submit" name="submit_interest" value="Calculate Interest">
        </form>
        <?php
        if (isset($_POST['submit_interest'])) {
            $P = $_POST['principal'];
            $R = $_POST['rate'];
            $T = $_POST['time'];
            $interest = ($P * $R * $T) / 100;
            echo "<p>Simple Interest = $interest</p>";
        }
        ?>
    </div>

    <!-- Exercise 10 -->
    <div class="exercise" id="exercise10">
        <h3>10. Factorial of a Number</h3>
        <form method="post">
            <div class="form-group"><label>Enter a number:</label><input type="number" name="fact" min="0" required></div>
            <input type="submit" name="submit_fact" value="Calculate Factorial">
        </form>
        <?php
        if (isset($_POST['submit_fact'])) {
            $num = $_POST['fact'];
            $factorial = 1;
            for ($i = 2; $i <= $num; $i++) $factorial *= $i;
            echo "<p>Factorial of $num is $factorial</p>";
        }
        ?>
    </div>

    <!-- Exercise 11 -->
    <div class="exercise" id="exercise11">
        <h3>11. Prime Number Checker</h3>
        <form method="post">
            <div class="form-group"><label>Enter a number:</label><input type="number" name="prime" min="2" required></div>
            <input type="submit" name="submit_prime" value="Check Prime">
        </form>
        <?php
        if (isset($_POST['submit_prime'])) {
            $num = $_POST['prime'];
            $isPrime = true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) $isPrime = false;
            }
            echo "<p>" . ($isPrime ? "$num is a prime number." : "$num is not a prime number.") . "</p>";
        }
        ?>
    </div>

    <!-- Exercise 12 -->
    <div class="exercise" id="exercise12">
        <h3>12. Fibonacci Series</h3>
        <form method="post">
            <div class="form-group"><label>Number of terms:</label><input type="number" name="fibo" min="1" required></div>
            <input type="submit" name="submit_fibo" value="Generate Series">
        </form>
        <?php
        if (isset($_POST['submit_fibo'])) {
            $terms = $_POST['fibo'];
            $a = 0; $b = 1;
            echo "<p>Fibonacci Series: ";
            for ($i = 1; $i <= $terms; $i++) {
                echo $a;
                if ($i != $terms) echo ", ";
                $temp = $a + $b;
                $a = $b;
                $b = $temp;
            }
            echo "</p>";
        }
        ?>
    </div>

</div>

<footer>
    &copy; 2025 PHP Exercises. All rights reserved.
</footer>

</body>
</html>
