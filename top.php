<!DOCTYPE html>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>掲示板</title>
  </head>
  <body>
    <h1>レストラン検索ページ</h1>
    <section>
      <form action="result.php" method="post">
	  緯度: <input type="text" name="lat" value=""><br>
      経度: <input type="text" name="lon" value=""><br>
      範囲
      <select name = "range">
      <option value="1">300m以内</option>
      <option value="2">500m以内</option>
      <option value="3">1km以内</option>
      <option value="4">2km以内</option>
      <option value="5">3km以内</option>
      <input type="submit" value="送信">
      </form>>
  </section>
  </body>
</html>