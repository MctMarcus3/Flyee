<!-- Layout with no background -->
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Flyee Inc.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <base href="./" target="_blank"> -->
	<link href="../favicon.ico" rel="favicon">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" type="text/css" rel="stylesheet">
	<link href="../css/style_og.css" type="text/css" rel="stylesheet">
	<!-- <link href="location to your css" type="text/css" rel="stylesheet"> -->
	</head>
  <body>
	<!-- Logo Svg -->
	<img src="../images/imgout/dronesidelogo.svg" onerror="this.onerror=null; this.src='../images/imgout/dronesidelogo.png'" id="logo">
	<!-- Navigation Bar -->
		<div class="content">
			<nav role="navigation">
				<div id="menuToggle">
				<input type="checkbox" id="menuButton" onclick="menuchecked()"/>
				<span></span>
				<span></span>
				<span></span>
				<ul class="menu">
					<li><a class="navButton" href="#">Home</a></li>
					<li><a class="navButton" href="#">About Us</a></li>
					<li><a class="navButton" href="#">Reviews</a></li>
					<li><a class="navButton" href="#">Package Pricing</a></li>
					<li><a class="navButton" href="#">Feedback Us</a></li>
				</ul>
				</div>
			</nav>
		</div>
	<div id="content">
	<!-- Enter your content here ↓ -->
	<div class="text">
	<form action="submit.php" method="post">
	<h1 align="center">Feedback Form</h1>
	<p>Thank you for taking the time to fill in our online feedback form. By providing us your feedback, you are helping us understand what we do well and what improvements we need to implement.</p>
		<table border="1" class="feedback">
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input type="text" name="name" id="name" placeholder="John Doe" required></td>
			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="email" name="email" id="email" placeholder="email@example.com" required></td>
			</tr>
			<tr>
				<td><label for="tracknum">Tracking Number:</label></td>
				<td><input type="number" name="tracknum" id="tracknum" placeholder="1249418002840113" required></td>
			</tr>
		</table>
	</br>
		<table class="feedback">
			<tr>
				<td colspan="2">1. Please rate our delivery of the following:</td>
			</tr>
			<tr>
				<td class="table">Security</td>
				<td>
					<select name="Security" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="table">Appearance</td>
				<td>
					<select name="Appearance" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="table">On-Time Delivery</td>
				<td>
					<select name="TimeDel" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="table">Accuracy Of Delivery</td>
				<td>
					<select name="Accuracy" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
				<td colspan="2">2. Please rate our customer service representatives on the following:</td>
			</tr>
			<tr>
				<td class="table">Placing Delivery Orders</td>
				<td>
					<span class="rate">
					<select name="OrderPlacing" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
					</span>
				</td>
			</tr>
			<tr>
				<td class="table">On-Hold Time</td>
				<td>
					<span class="rate" required>
					<select name="HoldTime" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
					</span>
				</td>
			</tr>
			<tr>
				<td class="table">Friendliness</td>
				<td>
					<span class="rate" required>
					<select name="Friendly" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
					</span>
				</td>
			</tr>
			<tr>
				<td class="table">Ability to Answer Questions</td>
				<td>
					<span class="rate" required>
					<select name="Questions" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
					</span>
				</td>
			</tr>
			<tr> 
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
			<td colspan="2">3. What three words might you use to describe your delivery experiences with Flyee?</td>
			</tr>
			<tr>
				<td class="qns" colspan="2">
					1. <input type="text" name="word1"/>
				</td>
			</tr>
			<tr>
				<td class="qns"colspan="2">
					2. <input type="text" name="word2"/>
				</td>
			</tr>
			<tr>
				<td class="qns" colspan="2">
					3. <input type="text" name="word3"/>
				</td>
			</tr>
			<tr>
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
			<td colspan="2">4. How well do you think we handle deliveries that encounter difficulty? (e.g customer not home, bad weather condition, etc.)</td>
			</tr>
			<tr>
				<td class="qns" colspan="2">
					<p>Comments:</p>
					<textarea rows="8" cols="30" name="DeliveryDiff"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
			<td colspan="2">5. Based upon the service Flyee has provided to you, would you refer us to a colleague/friend who is looking for a delivery service?</td>
			</tr>
			<tr>
				<td colspan="2" class="comment">
					<input type="radio" name="option" onclick="javascript:comments();" id="yes"/><label for="yes">Yes</label>
					<input type="radio" name="option" onclick="javascript:comments();" id="no"/><label for="no">No</label>
					<input type="radio" name="option" onclick="javascript:comments();" id="notSure"/><label for="notSure">Not Sure</label>
					
					<span id="DeliveryDiff">
					<p>If no or not sure, please comment. </p>
					<textarea rows="8" cols="30" name="recc"  required></textarea>
					</span>
				</td>
			</tr>
			<tr> 
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
			<td colspan="2">6. In an effort to exceed your expectations, what could we do differently to add value to our customer-vendor relationship?</td>
			</tr>
			<tr>
				<td class="qns" colspan="2">
					<p>Comments:</p>
					<textarea rows="8" cols="30" name="cusvend"></textarea>
				</td>
			</tr>
			<tr> 
				<td colspan="2"> &nbsp; </td>
			</tr>
			<tr>
				<td class="table">7. Overall, how would you rate our service on a scale of 1 to 5 with 1 being the lowest and 5 being the highest?
				</td>
				<td>
					<span class="Service" required>
					<select name="scale" class="starValue">
						<option value="1">1 ★</option>
						<option value="2">2 ★</option>
						<option value="3">3 ★</option>
						<option value="4">4 ★</option>
						<option value="5">5 ★</option>
					</select>
					</span>
				</td>
				<tr>
				<td align="center">
					<input type="submit" value="Submit" />
				</td>
			</tr>
			</tr>
			<tr> 
				<td colspan="2"> &nbsp; </td>
			</tr>
		</table>
	</form>
	</div>
	<!-- Prevents Scrolling of Content when menu is opened -->
	</div>
  </body>
  
   <script>
	function menuchecked(){
		var checkbox = document.getElementById("menuButton");
		var content = document.getElementById("content");
		if(checkbox.checked == true){
			content.style.display = "none";
		} else {
			content.style.display = "block";
		}
	}	
	function mediaCheck(mediapx) {
	if (mediapx.matches) { // If media query matches
	document.getElementById("menuButton").checked = false;
	content.style.display = "block";
	} else {
	document.getElementById("menuButton").checked = false;
	content.style.display = "block";
	}
	}
	
	function comments() {
	if (document.getElementById("yes").checked == true) {
		DeliveryDiff.style.display = "none";
	}
	else if (document.getElementById("no").checked == true) {
		DeliveryDiff.style.display = "inline";
	}
	else if (document.getElementById("notSure").checked == true) {
		DeliveryDiff.style.display = "inline";
	}
	else {
		// DO NOTHING
		}
	}
	
	var mediapx = window.matchMedia("(max-width: 914px)")
	mediaCheck(mediapx) // Call listener function at run time
	mediapx.addListener(mediaCheck) // Attach listener function on state changes
</script>
</html>