<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>დავალება 3</title>
</head>
<body>

    <h2>სტუდენტის შემოწმების ტესტი</h2>

    <form method="POST" action="">
        
        
        <p><b>1. რას ნიშნავს აბრევიატურა PHP?</b></p>
        <input type="radio" name="q1" value="a"> a) Private Home Page<br>
        <input type="radio" name="q1" value="b"> b) Personal Hypertext Processor<br>
        <input type="radio" name="q1" value="c"> c) PHP: Hypertext Preprocessor<br>
        <input type="radio" name="q1" value="d"> d) Predefined HTML Program<br><br>

        
        <p><b>2. რომელი სიმბოლოთი იწყება ცვლადი PHP-ში?</b></p>
        <input type="radio" name="q2" value="a"> a) &<br>
        <input type="radio" name="q2" value="b"> b) $<br>
        <input type="radio" name="q2" value="c"> c) #<br>
        <input type="radio" name="q2" value="d"> d) @<br><br>

        
        <p><b>3. რომელი მეთოდი გამოიყენება მონაცემების ფარულად გასაგზავნად?</b></p>
        <input type="radio" name="q3" value="a"> a) GET<br>
        <input type="radio" name="q3" value="b"> b) POST<br>
        <input type="radio" name="q3" value="c"> c) REQUEST<br>
        <input type="radio" name="q3" value="d"> d) SEND<br><br>

        
        <p><b>4. რომელ წელს შეიქმნა PHP? (ჩაწერეთ წელი):</b></p>
        <input type="text" name="q4"><br><br>

        
        <p><b>5. რა ფუნქცია გამოიყენება PHP-ში ტექსტის გამოსატანად?</b></p>
        <input type="text" name="q5"><br><br>

        <button type="submit" name="submit">ტესტის დასრულება</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $score = 0;

        
        if (isset($_POST['q1']) && $_POST['q1'] == 'c') {
            $score++;
        }
        if (isset($_POST['q2']) && $_POST['q2'] == 'b') {
            $score++;
        }
        if (isset($_POST['q3']) && $_POST['q3'] == 'b') {
            $score++;
        }
        if (isset($_POST['q4']) && trim($_POST['q4']) == '1994') {
            $score++;
        }
        if (isset($_POST['q5']) && strtolower(trim($_POST['q5'])) == 'echo') {
            $score++;
        }

        echo "<h3>შედეგი:</h3>";
        echo "<p><b>სწორი პასუხების რაოდენობა: " . $score . "/5</b></p>";
    }
    ?>

</body>
</html>