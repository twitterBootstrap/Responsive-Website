<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS Only Navigation Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    /*Strip the ul of padding and list styling*/
    #menu{
                margin-left: 300px;
                padding-top: 60px;

    }
    #menus{
            margin-left: 95px;
            margin-top: -49px;


        }
ul {
	list-style-type:none;
	margin:0;
	padding:0;
	position: absolute;
        

        

}

/*Create a horizontal list with spacing*/
li {
	display:inline-block;
	float: left;
	margin-right: 1px;
        
        
}

/*Style for menu links*/
li a {
	display:block;
	min-width:140px;
	height: 50px;
	text-align: center;
	line-height: 50px;
	font-family: cursive, Helvetica, Arial, sans-serif;
	color: #fff;
	background: tomato;
	text-decoration: none;
        
        
}

/*Hover state for top level links*/
li:hover a {
	background: #19c589;
}

/*Style for dropdown links*/
li:hover ul a {
	background: #f3f3f3;
	color: #2f3036;
	height: 40px;
	line-height: 40px;

}

/*Hover state for dropdown links*/
li:hover ul a:hover {
	background: #19c589;
	color: #fff;
}

/*Hide dropdown links until they are needed*/
li ul {
	display: none;
        
}

/*Make dropdown links vertical*/
li ul li {
	display: block;
	float: none;
        
}

/*Prevent text wrapping*/
li ul li a {
	width: auto;
	min-width: 100px;
	padding: 0 20px;

        
}

/*Display the dropdown on hover*/
ul li a:hover + .hidden, .hidden:hover {
	display: block;
        
}

/*Style 'show menu' label button and hide it by default*/
.show-menu {
	font-family: cursive, Helvetica, Arial, sans-serif;
	text-decoration: none;
	color: #fff;
	background: #19c589;
	text-align: center;
	padding: 10px 0;
	display: none;


}

/*Hide checkbox   */
input[type=checkbox]{
    display: none;
}

/*Show menu when invisible checkbox is checked*/
input[type=checkbox]:checked ~ #menu{
    display: block;
}


/*Responsive Styles*/

@media screen and (max-width : 760px){
	/*Make dropdown links appear inline*/
	ul {
		position: static;
		display: none;
                
	}
	/*Create vertical spacing*/
	li {
		margin-bottom: 1px;
                
	}
	/*Make all menu links full width*/
	ul li, li a {
		width: 100%;
               }
	/*Display 'show menu' link*/
	.show-menu {
		display:block;
                margin-left: 220px;
               //padding-top: 60px;
	}
        #menu{
             margin-left: 220px;
                padding-top: 10px;
        }
        #menus{
                margin-right: 40px;
		display:block;

            }

       
}
body{
    background: url(back.jpg);
}
               
                .navbar-fix-top{
                    position: fixed;
                    right:0;
                    left:0;
                    }    

#a{
    //margin-top:50px;
}  
 h3{

            list-style-type: none;

            padding:45px;



        }
</style>

</head>




<body>
    
     <div class="navbar-fix-top">
         <h3 for="menus"><a id="menus"href="index.php">LOGO</a></h3>       
        </div>
    <div class="navbar-fix-top">
        <label for="show-menu" class="show-menu"><img src="menu.png"></label>
	<input type="checkbox" id="show-menu" role="button">

		<ul id="menu">
                    <li><a href="index.php">Home</a></li>
		<li>
			<a href="#">Menu ￬</a>
			<ul class="hidden">
                            <li><a id="link-Appetizer" href="Appetizer.php#Appetizer">Appetizer</a></li>
                            <li><a id="link-MainDishes" href="MainDish.php#MainDishes" >MainDish</a></li>
                            <li><a id="link-dessert" href="dessert.php#dessert">Dessert</a></li>

			</ul>
		</li>
		<li>
			<a href="#">Today's Special ￬</a>
			<ul class="hidden">
                            <li><a>Page1</a></li>
				<li><a href="#">page2</a></li>
				<li><a href="#">page3</a></li>
			</ul>
		</li>
                <li><a id="link-resarvation" href="Reservation_1.php#resarvation">Reservation</a></li>
                <li><a  href="Contactus.php">Contact Us</a></li>
	</ul>
                 
    </div>
	

</body>
</html>