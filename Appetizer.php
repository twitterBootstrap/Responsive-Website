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
         height: 300px;


        }
       
        
      img.left {float: left;}
#pol{margin-left:98px;
     color: dimgrey;
}
#pri{
             margin-left: 105px;
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
	
	aside {
		height: 100%;
               }
	
    </style>
    <body>
        <?php
        include 'Header.php';
        ?>
        		<div id="Appetizer" class="panel">

       <div class="container">
           <br><br>

            <aside>
     <h2><center><i>Appetizer</i></center></h2>

                        <div class="row-fluid">
 
                        <div class="span4 well" >
                                
    <img src="Appe1.png" alt="pestry"  width="90" height="90" class="left" /> 
    <b> Caramelized Onion Tarts </b><a id="pri"> $4 </a>
<p id="pol">
    PREPARE tart shells as per package directions for unfilled tart shells. 
    Remove from oven, set aside and cool. 
MELT unsalted butter and oil in a large fry pan. 
<!--Add onions to pan, and cook over medium-low heat until caramelized, soft and golden, about 20 minutes. 
Season with salt and pepper. 

DIVIDE the softened goat cheese between the cooled tart shells. Top with the caramelized onion mixture and sprinkle fresh herbs over the top.
-->
</p>
                        </div>
                        
   <div class="span4 well" >
       <img src="Appe2.jpg" alt="Apple"  width="90" height="90" class="left" /> 
       <b>Parmesan Cheese Pie Fries</b><a id="pri"> $4 </a>

<p id="pol">
    PREHEAT oven to 400°F (200°C). Combine garlic powder, Parmesan and parsley in a small bowl and set aside.

REMOVE pie shell from freezer and allow to thaw at room temperature for 10 – 15 minutes. 

<!--REMOVE pie shell from foil onto a clean, flat, lightly floured work surface. If cracks appear in pastry, press together and repair using fingers moistened with water.

CUT out approximate 1/2-inch x 3-inch (1 cm x 8 cm) strips using a fluted pastry cutter and gently place on a parchment lined baking sheet. 

-->

</p>
 </div>
                                     </div>
      <br>
            </aside>
        </div>
                        </div>
        <br>
                <?php  include 'Footer.php';?>


                </body>
                </html>
