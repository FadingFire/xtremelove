
<!DOCTYPE html>
<html lang="nl"> <!--NEDERLANDSE PAGINA-->
<link rel="stylesheet" href="style.css">
<script src= "Slide.js"></script>
<body>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>XtremeLOVE | Travel</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" > <!--FONT AWESOME 5 CONNECT-->
    </head>
    <main>
        <?php include('headerEN.php');?>
        <div class="container_div_large_pakket">
            <div class="large_pakket_div">
                <h1>Large Pakket</h1>   
                <p>On this journey you will stay in the luxury hotel "Park Hyatt Sydney" in Sydney. <br>This top deluxe Hotel We have a 
                beautiful apartment with,<br>
                1 bedroom, a large bath with a shower, a mini fridge and a safe to put your belongings in when for when you leave the apartment <br>
                inside the hotel you have, good wifi, a swimming pool and another large sauna aswel!<br>
                You are going to do some exciting but also fun things on this trip. You will get a private yacht for you to chill on,<br>
                This yacht includes 2 jet ski's, which you can use independently, don't forget to put on a life vest!!<br>
                We will also take you on a helicopter tour among the city and watch the sunset while we are fying!<br>
                To finish the adventure nice and well, you have one more reservation at the ALTITUDE RESTAURANT with a table for two,<br>
                Here you have a beautiful view over the sea and the well-known opera house.<br>
                look below for some pictures from the hotel</p>
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
            <button class="btn">Order!!</button>

        </div>
        
        <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="IMAGE/Hotel woonkamer.webp" style="width:100%">
        <div class="text"><strong>Living room</strong></div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="IMAGE/hotel eettafel.webp" style="width:100%">
        <div class="text"><strong>Diner table</strong></div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="IMAGE/Hotel badkamer - Copy.jpg" style="width:100%">
        <div class="text"><strong>Bathroom</strong></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="IMAGE/Hotel balkon.webp" style="width:100%">
            <div class="text"><strong>Balcony</strong></div>
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