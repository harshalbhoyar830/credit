<?php

	$con = mysqli_connect('localhost','id9722619_root','abhishek','id9722619_credit');

	if ($con == false) {
		echo "Connection not established";
	}



  $query1 = " SELECT * FROM `users` WHERE `username` = 'user1' ";
  $run1 = mysqli_query($con, $query1);
  $user1 = mysqli_fetch_assoc($run1);
  $query2 = " SELECT * FROM `users` WHERE `username` = 'user2' ";
  $run2 = mysqli_query($con, $query2);
  $user2 = mysqli_fetch_assoc($run2);
  $query3 = " SELECT * FROM `users` WHERE `username` = 'user3' ";
  $run3 = mysqli_query($con, $query3);
  $user3 = mysqli_fetch_assoc($run3);
  $query4 = " SELECT * FROM `users` WHERE `username` = 'user4' ";
  $run4 = mysqli_query($con, $query4);
  $user4 = mysqli_fetch_assoc($run4);
  $query5 = " SELECT * FROM `users` WHERE `username` = 'user5' ";
  $run5 = mysqli_query($con, $query5);
  $user5 = mysqli_fetch_assoc($run5);
  $query6 = " SELECT * FROM `users` WHERE `username` = 'user6' ";
  $run6 = mysqli_query($con, $query6);
  $user6 = mysqli_fetch_assoc($run6);
  $query7 = " SELECT * FROM `users` WHERE `username` = 'user7' ";
  $run7 = mysqli_query($con, $query7);
  $user7 = mysqli_fetch_assoc($run7);
  $query8 = " SELECT * FROM `users` WHERE `username` = 'user8' ";
  $run8 = mysqli_query($con, $query8);
  $user8 = mysqli_fetch_assoc($run8);
  $query9 = " SELECT * FROM `users` WHERE `username` = 'user9' ";
  $run9 = mysqli_query($con, $query9);
  $user9 = mysqli_fetch_assoc($run9);
  $query10 = " SELECT * FROM `users` WHERE `username` = 'user10' ";
  $run10 = mysqli_query($con, $query10);
  $user10 = mysqli_fetch_assoc($run10);

?>
