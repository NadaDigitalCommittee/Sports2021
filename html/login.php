<?php
if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}
if($_SESSION['loginauth']=='true'){
  header("Location: private/main.php");
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ログインページ">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.css" />
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../vendor/animsition.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../vendor/marker-animation.js"></script>
  <script src="../vendor/aimsition.js"></script>
  <!-- <script type="module" src="../scripts/login.js"></script> -->
  <script src="../scripts/main.js"></script>

  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
    
  <link rel="icon" href="../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/logo-black.png">
  <title>ログイン</title>
</head>

<body class="animsition">
  <div id="nav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="toppage.html" class="animsition-link"><img class="logo" src="../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>ロ</span>グイン</h1>
      <div class="description">
        <h2>※学校用Googleアカウントでログインしてください。</h2>
        <h2>※もし間違えたアカウントでログインしてしまった場合は、Chromeを使用してログインし直すようにしてください。</h2>
      </div>
    </div>
    <div id="logincontainer"></div>
  </div>
</body>


<script type="text/javascript">
  const firebaseConfig = {
    apiKey: "AIzaSyCljusNToNz5kbQHoeOyYkieB4IdMVgrlY",
    authDomain: "sports-92.firebaseapp.com",
    projectId: "sports-92",
    storageBucket: "sports-92.appspot.com",
    messagingSenderId: "693670324075",
    appId: "1:693670324075:web:8eb71b2b891264a2954e2e",
    measurementId: "G-6ZBQRLTG8Q"
  };

  // Initialize Firebase
  // const app = initializeApp(firebaseConfig);
  // const analytics = getAnalytics(app);
  // const provider = new GoogleAuthProvider();
  // const auth = getAuth();

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  let uiConfig = {
    callbacks: {
      signInSuccessWithAuthResult: function () {
        console.log("ログイン成功")
        return true;
      },
    },
    signInOptions: [
      firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    ],
    signInSuccessUrl: "../html/login.php",
  }
  const user = firebase.auth().currentUser;

  


  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      console.log("loginnow");
      const useremail = user.providerData[0].email;
      console.log(useremail);
      const domain = useremail.split('@');
      const signOutMessage = `
      <p>${user.providerData[0].displayName}のアカウントで現在ログインしています。Chromeを使用してログインし直してください。<\/p>
      <button class="outbutton" type="submit"  onClick="signOutss()">サインアウト<\/button>
      `;
      document.getElementById('logincontainer').innerHTML =  signOutMessage;
      /*if(domain!='stg.nada.ac.jp'){
        firebase.auth().signOut();
        signOut(auth).then(() => {
          // Sign-out successful
          console.log('logoutoutout!');
          location.reload();
        }).catch((error) => {
          // An error happened.
        });
        console.log('logout!');
      }*/
      $.ajax({
        type: "POST",
        url: "../backend/request.php",
        data: {'gmail':useremail},
        dataType: "json",
        scriptCharset: 'utf-8'
      })
        .then(
          function (param) {　 //　paramに処理後のデータが入って戻ってくる
            // console.log(param); //　帰ってきたら実行する処理
            if(param!='true'){
              // signOut(auth).then(() => {
              //   // Sign-out successful
              //   console.log('logoutoutout!');
              //   location.reload();
              // }).catch((error) => {
              //   // An error happened.
              // });
              // console.log('logout!');
            }
            },
            function (XMLHttpRequest, textStatus, errorThrown) { //　エラーが起きた時はこちらが実行される
              console.log(XMLHttpRequest); //　エラー内容表示
            });
            
    }
  });

  function signOutss() {
    firebase.auth().onAuthStateChanged(user => {
      firebase
        .auth()
        .signOut()
        .then(() => {
          console.log('ログアウトしました');
          location.reload();
        })
        .catch((error) => {
          console.log(`ログアウト時にエラーが発生しました (${error})`);
        });
    });
    }

  jQuery(function ($) {
    $("#logincontainer").on("click", function () {
      const provider = new firebase.auth.GoogleAuthProvider();
      provider.setCustomParameters({
        hd: '@stg.nada.ac.jp'
      });
    });
      });

    let ui;
    if (ui) {
      ui.reset();
    } else {
      ui = new firebaseui.auth.AuthUI(firebase.auth());
    }
    ui.start('#logincontainer', uiConfig);

</script>
</html>
