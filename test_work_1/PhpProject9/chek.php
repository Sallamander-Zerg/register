
        <?php
        session_start();
        require_once 'conect.php';
        $name= filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
        $log= filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $email= filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
        $pass2 = filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);
        $path='uploads/'.time().$_FILES['avatar']['name'];
        
      if((empty($_POST['name']))or(empty($_POST['login']))or(empty(($_POST['password'])))){
           $_SESSION['message']='пожалуйста проверте заполнены ли у вас поля имени фамилии и email ';
           header('Location: rgister.php');
        }elseif ($pass2!==$pass) {
            $_SESSION['message']='пороли не совпадают';
             header('Location: rgister.php');
           
        }elseif (move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
           $_SESSION['message'] = 'Ошибка при загрузке файла';
            header('Location: rgister.php'); 
        }else{
         
        $result=$mysql->query("SELECT MAX(id) AS id FROM brawlstars");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $userid=max($row);
        $userid=$userid+1;
        array_push($row,$userid);
        $mysql->query("INSERT INTO`brawlstars`(`id`,`name`,`login`,`pass`,`email`,`avatar`)VALUES('$userid','$name','$log','$pass','$email','$path')");
        $mysql->close();
        
        header('Location: index.php');
        }
        ?>
