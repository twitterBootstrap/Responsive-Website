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

        /*Strip the ul of padding and list styling*/
       
       

        aside {
            color: black;
            padding: 1px 0;
            margin-top: 105px;
           background-color: rgba(255, 255, 255, 0.8);
            max-width: 950px; 
            margin-left:auto;
            margin-right: auto;
            height: 220px;


        }
       
        
      img.left {float: left;}
#pol{margin-left:98px;
}
#pri{
             margin-left: 177px;
             background-color:  darkolivegreen;
             color: #fff;
}
#caramel{
    margin-left: 108px;
    background-color:  darkolivegreen;
             color: #fff;
}


       
        
        .panel{
   
 	margin-left: -309%;
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
	
}

  @media (min-width:1200px)
 
         {
              .row-fluid [class*="span"]
              {
                 
     -moz-box-sizing:border-box;
     float:left;
     margin-left:1.564102564102564%;
     *margin-left:2.5109110747408616%;
     } 
     
     .row-fluid .span4{width:45.623931623931625%;*width:45.570740134569924%;} 
     }

@media screen and (max-width : 760px){
	/*Make dropdown links appear inline*/
	
	/*Make all menu links full width*/
	aside {
		height: 100%;
               }
	/*Display 'show menu' link*/
	

       
}
    </style>
    <body>
        <?php
        // put your code here
        include 'Header.php';
        ?>
        		<div id="dessert" class="panel">

       <div class="container">
            <br><br>

            <aside>
     <h2><center><i>Dessert</i></center></h2>

                        <div class="row-fluid">
 
                        <div class="span4 well" >
                                
    <img src="" alt="pestry"  width="90" height="90" class="left" /> 
 Caramel Raspberry Cheesecake<a id="caramel">  $4&nbsp; </a>
<p id="pol">
    To serve, arrange remaining raspberries on top of cake. Warm reserved caramel sauce, if necessary, and drizzle over cake. Use a warmed knife to cut.</p>
                        </div>
                        
   <div class="span4 well" >
       <img src="dessere1.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 Smoothie  ice lollies<a id="pri"> $4&nbsp; </a>

<p id="pol">
    These ice lollies are really healthy, with only a little bit of an optional chocolate coating. They won't make your kids go all mad and hyperactive, and they love them because they think they are naughty. If there is any leftover smoothie, just add a little more apple juice for a healthy drink.


</p>
 </div>
                                     </div>
      <br>
            </aside>
        </div>
                        </div>
                <?php  include 'Footer.php';?>


                </body>
                </html>
