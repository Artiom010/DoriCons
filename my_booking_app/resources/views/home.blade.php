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
    margin: 4% 50% 1% 14%;
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
    padding: 7px 30px;
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
    margin: 0% -5% -1% 6%;
    position: relative;
    z-index: 5;
    max-width: 100%;
    display: block;
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




    <style>

        .cities-box {
  width: 500px;               /* lățimea totală a blocului */
  margin: 50px auto;          /* centrare pe pagină */
  padding: 20px;
  border: 1px solid #ccc;     /* contur subțire */
  background: #f9f9f9;        /* fundal deschis, dacă dorești */
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
  filter: grayscale(100%);    /* alb-negru, la fel ca în poză */
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
  background: #fff; /* fundal alb */
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0,0,0,0.1); /* umbră discretă */
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
  display: inline-block;
  background: #00ff00;
  color: #000;
  text-decoration: none;
  font-weight: 600;
  padding: 15px 30px;
  border-radius: 5px;
  transition: background 0.3s ease;
  max-width: fit-content;
}

.btn-green:hover {
  background: #6ae000;
}

/* Responsivitate pentru ecrane mai mici */
@media (max-width: 768px) {
  .priority-content {
    flex-direction: column;  /* stivuiește cele două coloane */
    align-items: center;
  }
  .cities-text {
    max-width: 100%;
  }
}

 


    </style>

    <div class="black_section" style="background-image:url(backneg.png); opacity:100%;">

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
        <a href="tel:+37379804176">SOLICITĂ O CONSULTANȚĂ</a>
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


<div class="cities-box">
  <!-- Rândul 1: Moscova (stânga) | Rostov (dreapta) -->
  <div class="city-row">
    <div class="city-col">
      <img src="moscow.png" alt="Москва" />
      <p>МОСКВА</p>
    </div>
    <div class="city-col">
      <img src="rostov.png" alt="Ростов" />
      <p>РОСТОВ</p>
    </div>
  </div>

  <!-- Rândul 2: Piter (stânga) | nimic (dreapta) -->
  <div class="city-row">
    <div class="city-col">
      <img src="piter.png" alt="Питер" />
      <p>ПИТЕР</p>
    </div>
    <div class="city-col"></div> <!-- coloană goală -->
  </div>

  <!-- Rândul 3: Kazan (stânga) | Ufa (dreapta) -->
  <div class="city-row">
    <div class="city-col">
      <img src="kazan.png" alt="Казань" />
      <p>КАЗАНЬ</p>
    </div>
    <div class="city-col">
      <img src="ufa.png" alt="Уфа" />
      <p>УФА</p>
    </div>
  </div>
</div>

 </div>

  




    </div>

    <!-- <footer>
        <p>&copy; 2024 My Booking App. All rights reserved.</p>
    </footer> -->
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