<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <script type="text/javascript">
       var ch=0;
        function load(){
             document.getElementById("login1").style.display='none';
             document.getElementById("result1").style.display='none';
        }
        function dores(){
          ch=1;
          document.getElementById("result1").style.display='block';
          document.getElementById("login1").style.display='none';
          document.getElementById("show").innerHTML="See Result"
         
          }
          
          function dolog(){
          ch=1;
          document.getElementById("result1").style.display='none';
          document.getElementById("login1").style.display='block';
          document.getElementById("show").innerHTML="Account Login"
          
          }
          function chtxt(flag){
          if (flag==1&&ch==0)
          {
          document.getElementById("show").innerHTML="Click to See Result";
          }
          else if (flag==2&&ch==0)
          {
          document.getElementById("show").innerHTML="Click to login";
          }
          else if (flag==3&&ch==0)
          {
          document.getElementById("show").innerHTML="Choose Option";
          }
          }
          function ld(){
           // window.open(str, 'Admin', 'height=480,width=640', false);
            window.open('mait_admin/', 'Admin', 'height=150,width=300', false);
            
          }
        
        </script>
        <script type="text/javascript" src="scripts/js/lib.js">
    </script>
    <script type="text/javascript" src="scripts/js/span_error.js">
    </script>
    <script type="text/javascript" src="scripts/js/check.js">
    </script>



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body onload="load()" style="background-image: url('images/back.jpg');" >
        <hr>
        <table width="100%"style="border-bottom-style: solid; border-width: 0px; border-color: #424242">
            <tr  >
                <td align="left"><img alt=""  src="images/bil.jpg"></td>
                <td style="text-align: left;" width="100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="check result"  src="images/banner1.png" style=""></td>
             </tr>
             </table>
        <hr>
       <!-- <hr>-->
             <table width="100%">
                 <tr><td style="text-align: right;" width="35%"><img alt="Login"  src="images/logini.png" onmouseover="this.src='images/login1i.png';chtxt(2);" onmouseout="this.src='images/logini.png';chtxt(3);" onclick="dolog();" /></td><td align="right">
                                     </td>
                                     <td style="text-align: center" width="30%"><div id="show" style="font-size: xx-large; text-align: center;  color: #dee0d0">Choose Option</div></td>
<td style="text-align: left;"><img alt="result"  src="images/res1.png" onmouseover="this.src='images/res.png';chtxt(1);" onmouseout="this.src='images/res1.png'; chtxt(3);" onclick="dores();" /></td><td align="right">
                                     </td>

                 </tr>
</table>
        <div id="result1" align="center">
            <form action="index.php"  name="result" id="result" method="get">
                <table style="border-style:solid;border-width:1px; border-color: #424242">
<tr>
    <td colspan="3" align="center" style="background-color: #9ecdd0">Roll No : <input type="text" name="roll" maxlength="10" size="15" style="font-size:75%"/></td>
</tr>
<tr>
	<td>
		<select name="batch">
            <option value="0">--Batch--</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
        </select>
	</td>
    <td>
        <select name="branch">
            <option value="0">--Branch--</option>
            <option value="027">CSE</option>
            <option value="028">ECE</option>
            <option value="031">IT</option>
            <option value="036">MAE</option>
            <option value="049">EEE</option>
        </select>
    </td>
    <td>
        <select name="semester">
            <option value="0">--Sem--</option>
            <option value="01">Ist</option>
            <option value="02">IInd</option>
            <option value="03">IIIrd</option>
            <option value="04">IVth</option>
            <option value="05">Vth</option>
            <option value="06">VIth</option>
            <option value="07">VIIth</option>
            <option value="08">VIIIth</option>

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
  </div>
        <div id="login1" align="center">
    <form id="login" action="">
        <table style="border-style:solid;border-width:1px; border-color: #424242;">
<tr>
    <td align="center" style="background-color: #9ecdd0; border-bottom-style:solid;border-width:1px;">Student Rollno.: </td><td style="border-bottom-style:solid;border-width:1px;"><input type="text" name="rolln" maxlength="10" size="15" style="font-size:75%"/></td>
</tr>
<tr>
    <td align="center" style="background-color: #9ecdd0; border-bottom-style:solid;border-width:1px;">Password: </td><td style="border-bottom-style:solid;border-width:1px;"><input type="password" name="pass" maxlength="20" size="20" style="font-size:75%"/></td>
</tr>
<tr>
    <td colspan="3" align="center"> <input type="submit" value="Login"/></td>
</tr>
        </table>
    </form>
</div>

    
        <?php
error_reporting(0);
// put your code here
function error($strin)
{

    echo '<div id="show" style="text-align: center;  color: #ff6633">' . $strin .
        '</div>';

}
//echo shell_exec("pwd");
$error = 0;
if (isset($_GET["roll"]) && isset($_GET["semester"]) && isset($_GET["branch"]) &&
    isset($_GET["batch"])) {
    $roll = $_GET["roll"];
    if (is_numeric($roll) == false) {
        error("Roll no Invalid");
    }
    $semester = '_' . $_GET["semester"];
    $branch = '_' . $_GET["branch"];
    $batch = '_' . $_GET["batch"];
    $conr = mysql_connect('localhost', 'root', 'krishna');
    if (!$conr) {
        error("Connection failed to server");
    }
    $db = mysql_select_db($batch, $conr);
    if (!$db) {
        error("No result found for batch: " . $_GET['batch']);
    }
    $table = $branch . $semester . '_papers';
    $table1 = $branch . $semester . '_students';
    $que = "select * from $table";
    $que1 = "select * from $table1 where roll_no= " . "'" . $roll . "'";
    $res = mysql_query($que, $conr);
    $res1 = mysql_query($que1, $conr);
    $num = mysql_numrows($res);
    $num1 = mysql_numrows($res1);
    //echo shell_exec("pwd");
    if (!$res) {
        error("No Result of batch: " . $_GET['batch'] . " found for given details");
    } else {
        // $row = mysql_fetch_array($res, MYSQL_NUM);
        $pid = array();
        $sname = array();
        $marks = array();
        for ($i = 0; $i < $num; $i++) {
            $pid[$i] = mysql_result($res, $i, "paper_id");
            $sname[$i] = mysql_result($res, $i, "subject_name");
        }
        $obmr = mysql_result($res1, 0, 'obtained_marks');
        $tomr = mysql_result($res1, 0, 'total_marks');
        $crpr = mysql_result($res1, 0, 'credit_percent');
        $prc = mysql_result($res1, 0, 'normal_percent');
        $name = mysql_result($res1, 0, 'name');
        echo '<u><h1 align="center">' . $name . '</h1></u>';
        // echo '<h4>'.$obmr.'</h4>';
        //echo '<h4>'.$tomr.'</h4>';
        //echo '<h4>'.$prc.'</h4>';
        //echo '<h4>'.$crpr.'</h4>';
        echo '<div align="center">

     <table>
     <tr>';
        echo '
     <td align="center" style="background-color:#8cd360";border-bottom-style:solid;border-width:2px;">Subject</td>
     <td align="center" style="background-color:#8cd360";border-bottom-style:solid;border-width:2px;">Marks</td>
     </tr>
';
        for ($j = 0; $j < $num; $j++) {
            if ($j % 2 == 0) {
                $color = "#83b2bb";
            } else {
                $color = "#9ecdd0";
            }
            echo "<tr>";
            echo '<td align="center" style="background-color:' . $color .
                '; border-bottom-style:solid;border-width:1px;">';
            $marks[$j] = mysql_result($res1, 0, '_' . $pid[$j]);
            $str = explode(":", $marks[$j]);

            echo $sname[$j] . "</td>";
            echo '<td align="center" style="background-color:' . $color .
                '; border-bottom-style:solid;border-width:1px;">';
            echo $str[2] . "</td>";
            echo "</tr>"; //echo "</br>";
        }


        //}
        echo "</table>";
        echo '<h4>Obtained Marks: ' . $obmr . '</h4>';
        echo '<h4>Total Marks: ' . $tomr . '</h4>';
        echo '<h4>Percentage [%]: ' . $prc . '</h4>';
        echo '<h4>Credit Percentage [%]: ' . $crpr . '</h4>
</div>';
        //echo $pid[$num-1].$sname[$num-1];
        //  echo '$row["subject_name"]';

    }
}
// else {
// echo $_GET ["roll"];
//}



?>
<a href="" style="text-decoration: none;" onclick="ld()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </body>
</html>
