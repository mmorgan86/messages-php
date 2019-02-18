<?php include "includes/header.inc.php"; ?>
<?php require "includes/dbh.inc.php"; ?>

<div class="table">
  <h3 class="text-center">My Messages</h3>
<table class="table" bordercolor="black" style="width:95%;">
  <thead>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date</th>
    <th>Delete</th>
  </thead>
  <tbody class="table-hover">
    <?php
      $stmt = $conn->query("SELECT * FROM messages");
      if(empty($stmt)) {
         echo "Query Failed ";
         header("Location: index.php?error=selectqueryfailed");
         exit();
      }
      while($row = $stmt->fetch()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $message = $row['message'];
        $date = $row['date'];
        echo "<tr><td class='text-left'>{$name}</td><td class='text-left'>{$email}</td><td class='text-left'>{$message}</td><td class='text-left'>{$date}</td>";
        echo "<td><a href='readMessages.php?delete=$id'>Delete</a><td>"; 
        echo "<td><a href='readMessages.php?edit=$id'>Edit</a><td>"; 
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
</div>


<?php include "includes/footer.inc.php"; ?>

<?php
  if(isset($_GET['delete'])){
    $deleteid = $_GET['delete'];
    $query = "DELETE FROM delete.messages WHERE id=:id";
    $stmt = $conn->prepare($query);
    $reponse = $stmt->execute([':id' => $deleteid]);

    header("Location: readMessages.php");
  }
  if(isset($_GET['edit'])) {
    $editId = $_GET['edit'];
    header("Location: editMessage.php?edit=$editId");
    exit();
  }
?>
