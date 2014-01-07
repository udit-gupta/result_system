<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action=""  name="result" id="">
<table style="border-style:solid;border-width:1px;">
<tr>
    <td colspan="3" align="center" bgcolor="#99CC00">Roll No : <input type="text" name="roll" maxlength="10" size="15" style="font-size:75%"/></td>
</tr>
<tr>
	<td>
		<select name="batch">
            <option value="0">--Batch--</option>
        </select>
	</td>
    <td>
        <select name="branch">
            <option value="0">--Branch--</option>
            <option value="1">CSE</option>
            <option value="2">ECE</option>
            <option value="3">IT</option>
            <option value="4">MAE</option>
            <option value="5">EEE</option>
        </select>
    </td>
    <td>
        <select name="semester">
            <option value="0">--Sem--</option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="Submit" />
    </td>
</tr>
</table>
</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
