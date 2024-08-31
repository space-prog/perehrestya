<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>Перехрестя</title>
</head>
<body>
    <div class="flex">
        <div class="wrapper">
            <form action="index.php" method="post">
                <p>Оберіть що показує регулювальник</p>
                <div class="block">
                    <div class="select-wrapper">
                        <label for="test" id="arrow">
                            <select name="select" id="test">
                                <option value="1">Регулювальник показує жезлом вгору</option>
                                <option value="2">Регулювальник повернутий вправо та жезлом показує вперед</option>
                                <option value="3">Регулювальник повернутий вліво та жезлом показує вперед</option>
                                <option value="4">Регулювальник повернутий грудьми</option>
                                <option value="5">Регулювальник показує жезлом на вас</option>
                                <option value="6">Регулювальник повернутий ліворуч або праворуч</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="block"><button type="submit">Що потрібно робити?</button></div>
            </form>
<?php
if($_POST) {
    $select = $_POST["select"];
    if($select==1) {
        echo "<p>Увага! Зараз зміниться головне положення на перехресті</p>";
        echo '<img src="val1.jpg" alt="">';
    } else if($select==2 || $select==4) {
        echo "<p>Стій! Рух заборонено у всі сторони</p>";
        if($select==2) {
            echo '<img src="val2.jpg" alt="">';
        } else {
            echo '<img src="val4.jpg" alt="">';
        }
    } else if($select==3) {
        echo "<p>Ура! Рух дозволено у всі сторони</p>";
        echo '<img src="val3.jpg" alt="">';
    } else if($select==5) {
        echo "<p>Дозволено рух тільки на право!</p>";
        echo '<img src="val5.jpg" alt="">';
    } else {
        echo "<p>Дозволено руз вперед та направо</p>";
        echo '<img src="val6.jpg" alt="">';
    }
}
?>
        </div>
    </div>
</body>
</html>