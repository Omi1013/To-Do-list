<?php
require_once ('./display.php');
$sql = "SELECT * FROM todos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TO-Do list</title>
  <link rel="StyleSheet" href="style.css">
</head>
<div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <form action="database.php" method="post" autocomplete="off">
  <input type="text"  name="title" id="title"  placeholder="Title...">
  <input type="submit" name="add" onclick="newElement()" class="addBtn" value="ADD">t
</form>
</div>

<ul id="myUL">
  <li>Hit the gym</li>
  <li class="checked">Pay bills</li>
  <li>Meet Girlfriend</li>
  <li>
    <?php
    while ($row = mysqli_fetch_assoc($result))
    {
      ?>
      <li><?php echo $row['Title']; ?></li>
     </li>
      <?php
    }
    ?>
  
</ul>
   <script src="to-do.js"></script>
</body>

</html>
