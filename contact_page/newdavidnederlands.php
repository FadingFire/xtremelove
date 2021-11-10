<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="newdavid.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <title>contact-us</title>
</head>

<body>
  <?php include('headerNL.php');?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="maim">
        <div class="top">
            <div class="typewriter">
                <p class="line-1 anim-typewriter">Hoe kunnen wij u liefhebben?</p>
            </div>
        </div>
        <div class="flex1">
            <div class="contflex1" id="main_thingy_holder">
                <input name="fnaam" id="fnaam" type="text" placeholder="Volledige naam..">
                <input type="email" name="email" id="email" placeholder="Email..">
                <textarea name="question" id="question" placeholder="Wat is uw vraag.."></textarea>
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
      ?><script> document.getElementById("main_thingy_holder").innerHTML = "<h1> Dank u wel voor het versturen van uw bericht. </h1> <h2> Wij hopen zo snel mogelijk uw vragen te beantwoorden. Als u nog meer vragen heeft kunt u altijd nog een bericht sturen naar ons <3 </h2> <h3> U heeft dit bericht gestuurd: </h3> email: <?php echo $_POST['email']?> <br> volledige naam: <?php echo $_POST['fnaam']?> <br> vraag: <?php echo $_POST['question']?>";
      </script> <style>#main_thingy_holder {font-size: 2vh;} html{overflow-y: auto;}</style><?php
    }
  }
  ?>

    <!-- PHP SECTiON ENDEND -->

<?php include('footer.php');?>
</body>

</html>
