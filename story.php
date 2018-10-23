<?php require "session.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Our Story</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
</head>
<body>

	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>

	<!-- Form Modal-->
	<div id="f_cont" class="container">
		<div class="register">
			<span class="close" id="close_btn">&times;</span>
			<header>
				<h2><a href="login.html">Login</a></h2>
			</header>
			
			<form action="#", method="POST" class="forms" onsubmit="return validation();">

				<fieldset>
				<legend>OR</legend>

					<div class="form_elements">
						<input type="text" placeholder="Enter Name" name="fname" autofocus="on" autocomplete="on" size=35 >
						<div id="error"></div>
					</div>

					<div>
						<input type="text" placeholder="Enter Phone Number" name="numb" autocomplete="on" size=35 >
					</div>

					<div>
						<input type="text" placeholder="Enter Address" name="add" size=35 autocomplete="on">
					</div>

					<div>
						<input type="text" placeholder="Enter Email" name="uemail" size=35 autocomplete="on">
					</div>

					<div>
						
						<select name="join" class="select_join">
							<option>-- Join As --</option>
							<option value="donor">Donor</option>
							<option value="delivery">Delivery Personnel</option>
							<option value="company">Recycling Company</option>
							<option value="volunteer">Volunteer</option>
							<option value="sponsor">Sponsor</option>
						</select>
					</div>

					<div>
						<input type="text" placeholder="Enter Username" name="uname" size=35 autocomplete="on" >
					</div>

					<div>
						<input type="Password" placeholder="Enter Password" name="pass" size=35 >
					</div>

					<div>
						<input type="Password" placeholder="Confirm Password" name="cpass" size=35 >
					</div>

					<div>
						<input type="submit" name="sub" class="sub" value="Register">
					</div>

					<div id="check">
						<input type="checkbox" value="check" class="checkbox1">I agree to the Terms and Conditions and Privacy Policy.</input>
					</div>

				</fieldset>

			</form>
		</div>
	</div>
<div id="section">
	<!-- Contents of Our Story Page -->
	<section id='story'>		 
		<h2 class="hd">Our Story</h2>	
		<p id='strp'>Cartons Le Aao, Classrooms Banao!</p>
		<section class="storycontentm">
			<p>This is an initiative that is designed beautifully to make sure that used Tetra Pak cartons are recycled into useful things for the society, especially for lesser privileged children. Not only can we help build a cleaner India, but a smarter India too.</p>
			<p>What good is a campaign, but for the stories of it's campaigners. Here are some!</p>
		</section>
		<section class="story1">
			<img src="images/str1.jpg">
			<p>
				<div style="font-size:20px;">“My parents are social workers. They’ve dedicated their lives to underprivileged kids––they run a school for them. When I was a child, many of my father’s students would stay with us at home, and my mom would feed them. I grew up watching them take care of people, I wanted to carry their values forward.</div>
				<div style="font-size:20px;">B. Ed was the most obvious route for me. But I knew there was something missing. I began going for nature walks to pass the time and I ended up with a connection to all that was around me – the trees, plants, animals. 
				That’s when I realized that the future generations don’t really know anything about how we’re damaging our world––I was getting to know about it so late in life myself! So when I finished my studies, I co-founded a school for underprivileged kids––one that teaches them to be proactive, sensitized and build a greener generation. </div>
				<div style="font-size:20px;">And there’s so much more we want to do, but a lack of funds always stops us. So when TetraFree donated 15 benches which were made from recycled material, it really helped a lot. Not only because it gave the kids a place to study, but also because they were eco-friendly just like our school! Our motto is simple, ‘Keep it all clean – your thoughts, your home, your world, your heart.’”</div>						
			</p>
		</section>
		<section class="story2">
			<img src="images/str2.jpg">
			<p>
				<div style="font-size:20px;"> “I was 13 when I started teaching my friends Math in school. I realised then that I enjoyed it and wanted to do more, so I started volunteering with an NGO in Dharavi. Every week, I would go teach underprivileged kids. But, I started noticing that my students were skipping their classesbecause they were falling sick. On asking them about it, I learnt that they spent most of their days working in landfills and it was affecting their health.
				Even when I went to Alibaug with my grandparents to visit the beach -- each and every one of them was polluted. There was waste thrown around everywhere, there was no place to escape to. When I started noticing these small things, I wished to do something about it.</div>
				<div style="font-size:20px;">An idea struck when I learned about recycling. I started at home to see if I could at least reduce the amount of waste that we were contributing to these areas. I taught all the domestic staff in my building how to recycle. And soon, we successfully reduced the amount of waste we were sending to the dumps from 200 kgs per day to 50 kgs per day! Then, I came across TetraFree's initiative. We could recycle their cartons and actually donate them to make classroom furniture! So, I started teaching all the staff in my building and community how to clean and recycle these cartons -- since then 250 desks have been donated... that too through waste! Sometimes, all it takes is one small step."</div>			
			</p>
		</section>
		<section class="story3">
			<img src="images/str3.jpg">
			<p>
				<div style="font-size:20px;">“I’m from a Navy family, so we moved around a lot. But my favourite places so far have been Ooty and the Naval residence in Mumbai. Ooty was beautiful, even in Mumbai I was always around nature. I lived in a residential area that was beautiful and cared for by the community. </div>
				<div style="font-size:20px;">And I don’t know what it was, maybe the strict rules and etiquettes that comes with a Navy background, or just the environment I grew up in, but I was always very conscious of my habits. Whether it was saving electricity or separating my garbage, I made an effort to do the right thing.</div>
				<div style="font-size:20px;">After I won Miss India in 2011 and started travelling for work, I began noticing the differences in the environment and systems of India. So, when I came back, I continued recycling and was always proud of the fact that I had built on a wonderful habit that I picked up abroad. It was my own little way of giving back!</div>
				<div style="font-size:20px;">I met with TetraFree earlier this year and they told me that if we return the empty cartons to collection centres, a lot of useful things can be made from them -- desks, notebooks and roofing sheets. Which in turn, gets donated to schools that need them. I entered the meeting as a conscious citizen and left as their Green Champion! I got involved with making people aware of this recycling program. And I can’t think of a better way to begin making a simple yet wonderful change.”</div> 					
			</p>
		</section>
		<section class="story4">
			<img src="images/str4.jpg">
			<p>
				<div style="font-size:20px;">“All I knew was that I wanted to become an engineer, and I wanted to make a difference to my country. So, after I got a degree from Stanford University, I returned to India. </div>
				<div style="font-size:20px;">At first, I worked in my father’s company. But I didn’t know when or how I would begin making that ‘difference’ - It was only when I had my first daughter and she started to get sick, that I became more conscious of our environment. And I reached the peak of frustration when I visited my farm house in Gujarat -- the one place that used to be so clean and green was now completely covered in waste and pollution. There was no place left to escape to anymore. 
				I had to start somewhere, so I started with recycling.</div>
				<div style="font-size:20px;">I heard about Tetrapack cartons and that they could be recycled into classroom furniture, notebooks and even roofing sheets! All I had to do was save the cartons and return them for recycling. But I wanted to do more. That’s when I started working with TetraFree on their recycling projects. It’s been 8 years and we’ve collected tons of cartons from all over the city and recycled them into classroom desks and benches. My happiest moment was when we donated desks to a school where the kids have never known a classroom with actual desks before. Just the smiles and the excitement on their faces was worth it.”</div>		
			</p>
		</section>
		
		<section class="story5">
			<img src="images/str5.jpg">
			<p>
				<div style="font-size:20px;">“I lost my father early on. I watched my mother take over the responsibility of the household and bring us up. She sold vegetables every day and worked night and day to educate us. She wanted us to make something of ourselves so we’d never have to struggle.</div>
				<div style="font-size:20px;">I developed my work ethic because of her– I went from an account clerk, to working in mills. Even after I was married, I didn’t stop working– it’s all I knew and together, my husband and I built a life for our family.</div>
				<div style="font-size:20px;">Unfortunately, the company my husband worked for shut down– he couldn’t find a job, and the responsibility of our three children fell on my shoulders. I began to work more while my husband took over the household. People started talking about us, but I was confident that we would figure something out.</div>
				<div style="font-size:20px;">And soon enough, we set up a business of selling milk together. Because I had more time on my hands, so I started working with an NGO, my role was to give employment to waste-pickers. I worked out of their office, near a dumping ground– the smell was horrible.</div>
				<div style="font-size:20px;">
				Co-incidentally, in 2008, a TetraFree Manager came to our office and showed us a demo of how Tetra Pak cartons can be recycled and reused instead of being thrown away in these dumps. Something clicked in me- I wanted to do anything to help these waste-pickers, especially if it meant reducing the amount of waste, and helping them earn some extra money. So, I started going around, collecting these cartons and creating awareness. 
				Since then, I’ve collected over 50 tonnes of Tetra Pak cartons and sent them for recycling.”</div>					
			</p>
		</section>
	</section>
</div>
<?php require "foot.php" ?>
	
<script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>

