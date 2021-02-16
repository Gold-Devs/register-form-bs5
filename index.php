<?php
require 'includes/vars.php';

session_start();

?>
<?php echo $nav ?>

<body>


    <div id="wrapper">
        <!-- <h2>OpenSrc Forum</h2> -->
        <?php
        if (!isset($_SESSION['uid'])) {
            /* echo "<center><form action='login.php' method='post'>
            <p>Username:<input type='text' name='username'/></p>
            <hr>
            <p>password:<input type='password' name='password'/></p>
            <input type='submit' name='submit' value='Login'/></form></center> ";*/

            echo $bl;
            exit();
        } else {
            echo "<p><font color='brown'>You are logged is as " . $_SESSION['username'] . " &bull;<a href='logout.php'>Logout</a></font></p> ";
        }
        ?>
        <hr />
        <div id="content">
            <?php
            require_once 'connect.php';
            $reserr = die($err);
            $sql = "select * from categories order by category_title asc";
            $res = mysqli_query($sql, $reserr) or $reserr;
            $categories = "";
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['category_title'];
                    $description = $row['category_description'];
                    $categories .= "<a href='view_category.php?cid=" . $id . "' class='cat_links'>" . $title . "- <font size ='-1'>" . $description . "</font></a>";
                }
                echo $categories;
            } else {
                echo "<p>there is no categories available yet.</p>";
            }


            ?>
        </div>
        <!--<br>stay connected<br>
    <iframe
        src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Franjit.karki.140&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80"
        scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;"
        allowTransparency="true"></iframe>-->
        <a href="register.php">Register</a>
</body>

</html>
