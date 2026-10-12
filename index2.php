<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>დავალება </title>
</head>
<body>

    <h2>ნიშნების უწყისის ფორმა</h2>

    <form method="POST" action="">
        <label>სტუდენტის სახელი:</label><br>
        <input type="text" name="student_firstname" required><br><br>

        <label>სტუდენტის გვარი:</label><br>
        <input type="text" name="student_lastname" required><br><br>

        <label>კურსი:</label><br>
        <input type="number" name="course" required><br><br>

        <label>სემესტრი:</label><br>
        <input type="number" name="semester" required><br><br>

        <label>სასწავლო კურსი (საგანი):</label><br>
        <input type="text" name="subject" required><br><br>

        <label>მიღებული ნიშანი (ქულა 0-100):</label><br>
        <input type="number" name="score" min="0" max="100" required><br><br>

        <label>ლექტორის სახელი და გვარი:</label><br>
        <input type="text" name="lecturer" required><br><br>

        <label>დეკანის სახელი და გვარი:</label><br>
        <input type="text" name="dean" required><br><br>

        <button type="submit" name="submit">გაგზავნა</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $student_firstname = $_POST['student_firstname'];
        $student_lastname = $_POST['student_lastname'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $subject = $_POST['subject'];
        $score = $_POST['score'];
        $lecturer = $_POST['lecturer'];
        $dean = $_POST['dean'];

        
        $grade = "";
        $description = "";

        if ($score >= 91 && $score <= 100) {
            $grade = "A";
            $description = "ფრიადი";
        } elseif ($score >= 81 && $score <= 90) {
            $grade = "B";
            $description = "ძალიან კარგი";
        } elseif ($score >= 71 && $score <= 80) {
            $grade = "C";
            $description = "კარგი";
        } elseif ($score >= 61 && $score <= 70) {
            $grade = "D";
            $description = "დამაკმაყოფილებელი";
        } elseif ($score >= 51 && $score <= 60) {
            $grade = "E";
            $description = "საკმარისი";
        } else {
            $grade = "F/FX";
            $description = "არასაკმარისი / ჩაჭრილი";
        }

        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ინფორმაცია</th><th>მნიშვნელობა</th></tr>";
        echo "<tr><td>სტუდენტი</td><td>" . $student_firstname . " " . $student_lastname . "</td></tr>";
        echo "<tr><td>კურსი / სემესტრი</td><td>" . $course . " კურსი, " . $semester . " სემესტრი</td></tr>";
        echo "<tr><td>სასწავლო კურსი</td><td>" . $subject . "</td></tr>";
        echo "<tr><td>ქულა</td><td>" . $score . "</td></tr>";
        echo "<tr><td>შეფასება</td><td>" . $grade . " (" . $description . ")</td></tr>";
        echo "<tr><td>ლექტორი</td><td>" . $lecturer . "</td></tr>";
        echo "<tr><td>დეკანი</td><td>" . $dean . "</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>