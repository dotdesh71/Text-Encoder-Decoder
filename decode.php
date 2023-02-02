<?php
if (isset($_POST['encoded_text'])) {
  $encodedText = $_POST['encoded_text'];
  $decodedText = base64_decode($encodedText);
  echo $decodedText;
}
?>
