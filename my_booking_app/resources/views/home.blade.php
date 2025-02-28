<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Despre Noi</title>
</head>


<body style="background-image: url(bgk.jpg);">





    <style>
         .image_master {
     margin-left: auto;
     margin-top: -46px;
     width: 70%;
     max-width: 100%;
     display: flex;
     justify-content: center;



     /* align-items: center;
                display: flex;
                width: 1000px;
                max-width: 100%;
                height: auto;
                margin-top: -47px;
                margin-left: 465px;
                gap: 0px; */
 }


 .maste_describe_img {
     width: 100%;
     height: auto;
     object-fit: cover;
 }

 .img_after_btn {
     margin-top: 1%;
     margin-left: 14%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .img_terminal {
     margin-top: -14%;
     margin-left: 37%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }


 .img_logo {
     margin-top: -14.3%;
     margin-left: 60%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .img_support {
     margin-top: -13%;
     margin-left: 84.5%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .txtrus h2 {
     margin-top: -5px;
     margin-left: 12%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txtrus p {
     line-height: normal;
     margin-top: 10px;
     margin-left: 12%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .txt_terminal h2 {
     margin-top: 2px;
     margin-left: 36%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txt_terminal p {
     line-height: normal;
     margin-top: 10px;
     margin-left: 38.5%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .txt_logo h2 {
     margin-top: -24px;
     margin-left: 57.5%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txt_logo p {
     line-height: normal;
     margin-top: 10px;
     margin-left: 60.5%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .txt_support h2 {
     margin-top: -25px;
     margin-left: 82%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txt_support p {
     line-height: normal;
     margin-top: 10px;
     margin-left: 85%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }



 .container {
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding: 20px;
 }


 .content {
     font-size: 34px;
     font-weight: 700;
     max-width: 50%;
     text-align: left;
     margin-top: -41%;
     margin-left: 11%;
     color: #6b6b6b;
 }

 .btn {
     font-size: 34px;
     font-weight: 700;
     max-width: 100%;
     text-align: left;
     margin-top: 1%;
     margin-left: 7%;
     color: #6b6b6b;
 }

 .content p {
     line-height: 26px;
     font-size: 17px;
     max-width: 50%;
     text-align: left;
     margin-top: 1%;
     margin-left: 1%;
 }


 .black_section {
            margin-top: 2%;
            width: 100%;
            /* height: 96%; */
            flex: 1;
            background-color: black;
            color: white;
            padding: 12%;
        }


        .white_section {
            margin-top: 2%;
            width: 100%;
            /* height: 96%; */
            flex: 1;
            background-color: black;
            color: white;
            padding: 12%;
        }

        .img_key {
            float: left;
            width: 20%;
            height: 100%;
            margin-top: -14%;
            margin-left: -16%;
            margin-right: 6%;
        }

        .img_valic {
            float: left;
            width: 20%;
            height: 100%;
            margin-top: -2%;
            margin-left: -9%;
            margin-right: 11%;
        }

        .img_perie {
            float: right;
            width: 19%;
            height: 100%;
            margin-top: 0%;
            margin-left: -9%;
            margin-right: 2%;
        }

        .img_ciocan {
            float: right;
            width: 20%;
            height: 100%;
            margin-top: -15%;
            margin-left: -16%;
            margin-right: -27%;
        }

            .black_section h2 {
        font-size: 1.9vw;
        margin-top: -136px;
        max-width: 100%;
        display: flex;
        justify-content: center;
        font-weight: 700;
    }

            .black_section p {
            margin-right: 24%;
            font-size: 1.4vw;
            margin-top: 7px;
            max-width: 100%;
            display: flex;
            justify-content: unset;
        }



        .black_section span {
            margin-left: -20%;
            margin-right: 2%;
        }

 @media screen and (max-width: 1400px) {

     .image_master {
         width: 100%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }


     .master_describe_img {
         width: 100%;
         height: auto;
         object-fit: cover;
     }

     .img_after_btn {
         margin-top: 9px;
         margin-left: 38%;
         width: 20%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }

     .img_terminal {
         margin-top: 9px;
         margin-left: 38%;
         width: 20%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }

     .img_logo {
         margin-top: 9px;
         margin-left: 38%;
         width: 20%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }

     .img_support {
         margin-top: 9px;
         margin-left: 38%;
         width: 20%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }

     .content {
         font-size: 34px;
         font-weight: 700;
         max-width: 100% !important;
         text-align: left !important;
         margin-top: -20% !important;
         margin-left: 4% !important;
         color: #6b6b6b;
     }

     .content p {
         line-height: 26px;
         font-size: 17px;
         max-width: 100%;
         text-align: left;
         margin-top: 1%;
         margin-left: 0%;
     }

     .btn {
         font-size: 34px;
         font-weight: 700;
         max-width: 100%;
         text-align: left;
         margin-top: 1%;
         margin-left: 0%;
         color: #6b6b6b;
     }


     .txtrus h2 {
         text-align: center;
         margin-top: -5px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
     }

     .txtrus p {
         margin-top: 0px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         text-align: center;
     }

     .txt_terminal h2 {
         text-align: center;
         margin-top: -5px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
     }

     .txt_terminal p {
         margin-top: 0px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         text-align: center;
     }

     .txt_logo h2 {
         text-align: center;
         margin-top: -5px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
     }

     .txt_logo p {
         margin-top: 0px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         text-align: center;
     }

     .txt_support h2 {
         text-align: center;
         margin-top: -5px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
     }

     .txt_support p {
         margin-top: 0px;
         margin-left: 2%;
         width: 90%;
         max-width: 100%;
         display: flex;
         justify-content: center;
         text-align: center;
     }


     .black_section h2 {
         font-size: 1.9vw;
         margin-top: -80px;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
     }

     .black_section p {
         margin-right: 24%;
        font-size: 1.4vw;
        margin-top: 7px;
        max-width: 100%;
        display: flex;
        justify-content: unset;
        flex-direction: column;
     }



     .black_section span {
         display: flex;
        margin-left: -20%;
        margin-right: 2%;
        flex-direction: row;
        justify-content: center;
     }

 }
       
    </style>












    <header id="menu_head" class="bg-transparent py-4">
        <nav class="flex items-center justify-center px-4">
            <!-- Logo -->
            <img src="logo.png" alt="LOGOTIP" class="w-24 h-24 mr-20">

            <!-- Meniu pentru desktop și tablete (largi) -->
            <div class="font-montserrat hidden md:flex space-x-10 ml-6" style="align-items: center;">
                <a href="/" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Despre Noi</a>
                <a href="/about" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Servicii de Construcție</a>
                <a href="/agents" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Proiectele Noastre</a>
                <a href="/services" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Sustenabilitate și Inovație</a>
                <!-- Adaugă stiluri pentru aliniere și spațiu -->
                <a href="tel:+37379804176" class="shadow-custom-shadow ml-16 px-6 py-2 rounded-full bg-custom-green text-black text-sm font-semibold  inline-flex items-center space-x-2">
                    <span>Sună Acum</span>
                    <i class="fa fa-phone"></i>
                </a>
            </div>



            <!-- Butonul hamburger pentru mobil -->
            <div class="md:hidden flex items-center ml-6">
                <button id="hamburger-btn" class="text-gray-800 text-2xl focus:outline-none">
                    &#9776; <!-- Simbolul pentru meniul hamburger -->
                </button>
            </div>
        </nav>

        <!-- Meniul de navigare pe mobil (ascuns inițial) -->
        <div style="background:none;" id="mobile-menu" class="font-montserrat md:hidden hidden bg-white text-center py-4">
            <a href="/" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Despre Noi</a>
            <a href="/about" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Servicii de Construcție</a>
            <a href="/agents" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Proiectele Noastre</a>
            <a href="/services" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Sustenabilitate și Inovație</a>
            <a href="tel:+37379804176" class="shadow-custom-shadow ml-15 px-6 py-2 rounded-full bg-custom-green text-black text-sm font-semibold inline-flex items-center space-x-2"><span>Sună Acum</span>
                <i class="fa fa-phone"></i></a>
        </div>
    </header>


    <script>
        // Script for hamb menu
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const callNowBtn = document.getElementById('call-now-btn');

        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>






    <div class="conteiner">

        <div class="image_master">
            <img src="mester.png" alt="Descriere imagine" class="master_describe_img">
        </div>

        <div class="content">
            <h2>Punem fundația <span style="color:#00EF18;">pentru visele tale</span>, <br>construind cu pasiune, <br> precizie și durabilitate fiecare proiect!</h2>
            <p class="font-montserrat">Calitate la fiecare pas, <br> de la planificare până la ultimul detaliu.</p>
        </div>


        <div class="btn">
            <a href="tel:+37379804176" class="shadow-custom-shadow ml-16 px-10 py-4 rounded-full bg-custom-green text-black text-sm font-semibold hover:bg-custom-green2 inline-flex items-center space-x-2">
                <span>Află mai multe</span>
                <i class="fa fa-phone"></i>
            </a>
        </div>

        <div class="img_after_btn">
            <img src="Russia.png" alt="Descriere imagine" class="img_after_btn_img">
        </div>

        <div class="txtrus">
            <h2>EXPERIENȚĂ ÎN CONSTRUCȚII</h2>
            <p class="font-bebas">Peste 10 ani de experiență și numeroase proiecte inovatoare finalizate.</p>
        </div>


        <div class="img_terminal">
            <img src="terminal.png" alt="Descriere imagine" class="img_terminal_img">
        </div>

        <div class="txt_terminal">
            <h2>EFICIENȚĂ MAXIMĂ</h2>
            <p class="font-bebas">Finalizarea proiectelor în timp record, respectând bugetul stabilit.</p>
        </div>

        <div class="img_logo">
            <img src="logo.png" alt="LOGOTIP">
        </div>

        <div class="txt_logo">
            <h2>CALITATE OPTIMĂ</h2>
            <p class="font-bebas">15% reducere la materiale de construcție pentru parteneri.</p>
        </div>

        <div class="img_support">
            <img src="support.png" alt="Descriere imagine" class="img_support_img">
        </div>

        <div class="txt_support">
            <h2>SUPORT COMPLET</h2>
            <p class="font-bebas">Asistență și îndrumare pe parcursul tuturor etapelor proiectului.</p>
        </div>



    </div>


    <style>
.slideshow-container {
    position: relative;
    width: 82%;
    max-width: 100%;
    margin: -13% auto;
    overflow: hidden;
    aspect-ratio: 1.78; /* Adjust based on the aspect ratio of your image */
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    transition: opacity 1s ease-in-out;
    position: relative;
}

.slide img {
    width: 100%;
    height:42%;
    object-fit: cover; /* Ensures the images fill the container while maintaining aspect ratio */
    display: block;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #00ff00;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 50%;
}

.prev { left: 10px; }
.next { right: 10px; }

.dots {
    position: absolute;
    margin-top: 13%;
    margin-left: 54%;
    transform: translateX(-50%); /* Centers the dots */
    text-align: center;
    padding: 10px;
    z-index: 1;
}

.dot {
    height: 12px; /* Increased dot size */
    width: 12px; /* Increased dot size */
    margin: 5px;
    background-color: #00ff00;
    display: inline-block;
    border-radius: 50%;
    cursor: pointer;
}

.active {
    background-color:rgba(61, 65, 61, 0.88);
}

@media (max-width: 768px) {
    .prev, .next { display: none; }
}


    </style>

    <div class="black_section" style="background-image:url(backneg.png); opacity:100%;">

        <img src="cheie.png" alt="Descriere imagine" class="img_key">
        <img src="valic.png" alt="Descriere imagine" class="img_valic">
        <img src="perie.png" alt="Descriere imagine" class="img_perie">
        <img src="ciocan.png" alt="Descriere imagine" class="img_ciocan">


        <h2 class="text-custom-green font-bebas">Despre noi</h2>
            <p class="font-bebas"><span style="color:#00EF18;">Doricons</span> este o companie de construcții care își 
            cunoaște foarte bine domeniul și a finalizat deja peste 200 de proiecte în decurs de 2 ani. <br> 
            Oferim o gamă completă de servicii și suntem recomandați de clienții noștri fideli.</p>


    </div>

    <div class="slideshow-container">
        <div class="slides">
            <div class="slide"><img src="cons1.jpeg" alt="Slide 1"></div>
            <div class="slide"><img src="cons2.jpeg" alt="Slide 2"></div>
            <!-- <div class="slide"><img src="cons3.jpeg" alt="Slide 3"></div> -->
            <div class="slide"><img src="cons4.jpeg" alt="Slide 4"></div>
            <div class="slide"><img src="cons5.jpeg" alt="Slide 5"></div>
            <div class="slide"><img src="cons6.jpeg" alt="Slide 6"></div>
            <div class="slide"><img src="cons7.jpeg" alt="Slide 7"></div>
            <div class="slide"><img src="cons8.jpeg" alt="Slide 8"></div>
            <div class="slide"><img src="cons9.jpeg" alt="Slide 9"></div>
            <div class="slide"><img src="cons10.jpeg" alt="Slide 10"></div>
            <div class="slide"><img src="cons11.jpeg" alt="Slide 11"></div>
            <!-- <div class="slide"><img src="cons12.jpeg" alt="Slide 12"></div> -->
            <div class="slide"><img src="cons13.jpeg" alt="Slide 13"></div>
        </div>
        <button class="prev">&#8592;</button>
        <button class="next">&#8594;</button>
    </div>
    <div class="dots"></div>


    <div class="white_section" style="background-image: url(bgk.jpg); opacity:100%;">

        
    </div>

     <script>
        const slides = document.querySelector('.slides');
        const slideImages = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const dotsContainer = document.querySelector('.dots');
        let currentIndex = 0;
        let interval;

        function createDots() {
            slideImages.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                dot.dataset.index = index;
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });
            updateDots();
        }

        function updateDots() {
            document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
            document.querySelectorAll('.dot')[currentIndex].classList.add('active');
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlide();
        }

        function updateSlide() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slideImages.length;
            updateSlide();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slideImages.length) % slideImages.length;
            updateSlide();
        }

        function startAutoSlide() {
            interval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(interval);
        }

        nextButton.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        prevButton.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        document.querySelector('.slideshow-container').addEventListener('touchstart', handleTouchStart, false);
        document.querySelector('.slideshow-container').addEventListener('touchmove', handleTouchMove, false);
        
        let xStart = null;

        function handleTouchStart(event) {
            xStart = event.touches[0].clientX;
        }

        function handleTouchMove(event) {
            if (!xStart) return;
            let xEnd = event.touches[0].clientX;
            let xDiff = xStart - xEnd;
            if (xDiff > 50) {
                nextSlide();
            } else if (xDiff < -50) {
                prevSlide();
            }
            xStart = null;
        }

        createDots();
        startAutoSlide();
    </script>





    <!-- <footer>
        <p>&copy; 2024 My Booking App. All rights reserved.</p>
    </footer> -->
</body>

</html>