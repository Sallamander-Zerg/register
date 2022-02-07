       <?php
        session_start();
        require_once 'conect.php';
        $login= $_POST['login'];
        $pass= $_POST['pass'];
        $sql = $mysql->query("Select * from brawlstars where login = '$login'and pass='$pass'" );
        
        if (mysqli_num_rows($sql) > 0)
        {
        $user= mysqli_fetch_assoc($sql);
        $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
         "avatar" => $user['avatar'],
        "email" => $user['email']
        ];
        header('Location: login.php');
        
        }
        else {
        $_SESSION['mess']='неверный логин или пороль';
         header('Location: index.php');
        }
        
  
        $mysql->close();
        ?>
