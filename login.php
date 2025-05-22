<?php 
//atur koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "login";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);
//atur variabel
$err        = "";
$username   = "";
$ingataku   = "";

if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from login where username = '$cookie_username'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if (isset($r1 ['password']) == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    } 
    
}

if(isset($_SESSION['session_username'])){
    header("location: beranda.php");
    exit();
}

if(isset($_POST['login'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from login where username = '$username'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if(isset($r1['username']) == ''){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }elseif($r1['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);

            if($ingataku == 1){
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:http://localhost/login/proses.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
            <div class="panel-heading">
            <h2>Login Ke Sistem</h2>
          </div>
            <?php if($err){ ?>
            <div id="login-alert" class="alert-danger">
              <ul>
                <?php echo $err ?>
              </ul>
            </div>
            <?php } ?>
            <form
              id="loginform"
              class="form-horizontal"
              action=""
              method="post"
              role="form"
            >
              <div class="input-group">
                <span class="icon"><i class="glyphicon glyphicon-user"></i></span>
                <input
                  id="login-username"
                  type="text"
                  class="form-control"
                  name="username"
                  value="<?php echo $username ?>"
                  placeholder="username">
              </div>
              <div class="input-group">
                <span class="icon"
                  ><i class="glyphicon glyphicon-lock"></i
                ></span>
                <input
                  id="login-password"
                  type="password"
                  class="form-control"
                  name="password"
                  placeholder="password"
                />
              </div>

              <div class="form-group">
                <div class="controls">
                  <input
                    type="submit"
                    name="login"
                    href="file:///C:/xampp/htdocs/login/TampilanGuru/tampilanguru.html"
                    class="btn btn-success"
                    value="Login"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>