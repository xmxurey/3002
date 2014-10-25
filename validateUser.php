<?php
/**
 * Created by PhpStorm.
 * User: LIUX0_000
 * Date: 2014/10/17
 * Time: 23:55
 */

/**
 * Created by PhpStorm.
 * User: LIUX0_000
 * Date: 2014/10/17
 * Time: 23:49
 */

 
session_start();



include "connect.php";
$username=$_POST["username"];
$password=$_POST["password"];



if($username == "")
{
    echo '<script language="javascript">window.alert("Please enter your username");</script>';
    echo '<script language="javascript">window.location="login.php";</script>';
}elseif($password == "")

{

    echo '<script language="javascript">window.alert("Please enter your password");</script>';
    echo '<script language="javascript">window.location="login.php";</script>';

}else {
    $sql = "select * from useraccount where username='$username'";

    $result = mysql_query($sql);
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }

    if ($res=mysql_fetch_array($result))
    {
        if($password==$res["password"])
        {	
            $_SESSION["username"] = $username;
            $_SESSION["userAccountID"] = $res[0];
			
				
            echo '<script language="javascript">window.location="index.php";</script>';

        }
        else
        {echo '<script language="javascript">window.alert("Password is wrong");</script>';
            echo '<script language="javascript">window.location="login.php";</script>';}
    }
    else
    { echo '<script language="javascript">window.alert("The username does not exist.");</script>';
        echo '<script language="javascript">window.location="login.php";</script>';
    }

}

mysql_close();
?>