<?php
session_start();
if( !(isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['time']) && $_SESSION['time']>time()) ) {header("location:../index.php");}
?>
<html>
    <head>
        <title>View Reports</title>
    </head>
    <body bgcolor="#FFFFCC">
        <table width="100%">
            <tr>
            <td align="right"><a href="../logout.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;Logout&nbsp;</a></td>
            </tr>
        </table>
        <fieldset style="border-style:solid;border-width:1px;font-size:150%" width="100%">View Reports</fieldset>
        <br /><br />
        <table width="100%" height="75%">
            <tr>
                <td style="border-style:solid;border-width:1px;" width="20%" align="center" valign="top">
                    <br />
                    <a href="../home.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;Home&nbsp;</a>
                    <br/><br/>
                    <a href="../edit/index.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;Edit Results&nbsp;</a>
                    <br /><br />
                    <fieldset style="font-size:150%;color:#800000;background-color:#FFCC66;">View Reports</fieldset>
                    <br />
                </td>
                <td>
                    <p align="center" style="font-size:300%">View Reports</p>
                </td>
            </tr>
        </table>
    </body>
</html>