<?php

// 都道府県コード => 都道府県名
// 関東地方のみ
$prefectures = array(
  7  => "選択してください",
  8  => "茨城県",
  9  => "栃木県",
  10 => "群馬県",
  11 => "埼玉県",
  12 => "千葉県",
  13 => "東京都",
  14 => "神奈川県",
);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>関東地方の観光スポット検索</title>
  <!--
    ここでは CSS フレームワークである Twitter Bootstrap を読み込んでいます。
    この CSS を使用することで見た目が整ったページを簡単に作る事が出来ます。
    「twitter bootstrap」などで検索すると様々な情報が出てくるので調べてみてください。
    (実務でも非常によく使用されてます)
    公式サイト: http://getbootstrap.com/

    注意: 以下のような "https://" から始まる URL で CSS を読み込む場合、インターネットに接続出来る環境でないと CSS を読み込めないので注意してください。
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style>
    /*
      この課題では CSS を変更する必要はありません。
      デザインは支給されたものとして考えてください。
    */
    h1 {
      margin: 0 0 30px 0;
      padding: 20px 30px;
      border-bottom: 1px solid #ccc;
      background-color: #f8f8f8;
    }
    footer {
      text-align:center;
    }
    .search-result {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <h1>関東地方の観光スポット検索</h1>
  <div class="container">
    <form class="form-inline" action="inquiry.php" method="post">
      <div class="form-group">
        <select name="pref" class="form-control"><?php foreach($prefectures as $number => $prefecture){
      echo '<option value='. $number . '>' . $prefecture . '</option>';}?>

        </select>
      </div>

      <button class="btn btn-primary btn-sm" type="submit" > 検 索 </button>
    </form>

  </div>
  <hr>
  <footer>&copy; 観光スポット検索協会 </footer>
</body>
</html>
