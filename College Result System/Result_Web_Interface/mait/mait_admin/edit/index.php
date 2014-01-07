<?php
//session_start();
//if (!(isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['time']) &&
//    $_SESSION['time'] > time())) {
//    header("location:../index.php");
//}

?>
<html>
    <head>
        <title>Edit Results</title>
        <script type="text/javascript">
        function lod(){
            document.getElementById("load").style.display='block';
        }
        function hid(){
             document.getElementById("load").style.display='none';
        }
        </script>
    </head>
    <body bgcolor="#FFFFCC" onload="hid();">
        <table width="100%">
            <tr>
            <td align="right"><a href="../logout.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;Logout&nbsp;</a></td>
            </tr>
        </table>
        <fieldset style="border-style:solid;border-width:1px;font-size:150%" width="100%">Edit Results
        </fieldset>

        <br /><br />
        <table width="100%" height="75%">
            <tr>
                <td style="border-style:solid;border-width:1px;" width="20%" align="center" valign="top">
                    <br />
                    <a href="../home.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;Home&nbsp;</a>
                    <br/><br/>
                    <fieldset style="font-size:150%;color:#800000;background-color:#FFCC66;">Edit Results</fieldset>
                    <br />
                    <a href="../reports/index.php" style="border-style:solid;border-width:1px;text-decoration:none;color:#0404B4;">&nbsp;View Reports&nbsp;</a>
                    <br />
                </td>
                <td align="center" style="font-size: larger;">
                     <form action="upload.php" method="post"
                           enctype="multipart/form-data" onsubmit="lod();">
                              <div align="right" style="font-weight: bold;"> Batch : 
        <input type="text" name="batch" style="background-color:#A8D04A; color: black; font-family:cursive; width: 50px;"/>
        <select name="branch" id="branch">
            <option value="0">--Branch--</option>
            <option value="027">CSE</option>
            <option value="028">ECE</option>
            <option value="031">IT</option>
            <option value="036">MAE</option>
            <option value="049">EEE</option>
        </select>
        <select name="sem" id="sem">
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
        <br />
        <br />
        </div>
                     Paste the url of remote file:<br /> <br /><input id="up" name="ul" type="text" style="width: 400px; font-size: 70%; background-color:#A8D04A; color: black; font-family:cursive;"/>
                    
                   
                    OR
                    
                      <br />
                      <br />
                     <label for="file">Manually upload the File</label>
                     <input type="file" name="file" id="file" style="background-color:#A8D04A; color: black; font-family:cursive;"/>
                     <input type="submit" name="submit" value="Upload" style="background-color:#A8D04A; color: black; font-family:cursive;"/><span id="load"><img src="loading.gif"/> </span>
                     </form>
                     <br />
                     
                     <div align="center">___________________________________________________________<br/> <br/>Create Database of following file :
                     <input type="file" name="file1" id="file1" style="background-color:#A8D04A; color: black; font-family:cursive;" onchange="br()"/>
                     <button style="background-color:#A8D04A; color: black; font-family:cursive;" onclick="javascript:alert(document.getElementById('file1').value);">Generate</button>
                     </div>
                      
                    <p align="center" style="font-size:300%">Edit Results</p>
                </td>
            </tr>
        </table>
    </body>
</html>
