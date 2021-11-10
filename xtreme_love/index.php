
<!DOCTYPE html>
<html lang="nl"> <!--NEDERLANDSE PAGINA-->
<link rel="stylesheet" href="style.css">
<script src= "Slide.js"></script>
<body>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>XtremeLOVE | Reizen</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" > <!--FONT AWESOME 5 CONNECT-->
    </head>
    <main>
        <?php include('header.php');?>
        <div class="container_div_large_pakket">
            <div class="large_pakket_div">
                <h1>Large Pakket</h1>   
                <p>In dit pakket ga je naar het luxe hotel "Park Hyatt Sydney" in Sydney. <br>In dit top deluxe Hotel hebben Wij hebben een mooi appartement staan met o.a.<br>
                1 slaapkamer, een groot bad met een douche, een koelkastje en een kluis waar je je spullen in kan stoppen als je weg gaat  <br> 
                in het hotel heb je nog extra, goede wifi, een zwembad en nog een grote sauna!<br>
                Jullie gaan hier een aantal spannende maar ook leuke dingen doen. Jullie krijgen een prive jacht waar jullie op kunnen zitten,<br>
                Bij dit jacht zitten 2 jetski's bij inbegrepen, waar jullie zelfstandig op kunnen varen, vergeet geen lifevest aan te doen!!<br>
                Ook gaan we een helikopter tour over de stad heen maken, en in de lucht de zonsondergang bekijken!<br>
                daarnaast om het avontuur goed af te sluiten, heb je nog een reservering bij het ALTITUDE RESTAURANT met een tafel voor twee,<br>
                Hier heb je een mooi uitzicht over de zee, en het welbekende opera house.<br>
                hier beneden voor foto's</p>
                <i class="fas fa-user-alt"> 2</i>
                <i class="fas fa-bed"> 1 </i>
                <i class="fas fa-bath"> 1</i>
                <i class="fas fa-hot-tub"> </i>
                <i class="fas fa-wifi"> </i>
                <i class="fas fa-swimming-pool"> </i>
                <i class="fas fa-utensils"> </i><br>

                <div class="stars">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                </div>        

            </div>
            <button class="btn">Bestellen!!</button>

        </div>
        
        <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="IMAGE/Hotel woonkamer.webp" style="width:100%">
        <div class="text"><strong>Woonkamer</strong></div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="IMAGE/hotel eettafel.webp" style="width:100%">
        <div class="text"><strong>Eettafel</strong></div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="IMAGE/Hotel badkamer - Copy.jpg" style="width:100%">
        <div class="text"><strong>Badkamer</strong></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="IMAGE/Hotel balkon.webp" style="width:100%">
            <div class="text"><strong>Balkon</strong></div>
        </div>
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </main>  
        <script>plusSlides(0)</script>
        <?php include('footer.php');?>
</body>
</html>