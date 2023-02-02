<?php
if (isset($_POST['text'])) {
  $text = $_POST['text'];
  $encodedText = base64_encode($text);
  echo $encodedText;
}
?>
