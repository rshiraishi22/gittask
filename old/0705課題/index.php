<?php
require_once('functions.php');
require_once('config.php');

session_start();

var_dump($_SESSION);
// $name = 1;
// $a = $name;
//使われていない変数を使うとNotice(Undefined)のエラーが出るので
//定義が必要


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $text = $_POST['message'];
  $errors = array();

  if ($name == '')
  {
    $errors['name'] = 'お名前を入力してください。';
  }

  if ($email == '')
  {
    $errors['email'] = 'メールアドレスを入力してください。';
  }

  if ($text == '')
  {
    $errors['message'] = 'お問い合わせ内容を入力してください。';
  }

// var_dump($errors);

  if (empty($errors)) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['type'] = $type;
    $_SESSION['message'] = $text;

    header('Location: confirm.php');
    exit;
  }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
</head>
<body>
    <h1>お問い合わせ</h1>
    <form action="" method="post">
      <table table border="1" rules="all" bordercolor="#000000">
        <tr>
          <td bgcolor="#EEEEEE">お名前 <font color="#FF0000">(必須)</font></td>
          <td><input type="text" name="name" size="40" value="<?php echo $_SESSION['name']?>"><br>
              <font color="#ff0000"><?php if ($errors['name']) : ?>
                <?php echo h($errors['name']) ?>
                <?php endif ?>
              </font>
          </td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">メールアドレス <font color="#FF0000">(必須)</font></td>
          <td><input type="text" name="email" size="40" value="<?php echo $_SESSION['email']?>"><br>
              <font color="#ff0000"><?php if ($errors['email']) : ?>
                <?php echo h($errors['email']) ?>
                <?php endif ?>
            </font>
          </td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">種類 <font color="#FF0000">(必須)</font></td>
          <td><select name="type">
              <option value="商用について" <?php if ($_SESSION['type'] == "商用について") : ?>
                <?php echo 'selected="selected"' ?>
                <?php endif ?> >商用について</option>
              <option value="お支払いについて" <?php if ($_SESSION['type'] == "お支払いについて") : ?>
                <?php echo 'selected="selected"' ?>
                <?php endif ?> >お支払いについて</option>
              <option value="当サイトについて" <?php if ($_SESSION['type'] == "当サイトについて") : ?>
                <?php echo 'selected="selected"' ?>
                <?php endif ?> >当サイトについて</option>
              <option value="その他" <?php if ($_SESSION['type'] == "その他") : ?>
                <?php echo 'selected="selected"' ?>
                <?php endif ?> >その他</option>
              </select><br></td>
        </tr>
        <tr>
          <td bgcolor="#EEEEEE">お問い合わせ内容 <font color="#FF0000">(必須)</font></td>
          <td><textarea name="message" cols="40" rows="10"><?php echo $_SESSION['message'] ?></textarea><br>
              <font color="#ff0000"><?php if ($errors['text']) : ?>
              <?php echo h($errors['text']) ?>
              <?php endif ?>
              </font>
          </td>
        </tr>
      </table>

        <span style="margin-left:200px"><input type="submit" value="確認画面へ" style="color:#FFFFFF; background-color:#0066FF"></span>
    </form>
</body>
</html>