<style>
.footer{
  margin-bottom: -10vh;
    background:#333;
    font-size: 63%;
}

.footer .box-container{
    display: flex;
    gap:1.5rem;
}

.footer .box-container .box{
    padding:1rem 0;
    flex:1 1 25rem;
}

.footer .box-container .box h3{
    font-size: 1.5rem;
    padding:.7rem 0;
    color:#fff;
}

.footer .box-container .box p{
    font-size: 1rem;
    padding:.7rem 0;
    color:#eee;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    padding:.7rem 0;
    color:#eee;
}

.footer .box-container .box a:hover{
    color:var(--pink);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    padding:2rem 1rem;
    margin-top: 1rem;
    font-weight: normal;
    color:#fff;
    border-top: .1rem solid rgba(255,255,255,.2);
}

.footer .credit span{
    color:var(--pink);
}
</style>

<section class="footer"><!--FOOTER SECTION START-->
 <div class="box-container">
    <div class="box">
        <h3>Over Ons</h3>
        <p>XtremeLOVE is een nieuw gemaakte reiswebsite, ga op avontuur met je dierbaren en creëer een onvergetelijke tijd.</p>
    </div>
        <div class="box">
            <h3>Wij zijn momenteel gevestigd in</h3>
            <a href="https://www.google.nl/maps/place/Landstede+Harderwijk/@52.3388107,5.6196704,20.13z/data=!3m1!5s0x47c633dc0b45e4fd:0x5be7e2c9131cd52b!4m5!3m4!1s0x47c633dbf6bf346f:0xdcefaa3c8782a80d!8m2!3d52.3388152!4d5.6195746" target="_blank">Nederland</a>
        </div>
        <div class="box">
            <h3>Snelle Links</h3>
            <a href="#home">Home</a>
            <a href="#">Pakketten</a>
            <a href="#">Contact</a>
        </div>
        <div class="box">
            <h3>Volg ons</h3>
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Instagram</a>
            <a href="#" target="_blank">Twitter</a>
        </div>
    </div>
    <h1 class="credit"> Gemaakt met <span>&#10084;</span> door <span> SD21-5 </span> | Copyright © 2021, Xtreme<span>LOVE</span>. Alle rechten voorbehouden.</h1>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> <!--TEAM SLIDER-->
    <script src="script.js"></script><!--CONNECTING JS FILE-->
