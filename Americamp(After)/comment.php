<?php
//Validates the inputs
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Error variables section
$nameE = $lastE = $emailE = $numberE = "";
//Variables section
$name = $email = $comment = $number = $biscuit = $last = "";
 
//Name Section
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name"]))
    {
        $nameE = "Name is required";
    }
    else
    {
        //checks if the name only contain letters and space
        $name = test_input($_POST["name"]);
        //Name validator
        if(!preg_match("#^[a-zA-Z\.'\s]{2,60}$#", $name))
            $nameE = "Only letters and space required.";
    }
//Last name section
    if(empty($_POST["last"]))
    {
        $lastE = "Lastname is required";
    }
    else
    {
        //checks if the lastname only contain letters and space
        $last = test_input($_POST["last"]);
        //Lastname validator
        if(!preg_match("#^[a-zA-Z\.'\s]{2,60}$#", $last))
            $lastE = "Only letters and space required.";
    }

    //Phone number section.
    if (empty($_POST["number"]))
    {
    	$numberE = "Phone number is required";
    }
    else
    {
    	$number = test_input($_POST["number"]);
    	//Mobile number validator
        if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $number))

    		$numberE = "Invalid  Number";
    }

    //Email section
    if (empty($_POST["email"]))
    {
        $emailE = "Email is required.";
    }
    else
    {
        $email = test_input($_POST["email"]);
        //checks if email address is entered right
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            $emailE = "Invalid";
    }

    //Biscuits section
        if(!empty($_POST["biscuit"]))
    {
        $biscuit = test_input($_POST["biscuit"]);
    }

    //Comment section
    if(!empty($_POST["comment"]))
    {
        $comment = test_input($_POST["comment"]);
    }
 
}
?>
<!--Declaration: Used to inform the web browser about what version of HTML is used-->
<!DOCTYPE html>
<!--Tells the browser that it is an HTML document-->
<html>
<!--Container for metadata-->
<head>
<!--Name of the page-->
<title>AmeriCamp - Home</title>
<!--This is the meta data-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="AmeriCamp, camp in America, America camping">
<meta name="description" content="AmeriCamp was founded on a dream to offer the highest
salaries and lowest prices for people around the world who wanted to work at what people would
refer to as “Camp America”.">
<!--Link to the CSS-->
<link rel="stylesheet" type="text/css" href="styles/americamp-styles.css">
<link rel="stylesheet" href="tipuesearch/css/tipuesearch.css">
<link rel="stylesheet" href="tipuesearch/css/normalize.css">
</head>
<!--Defines the document's body-->
<body>
<div class="all">
    <div class="logo">
        <!--Link to the Home page-->
		<a href="index.html">
		<!--Image of the logo-->
		<img src="images/americamp.jpg" alt="logo" width="340" height="200">
		</a>
	</div>
	<br><br><br><br>
	<div class="links">
	   	<!--Link to the Home page-->
		<a href="index.html">Home</a>
		<!--Link to the About page.-->
		<a href="about.html">About</a>
		<!--Link to the Comment's page-->
		<a href="comment.php">Comment</a>
		<!--Link to the gallery's page-->
		<a href="gallery.html">Gallery</a>
		<!--Link to the contact's page-->
		<a href="contact.html">Contact</a>
		</div>
	 <div class="tab">
	</div>
    <div class="advertisers">
    	<!--Link to the AmeriCamp bloggers in AmeriCamp's website-->
		<a href="https://www.americamp.co.uk/about/americamp-bloggers/" target="_blank">
		<!--Image of the AmeriCamp Bloggers-->
		<img src="images/Check-out-our-AmeriCamp-Bloggers.jpg" width="340" height="400" alt="Check-out-our-AmeriCamp-Bloggers">
		</a>
		<!--Heading 2 tag with bold text-->
		<h2>Follow Us</h2>
		<!--Defines a paragraph-->
		<p class="cen">
		<!--Produces a line break.-->
		<br>
		<br>
		<!--Link to the AmeriCamp's facebook page-->
		<a href="https://www.facebook.com/AmeriCamp">
		<!--Image of the Facebook logo-->
		<img src="images/fblogo.png" alt="Fb-logo" width="140" height="150">
		</a>
		<br>
		<br>
		<!--Link to the AmeriCamp's instagram page-->
		<a href="https://www.instagram.com/americamp/">
		<!--Image of the instagram logo-->
		<img src="images/instalogo.png" alt="insta-logo">
		</a>
		<br>
		<br>
		<!--Link to the AmeriCamp's twitter page-->
		<a href="https://twitter.com/americamp">
		<!--Image of the twitter logo-->
		<img src="images/twitterlogo.png" alt="twitter-logo">
		</a>
		</p>
		<br>	
		<a href="index.html">
		<p class="cen">
		<img src="images/americamp.jpg" alt="logo" width="128" height="69">
			</p>
			</a>
						<footer>AmeriCamp &copy;2017</footer>
						<br>
	</div>
	<!--Paragraph section-->

	<!--Third Heading tag-->
				    <h3>Comment</h3>
				    <h3 class="comment"><b>AmeriCamp Mailing List</b></h3>
				     <h2>
			        To think that this could be the start of a wonderful adventure! #FreeBiscuits x
			        the world to do Summer Camp in America 2017 and has won many awards including Best Summer Camp America 2016 Organisation.
				    </h2>
				    <!--Defines a form that is used to collect user input-->
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

						<!--Where the user can enter data-->
						<input type="text" name="name" placeholder="Name">
						<!--Error for name regular expression-->
						<span class="error">* <?php echo $nameE;?></span>
						<br><br>

						<input type="text" name="last" placeholder="Lastname">
						<!--Error for lastname regular expression-->
						<span class="error">* <?php echo $lastE;?></span>
						<br><br>

						<input type="text" name="number" placeholder="Phone Number">
						<!--Error for number regular expression-->
						<span class="error">* <?php echo $numberE;?></span>
						<br><br>

						<input type="text" name="email" placeholder="Email">
						<!--Error for email regular expression-->
						<span class="error">* <?php echo $emailE;?></span>
						<br><br>
					
						<input type="text" class="biscuit" name="biscuit" placeholder="Favourite biscuit? x">
						<br><br>

						<!--This is where the user can enter text in the comment box-->
						<textarea name="comment" placeholder="Comment box" rows="10" cols="50"></textarea>
						<br><br>
						<!--Submit button: Used to fetch the data of each textbox-->
						<input type="submit" name="submit" value="Submit" style="float: right">
					</form>
					<?php
					//Outputs the name.
					echo  $name;
					echo "<br>";
					//Outputs the lastname.
					echo  $last;
					echo "<br>";
					//Outputs the phone number.
					echo  $number;
					echo "<br>";
					//Outputs the E-mail address.
					echo  $email;
					echo "<br>";
					//Outputs the comments.
					echo  $comment;
					echo "<br>";
					//Ouputs the biscuit
					echo $biscuit;
					echo "<br>";
					?>
</div>
	<button onclick="topFunction()" id="suBtn">
		<img src="images/arrow.png" alt="toparrow" height="30" width="30">
	</button>
	<script src="javascript/scrollup.js" type="text/javascript"></script>

</body>

</html>
<!--Tags with a slash ends the tag of each tag being used in this code-->