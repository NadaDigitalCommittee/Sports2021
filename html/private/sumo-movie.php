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
  <link rel="stylesheet" href="../../css/sumo-movie.css">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/nav.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../vendor/animsition.min.css">
  <link rel="stylesheet" href="../../vendor/remodal.css">
  <link rel="stylesheet" href="../../vendor/remodal-default-theme.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../../vendor/marker-animation.js"></script>
  <script src="../../vendor/aimsition.js"></script>
  <script src="../../vendor/remodal.min.js"></script>

  <script src="../../scripts/main.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <link rel="icon" href="../../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../../img/logo-black.png">
  <title>相撲特集</title>
</head>

<body class="animsition">
  <div id="privatenav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="../toppage.html" class="animsition-link"><img class="logo" src="../../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>相</span>撲特集</h1>
      <h2 class="komidashi"><span>試</span>合動画</h2>
      <h3 class="warning">※動画を再生できない場合は動画の右上のポップアウトボタンを押すことで再生できます。</h3>
      <div class="maintable">
        <dl class="lists">
          <dt>予選第１日第１戦<br>マスノスケブラック対シェカ・ラ・シカ</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/12s3tEUwy0PKCiaokhCjd5-wczkqJ7H1M/preview" allow="autoplay" class="movie" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日第２戦<br>東海道対はれのそら明朝</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1fEramQJRNL3LiEtovX0KIVouz0DuKYV2/preview" class="movie" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日第３戦<br>田中丸対阿武丸</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1hml1tYnc-SkTlqRcMWMWQES3Wmk0GtiH/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日第４戦<br>大内柿対ちゃんこスター</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/12LweA1OfrdyVFCT1Ke_WDDKWfya-SHhm/preview" allow="autoplay" class="movie" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日第５戦<br>覇無多狼関対小倉トーストマン</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1KhYXwWK1VVB1zG3Un9O24GCQqB_b6sK_/preview" allow="autoplay" class="movie" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日６戦<br>ムバッペ対ウラガンキン亜種</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1bMNdtQ2qCUG8HbbtBojpObYBGy7cXtO2/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第１日第７戦<br>しぇからしか対シェカ・ラ・シカ</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1AHJhUOuipz4WXI5bchfAucrSDnRia8k0/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日第１戦<br>玄界灘対スーパーサイ安井</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://drive.google.com/file/d/1aAFEjKYeOYb0VHjcyELgwGy5KmpyvrAH/preview"　class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日第２戦<br>ミッキーマウス対金紗沙</dt>
          <div class="sub">
            <div class="movie-wrapper">
              <iframe src="https://drive.google.com/file/d/11LTRhJFFxqXIdOE8M8ykl6e2f8Nov47H/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日目第３戦<br>風吹けば名無し対勝男</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1nRli7CCtHCV-eR3HuWKmpeL49ztURg7b/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日目第４戦<br>松之山対ジンジンジンジンジンギスカン</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1MYkUbsYfFAPDZNjSWoCQRwuFyAp63NGj/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日目第５戦<br>猛虎ヴィヴィアンヌ対江原happiness</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1XquYbjW3dd_6j8T92TsTys9iSOcZOmZF/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
              </div>
          </div>
          <dt>予選第２日目第６戦<br>キャサリン対たけのこの山</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1pPHrlmi7xOiGoM6jT8RNHNBxRHVURu16/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
              </div>
          </div>
          <dt>予選第２日目第７戦<br>山山丸々対天才肌</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1UuIaBlAFJjOzbbpfu5v42Xx0AbNz81zM/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
              </div>
          </div>
          <dt>予選第２日目第８戦<br>たんじろう対ちょれのすけ</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1SCbF3MeXlz83P-tdrBi8s6KUCrl33qM7/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
            </div>
          </div>
          <dt>予選第２日目第９戦<br>ドラゴン桜対天パ侍</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1UdqvBeFo0SiXGbiLjzgYBJG5GbhKu3Lz/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
              </div>
          </div>
          <dt>予選第２日目エキシビションマッチ<br>？？？対アストラゼネカ</dt>
          <div class="sub">
            <div class="movie-wrapper">
            <iframe src="https://drive.google.com/file/d/1LaGanHOMJXI0DouIXTm3N3sPyXdIZFU-/preview" class="movie" allow="autoplay" allowfullscreen></iframe>
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