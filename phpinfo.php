<?php
phpinfo();
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
  </head>
  <body>
    <form action="./form.php" method="post">
      名前<input type="text" name="fullname" value=""><br>
      Eメール<input type="email" name="email" value=""><br>
      お問い合わせ内容<br>
      <textarea name="message" rows="8" cols="40"></textarea><br>
      <input type="submit" name="confirm" value="確認">
    </form>
  </body>
</html>
