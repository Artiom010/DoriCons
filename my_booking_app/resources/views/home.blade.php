<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Despre Noi</title>
</head>


<body>





    <style>

    body {
    background-image: url('bgk.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Opțional, pentru un efect de parallax */
}

         .image_master {
     position: relative;
     z-index: 5;
     margin-left: auto;
     margin-top: -120px;
     margin-bottom: 54px;
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
     margin-bottom: -23px;
     margin-top: 1%;
     margin-left: 14%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .img_terminal {
     margin-top: -13.3%;
     margin-left: 37%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }


 .img_logo {
    z-index: 10;
    position: relative;
     margin-top: -12.8%;
     margin-left: 60%;
     width: 10%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .img_support {
     z-index: 10;
     position: relative;
     margin-top: -12.7%;
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
     margin-bottom: 30px;
    line-height: normal;
    margin-top: 9px;
    margin-left: 13%;
    width: 15%;
    max-width: 100%;
    display: flex;
    justify-content: center;
 }

 .txt_terminal h2 {
     margin-top: 2px;
     margin-left: 35.5%;
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
    z-index: 10;
    position: relative;
     margin-top: -24px;
     margin-left: 57.1%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txt_logo p {
    z-index: 10;
    position: relative;
     line-height: normal;
     margin-top: 10px;
     margin-left: 60.5%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
 }

 .txt_support h2 {
    z-index: 10;
    position: relative;
     margin-top: -25px;
     margin-left: 81.6%;
     width: 15%;
     max-width: 100%;
     display: flex;
     justify-content: center;
     font-weight: 700;
 }

 .txt_support p {
    z-index: 10;
    position: relative;
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
            position: relative;
            z-index: 10;
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
            margin-right: 0%;
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
            margin-right: 13%;
            font-size: 1.4vw;
            margin-top: 7px;
            margin-bottom: 100px;
            max-width: 100%;
            display: flex;
            justify-content: unset;
        }



        .black_section span {
            margin-left: -20%;
            margin-right: 2%;
        }



        .slideshow-container {
    position: relative;
    z-index: 15;
    width: 82%;
    max-width: 100%;
    margin: -13% auto;
    overflow: hidden;
    aspect-ratio: 1.78;
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
    padding: 13px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 38%;
}

.prev { left: 10px; }
.next { right: 10px; }

.dots {
    position: absolute;
    margin-top: 13%;
    margin-left: 50%;
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

#dori{
    margin-right: 0%;
    font-size: 1.4vw;
    margin-top: 28px;
    margin-bottom: 11px;
    max-width: 100%;
    display: flex;
    color: #00EF18;
    justify-content: center;
}

@media (max-width: 768px) {
    .prev, .next { display: none; }
}






    .founders_phone {
    display: none;
}

.founders_phone img {
     display: none;
}


        

.business-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    max-width: 90%;
    margin: 20% auto;
    border-radius: 10px;
 }

.content_after {
    max-width: 50%;
}

.fundation_comp h1 {
    margin-bottom: 10px;
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
}

.highlight {
    color: #00EF18;
}

.sub-text {
    font-size: 18px;
    color: #666;
    font-weight: bold;
    text-transform: uppercase;
}

.description {
    font-family: serif;
    font-size: 18px;
    color: #000000;
    line-height: 1.6;
}

.cta-button {
    margin: 4% 55% 1% 14%;
    background: #00EF18;
    border: none;
    padding: 12px 6px;
    font-size: 16px;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    text-transform: uppercase;
}

.cta-button:hover {
    background: #00cc00;
}

.founders {
    position: relative;
    max-width: 40%;
    text-align: center;
}

.founders img {
    width: 80%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.founders-info {
    /* display: flex; */
    position: absolute;
    bottom: -54px;
    left: 40%;
    right: -8%;
    transform: translateX(-50%);
    background: #ffffff;
    color: #000000;
    padding: 8px 15px;
    font-size: 13px;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
}

.founders-info span {
    color: #00EF18; /* Verde */
    font-weight: bold;
}




.why-partners {
  background: #0e0e0e; 
  color: #fff;         
  padding: 60px 20px;
  text-align: center;
  font-family: sans-serif;
}

.why-partners h2 {
    font-family: sans-serif;
  font-size: 36px;
  margin-bottom: 40px;
  font-weight: 700;
}

.why-partners h2 span {
  color: #00ff00;
}


.why-content {
  position: relative;
    max-width: 1300px;
    margin: 0 auto;
    height: 490px;
}


.center-col {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.box-image {
  width: 470px;

}

.feature {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px;
}

.circle {
    background-color: #00EF18;
    width: 60px;
    height: 60px;
    border: 2px solid #00EF18;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    color: rgb(61 65 61);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.feature p {
  color: #fff;
  text-align: center;
  max-width: 261px;
  line-height: 1.4;
}


.left-col .feature:nth-child(1) {
  top: -8%;
  left: 4%;
}
.left-col .feature:nth-child(2) {
  top: 40%;
  left: -2%;
}
.left-col .feature:nth-child(3) {
  top: 78%;
  left: 4%;
}

.right-col .feature:nth-child(1) {
  top: -8%;
  right: 4%;
}
.right-col .feature:nth-child(2) {
  top: 40%;
  right: -2%;
}
.right-col .feature:nth-child(3) {
  top: 78%;
  right: 4%;
}

.left-col .feature:nth-child(1)::before {
  content: "";
    position: absolute;
    width: 149px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 129px;
    left: 204px;
    transform: rotate(31deg);
    transform-origin: left center;
}

.left-col .feature:nth-child(2)::before {
         content: "";
    position: absolute;
    width: 121px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 92px;
    left: 280px;
    transform: rotate(7deg);
    transform-origin: left center;
}

.left-col .feature:nth-child(3)::before {
        content: "";
    position: absolute;
    width: 159px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 77px;
    left: 293px;
    transform: rotate(-23deg);
    transform-origin: left center;
}

.right-col .feature:nth-child(1)::before {
    content: "";
    position: absolute;
    width: 150px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 128px;
    right: 234px;
    transform: rotate(-25deg);
    transform-origin: right center;
}

.right-col .feature:nth-child(2)::before {
      content: "";
    position: absolute;
    width: 140px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 103px;
    right: 278px;
    transform: rotate(2deg);
    transform-origin: right center;
}

.right-col .feature:nth-child(3)::before {
    content: "";
    position: absolute;
    width: 148px;
    height: 1px;
    background: #00ff00;
    border-radius: 2px;
    top: 80px;
    right: 279px;
    transform: rotate(34deg);
    transform-origin: right center;
}


.call-section {
    position: relative;
    z-index: 10;
    background: #1c1c1c;
    border-radius: 12px;
    padding: 71px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 64%;
    margin: 51px auto;
    color: #fff;
    font-family: 'Arial', sans-serif;
}

.call-content {
    position: relative;
     z-index: 10;
  flex: 1;
  margin-right: 40px;
}

.call-content h2 {
position: relative;
    z-index: 10;
    font-size: 32px;
    margin-right: -2%;
    margin-left: 5%;
    margin-bottom: 20px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 1.2;
}

.call-content p {
    position: relative;
    z-index: 10;
    font-size: 16px;
    line-height: 1.6;
    margin-left: 5%;
    margin-right: -10%;
    margin-bottom: 20px;
    max-width: 450px;
}

.phone-line {
    position: relative;
     z-index: 10;
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  margin-left: 5%;
}

.phone-icon {
  width: 24px;
  position: relative;
     z-index: 10;
  height: 24px;
  fill: #00ff00;                   
  margin-right: 10px;
}

.phone-number {
    position: relative;
     z-index: 10;
  font-size: 18px;
  font-weight: bold;
}

.callback-btn {
margin-left: 8%;
    position: relative;
    z-index: 10;
    display: inline-block;
    background: #00EF18;
    color: white;
    text-decoration: none;
    font-weight: 600;
    padding: 15px 30px;
    border-radius: 40px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background 0.3s ease;
}

.callback-btn:hover {
  background: #00cc00;
}

.call-image {
  flex-shrink: 0;
}

.call-image img {
    margin: 0% -6% -14% 5%;
    position: relative;
    z-index: 5;
    max-width: 100%;
    display: block;
}


.cities-box {
  border-radius: 10px;
  width: 500px;               /* lățimea totală a blocului */
  margin: 0px auto;          /* centrare pe pagină */
  padding: 20px;
  border: 1px solid #ccc;     /* contur subțire */
  /* background: none;        fundal deschis, dacă dorești */
}


/* Fiecare rând conține 2 coloane: stânga și dreapta */
.city-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;        /* spațiu între rânduri */
}

/* Ultimul rând poate să nu mai aibă spațiu jos */
.city-row:last-child {
  margin-bottom: 0;
}

/* Fiecare coloană din rând (oraș) */
.city-col {
  display: flex;
  flex-direction: column;
  align-items: center;        /* imaginea și textul la centru */
  width: 45%;                 /* împărțim rândul ~în două părți egale */
}

/* Imaginile stemelor */
.city-col img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  margin-bottom: 10px;
}

/* Numele orașului */
.city-col p {
  font-size: 16px;
  color: #333;
  text-align: center;
}
/* Containerul principal */
.priority-cities {
 
  padding: 50px 30px;
  max-width: 1200px;
  margin: 50px auto;
  font-family: Arial, sans-serif;
  color: #333;
}

/* Titlul secțiunii */
.priority-cities h2 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 40px;
  font-weight: bold;
}

/* Evidențierea cuvântului „ПРИОРИТЕТНЫЕ” în verde */
.priority-cities h2 span {
  color: #00ff00;
}

/* Container pentru cele două coloane */
.priority-content {
  display: flex;
  gap: 40px;
  align-items: flex-start;
  justify-content: center; /* dacă vrei să fie centrat pe orizontală */
  flex-wrap: wrap;         /* permite reorganizarea pe ecrane înguste */
}

/* Lista de orașe (coloana stângă) */
.cities-list {
  display: flex;
  flex-direction: column;
  align-items: center;  /* centrează fiecare city-item pe orizontală */
  gap: 20px;            /* spațiu vertical între orașe */
  flex: 0 0 auto;       /* menține lățimea conținutului fără să se întindă */
}

/* Fiecare element (oraș) */
.city-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.city-item img {
  width: 70px;
  height: 70px;
  object-fit: contain;
  margin-bottom: 10px;
  filter: grayscale(100%); /* imagini alb-negru, ca în exemplu */
}

.city-item p {
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

/* Coloana dreaptă: text + buton */
.cities-text {
  flex: 1;               /* ocupă restul spațiului */
  max-width: 600px;      /* lățime maximă a textului */
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;             /* spațiu între paragrafe și buton */
}

/* Paragrafele explicative */
.cities-text p {
  font-size: 16px;
  line-height: 1.6;
  color: #555;
}

/* Butonul verde */
.btn-green {
    margin: 1% 2% 1% 35%;
    display: inline-block;
    background: #00ff00;
    color: white;
    text-decoration: none;
    font-weight: 600;
    padding: 15px 30px;
    border-radius: 30px;
    transition: background 0.3s ease;
    max-width: fit-content;
}

.btn-green:hover {
  background: #00EF18;
}



.after-contract {
  padding: 60px 20px;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
  font-family: sans-serif; 
  color: #000;
}

.after-contract h2 {
  font-size: 32px;
  line-height: 1.3;
  margin-bottom: 50px;
  font-weight: bold;
}

.after-contract h2 span {
  color: #00ff00; 
}

.benefit-list {
  display: flex;
  flex-direction: column; 
  gap: 50px;              
  align-items: center;
  margin-bottom: 40px;
}

.benefit {
  display: flex;
  align-items: center;
  gap: 30px;
  max-width: 1000px;
  width: 100%;
  justify-content: center;
  flex-wrap: wrap;
  flex-direction: row-reverse; 
}

.benefit_two {
  display: flex;
  align-items: center;
  gap: 30px;
  max-width: 1000px;
  width: 100%;
  justify-content: center;
  flex-wrap: wrap;
}

.benefit-number {
  font-size: 48px;
  font-family: serif;
  color: #C6C6C6;
  flex: 0 0 auto;
}

.benefit-content {
  flex: 1 1 300px; 
  min-width: 280px;
  text-align: left;
}

.benefit-content h3 {
  font-size: 20px;
  margin-bottom: 10px;
  font-weight: bold;
}

.benefit-content p {
  font-size: 16px;
  line-height: 1.5;
  color: #555;
}

.benefit-image {
  margin: 0% 1% -6% 1%;
  flex: 0 0 auto;
  max-width: 300px;
}
.benefit-image_house {
  flex: 0 0 auto;
  max-width: 300px;
}
.benefit-image_number {
  flex: 0 0 auto;
  max-width: 300px;
}

.benefit-image img {
  width: 100%;
  height: auto;
  display: block;
}

.benefit-image_house img {
  border-radius: 10px;  
  width: 100%;
  height: auto;
  display: block;
}

.benefit-image_number img {
  border-radius: 10px;  
  width: 100%;
  height: auto;
  display: block;
}



.btn-green_region_supported {
  display: inline-block;
  background: #00ff00;
  color: white;
  text-decoration: none;
  font-weight: 600;
  padding: 15px 30px;
  border-radius: 35px;
  transition: background 0.3s ease;
  text-transform: uppercase;
}

.btn-green_region_supported:hover {
  background: #00EF18;
}

.stages {
  background: #0f0f0f;
  padding: 60px 20px;
  font-family: Arial, sans-serif;
  color: #fff;
  text-align: center;
}

.stages h2 {
  font-size: 32px;
  color: #00ff00;    
  margin-bottom: 50px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
}

 
 .timeline-row {
  position: relative;
  display: flex;
  justify-content: space-around;   
   margin-bottom: 40px;
  width: 100%;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

 .timeline-line {
  position: absolute;
  top: 10%;
  left: 5%;
  width: 90%;
  height: 2px;
  background: #555;
  border-radius: 1px;
  z-index: 1;
}

 .step {
  position: relative;
  z-index: 2; 
  width: 200px;  
  text-align: center;
}

.step .dot {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #ccc;  
  margin: 0 auto 10px;
}

.step p {
  font-size: 14px;
  line-height: 1.4;
  margin: 0;
  color: #fff;
}



.final-step {
  position: relative;
  margin: 50px 0px 50px 283px;
  width: 220px;        
  text-align: center;
}

.final-line {
  position: absolute;
  top: 19%;
  left: 0;
  width: 100%;
  height: 2px;
  background: #555;
  border-radius: 1px;
  z-index: 1;
}

.final-dot {
  position: relative;
  z-index: 2;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #00ff00;   
     margin: 0px 0px 10px 202px;;
}


.final-step p {
  font-size: 14px;
  margin: 0;
}

.final-icon {
  position: absolute;
    top: -18px;
    left: 88%;
    transform: translateX(-50%);
    font-size: 16px;
    color: #00ff00;    
}

        .img_key_stages {
            float: left;
            width: 13%;
            height: 100%;
            margin-top: -3%;
            margin-left: 0%;
            margin-right: -15%;
        }

        .img_valic_stages {
            float: left;
            width: 13%;
            height: 100%;
            margin-top: -14%;
            margin-left: 7%;
            margin-right: 0%;
        }

        .img_perie_stages {
                float: right;
                width: 13%;
                height: 100%;
                margin-top: -11%;
                margin-left: -9%;
                margin-right: 12%;
        }

        .img_ciocan_stages {
                float: right;
                width: 13%;
                height: 100%;
                margin-top: 0%;
                margin-left: -16%;
                margin-right: 2%;;
        }

        .step-fin{
            display: none;
        }



         .qa-section {
  padding: 40px 20px;
  max-width: 60%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  color: #333;
}

.qa-section h2 {
    font-family: auto;
  text-align: center;
  font-size: 28px;
  margin-bottom: 20px;
}


.qa-list {
      font-family: serif;
    font-size: x-large;
    list-style: none;
    padding: 0;
    margin: 0;
}


.qa-list li {
  border-bottom: 1px solid #ccc;
  padding: 15px 0;
}


.question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.question:hover {
  color: #00EF19;
}


.question span:first-child {
  font-weight: bold;
  text-transform: uppercase;
}




.question span.plus {
  font-size: 36px;

    cursor: pointer;
}


.answer {
  display: none;
  padding-top: 10px;
}

.answer ul {
  list-style-type: disc;
  margin-left: 20px;
}

.answer li {
    color:rgb(41, 41, 41);
  margin-bottom: 5px;
      font-size: 23px;
}

.answer a {
       font-size: 20px;
}


.site-footer {
  background: #0f0f0f; 
  color: #fff;        
  padding: 40px 20px;
  font-family: Arial, sans-serif;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap; 
}

.footer-col {
  flex: 1;
  min-width: 220px; 
  margin: 10px 20px;
}


.footer-logo {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.footer-logo img {
  width: 40%;
  height: auto;
  margin-right: 10px;
}

.footer-logo h3 {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
}

.footer-logo span {
  display: block;
  font-size: 14px;
  color: #ccc; 
}


.footer-col p {
  margin: 5px 0;
  font-size: 14px;
  color:#ffffff40;
}


.social-icons a {
  margin-right: 15px;
}


.privacy-link {
  color: #fff;
  text-decoration: none;
  border-bottom: 1px dashed #fff; 
  font-size: 14px;
}

.privacy-link:hover {
  color: #00ff00; 
}

.phone {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}


.green-link {
  color: #00ff00;
  text-decoration: none;
  font-size: 14px;
}

.green-link:hover {
  text-decoration: underline;
}


@media (max-width: 768px) {
  .footer-content {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .footer-col {
    margin: 10px 0;
  }
}











.green-link {
  color: #00ff00;
  text-decoration: none;
  font-weight: bold;
  cursor: pointer;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 999;
  left: 0; 
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; 
  background-color: rgba(0, 0, 0, 0.6); 
}

.modal-content {
     background-color: #1c1c1c;
    margin: 3% auto;
    padding: 23px;
    border-radius: 8px;
    width: 31%;
    max-width: 100%;
    position: relative;
    color: #fff;
}


.close-btn {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  color: #fff;
  cursor: pointer;
}

.modal-content h3 {
  margin-top: 0;
  font-size: 20px;
  margin-bottom: 10px;
}

.modal-content p {
  font-size: 14px;
  margin-bottom: 20px;
}

#contactForm {
  display: flex;
  flex-direction: column;
}

#contactForm label {
  font-size: 14px;
  margin-bottom: 5px;
  margin-top: 10px;
  color: #ccc;
}

#contactForm input[type="email"],
#contactForm input[type="text"],
#contactForm input[type="tel"] {
  background: #333;
  border: none;
  border-radius: 4px;
  padding: 10px;
  color: #fff;
  margin-bottom: 10px;
}

#contactForm input::placeholder {
  color: #999;
}

.checkbox-row {
  display: flex;
  align-items: center;
  margin: 10px 0;
}

.checkbox-row label {
  margin: 0 0 0 5px;
}

.green-btn {
  background: #00EF19;
  color: white;
  border: none;
  border-radius: 4px;
  padding: 15px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  margin-top: 10px;
}

.green-btn:hover {
  background: #00EF15;
}






 @media screen and (max-width: 1400px) {



    .img_key {
        display: none;      
        /* float: left;
        width: 20%;
        height: 100%;
        margin-top: 17%;
        margin-left: -6%;
        margin-right: -12%; */
        }

        .img_valic {
            float: left;
            width: 20%;
            height: 100%;
            margin-top: 6%;
            margin-left: 0%;
            margin-right: 2%;
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
            display: none;
            /* float: right;
            width: 20%;
            height: 100%;
            margin-top: -15%;
            margin-left: -16%;
            margin-right: -27%; */
        }

     .image_master {
         width: 100%;
         max-width: 100%;
         display: flex;
         justify-content: center;
     }


     .master_describe_img {
        z-index: 5;
        position: relative;
         margin-top: 80px;
         margin-bottom: -52px;
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
        position: relative; 
        z-index: 10;
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
         margin-left: 8%;
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

     

        .black_section {
                padding: 5% 0%;
         
     } 
     .black_section h2 {
        margin-right: 34%;
         font-size: 3.4vw;
         margin-top: 5px;
         max-width: 100%;
         display: flex;
         justify-content: center;
         font-weight: 700;
         color: #00EF18;
     }

     .black_section p {
        margin-bottom: 100px;
         margin-right: 23%;
        font-size: 2.4vw;
        margin-top: 10px;
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

     #dori{
    margin-right: 34% !important;
    font-size: 2.4vw !important;
    margin-top: 13px !important;
    margin-bottom: 11px !important;
    max-width: 100% !important;
    display: flex !important;
    color: #00EF18 !important;
    justify-content: center !important;
    align-items: center !important;
    }
    .slideshow-container {
        position: relative;
        z-index: 15;
        width: 82%;
        max-width: 100%;
        margin: -17% auto -12% auto !important;
        overflow: hidden;
        aspect-ratio: 1.78;
    }


    .dots {
    /* position: absolute !important; */
    margin-top: 13% !important;
    margin-left: 50% !important;
    transform: translateX(-50%) !important;
    text-align: center !important;
    padding: 0% !important;
    z-index: 1 !important;
    }


        .fundation_comp h1 {
        align-items: center;
        margin-bottom: 9px !important;
        font-size: 20px !important;
        font-weight: bold !important;
        text-transform: uppercase !important;
}

    .founders-info {
    display:none;

}



    .founders img {
        display: none;

}


    .content_after {
    max-width: 100% !important;
}

.cta-button {
    margin: 5% -5% 1% -5% !important;
    display: flex !important;
} 

    .cta-button a{
                margin-left: 2% !important;
        padding: 1% !important;
        display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    }







    .founders_phone {
    display: flex !important;
    position: relative !important;
    max-width: 100% !important;
    text-align: center !important;
    justify-content: center !important;
        align-content: center !important;
        align-items: center !important;
}

.founders_phone img {
        margin: -11% 80%;
        display: flex !important;
        width: 70% !important;
        border-radius: 10px !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2) !important;
        
}

.founders-info_phone {
        position: absolute !important;
        bottom: -135px !important;
        left: 49% !important;
        right: -8% !important;
        transform: translateX(-50%) !important;
        background: #ffffff !important;
        color: #000000 !important;
        padding: 8px 15px !important;
        font-size: 13px !important;
        border-radius: 5px !important;
        font-weight: bold !important;
        text-align: center !important;
}

.founders-info_phone span {
    color: #00EF18 !important; 
    font-weight: bold !important;
}

.box-image{
        display: none !important;
    }

    .left-col .feature:nth-child(1)::before{
        display: none !important;
    }
    .left-col .feature:nth-child(2)::before{
        display: none !important;
    }
    .left-col .feature:nth-child(3)::before{
        display: none !important;
    }
    .right-col .feature:nth-child(1)::before{
        display: none !important;
    }
    .right-col .feature:nth-child(2)::before{
        display: none !important;
    }
    .right-col .feature:nth-child(3)::before{
        display: none !important;
    }

    .why-partners{
        margin-top: 40% !important;
    }


      .why-content {
    height: auto; 
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .center-col {
    display: none !important;
  }
  .left-col .feature,
  .right-col .feature {
    position: static; 
    margin: 20px 0 ;
  }
  .left-col .feature::before,
  .right-col .feature::before {
    content: none; 
  }

  .call-section {
    flex-direction: column;
    padding: 30px 20px;
    text-align: center;
  }
  .call-content {
    display: flex;
        margin-right: 30px;
        margin-bottom: 20px;
        flex-direction: column;
        align-items: center;

  }
  .call-image img {
            margin: -3% 0% -11% -5%;
        max-width: 267px;
  }

  .callback-btn{
    margin-left: 15% !important;
  }

  .priority-content {
    flex-direction: column;   
    align-items: center;
  }
  .cities-box{
    width: 350px  !important;

  }
  .cities-text {
    max-width: 100%;
  }

  .btn-green {
    margin: 1% 2% 1% 20%;
  }


      .benefit-image img {
  margin: -50% 0% 0% 0% !important;
  flex: 0 0 auto;
  max-width: 300px;
}
  .benefit {
    flex-direction: column;
    text-align: center;
  }
  .benefit-number {
    margin-bottom: 10px;
  }
  .benefit-content {
    text-align: center;
  }

  .benefit-image_number img{
          margin: -40% 0% 0% 0% !important;

  }


   .timeline-row {
    flex-direction: column;
    margin-bottom: -5px;
  }
  .timeline-line {
        top: auto;
        bottom: 0;
        left: 6%;
        width: 2px;
        height: 98%;
        transform: translateX(-50%);
  }
  .step {
    width: auto;
    margin-bottom: 40px;
  }
  .step .dot {
    margin-left: -88%;
    margin-bottom: 10px;
  }

  .final-dot {
   
  background: #00ff00 !important;    
                  margin: 0px 0px 0px 12px !important;
}

.step-fin p {
    font-size: 14px !important;
    line-height: 0 !important;
    margin: 2% 0% 0% 32% !important;
    color: #fff !important;
}

  .final-step{
        /* margin: 50px -388px 50px 287px; */
    display: none !important;
    }
  .final-step p{
    display: none !important;
        
        /* margin: 0% 0% 0% -165%; */
        /* display: none !important; */
  }


  .step p {
    font-size: 14px;
    line-height: 0;
    margin: -7% 0% 14% 0%;
    color: #fff;
}

.step-fin  {
    display: flex !important;
}



.final-icon {
    position: absolute;
    top: -18px;
    left: 80%;
    transform: translateX(-50%);
    font-size: 16px;
    color: #00ff00;
}

.final-line{
    display: none !important; 
}

  .img_key_stages {
            display: none !important;
        }

        .img_valic_stages {
          display: none !important;

        }

        .img_perie_stages {
                            display: none !important;

        }

        .img_ciocan_stages {
                            display: none !important;

        }

        .qa-section {
  max-width: 100% !important;
}

.question:hover {
  color: black !important;
}


.question span:first-child {
  font-weight: 100;
  text-transform: none;
}

.answer li {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 20px;
}

.answer a{
    font-size: 18px;

}

.modal-content{
    width: 90% !important;
}


 }
       
    </style>












    <header id="menu_head" class="bg-transparent py-4">
        <nav class="flex items-center justify-center px-4">
            <!-- Logo -->
            <img src="logo.png" alt="LOGOTIP" class="w-24 h-24 mr-20">

            <!-- Meniu pentru desktop și tablete (largi) -->
            <div class="font-montserrat hidden md:flex space-x-10 ml-6" style="align-items: center; position: relative; z-index: 10;">
                <a href="/" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Despre Noi</a>
                <a href="/about" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Servicii de Construcție</a>
                <a href="/agents" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Proiectele Noastre</a>
                <a href="/services" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Sustenabilitate și Inovație</a>
                <!-- Adaugă stiluri pentru aliniere și spațiu -->
                <a href="tel:+37379804176"  class="shadow-custom-shadow ml-16 px-6 py-2 rounded-full bg-custom-green text-black text-sm font-semibold  inline-flex items-center space-x-2">
                    <span>Sună Acum</span>
                    <i class="fa fa-phone"></i>
                </a>
            </div>



            <!-- Butonul hamburger pentru mobil -->
            <div class="md:hidden flex items-center ml-6">
                <button id="hamburger-btn" style="position: relative; z-index: 10;" class="text-gray-800 text-2xl focus:outline-none">
                    &#9776; <!-- Simbolul pentru meniul hamburger -->
                </button>
            </div>
        </nav>

        <!-- Meniul de navigare pe mobil (ascuns inițial) -->
        <div style="background:none; position: relative; z-index: 10;" id="mobile-menu" class="font-montserrat md:hidden hidden bg-white text-center py-4">
            <a href="/" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Despre Noi</a>
            <a href="/about" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Servicii de Construcție</a>
            <a href="/agents" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Proiectele Noastre</a>
            <a href="/services" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Sustenabilitate și Inovație</a>
            <a href="tel:+37379804176" style=" box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #00EF19; " class="shadow-custom-shadow ml-15 px-6 py-2 rounded-full bg-custom-green text-black text-sm font-semibold inline-flex items-center space-x-2"><span>Sună Acum</span>
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
            <a href="tel:+37379804176" style=" box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #00EF19; " class="shadow-custom-shadow ml-16 px-10 py-4 rounded-full bg-custom-green text-black text-sm font-semibold hover:bg-custom-green2 inline-flex items-center space-x-2">
                <span>Află mai multe</span>
                <i class="fa fa-phone"></i>
            </a>
        </div>

        <div class="img_after_btn">
            <img src="Russia.png" alt="Descriere imagine" class="img_after_btn_img">
        </div>

        <div class="txtrus">
            <h2>EXPERIENȚĂ ÎN CONSTRUCȚII</h2>
            <p class="font-bebas">Peste 10 ani de experiență și numeroase proiecte finalizate.</p>
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
            <p class="font-bebas">Asistență și îndrumare pe <br> parcursul tuturor etapelor proiectului.</p>
        </div>






    <div class="black_section" style="background-image:url(backneg.png); opacity:100%; background-repeat: no-repeat;background-size: cover;">

        <img src="cheie.png" alt="Descriere imagine" class="img_key">
        <img src="valic.png" alt="Descriere imagine" class="img_valic">
        <img src="perie.png" alt="Descriere imagine" class="img_perie">
        <img src="ciocan.png" alt="Descriere imagine" class="img_ciocan">


        <h2 class="text-custom-green font-bebas">Despre noi</h2>
        
        <p id="dori" style="color:#00EF18;">Doricons</p>
                
            <p class="font-bebas"> este o companie de construcții care își 
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


        <div class="business-section">
        <div class="content_after">
    <div class="fundation_comp">
        <h1>PUNEM FUNDAȚIA PENTRU <span class="highlight">Visele Tale</span></h1>
    </div>
    <p class="sub-text">Construind cu pasiune, precizie și durabilitate fiecare proiect!</p>
    <p class="description">
        Suntem o companie de construcții care își cunoaște foarte bine domeniul și a finalizat multiple proiecte 
        în decurs de mulți ani. Fiecare proiect este o combinație perfectă între expertiză, calitate și atenție la detalii.
    </p>
    <p class="description">
        Oferim o gamă completă de servicii, de la proiectare la execuție, garantând siguranță și calitate la fiecare pas. 
        Clienții noștri fideli ne recomandă pentru profesionalism și seriozitate.
    </p>
    <div  class="cta-button">
        <a href="#" class="openModalBtn">SOLICITĂ O CONSULTANȚĂ</a>
    </div>
    </div>

        <div class="founders">
            <img src="creators.png" alt="Виктор Гончарук и Роман Кондратьев">
    <div class="founders-info">Fondatorul companiei de construcții <span>„DoriCons”SRL</span><br> Cu peste 10 ani de experiență în domeniul construcțiilor,
    a realizat sute de proiecte, punând mereu accent pe calitate, inovație și satisfacția clienților.</div>
        </div>

    </div>

    <div class="founders_phone">
            <img src="creators.png" alt="Виктор Гончарук и Роман Кондратьев">
    <div class="founders-info_phone">Fondatorul companiei de construcții <span>„DoriCons”SRL</span><br> Cu peste 10 ani de experiență în domeniul construcțiilor,
    a realizat sute de proiecte, punând mereu accent pe calitate, inovație și satisfacția clienților.</div>
        </div>

        <section class="why-partners" style="background-image:url(backneg.png); background-repeat: no-repeat;
    background-size: cover;
   
     opacity:100%;">
  <h2>
    DE CE CLIENȚII <span>NE ALEG</span> PE NOI?
  </h2>
  <div class="why-content">
    <div class="left-col">
      <div class="feature">
        <div class="circle">1</div>
        <p>Experiență și reputație excelentă în piață</p>
      </div>
      <div class="feature">
        <div class="circle">2</div>
        <p>Doricons garantează calitatea superioară a lucrărilor</p>
      </div>
      <div class="feature">
        <div class="circle">3</div>
        <p>Echipa Doricons este formată din specialiști calificați și certificați</p>
      </div>
    </div>

    <div class="center-col">
      <img src="lada.png" alt="Lada" class="box-image" />
    </div>

    <div class="right-col">
      <div class="feature">
        <div class="circle">4</div>
        <p>Respectarea strictă a termenelor stabilite</p>
      </div>
      <div class="feature">
        <div class="circle">5</div>
        <p>Doricons asigură transparență totală în fiecare etapă a proiectului</p>
      </div>
      <div class="feature">
        <div class="circle">6</div>
        <p>Portofoliu vast și recomandări de încredere</p>
      </div>
    </div>
  </div>
</section>



<section class="call-section" style="background-image:url(backneg.png); background-repeat: no-repeat;background-size: cover;opacity:100%;">
  <div class="call-content">
    <h2>NU CREDETI RECENZIILOR DE PE INTERNET?</h2>
    <p>
     Luati legatura cu specialistii companiei de constructii Doricons pentru o consultare directa.  
    </p>
    <p>Vom organiza o intalnire in care puteti discuta personal cu expertii nostri, afla cum decurge procesul de constructie si primi raspunsuri la orice intrebare 
        legata de proiectul dumneavoastra. Convingeti-va singuri de calitatea serviciilor noastre!</p>
    
    <div class="phone-line">
      <svg class="phone-icon" viewBox="0 0 24 24" aria-hidden="true">
        <path fill="currentColor" d="M6.62,10.79A15.07,15.07,0,0,0,13.21,17.38l2.2-2.2a1,1,0,0,1,1-.27,9.65,9.65,0,0,0,3,.48,1,1,0,0,1,1,1v3.28a1,1,0,0,1-1,1A16,16,0,0,1,3,6a1,1,0,0,1,1-1H7.28a1,1,0,0,1,1,1,9.65,9.65,0,0,0,.48,3,1,1,0,0,1-.26,1Z"></path>
      </svg>
      <a href="tel:+37379804176"class="phone-number">+373 (79) 804-176</a>
    </div>

    <a href="tel:+37379804176" class="callback-btn">Sună acum</a>
  </div>

  <div class="call-image">
    <img src="manaphone.png" alt="Phone image" />
  </div>
</section>


<section class="priority-cities">
  <h2>ORAȘE <span>PRIORITARE</span> DE LUCRĂRI</h2>

  <div class="priority-content">
    
<div class="cities-box">
   <div class="city-row">
    <div class="city-col">
      <img src="ch.png" alt="Chisinau" />
      <p>Chișinău</p>
    </div>
    <div class="city-col">
      <img src="bl.png" alt="Balti" />
      <p>Bălți</p>
    </div>
  </div>

   <div class="city-row">
    <div class="city-col">
      <img src="fl.png" alt="Floresti" />
      <p>Florești</p>
    </div>
    <div class="city-col">
      <img src="sr.png" alt="Soroca" />
      <p>Soroca</p>
    </div>  
  </div>

   <div class="city-row">
    <div class="city-col">
      <img src="ed.png" alt="Edinet" />
      <p>Edineț</p>
    </div>
    <div class="city-col">
      <img src="cmr.png" alt="Comrat" />
      <p>Comrat</p>
    </div>
    
  </div>
</div>

     <div class="cities-text">
  <p>
    Un start de succes al oricărui proiect de construcții depinde de numeroși factori: experiența, profesionalismul și fiabilitatea partenerilor.
  </p>
  <p>
    Compania <strong style="color: #00EF19;">Doricons</strong> – oferă soluții 
    inovatoare și lucrări de înaltă calitate. Realizăm proiecte nu doar în orașele prioritare, 
    ci pe întreg teritoriul țării, precum și cu succes pe plan internațional.
  </p>
  <p>
    Abordarea noastră complexă și suportul constant pentru clienți garantează dezvoltarea eficientă 
    a proiectelor dumneavoastră. Încredințați-vă profesioniștilor – cu <strong style="color: #00EF19;">Doricons</strong>, succesul este garantat.
  </p>
  <a href="tel:+37379961542" class="btn-green">AFLĂ MAI MULT</a>
</div>

  </div>
</section>




 </div>



 <section class="after-contract">
  <h2>
    DUPĂ ÎNCHEEREA CONTRACTULUI <br />
    <span>CLIENTUL PRIMEȘTE</span>
  </h2>

  <div class="benefit-list">
    <div class="benefit">
      <div class="benefit-number">01</div>
     <div class="benefit-content">
    <h3>Consultanță completă pentru proiecte de construcții rezidențiale</h3>
    <p>
    De la proiectare și obținerea autorizațiilor până la execuția finală a lucrărilor, 
    Doricons îți oferă suport specializat și consultanță dedicată pentru construirea casei tale.
    </p>
        </div>
      <div class="benefit-image">
        <img src="house_n.png" alt="Юридическая и информационная поддержка" />
      </div>
    </div>

    <div class="benefit_two">
      <div class="benefit-number">02</div>
      <div class="benefit-content">
        <h3>Servicii inovatoare de design și personalizare</h3>
        <p>
            Echipa Doricons transformă viziunea ta într-o realitate modernă, oferindu-ți soluții 
            complete de design interior și exterior, alese cu grijă pentru a asigura calitatea și estetica 
            fiecărui proiect.
        </p>
        </div>
      <div class="benefit-image_house">
        <img src="house.png" alt="Рекламные и дизайнерские услуги" />
      </div>
    </div>

    <div class="benefit">
      <div class="benefit-number">03</div>
      <div class="benefit-content">
        <h3>Coordonare organizatorică și execuție tehnică impecabilă</h3>
        <p>
            Gestionăm cu profesionalism toate etapele construcției, de la organizarea echipelor și selecția 
            furnizorilor, până la supervizarea tehnică a lucrărilor, garantând un rezultat final de excepție.
        </p>
        </div>
      <div class="benefit-image_number">
        <img src="house2.png" alt="Организационные и технические инструкции" />
      </div>
    </div>
  </div>
<div>
          <a href="tel:+37379961542" class="btn-green_region_supported openModalBtn"   >PRIMEȘTE DETALII DESPTE CONSTRUCȚII</a>

</div>
</section>


    


<section class="stages" style="background-image:url(backneg.png); opacity:100%; background-repeat: no-repeat;background-size: cover;">

        <img src="cheie.png" alt="Descriere imagine" class="img_key_stages">
        
        <img src="ciocan.png" alt="Descriere imagine" class="img_ciocan_stages">

   <h2>Etape</h2>

   <div class="timeline-row">
     <div class="timeline-line"></div>
    
     <div class="step">
      <div class="dot"></div>
      <p>Semnarea contractului și consultanță inițială</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Stabilirea planului și proiectarea casei</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Obținerea autorizațiilor și avizelor necesare</p>
    </div>
  </div>

   <div class="timeline-row">
    <div class="timeline-line"></div>

     <div class="step">
      <div class="dot"></div>
      <p>Organizarea echipei și pregătirea șantierului</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Fundație și structură de rezistență</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Ridicarea pereților și instalarea acoperișului</p>
    </div>
  </div>

   <div class="timeline-row">
    <div class="timeline-line"></div>

     <div class="step">
      <div class="dot"></div>
      <p>Instalarea sistemelor casnice</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Finisaje interioare și exterioare</p>
    </div>
     <div class="step">
      <div class="dot"></div>
      <p>Verificări și testări finale</p>
    </div>
        <!-- final dots for tel -->
    <div class="step-fin">
      <div class="final-dot">
        <i class="fa fa-flag final-icon" aria-hidden="true"></i>
      </div>
      <p>Casă la cheie</p>
    </div>
  </div>
  <!-- final dots for pc -->
    <div class="final-step">
    <div class="final-line"></div>
    <div class="final-dot">
      <i class="fa fa-flag final-icon" aria-hidden="true"></i>
    </div>
    <p>Casă la cheie</p>
  </div>

  <img src="valic.png" alt="Descriere imagine" class="img_valic_stages">
        <img src="perie.png" alt="Descriere imagine" class="img_perie_stages">

</section>




<section class="qa-section">
  <h2>Q/A</h2>
  <ul class="qa-list">
    <li>
      <div class="question">
        <span>Semnarea contractului și consultanță inițială</span>
        <span class="plus">+</span>
      </div>
      <div class="answer">
        <ul>
          <li>Care sunt documentele necesare pentru semnarea unui contract de construcție?</li>
          <a>Pentru semnarea contractului sunt necesare: autorizația de construcție valabilă, planul de proiect aprobat,
             extrasul din registrul cadastral al imobilului și avizele necesare din partea autorităților locale.<br>(Pentru detalii contactati la numarul de mai sus)</a>
          <li>Este obligatorie consultanța inițială înainte de semnarea contractului de construcție?</li>
          <a> Consultanța inițială nu este obligatorie, dar este recomandată deoarece oferă clarificări importante privind costurile, 
            termenele și obligațiile contractuale, 
            evitând astfel posibile neînțelegeri sau riscuri ulterioare.</a>
            <li>Cum se stabilește durata execuției lucrărilor în contractul de construcție?</li>
            <a>Durata execuției lucrărilor se stabilește în funcție de complexitatea proiectului, volumul lucrărilor și specificul 
                acestora, fiind prevăzută expres în contract. Modificările termenului se fac doar prin acte adiționale.</a>
        </ul>
      </div>
    </li>
    <li>
      <div class="question">
        <span>Proiectarea și designul casei</span>
        <span class="plus">+</span>
      </div>
      <div class="answer">
        <ul>
          <li>În cât timp este gata proiectul de arhitectură al unei case?</li>
          <a>Durata realizării unui proiect variază între 30 și 90 de zile, în funcție de complexitatea casei, specificațiile tehnice și reviziile solicitate.</a>
          <li>Pot să modific proiectul după finalizare?</li>
          <a>Da, însă modificările ulterioare implică revizuirea proiectului și costuri suplimentare, necesitând uneori noi avize și aprobări.</a>
          <li>Este obligatoriu să angajez un arhitect autorizat pentru proiectare?</li>
          <a>Da, proiectul de arhitectură trebuie realizat obligatoriu de un arhitect autorizat, pentru a fi legal și valid în vederea obținerii autorizației de construire.</a>
        </ul>
      </div>
    </li>
    <li>
      <div class="question">
        <span>Obținerea autorizațiilor și avizelor</span>
        <span class="plus">+</span>
      </div>
      <div class="answer">
        <ul>
          <li>Cât durează obținerea autorizației de construcție?</li>
          <a>Termenul legal este de până la 30 de zile lucrătoare din momentul depunerii complete a documentației, însă, în practică, poate dura mai mult în funcție de specificul proiectului.</a>
          <li>Ce se întâmplă dacă construiesc fără autorizație?</li>
          <a>Construcția fără autorizație atrage amenzi, riscul demolării și imposibilitatea înscrierii construcției în cartea funciară.</a>
          <li>Trebuie să obțin separat avize pentru utilități (electricitate, apă, gaze)?</li>
          <a>Da, pentru fiecare utilitate în parte trebuie solicitat avizul de racordare înainte de începerea lucrărilor.</a>
        </ul>
      </div>
    </li>
    <li>
      <div class="question">
        <span>Construcția structurii și a instalațiilor</span>
        <span class="plus">+</span>
      </div>
      <div class="answer">
        <ul>
          <li>Ce tipuri de structuri sunt recomandate pentru o casă rezidențială?</li>
          <a>Cele mai uzuale sunt structurile din beton armat, cărămidă, lemn sau combinații dintre acestea,
             alegerea depinzând de condițiile terenului și preferințele beneficiarului.</a>
          <li>Cât timp durează construcția structurii unei case?</li>
          <a>Durata tipică pentru structura unei case obișnuite este între 2 și 6 luni, în funcție de complexitatea proiectului și de condițiile meteo.</a>
          <li>Când pot începe montarea instalațiilor electrice și sanitare?i</li>
          <a>Aceste lucrări pot începe după finalizarea structurii și înainte de efectuarea finisajelor, conform etapelor stabilite în graficul de execuție.</a>
        </ul>
      </div>
    </li>
    <li>
      <div class="question">
        <span>Finisaje și predarea casei la cheie</span>
        <span class="plus">+</span>
      </div>
      <div class="answer">
        <ul>
          <li>Ce înseamnă predarea „la cheie”?</li>
          <a>Predarea „la cheie” implică finalizarea tuturor lucrărilor interioare și exterioare, casa fiind gata pentru utilizare imediată, fără alte lucrări suplimentare necesare.</a>
          <li>Ce garanție primesc pentru lucrările executate?</li>
          <a>În mod obișnuit, garanția lucrărilor este de minim 2 ani pentru finisaje și instalații, și de 10 ani pentru structura de rezistență.</a>
          <li>Pot interveni în alegerea materialelor și finisajelor interioare?</li>
          <a>Da, beneficiarul poate selecta materialele și finisajele dorite, acest aspect fiind stabilit contractual încă din faza inițială.</a>
        </ul>
      </div>
    </li>
  </ul>
</section>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  const questions = document.querySelectorAll(".question");
  
  questions.forEach(question => {
    question.addEventListener("click", function() {
      const plusEl = this.querySelector(".plus");
      const answerDiv = this.nextElementSibling;
      if (answerDiv.style.display === "block") {
        answerDiv.style.display = "none";
        plusEl.textContent = "+";
      } else {
        answerDiv.style.display = "block";
        plusEl.textContent = "-";
      }
    });
  });
});
</script>





    </div>

    <style>



    </style>

    <footer class="site-footer" style="background-image:url(backneg.png); opacity:100%; background-repeat: no-repeat;background-size: cover;">
  <div class="footer-content">
    <div class="footer-col left">
      <div class="footer-logo">
        <img src="logo.png" alt="Команда R" />
        <div>
          <h3>Doricons</h3>
          <span>Companie de construcții</span>
        </div>
      </div>
      <p>Pagina oficială a companiei de construcție Doricons SRL</p>
      <!-- <p>ИНН: 0000000000 / ОГРН: 0000000000000</p> -->
    </div>

     <div class="footer-col center">
      <!-- <div class="social-icons">
         <a href="#" aria-label="VK">
          <img src="vk.png" alt="VK" />
        </a>
        <a href="#" aria-label="Instagram">
          <img src="instagram.png" alt="Instagram" />
        </a>
      </div> -->
      <!-- <a href="#" class="privacy-link">confidențialitate</a> -->
    </div>

     <div class="footer-col right">
      <p class="phone" href="tel:+37379961542">+373 (79)-961-542</p>
      <a href="tel:+37379961542" class="green-link">Aveți întrebări?</a><br />
      <a href="#"   class="green-link openModalBtn">Trimite un mesaj</a>
    </div>
  </div>
</footer>

<div class="modal" id="contactModal">
  <div class="modal-content">
    <span class="close-btn" id="closeModalBtn">&times;</span>
    
    <h3>Introduceți datele pentru contact</h3>
    <p>Un reprezentant Doricons vă va contacta în cel mai scurt timp.</p>

    <form id="contactForm" action="https://formspree.io/f/mgvapwvo" method="POST" >
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Emailul dvs." required />

      <label for="name">Nume</label>
      <input type="text" id="name" name="name" placeholder="Numele dvs." required />

      <label for="city">Oraș</label>
      <input type="text" id="city" name="city" placeholder="Orașul de construcție" />

      <label for="investment">Întrebarea Dvs</label>
      <input type="text" id="investment" name="investment" placeholder="Ex: Cât ar costa sa fac un acoperiș" />

      <label for="phone">Telefon</label>
      <input type="tel" id="phone" name="phone" placeholder="+373 79 000 000" />

      <div class="checkbox-row">
        <input type="checkbox" id="privacy" name="privacy" required />
        <label for="privacy">Sunt de acord cu politica de confidențialitate</label>
      </div>

      <button type="submit" class="green-btn">Trimite</button>
    </form>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const openModalBtns = document.querySelectorAll(".openModalBtn");
  const contactModal = document.getElementById("contactModal");
  const closeModalBtn = document.getElementById("closeModalBtn");

  openModalBtns.forEach(function(btn) {
    btn.addEventListener("click", function(e) {
      e.preventDefault(); 
      contactModal.style.display = "block";
    });
  });

  closeModalBtn.addEventListener("click", function() {
    contactModal.style.display = "none";
  });

  window.addEventListener("click", function(e) {
    if (e.target === contactModal) {
      contactModal.style.display = "none";
    }
  });
});
</script>


    </body>

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

</html>