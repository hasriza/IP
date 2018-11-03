<?php require "session.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Home</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
	<style type="text/css">  
        .showSlide {  
            display: none ;
        }  
            .showSlide img { 
                margin-left: 2%;
        	   margin-top:9%; 
                width: 90%;  
            }  
        .slidercontainer {  
            max-width: 100%;  
            margin: auto;  
        }  
        .left, .right {  
            cursor: pointer;  
            position: absolute;  
            top: 55%;  
            width: auto;  
            padding: 16px;  
            margin-top: -22px;  
            color: white;  
            font-weight: bold;  
            transition: 0.6s ease;  
            border-radius: 0 3px 3px 0;  
        }  
        .right {  
            right: 0;  
            border-radius: 3px 0 0 3px;  
        }  
            .left:hover, .right:hover{  
                background-color: rgba(115, 115, 115, 0.8);
                position: absolute;  
            }  
        .content {  
            color: gray;
            font-weight: bold;  
            font-size: 40px;  
            padding: 8px 0px;  
            position: absolute;  
            margin-left: 30%;
            top: 150px;  
            width: 45%;  
            text-align: center;
            border-bottom: 2px solid green;  
        }  
        .active {  
            background-color: #717171;  
        }  
        /* Fading animation */  
        .fade {  
            -webkit-animation-name: fade;  
            -webkit-animation-duration: 1.5s;  
            animation-name: fade;  
            animation-duration: 1.5s;  
        }  
        @-webkit-keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        }  
  
        @keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        } 
        .showSlide .fade img{
            width=25px;

        } 
    </style> 
</head>
<body>
	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>

	<div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src="images/j1.png" width="25px" height="500px" />  
            <div class="content">Recyle the Cartons - Squish and Squash</div>  
        </div>  
        <div class="showSlide fade">  
            <img src="images/j2.jpg" width="25px" height="500px" />  
            <div class="content">Get The Cartons - Flip Flap Flat</div>  
        </div>  
  
        <div class="showSlide fade">  
            <img src="images/j3.jpg" width="25px" height="500px" />  
            <div class="content">Help Transform A Few Lives</div>  
        </div>  

    </div>  
	<div id='section'>
		

        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)"><img src  ="images/p1.jpg" width="50px" height="50px"></a>
        <a class="right" onclick="nextSlide(1)"><img src  ="images/p2.jpg" width="50px" height="50px"></a>
    </div> 
    <div class="about">
        <h1>About Us</h1>
    </div>
    <div id="section">
		<section>
			<div class='c1'>
				<p>
				Tetrapacks have often been infamous for not being biodegradable, yet forming an inevitable part of the packaging industry. Recycling - is the way. 
				</p>
			</div>
		</section>

		<section>
			<div  class="imgb">
			<img src="images/index1.png" width="400px" height="250px">
		</div>
		</section>
		
		<section>
			<div  class="imgb">
				<img src="images/index2.jpg" width="400px" height="250px"></div>
		</section>
		<section>
				<div class='c2'>
				<h1>Recycle your Cartons</h1>
				<p>
				Every second, about 5,500 Tetra Pak cartons are consumed across the world. Imagine the number of desks, notebook and roofs all these cartons can be used to make. Most of us consume beverages from Tetra Pak cartons every day, but many of us don’t spare a thought about what happens to the cartons when we put them in a bin. Next time you have an empty carton in your hand, consider <span class="indexcon"> RECYCLING!</span>
				</p>
			</div>
		</section>

		<section>
			<div class='c1'>
				<h1>Why? - The Smiles Are Worth It!</h1>
				<p>
				A tetrapacks journey never ends. It goes on and on, From being the provides of safe food to everyone to being a bench, or a notebook, or a roof, to every underprivileged school kid! Every time the pack is used, it stands a chance to start a new life. <span class="indexcon">But only if it ends at the right place  - in the recycle bin.</span>
				</p>
			</div>
		</section>
		<section>
			<div  class="imgb">
			<img src="images/index3.jpg" width="400px" height="250px"></div>
		</section>
	</div>

	<?php require "foot.php" ?>
	
<script src="scripts/script.js" type="text/javascript"></script>
<script src="scripts/slider.js" type="text/javascript"></script>
</body>
</html>
