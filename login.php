<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">    
    </head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>
    
    <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" name="mail">
                </div>
                
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" name="password">
                </div>
                
                <div class="login_button">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>
    
<footer>
    (c)2018InterNous.inc. All rights reserved
</footer>

</body>
    
</html>