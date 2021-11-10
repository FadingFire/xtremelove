<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="newdavid.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>contact-us</title>
</head>

<body>
    <?php include('header.php');?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="maim">
        <div class="top">
            <div class="typewriter">
                <p class="line-1 anim-typewriter">How can we love you?</p>
            </div>
        </div>
        <div class="flex1">
            <div class="contflex1" id="main_thingy_holder">
                <input name="fnaam" id="fnaam" type="text" placeholder="Full name..">
                <input type="email" name="email" id="email" placeholder="Email..">
                <textarea name="question" id="question" placeholder="write your question.."></textarea>
            </div>
        </div>
        <div class="flex2" id="flex2cont">
            <div class="contflex2">

                <button type="Submit" class="butoon" name="submitform">
					<img src="images/mailbrief.png" >
				</button>
                <div class="input_text"></div>
            </div>
        </div>
        </div>
    </div>
    </form>


    <!-- PHP SECTION -->
    <?php
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST['email']) || empty($_POST['fnaam']) || empty($_POST['question'])) { ?>
      <script> alert_if_message_isnotset(); </script> <?php
    } else {
      ?><script> document.getElementById("main_thingy_holder").innerHTML = "<h1> Your message has been send and received. </h1> <h2> We hope we can respond to you as soon as possible and help you with your question. If you think of any more questions you would like answered you can always send us a new message <3 </h2> <h3> you have send this mesagge: </h3> email: <?php echo $_POST['email']?> <br> full name: <?php echo $_POST['fnaam']?> <br> QUESTION: <?php echo $_POST['question']?>";
      </script> <style>#main_thingy_holder {font-size: 2vh;} html{overflow-y: auto;}</style><?php
    }
  }
  ?>

    <!-- PHP SECTiON ENDEND -->


<?php include('footer.php');?>
</body>
</html>
