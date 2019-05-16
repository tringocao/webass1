<?php
    $username = $_POST['username'];
    $password = md5($_POST['pass']);
    ob_start();
    session_start();
    // Connect to Database
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "ass2";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn){
        // $setLang = mysqli_query($conn, "SET NAME 'utf-8'");
        // Connect Successfully, Querying to database to consider if username and password are valid.
        if (isset($username) && isset($password)){
            $sql = "SELECT * FROM dang_ky WHERE Username='$username' AND Mat_khau='$password'";
            $query = mysqli_query($conn, $sql);
            $num_of_row = mysqli_num_rows($query);
            if ($num_of_row > 0){
                $row = mysqli_fetch_assoc($query);
                $role = $row['role'];
                if (isset($_POST['remember'])){
                    $_SESSION['username'] = $username;
                }

                if (isset($_POST['remember']))
                {
                    setcookie ("username",$username,time()+ 2592000);
                    setcookie ("password",$password,time()+ 2592000);    
                }

                mysqli_close($conn);
                if ($role == "user"){
                    header("Location: trangcanhan.php?username=$username");
                }
                else{
					header("Location: ../admin/index.php?username=$username");
                }
            }
            else{
                mysqli_close($conn);
                echo '
                <html>
                    <br/><br/>
                    <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                        Tên đăng nhập hoặc mật khẩu không đúng click vào <a style="font-style: italic; font-weight: bold;" href="dangnhap.php">Link sau đây</a> để đăng nhập lại
                    </p>
                </html>
                ';
                // header("Location: dangnhap.php");
            }
        }
        
    }
?>