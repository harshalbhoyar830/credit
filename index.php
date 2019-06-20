<?php
      include 'dbcon.php';
      include 'includes/header.php';

?>




<div class="container">
  <div class="well">
    <table class="table table-responsive table-bordered">
      <tr>
        <th>USERS</th>
        <th>CURRENT CREDIT</th>
        <th>TRANSFER CREDIT</th>
      </tr>
      <tr>
        <td> <?php echo $user1['username']; ?> </td>
        <td> <?php echo $user1['credit']; ?> </td>
        <td> <a href="users/user1.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user2['username']; ?> </td>
        <td> <?php echo $user2['credit']; ?> </td>
        <td> <a href="users/user2.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user3['username']; ?> </td>
        <td> <?php echo $user3['credit']; ?> </td>
        <td> <a href="users/user3.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user4['username']; ?> </td>
        <td> <?php echo $user4['credit']; ?> </td>
        <td> <a href="users/user4.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user5['username']; ?> </td>
        <td> <?php echo $user5['credit']; ?> </td>
        <td> <a href="users/user5.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user6['username']; ?> </td>
        <td> <?php echo $user6['credit']; ?> </td>
        <td> <a href="users/user6.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user7['username']; ?> </td>
        <td> <?php echo $user7['credit']; ?> </td>
        <td> <a href="users/user7.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user8['username']; ?> </td>
        <td> <?php echo $user8['credit']; ?> </td>
        <td> <a href="users/user8.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user9['username']; ?> </td>
        <td> <?php echo $user9['credit']; ?> </td>
        <td> <a href="users/user9.php">Transfer Credit</a> </td>
      </tr>
      <tr>
        <td> <?php echo $user10['username']; ?> </td>
        <td> <?php echo $user10['credit']; ?> </td>
        <td> <a href="users/user10.php">Transfer Credit</a> </td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
