<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <style>

        
 .panel{
 
	margin-left: -169%;
	//z-index:2;
	-webkit-transition: all .6s ease-in-out;
	-moz-transition: all .6s ease-in-out;
	-o-transition: all .6s ease-in-out;
	-ms-transition: all .6s ease-in-out;
	transition: all .6s ease-in-out;
}
.panel:target{
	margin-left: 0%;
	
}
#home:target ~ #navbar-fix-top #menu #link-home,
#Appetizer:target ~ #navbar-fix-top #menu #link-Appetizer,
#MainDishes:target ~ #navbar-fix-top #menu #link-MainDishes,
#resarvation:target ~ #navbar-fix-top #menu #link-resarvation,
#dessert:target ~ #navbar-fix-top #menu #link-dessert,
#contact:target ~ #navbar-fix-top #menu #link-contact{
	//background: #000;
	//color: #fff;
}


    </style>
    <body>
        <?php
        
        include'index_header.php';?>

                <?php  include 'Footer.php';?>


                </body>
                </html>
