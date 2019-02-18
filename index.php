<?php include "includes/header.inc.php"; ?>

<form class="text-center" action="includes/message.inc.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'invalidname') {
        echo "<p class='errormessage' >Please enter valid name</p>";
      }
    ?>
    <input name="name" type="text">
  </div>
  <div class="form-group">
    <label for="email">Email:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'invalidemail') {
        echo "<p class='errormessage' >Please enter valid email</p>";
      }
    ?>
    <input name="email" type="text">
  </div>
  <div class="form-group">
    <label for="message">Message:</label><br>
    <?php 
      if(isset($_GET['error']) && $_GET['error'] == 'nomessage') {
        echo "<p class='errormessage' >Please enter a message</p>";
      }
    ?>
    <textarea name="message" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <input name="subscribe" class="form-check-input" type="checkbox" value="subscribe"><span> Check here to agree to subscribe for updates</span><br>
    <label for=""></label>
  </div>
  <button class="btn btn-primary" type="submit" name="submit-message">Send</button>
</form>


<?php include "includes/footer.inc.php"; ?>
