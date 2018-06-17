<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic Page - Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
		<script type="text/javascript">
			var coins = 0;
			window.setInterval(function () {
 			 coins = coins + 1;
  			document.getElementById("coins").innerHTML = "You have " + coins + " coins!";
			}, 1000);
		</script>
		
		<script type="text/javascript">
			var BLTG = 0;
			window.setInterval(function () {
 			 BLTG = BLTG + 1;
  			document.getElementById("BLTG").innerHTML = "You have " + BLTG + " BLTG!";
			}, 2000);
		</script>
		
		<script type="text/javascript">
			var XAX = 0;
			window.setInterval(function () {
 			 XAX = XAX + 1;
  			document.getElementById("XAX").innerHTML = "You have " + XAX + " XAX!";
			}, 3000);
		</script>
		
		<script type="text/javascript">
			var HELD = 0;
			window.setInterval(function () {
 			 HELD = HELD + 1;
  			document.getElementById("HELD").innerHTML = "You have " + HELD + " HELD!";
			}, 4000);
		</script>
		
		<script type="text/javascript">
			var HTRC = 0;
			window.setInterval(function () {
 			 HTRC = HTRC + 1;
  			document.getElementById("HTRC").innerHTML = "You have " + HTRC + " HTRC!";
			}, 4000);
		</script>
		
		<style>
			#coins {color:white;}
			#BLTG {color:white;}
			#XAX {color:white;}
			#HELD {color:white;}
			#HTRC {color:white;}
			
			.flex-container {
				display: flex;
				flex-direction: row;
				height: 20px;
				justify-content: flex-start;
			}
			
			
			.flex-item {
				  background: #18242a;
				  padding: 2px;
				  width: 200px;
				  height: 40px;
				  margin-top: 10px;
				  line-height: 35px;
				  color: #dff2f1;
				  font-weight: bold;
				  font-size: 0.8em;
				  text-align: center;
				  list-style: none;
				  font-family: 'Montserrat', sans-serif;
			}
			
			.odd { background: #2f7976;}
			
			.even { background: #90e3b0;}	
			
			.otro { background: #f6903d;}	

			.also { background: #f05053;}	
			 
			
			/*body { background: linear-gradient(to right, #1c68b3 , #47bbf3);*/ 

			body {	background: #40afa8;  /* fallback for old browsers */
					background: linear-gradient(45deg, #40afa8, #55e8df);
 			}
			
			p {font-family: 'Montserrat', sans-serif;}
		 
	    </style>
	    
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		
	</head>
	<body>
 
 	 		  
  		      
  	<div style="color:white;">
		<?php
		$currentDateTime = date('Y-m-d H:i:s');
		echo $currentDateTime;
		?>
		
		<?php
			$bltgprice = 0.017;
			$xaxprice = 0.042;
			$heldprice = 0.33;
			$htrcprice = 0.11;
			
			$bltgtotal = 24000;
			$xaxtotal = 21000;
			$heldtotal = 2000;
			$htrctotal = 4000;
			
			$bltgdaily = 52;
			$bltgweekly = 370;
			$bltgmonthly = 1586;
			$bltgyearly = 19302;
			
			$xaxdaily = 6.95;
			$xaxweekly = 48.6;
			$xaxmonthly = 208.52;
			$xaxyearly = 2537;
			
			$helddaily = 54.93;
			$heldweekly = 384.55;
			$heldmonthly = 1648.07;
			$heldyearly = 20051.56;
			
			$bltgnodenum = 8;
			$xaxnodenum = 8;
			$heldnodenum = 1;
			$htrcnodenum = 1;
  		?>
		
		<?php
		$now = time();
		$your_date = strtotime("2018-06-03"); //Starting date
		$datediff = floor(($now - $your_date)/(60*60*24));
		?>
		
		<?php
		echo $datediff+55;
		?>
		
		<?php
		$url = "https://coinbase.com/api/v1/prices/spot_rate";
		$json = json_decode(file_get_contents($url), true);
		$price = $json["amount"];
		
		?>
		
		<p class="counter-number"><?=$datediff?><br />
		Bitcoin Price (coinbase) $<?php echo $price; ?>
		</p>
		
	</div>
		
			      
	<ul class="flex-container">
		<li class="flex-item">Cory Hunter</li>
		<li class="flex-item">BLTG</li>
		<li class="flex-item">XAX</li>
		<li class="flex-item">HELD</li>
		<li class="flex-item">HTRC</li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item odd">Number of Nodes</li>
		<li class="flex-item odd">8</li>
		<li class="flex-item odd">8</li>
		<li class="flex-item odd">1</li>
		<li class="flex-item odd">1</li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item odd">Your Daily Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgdaily*$bltgnodenum; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxdaily*$xaxnodenum; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$helddaily*$heldnodenum; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal*$htrcnodenum; ?></li>
	</ul>
	
	<ul class="flex-container ">
		<li class="flex-item odd">Coin Daily Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgdaily; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxdaily; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$helddaily; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item odd">Your Weekly Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgweekly; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxweekly; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$heldweekly; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item odd">Coin Weekly Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgweekly; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxweekly; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$heldweekly; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>

	<ul class="flex-container">
		<li class="flex-item odd">Your Monthly Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$heldmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item odd">Coin Monthly Income</li>
		<li class="flex-item odd">$<?php echo $bltgprice*$bltgmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $xaxprice*$xaxmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $heldprice*$heldmonthly; ?></li>
		<li class="flex-item odd">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">Your Yearly Income</li>
		<li class="flex-item">$<?php echo $bltgprice*$bltgyearly; ?></li>
		<li class="flex-item">$<?php echo $xaxprice*$xaxyearly; ?></li>
		<li class="flex-item">$<?php echo $heldprice*$heldyearly; ?></li>
		<li class="flex-item">$<?php echo $htrcprice*$htrcyearly; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">Coin Yearly Income</li>
		<li class="flex-item">$<?php echo $bltgprice*$bltgyearly; ?></li>
		<li class="flex-item">$<?php echo $xaxprice*$xaxyearly; ?></li>
		<li class="flex-item">$<?php echo $heldprice*$heldyearly; ?></li>
		<li class="flex-item">$<?php echo $htrcprice*$htrcyearly; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">Total Coins</li>
		<li class="flex-item"><?php echo $bltgtotal; ?></li>
		<li class="flex-item"><?php echo $xaxtotal; ?></li>
		<li class="flex-item"><?php echo $heldtotal; ?></li>
		<li class="flex-item"><?php echo $htrcprice; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">Coin Price</li>
		<li class="flex-item"><?php echo $bltgprice; ?></li>
		<li class="flex-item"><?php echo $xaxprice; ?></li>
		<li class="flex-item"><?php echo $heldprice; ?></li>
		<li class="flex-item"><?php echo $htrcprice; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">USD Value</li>
		<li class="flex-item">$<?php echo $bltgprice*$bltgtotal; ?></li>
		<li class="flex-item">$<?php echo $xaxprice*$xaxtotal; ?></li>
		<li class="flex-item">$<?php echo $heldprice*$heldtotal; ?></li>
		<li class="flex-item">$<?php echo $htrcprice*$htrctotal; ?></li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item">ROI</li>
		<li class="flex-item">646%</li>
		<li class="flex-item">101%</li>
		<li class="flex-item">1336%</li>
		<li class="flex-item">3300%</li>
	</ul>
	
	<ul class="flex-container">
		<li class="flex-item"><div id="coins"></div></li>
		<li class="flex-item"><div id="BLTG"></div></li>
		<li class="flex-item"><div id="XAX"></div></li>
		<li class="flex-item"><div id="HELD"></div></li>
		<li class="flex-item"><div id="HTRC"></div></li>
	</ul>
		 
 
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>