<?php
//ニュースの機能をつける
//データはMySQLに保存
//DBも自分で作成
//日付、タイトル、本文(リンク先)まで
//環境回りはログインシステムのものと同じ

//リンク先のイメージ
//青帯にタイトル
//下に本文、日付

//Xドメインを使う

echo 'fello';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>シンプル系ビジネスサイト向け 無料ホームページテンプレート tp_biz22</title>
<meta name="copyright" content="Template Party" />
<meta name="description" content="ここにサイト説明を入れます" />
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="container">

<div id="header">
<h1><a href="index.html">h1テキスト入力場所です。念入りに考えてワードを盛り込みましょう。</a></h1>
<p id="logo"><a href="index.html"><img src="images/logo.gif" width="248" height="30" alt="" /></a></p>
</div>
<!--/header-->

<ul id="menu">
<li id="current"><a href="index.html">ホーム<br /><span>HOME</span></a></li>
<li><a href="company.html">会社概要<br /><span>COMPANY</span></a></li>
<li><a href="service.html">サービス紹介<br /><span>SERVICE</span></a></li>
<li><a href="recruit.html">採用情報<br /><span>RECRUIT</span></a></li>
<li><a href="link.html">リンク<br /><span>LINK</span></a></li>
<li class="last"><a href="contact.html">お問い合わせ<br /><span>CONTACT</span></a></li>
</ul>
<!--/menu-->

<div id="mainimg">
<img class="slide_file" src="images/1.jpg" title="index.html">
<img class="slide_file" src="images/2.jpg" title="index.html">
<img class="slide_file" src="images/3.jpg" title="index.html">
<input type="hidden" id="slide_loop" value="0">
<a href="index.html" id="slide_link">
<img id="slide_image" src="images/1.jpg" alt="" width="966" height="290" />
<img id="slide_image2" src="images/1.jpg" alt="" width="966" height="290" /></a>
</div>
<!--/mainimg-->

<div id="contents">

<div id="main">

<h2>無料テンプレートのご利用前に必ずお読み下さい</h2>
<p>このテンプレートは<a href="http://template-party.com/">無料ホームページテンプレート配布サイトのTemplate Party</a>が配布している『<a href="http://template-party.com/temp_biz.html#biz22">シンプル系ビジネスサイト向け 無料ホームページテンプレート tp_tp_biz22</a>』です。<br />
必ず<a href="http://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。不明な点があれば<a href="http://template-party.com/faq.html">ＦＡＱコーナー</a>をご一読下さい。</p>
<p><span class="color1">■<strong>HP最下部の著作表示「Web Design:Template-Party」は無断で削除しないで下さい</strong></span><br />
わざと見えなく加工する事も禁止します。お守りいただけない場合、テンプレートの利用を中止し、違反金を請求いたします。</p>
<p><span class="color1">■<strong>どうしても下部の著作を外したい場合は</strong></span><br />
<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。おまけ特典として、制作時Photoshopファイルももらえます。</p>

<h2>更新情報・お知らせ</h2>
<div class="new mb1em">
<dl>
<dt>2013/00/00</dt>
<dd><a href="company.html#about">当テンプレートの詳しい使い方はこちらをご覧下さい。</a><img src="images/icon_new.gif" alt="NEW" width="30" height="11" /></dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル<img src="images/icon_up.gif" alt="UP" width="30" height="11" /></dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
<dl>
<dt>2013/00/00</dt>
<dd>ホームページリニューアル</dd>
</dl>
</div>
<!--/new-->

</div>
<!--/main-->

<div id="sub">

<h3>SUB MENU</h3>

<ul class="submenu">
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
</ul>

<h3>この見出しは</h3>
<p>h3タグで囲むと出ます。</p>

<h3>この下に画像を置く場合</h3>
<p>段落タグ内なら幅210pxまで。段落タグ外なら幅220pxまで。</p>

<div class="box1">
<p>このボックスは<br />
&lt;div class=&quot;box&quot;&gt;<br />
で出ます。ここに画像を置く場合、幅198pxまで。</p>
</div>
<!--/box-->

<div class="box1">
<h3>SUB MENU</h3>
<ul class="submenu">
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
</ul>
<p>このようにボックス内にh3タグやサブメニューを置く事も可能です。</p>
</div>
<!--/box-->

</div>
<!--/sub-->

<div id="footer">
Copyright&copy; 2013 <a href="index.html">シンプル系ビジネスサイト向け 無料ホームページテンプレート tp_biz22</a> All Rights Reserved.<br />
<span class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></span>
</div>
<!--/footer-->

</div>
<!--/contents-->

</div>
<!--/container-->

<script type="text/javascript" src="js/slide_simple_pack.js"></script>
</body>
</html>
