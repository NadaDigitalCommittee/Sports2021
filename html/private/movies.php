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
  <meta name="description" content="相撲特集">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="../../css/movies.css">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/nav.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../vendor/animsition.min.css">
  <link rel="stylesheet" href="../../vendor/remodal.css">
  <link rel="stylesheet" href="../../vendor/remodal-default-theme.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../../vendor/marker-animation.js"></script>
  <script src="../../vendor/aimsition.js"></script>
  <script src="../../vendor/remodal.min.js"></script>

  <script src="../../scripts/main.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <link rel="icon" href="../../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../../img/logo-black.png">
  <title>動画配信</title>
</head>

<body class="animsition">
  <div id="privatenav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="../toppage.html" class="animsition-link"><img class="logo" src="../../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>動</span>画配信</h1>
      <h2 class="komidashi"><span>応</span>援合戦</h2>
      <div class="maintable">
        <dl class="lists">
          <dt>応援合戦一組</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://www.youtube-nocookie.com/embed/nzFM4l0eKSE?modestbranding=1" class="movie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <dt>応援合戦二組</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://www.youtube-nocookie.com/embed/E4DFUrGUkgQ?modestbranding=1" class="movie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <dt>応援合戦三組</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://www.youtube-nocookie.com/embed/Q48ClNWfE4g?modestbranding=1" class="movie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <dt>応援合戦四組</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://www.youtube-nocookie.com/embed/RjKafFrVM7g?modestbranding=1" class="movie" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>
  <footer>
    <p>92nd Nada Sports Festival</p>
    <small>Copyright&copy;2021 Digital Division</small>
  </footer>
</body>

</html>