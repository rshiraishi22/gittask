<?php

$fileName = "contact.csv";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $type = $_SESSION['type'];
    $text = $_SESSION['message'];
    $errors = array();

    $data = $name . "," . $email . "," . $type . "," . $text . "\n";

var_dump('complete.php');

    $fp = fopen($fileName, "a");
    fwrite($fp, $data);
    fclose($fp);
    $_SESSION = array();
    //セッションを破棄したい場合は空の配列を入れる
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
</head>
<body>
    <h1>完了画面</h1>

    <div style="border-style: solid ; border-width: 1px; padding:10px 50px 50px 10px">
          <h2>お問い合わせ</h2>
              お問い合わせありがとうございました。
    </div>
</body>
</html>
