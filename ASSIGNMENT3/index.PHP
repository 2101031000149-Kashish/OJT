<?php
require'databse.php';
if(isset($_POST["submit"])){
  $name = $_POST['name'];
$email = $_POST['email'];
$rating1 = $_POST['rating1'];
$rating2 = $_POST['rating2'];
$rating = $_POST['rating'];
$commentText = $_POST['commentText'];

$query="INSERT INTO `feedback`(`id`, `name`, `email`, `rating1`, `rating2`, `rating`, `commentText`)
 VALUES ('','$name','$email','$rating1','$rating2','$rating','$commentText')";
 mysqli_query($conn,$query);
 echo"
 <script>alert('Data inserted Successfully')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>

  <meta name="author" content="Codeconvey" />

  <link rel="stylesheet" href="css/style.css">
  <!--Only for demo purpose - no need to add.-->
  <link rel="stylesheet" href="css/demo.css" />
  <!-- <link rel="stylesheet" href="databse.php"> -->
 

</head>

<body>

  <header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading">
          <h1>Feedback Form </h1>
        </div>
      </div>
    </div>
  </header>
  <form action="" method="post">
    <section>
      <div class="rt-container">
        <div class="col-rt-12">
          <div class="Scriptcontent">


            <div class="feedback">

              <h4>Please rate your service experience for the following parameters</h4>
              <label for=""> Name</label><br>
              <input type="text" name="name" id="" style="width: 50%;"><br>
              <label for="">Email</label><br>
              <input type="email" name="email" id="" style="width: 50%;">
              <form method="post" action="#action-url"><Br></Br>
                <label>1. Your overall experience with us ?</label><br>

                <span class="star-rating">
                  <input type="radio" name="rating1" value="1"><i></i>
                  <input type="radio" name="rating1" value="2"><i></i>
                  <input type="radio" name="rating1" value="3"><i></i>
                  <input type="radio" name="rating1" value="4"><i></i>
                  <input type="radio" name="rating1" value="5"><i></i>
                </span>

                <div class="clear"></div>
                <hr class="survey-hr">
                <label>2. Friendliness and courtesy shown to you while recieving your mobile</label><br>
                <span class="star-rating">
                  <input type="radio" name="rating2" value="1"><i></i>
                  <input type="radio" name="rating2" value="2"><i></i>
                  <input type="radio" name="rating2" value="3"><i></i>
                  <input type="radio" name="rating2" value="4"><i></i>
                  <input type="radio" name="rating2" value="5"><i></i>
                </span>


                <div class="clear"></div>
                <hr class="survey-hr">
                <label>3.service rank between 1 to 10 </label><br><br />
                <div style="color:grey">
                  <span style="float:left">
                    POOR
                  </span>
                  <span style="float:right">
                    BEST
                  </span>

                </div>
                <span class="scale-rating">
                  <label value="1">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="2">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="3">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="4">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="5">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="6">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="7">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="8">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="9">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                  </label>
                  <label value="10">
                    <input type="radio" name="rating" value="10">
                    <label style="width:100%;"></label>
                  </label>
                </span>

                <div class="clear"></div>
                <hr class="survey-hr">
                <label for="m_3189847521540640526commentText">4. Any Other suggestions:</label><br /><br />
                <textarea cols="75" name="commentText" rows="5" style=" width: 100%" ;></textarea><br>
                <br>
                <div class="clear"></div>
                <input style="background:#43a7d5;color:#fff;padding:12px;border:0 " class="submitb" type="submit"
                  value="Submit your review" name="submit">&nbsp;
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>

  </form>

  <!-- Analytics -->

</body>

</html>