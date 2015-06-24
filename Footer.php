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
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <style>
            .share-icon {
                display: inline-block;
                float: right;
                margin: 4px;
                width: 32px;
                height: 32px;
                cursor: pointer;
                vertical-align: bottom;

                background-image: url(share/share-icons.png);
            }

            .share-facebook {
                background-position: 0px 0px;

            }

            .share-facebook:hover {
                background-position: 0px -40px;        

            }

            .share-twitter {
                background-position: -40px 0px;

            }

            .share-twitter:hover {
                background-position: -40px -40px;
            }



           
            .navbar-fix-bottom{
            
   position:fixed;
   left:0px;
   bottom:0px;
   height:52px;
   width:100%;
   background:  maroon;
}

          
             </style>

<div class="navbar-fix-bottom">

            <a class="share-icon share-facebook" target="_blank" href="" title="Share on Facebook"></a>
            <a class="share-icon share-twitter" target="_blank" href="http://twitter.com" title="Share on Twitter"></a>
            <p>Copy rights.........</p>

</div>
            
    </body>
</html>
