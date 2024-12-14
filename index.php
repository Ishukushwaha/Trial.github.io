<?php
  if(isset($_POST['submit']))
  {
    $name=$POST['name'];
    $name=$POST['class'];
    $name=$POST['section'];
    $name=$POST['roll_no'];
    $fp=fopen('data.txt','a');
    fwrite($fp,$name);
    fwrite($fp,$class);
    fwrite($fp,$section);
    fwrite($fp,$roll_no);
    fclose($fp);
  }
?>
<h1>Submitted 👍</h1>