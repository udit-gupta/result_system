<html>
    <head>
        <script type="text/javascript">
        function bck(){
          window.location = "index.php"
          }
        </script>
    </head>
<body>
<h4>
<?php
//echo $_POST['batch'] . ">>" . $_POST['branch'] . ">>" . $_POST['sem'];
if ((isset($_POST['ul']))) {
    //echo $_POST['ul'];
    $ul = '"C:\Program Files\GnuWin32\bin\wget.exe" -c ' . $_POST['ul'];
    //echo $ul;
    //echo shell_exec($ul);
    //echo shell_exec("dir");
}
if ((($_FILES["file"]["type"] == "application/pdf")) && ($_FILES["file"]["size"] <
    200000000)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    } else {
        $com = "'cd script; ./verify ../Result_PDFs/" . "" . $_FILES["file"]["name"] . " " . $_POST['batch'] .
            " " . $_POST['branch'] . " " . $_POST['sem'] . "  && ./work Batch/" . $_POST['batch'] .
            "/" . $_POST['branch'] . "/" . $_POST['sem'] . "/'";
       // echo $com;
        //echo " <br /> Upload: " . $_FILES["file"]["name"] . "<br />";
        //echo "Type: " . $_FILES["file"]["type"] . "<br />";
        //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

        if (file_exists("Result_PDFs/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "Result_PDFs/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "Result_PDFs/" . $_FILES["file"]["name"];

        }
        $com1='./redirect '.$com;
       shell_exec($com1);
       shell_exec("./script/execute");
       echo '<br /><br />';
       echo "Database Created";
    }
} else {
    echo "Invalid file";
}

?> 
<br />
<br />
</h4>
    <input type="button"value="OK" onclick="bck();"/>
</body>
  </html>
