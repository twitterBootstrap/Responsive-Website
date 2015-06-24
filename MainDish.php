<!DOCTYPE html>

<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
    </head>
    <body>
        <style>
            aside {
            color: darkslategrey;
            padding: 1px 0;
            text-align: center;
            margin-top: 105px;
           background: rgba(255, 255, 255, 0.8);
            max-width:900px; 
             margin-left:auto;
            margin-right: auto;
  min-height:550px;//original
  //max-height:950px;


            }

 
 .panel{
   
 
	margin-left: -299%;
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
	//background:#000;
	//color: #fff;
}
    
        
      img.left {float: left;}
#pol{
    margin-left:38px;
    text-align: left;
}
#pri{
             margin-left: 168px;           
             background-color:  darkolivegreen;
             color: #fff;

                     		
}

         @media (min-width:1200px)
         
         {
              .row-fluid [class*="span"]{display:block;width:200%;min-height:30px; -webkit-box-sizing:border-box;

     -moz-box-sizing:border-box;box-sizing:border-box;float:left;margin-left:1.564102564102564%;*margin-left:2.5109110747408616%;
     } 
     
    //.row-fluid [class*="span"]:first-child{margin-left:0;} 
     
     .row-fluid .span4{width:45.623931623931625%;*width:45.570740134569924%;} 
     }
   
    @media screen and (max-width : 760px){
	aside {
		height: 100%;
               }
	

       
}
       </style>
            
        <?php
        // put your code here
        include 'Header.php';
        ?>
         		<div id="MainDishes" class="panel">


    <div class="container">
            <br><br>

            <aside>
      <h2><center><i>Main Dishes</i></center></h2>

                        <div class="row-fluid">
 
                        <div class="span4 well" >
                                
<img src="black-olives.jpg" alt="Apple"  width="90" height="90" class="left" /> 
ABC<a id="pri">  $44&nbsp; </a>
<p id="pol">
    ......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
                        </div>
                        
   <div class="span4 well" >
<img src="Peppers.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 jjnjnnnnjnj<a id="pri"> $44 </a>

<p id="pol">Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
 </div>
                                     </div>
      <br>
    
    <div class="row-fluid">
 
                        <div class="span4 well" >
                                
<img src="black-olives.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 jjnjnnnnjnj<a id="pri">44</a>
<p id="pol">
    ......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
                        </div>
                        
   <div class="span4 well" >
<img src="black-olives.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 jjnjnnnnjnj<a id="pri">44</a>

<p id="pol">Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
 </div>
                                     </div>
    
      <br>
      
      <div class="row-fluid">
 
                        <div class="span4 well" >
                                
<img src="diwali2.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 jjnjnnnnjnj<a id="pri">44</a>
<p id="pol">
    ......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
                        </div>
                        
   <div class="span4 well" >
<img src="diwali2.jpg" alt="Apple"  width="90" height="90" class="left" /> 
 jjnjnnnnjnj<a id="pri">44</a>

<p id="pol">Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......Eat fruits every day to get your natural sugars......</p>
 </div>
                                     </div>
    
      <br><br>
    
            </aside>
        </div>
                       </div>
    <?php include 'Footer.php'?>
    </body>
</html>
