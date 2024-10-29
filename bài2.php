<!DOCTYPE html>
<html>
<head>
    <title> Bài Tập Thực Hành php</title>
    <style>
        .center {
            text-align: center;
            margin: auto;
            width: 50%; 
            
        }
    </style>
</head>
<body>
    <div class=center style="font-family: 'Times New Roman', Times, serif;color: brown">
    <B style="font-size: 24px;">
        Bài Tập Thực Hành php
    </B>
    </div>
    <form method="post">
    <B>Số thứ nhất</B> <label for="number1"></label>
        <input type="text" id="number1" name="number1" require placeholder="số thứ nhất"><br><br>

    <B>Số thứ hai</B>    <label for="number2"></label>
        <input type="text" id="number2" name="number2" require  placeholder="số thứ hai"><br><br>

    <B>kết quả:</B>   <label for="result"></label>
        <input type="text" id="result" name="result" readonly><br><br>

        <input type="submit" name="submit" value="Tính toán">
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = floatval($_POST['number1']);
        $number2 = floatval($_POST['number2']);

        $min = min($number1, $number2);
        $max = max($number1, $number2);

        $result = [];
        for ($i = ceil($min); $i < $max; $i++) {
            if ($i > $min && $i < $max) {
                $result[] = $i;
            }
        }

        echo "<script>document.getElementById('result').value = '" . implode(", ", $result) . "';</script>";
    }
    ?>
</body>
</html>