<?php
	require 'config.php';
?>
<?php
	session_start();
?>
<table width="100%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="#">
                            <img height="48" src="../image/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="#"><?php echo $_SESSION['userName'] ?></a>&nbsp;|
						
                        <a href="login.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr />
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="picture.html">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </td>
        <td valign="top">
            
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>