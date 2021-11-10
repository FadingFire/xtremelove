<style>
``@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --pink:#fc5a8d;
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0;
    padding:0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .2s linear;
}

*::selection{
    background:var(--pink);
    color: #fff;
}

header{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
}

/* WEBKIT SCROLLBAR */
::-webkit-scrollbar {
    background-color: transparent;
    width: 10px;
    height: 10px;
    margin-left: 10px !important;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #fc5a8d;
}

::-webkit-scrollbar-track {
    background-color: transparent;
    border-radius: 10px;
}

/* WEBSITE CSS START */
section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    padding:2.5rem 0
}

.heading span{
    font-size: 3.5rem;
    background:rgba(255, 55, 155, 0.2);
    color: var(--pink);
    border-radius: .5rem;
    padding: .2rem 1rem;
}

.heading span.space{
    background:none;
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    background: var(--pink);
    color: #fff;
    padding: .8rem 3rem;
    border: .2rem solid var(--pink);
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background: rgba(255, 55, 155, 0.2);
    color: var(--pink);
}

header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #333;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    padding: 2rem 9%;
    overflow: hidden;
}

header .logo-afbeelding img{
    max-height: 13vh;
    margin-right: 5vw;
}

header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-transform: uppercase;
}

header .logo span{
    color: var(--pink);
}

header .navbar a{
    color: #fff;
    font-size: 2rem;
    margin: 0 .8rem;
}

header .navbar a:hover{
    color: var(--pink);
}

header .icons i{
    font-size: 2.5rem;
    color: #fff;
    cursor: pointer;
    margin-right: 2rem;
}

header .icons i:hover{
    color: var(--pink);
}

header .search-bar-container{
    position: absolute;
    top: 100%;
    left: 0;
    right:0;
    padding:1.5rem 2rem;
    background:#333;
    border-top: .1rem solid rgba(255,255,255,.2);
    display: flex;
    align-items: center;
    z-index: 1001;
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active{
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .search-bar-container #search-bar{
    width:100%;
    padding:1rem;
    text-transform: none;
    color:#333;
    font-size: 1.7rem;
    border-radius: .5rem;
}

header .search-bar-container label{
    color:#fff;
    cursor: pointer;
    font-size: 3rem;
    margin-left: 1.5rem;
}

header .search-bar-container label:hover{
    color:var(--pink);
}
``
</style>


<header><!--HEADER SECTION START-->

    <div class="logo-afbeelding">
        <img src="Images/xtreemlovelogo2.png" alt="">
    </div>

    <a href="" class="logo" >Xtreme<span>LOVE</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#">Pakketten</a>
        <a href="#">Contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
        EN<a href="Reisoverzicht-EN.php"><i class="fas fa-flag-usa"></i></a><!--CONNECT DUTCH / ENGLISH PAGE-->
        NL<a href="Reisoverzicht-NL.php"><i class="fas fa-globe"></i></a><!--CONNECT DUTCH / ENGLISH PAGE-->
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Zoeken...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>
