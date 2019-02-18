<?php include "includes/header.inc.php"; ?>
<?php include "includes/dbh.inc.php" ?>

<?php
  if(isset($_GET['edit'])){
    $editId = $_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM messages WHERE id=?");
    $stmt->execute([$editId]);
   
    while($row = $stmt->fetch()) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $message = $row['message'];
    }

    if(empty($stmt)) {
      echo "Edit Query Failed ";
      header("Location: index.php?error=editqueryfailed");
      exit();
   }
  }
?>

<form class="text-center" action="includes/message.inc.php?userid=<?php echo $id;?>" method="post">
  <div class="form-group">
    <label for="name">Name:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'invalidname') {
        echo "<p class='errormessage' >Please enter valid name</p>";
      }
    ?>
    <input class="text-center" name="name" type="text" value='<?php echo $name ?>'>
  </div>
  <div class="form-group">
    <label for="email">Email:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'invalidemail') {
        echo "<p class='errormessage' >Please enter valid email</p>";
      }
    ?>
    <input class="text-center" name="email" type="text" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="message">Message:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'nomessage') {
        echo "<p class='errormessage' >Please enter a message</p>";
      }
    ?>
    <textarea name="message" cols="30" rows="10"><?php echo $message ?></textarea>
  </div>
  <div class="form-group">
    <input name="subscribe" class="form-check-input" type="checkbox" value="subscribe"><span> Check here to agree to subscribe for updates</span><br>
    <label for=""></label>
  </div>
  <button class="btn btn-primary" type="submit" name="submit-update">Update</button>
</form>


<?php include "includes/footer.inc.php"; ?>
