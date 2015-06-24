<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <style>

        
        body{
            background: url(tvabackground_portimg_template_13.jpg);
        }

       
        aside {
            color: black;
            margin: 1.858736059%;
            padding: 1px 0;
            text-align: center;
            margin-top: 105px;
            background-color: rgba(255, 255, 255, 0.5);
            max-width: 450px; 

            border:2px brown solid;
            //border-top:0px #f3f3f3 none;
            border-radius: 75px;
            margin-left:auto;
            margin-right: auto;
          max-height:1500px;


        }




        input{
            width: 30%;
            height: 20px;
            margin-bottom: 20px;
        }
        .lbs{
            text-align-last: start; 

        }
        #send{
            width:105px;
            height:35px;
            background-color:  #006400;
            color:  #000;
            border: 2px;
            border-radius: 3px;
            font-size:  medium;
        }

        
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
        // put your code here
        include 'Header.php';
        ?>
        		<div id="resarvation" class="panel">

        <div class="container">
            <br><br>

            <aside>
                <h4>Reservation</h4>
                <label class="lbs">Name&nbsp;</label>
                <input name="first_name" placeholder="Name" type="text" value=""><br>

                <label class="lbs">Email&nbsp;</label>
                <input name="first_name" placeholder="Email" type="text" value=""><br>

                <label class="lbs">Phone&nbsp;</label>
                <input name="first_name" placeholder="Phone" type="text" value=""><br>

                <label class="lbs">Person&nbsp;</label>
                <input name="first_name" placeholder="Person" type="text" value=""><br>

                <label for="Comments">Comments&nbsp;</label>
                <textarea  name="comments"  cols="25" rows="6"></textarea><br>
                <input id="send" type="submit" value="Submit"  name="submit">
             
            </aside>
                </div>
                        </div>
                <?php  include 'Footer.php';?>


                </body>
                </html>
