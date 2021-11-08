<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="newdavid.css">
    <script type="text/javascript" src="script.js">

    </script>
    <title>contact-us</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="maim">
        <div class="top">
            <div class="typewriter">
                <p class="line-1 anim-typewriter">How can we love you?</p>
            </div>
        </div>
        <div class="flex1">
            <div class="contflex1">
                <input naam="fnaam" id="fnaam" type="text" placeholder="Full name..">
                <input type="email" name="email" id="email" placeholder="Email..">
                <textarea name="question" id="question" placeholder="write your question.."></textarea>
            </div>
        </div>
        <div class="flex2">
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
	if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
      <script> window.location = "http://www.google.com/"; </script> <?php
    }
  ?>

    <!-- PHP SECTiON ENDEND -->


</body>
</html>
