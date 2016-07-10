<?php

session_start();

// var_dump($_SESSION);

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$type = $_SESSION['type'];
$text = $_SESSION['message'];

//$_SESSIONはブラウザを開いている間有効

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>確認画面</h1>

      <table table border="1" rules="all" bordercolor="#000000">
        <tr>
          <td bgcolor="#EEEEEE">お名前</td>
          <td><?php echo $name ; ?><br>
          </td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">メールアドレス</td>
          <td><?php echo $email ; ?><br>
          </td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">種類</td>
          <td><?php echo $type ; ?></td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">お問い合わせ内容</td>
          <td><?php echo $text ; ?><br>
          </td>
        </tr>
      </table>

      <form action="index.php" method="get" style="display:inline">
        <span style="margin-left:100px"><input type="submit" value="戻る" style="color:#FFFFFF; background-color:#C0C0C0" ></span></form>

      <form action="complete.php" method="post" style="display:inline">
        <span style="margin-left:20px"><input type="submit" value="送信する" style="color:#FFFFFF; background-color:#0066FF"></span>
      </form>
</body>
</html>
