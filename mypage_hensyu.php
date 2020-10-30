<?php
mb_internal_encoding("uft8");

//セッションスタート
session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        
        <!-- このbodyの中に、マイページとして表示する部分を記述していく
        (HTMLとsessionを記述。編集できるように、sessionはvalueに入れる。）-->
         <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="login.php">ログアウト</a></div>
    </header>
    
    <main>
        <div class="box">
            <form action="mypage_update.php" method="post">
            <h2>会員情報</h2>
                <div class="hello">
                    <?php echo "こんにちは！".$_SESSION['name']."さん"; ?>
                </div>
            
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
            
                <div class="basic_info">
                    <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                    <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                    <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
                </div>
            
                <div class="comments">
                    <textarea rows="5" cols="45" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
            
                <div class="submit">
                    <form action="mypage.php" method="post">
                        <input type="submit" class="hennkou_button" value="この内容に変更する"/>
                        <input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
                        <input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
                        <input type="hidden" value="<?php echo $_POST['password'];?>"name="password">
                        <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
                    </form>
                </div>
        </div>
    </main>
    </body>
        
    
    
    
</html>