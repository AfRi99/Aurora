
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Footer</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body>
        <style>

            @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

            * {
                padding: 0;
                margin: 0;

            }

            body {
                
            }

            html {
                background-color: #ffffff;
            }

            /* The footer is fixed to the bottom of the page */

            .footer {
                position: fixed;
                top:1200px;
            }




            @media (max-height:800px) {
                footer {
                    position: static;
                }
                header {
                    padding-top: 40px;
                }
            }
            .footer-distributed {
                background-color: #795644 ;

                width: 100%;
                text-align: left;
                font: bold 16px sans-serif;
                padding: 50px 50px 60px 50px;
                margin-top: 80px;
            }

            .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
                display: inline-block;
                vertical-align: top;
            }
            /* Footer left */

            .footer-distributed .footer-left {
                width: 30%;
            }

            .footer-distributed h3 {
                color: #ffffff;
                font-size: 36px;
                margin: 0;
            }


            .footer-distributed h3 span {
                color: #ffffff;
            }

            /* Footer links */

            .footer-distributed .footer-links {
                color: #ffffff;
                margin: 20px 0 12px;
            }

            .footer-distributed .footer-links a {
                display: inline-block;
                line-height: 1.8;
                text-decoration: none;
                color: inherit;
                font-family: 'Poppins', sans-serif;
            }

            .footer-distributed .footer-company-name {
                color: #ffffff;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                font-family: 'Poppins', sans-serif;
            }


            /* Footer Center */

            .footer-distributed .footer-center {
                width: 35%;
            }

            .footer-distributed .footer-center i {
                background-color: #c4a185;
                color: #ffffff;
                font-size: 25px;
                width: 38px;
                height: 38px;
                border-radius: 50%;
                text-align: center;
                line-height: 42px;
                margin: 10px 15px;
                vertical-align: middle;
            }

            .footer-distributed .footer-center i.fa-envelope {
                font-size: 17px;
                line-height: 38px;
            }

            .footer-distributed .footer-center p {
                display: inline-block;
                color: #ffffff;
                vertical-align: middle;
                margin: 0;
                font-family: 'Poppins', sans-serif;
            }

            .footer-distributed .footer-center p span {
                display: block;
                font-weight: normal;
                font-size: 14px;
                line-height: 2;
                font-family: 'Poppins', sans-serif;
            }

            .footer-distributed .footer-center p a {
                color: #ffffff;
                text-decoration: none;

            }



            /* Footer Right */

            .footer-distributed .footer-right {
                width: 30%;
                font-family: 'Poppins', sans-serif;
            }

            .footer-distributed .footer-company-about {
                line-height: 20px;
                color: #ffffff;
                font-size: 13px;
                font-weight: normal;
                margin: 0;
                font-family: 'Poppins', sans-serif;
            }

            .footer-distributed .footer-company-about span {
                display: block;
                color: #ffffff;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
            }
            .footer-distributed .footer-icons a {
                display: inline-block;
                width: 35px;
                height: 35px;
                cursor: pointer;
                background-color:#c4a185 ;
                border-radius: 2px;
                font-size: 20px;
                color: #ffffff;
                text-align: center;
                line-height: 35px;
                margin-top: 5px;
                margin-right: 3px;
                margin-bottom: 5px;
                font-family: 'Poppins', sans-serif;
            }


            .footer-distributed .footer-icons a:hover {
                background-color: #30190f;
            }

            .footer-links a:hover {
                color: #846148;
            }

            @media (max-width: 880px) {
                .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
                    display: block;
                    width: 100%;
                    margin-bottom: 40px;
                    text-align: center;
                    font-family: 'Poppins', sans-serif;
                }
                .footer-distributed .footer-center i {
                    margin-left: 0;
                    font-family: 'Poppins', sans-serif;
                }
            }

        </style>
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Aurora</h3>

                <p class="footer-links">
                    <a href="">Home</a>
                    |

                    <a href="" >Contact Us</a>
                    |
                    <a href="">Blog</a>
                </p>

                <p class="footer-company-name">Copyright © 2023 <strong> Aurora</strong> All rights reserved</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span></span>475/C Sri Mawatha, 
                        Rajagiriya,
                        Sri Lanka</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>011 2 111111</p>

                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">Aurora@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    Welcome to <strong>Aurora</strong>, your fashion destination! Discover the latest trends, 
                    timeless styles, and exceptional customer service. 
                    Shop with us for quality clothing that expresses your unique personality and fits your budget.
                    Thank you for choosing <strong>Aurora</strong>. Happy shopping! 
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>

        </footer> 

    </body>
</html>