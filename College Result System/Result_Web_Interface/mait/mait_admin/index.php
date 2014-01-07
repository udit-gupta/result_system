<?php
if (!(empty($_POST['username']) || empty($_POST['password']))) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $con = mysql_connect('localhost', 'db_user', 'db_passwd');
    if (!$con) {
        die('Could not connect to mysql');
    }
    $db_selected = mysql_select_db('app_db', $con);
    if (!$db_selected) {
        die('Could not connect to database');
    }
    $user = mysql_real_escape_string(stripslashes($user));
    $pass = mysql_real_escape_string(md5(stripslashes($pass)));
    $query = "SELECT * FROM admin_login WHERE username='" . $user . "' AND password='" . $pass .
        "'";
    $result = mysql_query($query, $con);
    if (!$result) {
        die('Invalid Query');
    }
    $row = mysql_fetch_array($result, MYSQL_NUM);
    if (!empty($row[0])) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['time'] = time() + 3600;

        echo "<script language=javascript>window.opener.document.location.href='home.php';self.close ();  </script>";
    }
    mysql_close($con);
}
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['time']) &&
    $_SESSION['time'] > time()) {
    echo "<script language=javascript>window.opener.document.location.href='home.php';self.close ();  </script>";
}
?>
<html>
    <head>
        <title>Admin Login</title>
        
         <script type="text/javascript">
                 /*
                  function rld(){
                                          window.opener.document.location.href="http://www.google.com";  
                                   }
                 
                 </script>
         
    </head>
    <body bgcolor="#FFFFCC" >
    <center><span id="error" style="font-size:90%;font-weight:bold;color:red;"></span></center>
    <br/>
        <form name="login" action="index.php" method="post">
        <center>
            <table style="border-style:solid;border-width:1px;">
                <tr bgcolor="#FFCCCC">
                    <td colspan="2" style="font-size:90%;border-style:solid;border-width:1px;" align="center">Administrator Login</td>
                </tr>
                <tr>
                    <td style="font-size:90%">Username</td>
                    <td><input type="text" name="username" maxlength="15" style="font-size:75%" size="20" /></td>
                </tr>
                <tr>
                    <td style="font-size:90%">Password</td>
                    <td><input type="password" name="password" size="20" maxlength="15" style="font-size:75%" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Login" /></td>
                </tr>
            </table>
        </center>
        </form>
    </body>
</html>
<?php
if (!(empty($_POST['username']) || empty($_POST['password']) || !empty($row[0]))) {
    echo "<script type=\'text/javascript\'>document.getElementById(\'error\').innerHTML=\'The username or password you entered is incorrect.\';</script>";
}
?>
