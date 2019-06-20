<?php
      include '../dbcon.php';
      include '../includes/header.php';
      $username = $user8["username"];
 ?>

 <div class="container">
   <form action="user7.php" method="post">
        <div class="form-group">
          <div>
            <label for="username" class="form-control">Username:</label>
            <input class="form-control" type="text" name="user" value="<?php echo $user8['username'] ?>" placeholder="<?php echo $user8['username']; ?>" disabled> <br/>
            <label for="email" class="form-control">Email:</label>
            <input class="form-control" type="text" name="email" value="<?php echo $user8['email']; ?>" placeholder="<?php echo $user8['email']; ?>" disabled><br/>
            <label for="currentcredit" class="form-control">Current Credit:</label>
            <input type="text" name="currentcredit" value="<?php echo $user8['credit']; ?>" class="form-control" placeholder="<?php echo $user8['credit']; ?>" disabled><br/>
            <label for="transfer" class="form-control">How much credit you want to transfer from <?php echo $user8['username']; ?>?</label>
            <input type="number" name="credit" class="form-control" ><br/>
            <label for="touser" class="form-control">To which user you have to trasfer credit?</label>
            <input type="text" name="touser"class="form-control"><br/>
            <input type="submit" name="transfer" value="Transfer Credit" class="btn btn-success">
          </div>
        </div>
   </form>
 </div>

<?php

    if (isset($_POST['transfer'])) {
      $touser = $_POST['touser'];
      $credit = $_POST['credit'];
      $q = " SELECT * FROM `users` WHERE '$touser' = `username` ";
      $r = mysqli_query($con, $q);
      if (mysqli_num_rows($r) < 1) {
        ?>
        <script type="text/javascript">
          alert("User does not Exist!");
          window.open("user8.php", "_self");
        </script>
        <?php
      }
      $s = mysqli_fetch_assoc($r);
      $t = (int)$user8['credit'];
      if ($t < $_POST['credit']) {
        ?>
          <script type="text/javascript">
            alert("Not Enough Credit!");
            window.open("user8.php", "_self");
          </script>
        <?php
      }
      else{
        $transfered = $t - $credit;
        $updated = intval($s['credit']) + $transfered;
        $v = " UPDATE `users` SET `credit`= $updated WHERE `username` = '$touser' ";
        $w = mysqli_query($con, $v);
        $x = " UPDATE `users` SET `credit`= $transfered WHERE `username` = 'user8' ";
        $y = mysqli_query($con, $x);

        ?>
          <script type="text/javascript">
            alert("Credit Transfered!");
          </script>
        <?php
      }
    }

 ?>
<?php include '../includes/footer.php'; ?>
