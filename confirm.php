<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="wrapper">
        <h1>futa</h1>
        <ul>
            <li><a href="https://www.instagram.com/futa.729s/"><img src="https://lh3.googleusercontent.com/pw/AM-JKLV9QaQnH4qX624NpZOziyaezZpSXn19TdTy6bRAfvAZ5fyIAX5ZLeCnMxuHgExH7wvjHxQZCNVlQwAPWH0huBFZII_YUBFRrfUSF0iOHeUffw69sD1RC5zT4Pq3D4Ke3ElFJVrvUrlOzP2tC5B7Olta=s240-no?authuser=0" alt="instagram"></a></li>
            <li><a href="https://www.youtube.com/c/shiraifuta"><img src="https://lh3.googleusercontent.com/pw/AM-JKLUivHMqWuN6vdg_Mh9UQuDFhDC-gteXme9o8RTABvIBt3OaebJ0lwp-8UMKH7LoCaDP_SVieSzRd5juHGOJO6zovU4djZ7rpagoSjrQGESZo_lMfNDuD4xnhsFSdMACxaRgVq9DLzbDWFLng4sF9Mab=s240-no?authuser=0" alt="youtube"></a></li>
            <li><a href="https://www.tiktok.com/@futa.729s?_d=secCgYIASAHKAESPgo8%2FDm%2FtKaR2FsdKLvTk6McobN8%2BymMvZr7MVk1jnCyvrOoDeBHNpm5UjMkzjMKkUAg2Ljy4jRQX%2BUqjfk1GgA%3D&checksum=c2a2138ac75b3334498db738296c91bb409c90f23c40d09f5e98a097d2737e56&language=ja&sec_uid=MS4wLjABAAAAEnJpRHJsqIUJ3D_fbQ_KO6R4b9uK8UVkDXYSzG0wqjqShWUjZsTLr3SF3Agk6dmw&sec_user_id=MS4wLjABAAAAEnJpRHJsqIUJ3D_fbQ_KO6R4b9uK8UVkDXYSzG0wqjqShWUjZsTLr3SF3Agk6dmw&share_app_id=1180&share_author_id=6632222530444967937&share_link_id=7C73BAD2-0BF8-45E0-A631-BA95165F3F82&tt_from=copy&u_code=d3eg229akh46a3&user_id=6632222530444967937&utm_campaign=client_share&utm_medium=ios&utm_source=copy&source=h5_t&_r=1"><img src="https://lh3.googleusercontent.com/pw/AM-JKLVfSOQx7w63E6H9-UQ0t61yeSqASPEKmDrFTAEVx1a0hUXv9_ZG11BaYZm4HpH2nS8FxqvQkrUTidooxgrYmjXZr1iDLSP13i5SE1Q_Xq1uICHoC0UfDPA78TQG-5RSMEeg-EI_MQh2fxtqQqhSeMrE=s240-no?authuser=0" alt="tiktok"></a></li>
            <li><a href="#https://web-apprentice.github.io/futa/about" class="header_list">About</a></li>
            <li><a href="#https://web-apprentice.github.io/futa/work" class="header_list">Work</a></li>
            <li><a href="#https://web-apprentice.github.io/futa/news" class="header_list">News</a></li>
            <li><a href="#https://web-apprentice.github.io/futa/contact" class="header_list">Contact</a></li>
        </ul>
   <!--ハンバーガーメニュー-->
        <div id="navArea">
        <nav>
        <div class="inner">
            <ul>
            <li><a href="https://web-apprentice.github.io/futa/#about">About</a></li>
            <li><a href="https://web-apprentice.github.io/futa/#work">Work</a></li>
            <li><a href="https://web-apprentice.github.io/futa/#news">News</a></li>
            <li><a href="https://web-apprentice.github.io/futa/#contact">Contact</a></li>
            </ul>
        </div>
        </nav>

        <div class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
        </div>

        <div id="mask"></div>

        </div>
    </header>
<!--ハンバーガーメニューおわり-->
     <section id="confirm">
         <h3>お問い合わせありがとうございます</h3>
         <p>下記の内容で送信されました</p>
         <dl>
             <dt>Name</dt>
             <dd><?php echo $_POST['name'];?></dd>
             <dt>E-mail</dt>
             <dd><?php echo $_POST['mail'];?></dd>
             <dt>Message</dt>
             <dd><?php echo $_POST['message'];?></dd>
         </dl>
     </section>
  </body>
  <footer>
      ©︎futa shirai
  </footer>
</html>
