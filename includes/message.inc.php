<?php
require "dbh.inc.php";
if(isset($_GET['userid'])) {
  $userId = $_GET['userid'];
}

if(isset($_POST['submit-message'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (empty($name)) {
    header("Location: ../index.php?error=invalidname&email=$email&message=$message");
    exit();
  }
  else if (empty($email)) {
    header("Location: ../index.php?error=invalidemail&name=$name&message=$message");
    exit();
  }
  else if (empty($message)) {
    header("Location: ../index.php?error=nomessage&name=$name&email=$email");
    exit();
  }
  else {
    $sql = 'INSERT INTO messages (name, email, message, date) VALUES(?, ?, ?, now())';
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $message]);

    header("Location: ../index.php?message=success");
    exit();
  }
} 
else if (isset($_POST['submit-update'])) {
  $updateName = $_POST['name'];
  $updateEmail = $_POST['email'];
  $updateMessage = $_POST['message'];

  $sql = "UPDATE messages SET name=?, email=?, message=? WHERE id=?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$updateName, $updateEmail, $updateMessage, $userId]);

  header("Location: ../index.php?message=success");
  exit();
}
else {
  header("Location: ../index.php");
  exit();
}




