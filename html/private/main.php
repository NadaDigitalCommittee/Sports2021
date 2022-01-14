<?php
if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}
if($_SESSION['loginauth']!='true'){
  header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="生徒専用コンテンツ">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="../../css/articles.css">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/nav.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../vendor/animsition.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../vendor/marker-animation.js"></script>
  <script src="../../vendor/aimsition.js"></script>
  <script src="../../scripts/main.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
    
  <link rel="icon" href="../../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/logo-black.png">
  <title>記事一覧</title>
</head>

<body class="animsition">
  <div id="privatenav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="../toppage.html" class="animsition-link"><img class="logo" src="../../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>生</span>徒用ページ</h1>
      <a href="rules.php">
        <article class="kizi">
          <h2><span>競</span>技規則一覧</h2>
          <div class="detail">
            <p>2021年度灘校体育祭「颯」の全競技の概要やルール、出場者などを確認できます。</p>
          </div>
        </article>
      </a>
      <a href="sumo-movie.php">
        <article class="kizi">
          <h2><span>相</span>撲動画配信</h2>
          <div class="detail">
            <p>相撲の全試合の動画を閲覧できます。</p>
          </div>
        </article>
      </a>
      <a href="movies.php">
        <article class="kizi">
          <h2><span>動</span>画配信</h2>
          <div class="detail">
            <p>2021年度灘校体育祭当日の動画が閲覧できます。</p>
          </div>
        </article>
      </a>
    </div>
  </div>
  <footer>
    <p>92nd Nada Sports Festival</p>
    <small>Copyright&copy;2021 Digital Division</small>
  </footer>
</body>

</html>