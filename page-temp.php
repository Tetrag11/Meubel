<?php

/**
 * Template Name: Temp Page
 */
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Meubel House</title>

    <style>
        * {
            box-sizing: border-box;
        }

        article {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        div {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            width: 100%;

            align-items: center;
        }

        article.web {
            display: none;
        }

        section {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 80px 0;
            justify-content: center;
            align-items: center;
        }

        h2 {
            margin-bottom: 40px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 5.869vw;
            line-height: 40px;
            /* or 160% */

            text-align: center;

            color: #FFFFFF;
        }

        p {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 5.869vw;
            line-height: 50px;
            /* identical to box height, or 200% */


            color: #FFFFFF;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .btn {

            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 288px;
            padding: 12px 15px;
            border-radius: 50px;
            margin: 10px 0px;
            font-style: normal;
            font-weight: 300;
            font-size: 3.286vw;
            line-height: 17px;
        }



        .btn-green {
            background-color: #1F493D;
        }

        .up-right {
            width: 15px;
            height: 18px;

        }

        .btn-black {
            background-color: black;
            text-align: center;
            justify-content: center !important;
        }

        @media (max-width: 450px) {
            img {
                object-fit: contain;
                width: 100%;
            }


        }

        @media (min-width:426px) {

            h2,
            p {
                font-size: 25px;
            }

            .btn {
                font-size: 14px;
            }
        }

        @media (min-width:1024px) {

            h2,
            p {
                font-size: 35px;
                line-height: 50px;
            }

            body {
                display: grid;
                grid-template-rows: 90% 10%;

            }

            div {
                justify-content: center;
            }

            img {
                width: 585px;
                height: fit-content !important;
            }

            article.mobile {
                display: none;
            }


            article.web {
                display: flex;
                padding: 0 20px;
                flex-direction: row;
                justify-content: space-between;
            }

        }
    </style>
</head>

<body style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/backimg.jpg'; ?>); background-size: cover; background-position: center center; height: 100vh; width: 100vw; background-repeat: no-repeat;">

    <div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/intro-text.png'; ?>" alt="" style=" height: 168px; max-width: 585px;">

        <section>
            <a href="https://api.whatsapp.com/message/JMKY7GSHBGXLG1?autoload=1&app_absent=0" target="_blank" class="btn btn-green"><span>Chat with us on whatsapp</span><img src="<?php echo get_stylesheet_directory_uri() . '/images/-_.png'; ?>" alt="" class="up-right"></a>
            <a href="tel:+94 76 539 1157" class="btn btn-black"><span>Call us at +94 76 539 1157</span></a>
        </section>

        <article class="mobile">
            <h2>
                Visit our store at No. 34, <br>
                Gower Street, Colombo 05,
            </h2>
            <p><a href="https://instagram.com/meubelhouselk?igshid=YmMyMTA2M2Y">Instagram</a> +<a href="https://facebook.com/meubelhouselk/"> Facebook</a></p>
        </article>

    </div>
    <article class="web">
        <h2>
            Visit our store at No. 34, <br>
            Gower Street, Colombo 05,
        </h2>
        <p><a href="https://instagram.com/meubelhouselk?igshid=YmMyMTA2M2Y">Instagram</a> +<a href="https://facebook.com/meubelhouselk/"> Facebook</a></p>
    </article>
</body>

</html>