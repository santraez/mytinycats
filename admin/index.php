<?php
/////////////////////////////////////////////////////////
// DATABASE
/////////////////////////////////////////////////////////
// 1. IMPORT CONNECTION
require "../includes/config/database.php";
$db = connectDB();
// 2. WRITE QUERY
$query = "SELECT * FROM contact";
// 3. CONSULT DATABASE
$result = mysqli_query($db, $query);
// DELETE ELEMENT
if($_SERVER['REQUEST_METHOD']==='POST') {
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);
  if($id) {
    $query = "DELETE FROM contact WHERE id = $id";
    $result = mysqli_query($db, $query);
    if($result) {
      header('location:/admin');
    }
  }
}
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "../includes/templates/noAMPstart.php";
include "../includes/templates/header.php";
?>

<section class="container messages">
  <table class="messages-table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Date</th>
        <th>Delete</th>
      </tr>
    </thead>
    <!-- 4. SHOW CONNECTION -->
    <tbody>
      <th>
        <?php while($contact = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?php echo $contact['id']; ?></td>
          <td><?php echo $contact['email']; ?></td>
          <td><?php echo $contact['subject']; ?></td>
          <td><?php echo $contact['message']; ?></td>
          <td><?php echo $contact['date']; ?></td>
          <td>
            <form method="POST" class="">
              <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
              <input type="submit" value="Delete" class="">
            </form>
          </td>
        </tr>
        <?php endwhile; ?>
      </th>
    </tbody>
  </table>
</section>

<?php
// 5. CLOSE THE CONNECTION
mysqli_close($db);
/////////////////////////////////////////////////////////
// INCLUDES HTML
/////////////////////////////////////////////////////////
include "../includes/templates/noAMPend.php"; 
?>