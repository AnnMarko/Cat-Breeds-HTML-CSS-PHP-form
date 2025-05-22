<?php
if (isset($_POST["firstname"]) && isset($_POST["breed"]) && isset($_POST["traits"])) {
    $name = htmlentities($_POST["firstname"]);
    $breed = htmlentities($_POST["breed"]);
    $has_cat = isset($_POST["has_cat"]) ? "так" : "ні";
    $traits = $_POST["traits"];
    $comment = isset($_POST["comment"]) ? htmlentities($_POST["comment"]) : "";
    echo "<!DOCTYPE html>
<html lang='uk'>
<head>
  <meta charset='UTF-8'>
  <title>Результат анкети</title>
  <style>
    body {
      font-family: Georgia, serif;
      background-color: #fdf8f4;
      color: #3e2e1e;
      padding: 30px;
    }
    .result-box {
      background-color: #fffaf6;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px #d8b29a70;
      max-width: 600px;
      margin: 40px auto;
    }
    h2 {
      color: #7e3f20;
      margin-bottom: 20px;
      text-align: center;
    }
    p {
      margin-bottom: 12px;
      font-size: 16px;
    }
    ul {
      margin: 10px 0 20px 20px;
    }
    i {
      display: block;
      background-color: #f7e0d4;
      padding: 10px;
      border-radius: 10px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class='result-box'>
    <h2>😺 Дякуємо за участь у опитуванні!</h2>
    <p><strong>Ім'я:</strong> $name</p>
    <p><strong>Улюблена порода:</strong> $breed</p>
    <p><strong>Чи маєш кота:</strong> $has_cat</p>
    <p><strong>Улюблені риси котів:</strong></p>
    <ul>";
    foreach ($traits as $trait) {
        echo "<li>" . htmlentities($trait) . "</li>";
    }
    echo "</ul>";
    if ($comment !== "") {
        echo "<p><strong>Коментар:</strong></p><i>$comment</i>";
    }
    echo "</div></body></html>";
} else {
    echo "Будь ласка, заповніть усі обов’язкові поля.";
}
?>