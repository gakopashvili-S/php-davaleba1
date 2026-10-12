<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>დავალება 1 </title>
</head>
<body>

    <h2>სახელფასო უწყისის ფორმა</h2>

    <form method="GET" action="">
        <label>სახელი:</label><br>
        <input type="text" name="firstname" required><br><br>

        <label>გვარი:</label><br>
        <input type="text" name="lastname" required><br><br>

        <label>თანამდებობა:</label><br>
        <input type="text" name="position" required><br><br>

        <label>ხელფასი:</label><br>
        <input type="number" name="salary" required><br><br>

        <label>საშემოსავლო გადასახადი (%):</label><br>
        <input type="number" name="tax_rate" value="20"><br><br>

        <button type="submit" name="submit">გაგზავნა</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['submit'])) {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $position = $_GET['position'];
        $salary = $_GET['salary'];
        
       
        $tax_rate = !empty($_GET['tax_rate']) ? $_GET['tax_rate'] : 20;

        $tax_amount = ($salary * $tax_rate) / 100;
        $net_salary = $salary - $tax_amount;

        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ველი</th><th>მნიშვნელობა</th></tr>";
        echo "<tr><td>სახელი და გვარი</td><td>" . $firstname . " " . $lastname . "</td></tr>";
        echo "<tr><td>თანამდებობა</td><td>" . $position . "</td></tr>";
        echo "<tr><td>დარიცხული ხელფასი</td><td>" . $salary . " ₾</td></tr>";
        echo "<tr><td>საშემოსავლო (%)</td><td>" . $tax_rate . "%</td></tr>";
        echo "<tr><td>გადასახადი (თანხა)</td><td>" . $tax_amount . " ₾</td></tr>";
        echo "<tr><td>ხელზე ასაღები ხელფასი</td><td>" . $net_salary . " ₾</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>