<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>概要</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <script type="text/javascript" src="keiba.js"></script>
</head>
<body>
  <button onclick="location.href='main.php'" class="title">GallopGenius</button>
  <div class="ue">
    <button onclick="location.href='yosou.php'" class="botan">AI予想</button>
    <button onclick="location.href='shutuba.php'" class="botan">出馬表</button>
    <button onclick="location.href='kaishu.php'" class="botan">AI回収率</button>
    <button onclick="location.href='baken.php'" class="botan">馬券の種類</button>
  </div>
  <div class="sita">
    <button onclick="location.href='nakayosou.php'" class="botan">中の人予想</button>
    <button onclick="location.href='calendaer.php'" class="botan">レース<br>カレンダー</button>
    <button class="botan">概要</button>
    <button onclick="location.href='mame.php'" class="botan">競馬の豆知識</button>
  </div>
  <div>
    <h2>GallopGeniusについて</h2>
    <p class="nakami">GallopGeniusは中央競馬において一着になる馬を予想するAIです</p>
      <p class="nakami">このサービスの対象者は以下の通りです</p>
      <ul class="koumoku">
        <li>競馬をやってみたい</li>
        <li>競馬を始めたけれど何を買えばいいかわからない</li>
        <li>予想をみたけど流しとかマルチとかよくわからない単語が多くてどう買えばいいかわからない</li>
    </ul>
  </div>
  <div class="setumei">
    <p>GallopGeniusが推奨する買い目は<span class="red">単勝</span>のみ！</p>
    <p><span class="tan">単</span>勝とは一着になる馬を当てる馬券です</p>
    <p>この場合は11番の馬が1着なので11番の単勝を買っていれば当たりです</p>
    <img src="img/keiba3.png" alt="">
  </div>
</body>
</html>