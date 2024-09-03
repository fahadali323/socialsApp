<?php
  include("./../classes/connect.php");
  include("./../classes/login.php"); 
  include("./../classes/user.php");
  include("./../classes/post.php");

  //isset($_SESSION['mysocial_userid'])
  $login = new Login();
  $user_data = $login->check_login($_SESSION["mysocial_userid"]);
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | MySocial</title>
    <link rel="stylesheet" href="./../styling/timeline.css?v=1" />

  </head>
  <body>
    <!--Top Bar-->
    <?php include("header.php") ?>

    <!--cover area-->
    <div class="content">
      
      <!--below cover area-->
      <div class="bottom">
        <!--friends area-->
        <div class="bottom_left">
          <div class="friends_bar">
            <img class="profile_pic" src="<?php echo $user_data['profile_image'] ?>" alt="selfie_image"><br>
            <a class="name" href="profile.php">
              <?php echo $user_data["first_name"] . "<br> " . $user_data["last_name"]  ?>
            </a>
          </div>
        </div>

        <!--posts area-->
        <div class="bottom_right">
          <div class="bottom_right_area">
            <textarea placeholder="Whats on your mind?"></textarea>
            <input class="post_button" type="submit" value="POST" />
            <br />
          </div>

          <!--posts-->
          <div class="post_bar">
            <!--posts 1 -->
            <div class="post">
              <div>
                <img class="post_img" src="../assets/user1.jpg" alt="user profile">
              </div>
              <div>
                <div class="post-user">First Guy</div>
                What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a
                type specimen book. It has survived not only five centuries, but
                also the leap into electronic typesetting, remaining essentially
                unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
                <br><br>
                <a href="">Like</a> . <a href="">Comment</a> .<span style="color: #999">April 23 2020</span>
              </div>
            </div>

            <!--posts 2 -->
            <div class="post">
                <div>
                  <img class="post_img" src="../assets/user4.jpg" alt="user profile">
                </div>
                <div>
                  <div class="post-user">African Dude</div>
                  What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the
                  printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an
                  unknown printer took a galley of type and scrambled it to make a
                  type specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of
                  Letraset sheets containing Lorem Ipsum passages, and more
                  recently with desktop publishing software like Aldus PageMaker
                  including versions of Lorem Ipsum.
                  <br><br>
                  <a href="">Like</a> . <a href="">Comment</a> .<span style="color: #999">April 23 2020</span>
                </div>
              </div>



          </div>
        </div>
      </div>
    </div>
  </body>
</html>
