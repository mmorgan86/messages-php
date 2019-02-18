<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- custom stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <nav class="navbar nav">
    <a href="index.php">Logo</a>
    <ul class="nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="">About</a></li>
      <li class="nav-item"><a class="nav-link" href="">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
    </ul>
    <form action="readMessages.php">
      <button type="submit" name="read-messages">Read Messages</button>
    </form>
  </nav>