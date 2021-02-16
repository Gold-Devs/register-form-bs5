<?php

session_start();
error_reporting(0);
if (!isset($_SESSION['uid'])) {

  echo "Please login to reply the post.<a href='index.php'>Click Here To Login</a>";
} else {
  echo "<center><p><font color='brown'>You are logged in as " . $_SESSION['username'] . "</font> |<a href='logout.php'>Logout</a></p></center>";
}
?>

<link rel="stylesheet" type="text/css" href="style.css" />
<hr />
<div id="content">
  <?php
  include_once("connect.php");
  $cid = $_GET['cid'];
  $tid = $_GET['tid'];
  $sql = "select * from topics where category_id='" . $cid . "' and id='" . $tid . "' limit 1";
  $res = mysqli_query($sql) or die(mysqli_error($link));
  $r = mysqli_num_rows($sql);
  if (mysqli_num_rows($res) == 1) {

    echo "<table width='100%'>";



    if (isset($_SESSION['uid'])) {

      echo "<tr><td colspan='2'><input type='submit'id='buttons' value='Add Reply ' onClick	=\"window.location='post_reply.php?cid=" . $cid . " &tid=" . $tid . " '\"/><hr/>";
    } else {
      echo "<tr><td colspan='2'><center><p>Please login to reply the post.</p><hr/></center></td></tr>";
    }

    while ($row = mysqli_fetch_array($res)) {
      $sql2 = "select * from post where category_id='" . $cid . "'and topic_id='" . $tid . "'";
      $res2 = mysqli_query($sql2) or die(mysqli_error());
      while ($row2 = mysqli_fetch_assoc($res2)) {

        // $poster name ;
        $user = mysqli_query("select * from users where username='" . $row2['post_creator'] . "'  ");
        while ($row5 = mysqli_fetch_array($user)) {
          $username = $row5['username'];
          echo $username;
        }

        echo " <div id='wrapper'='left'><div class='uinfo'>username:" . $row2['post_creator'] . " </div>" . $row['topic_title'] . "<br/> by" . $row2['post_creator'] . "-" . $row2['post_date'] . "<hr/>" . $row2['post_content'] . " </div>";
      } ?>

  <?php
      //count totlal views

      $old_views = $row['topic_views'];
      $new_views = $old_views + 1;
      $sql3 = "update topics SET topic_views='" . $new_views . "' where category_id='" . $cid . "' AND id='" . $tid . "' LIMIT 1";
      $res3 = mysqli_query($sql3);
    }
  } else {

    echo "<p> Topic not exist.</p>";
  }


  ?>
</div>
</div>