<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/DA_About.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>
<?php include 'normalnav.php';?>

<style>
    .carousel-item img {
			max-height: 400px; /* set maximum height for images */
            object-fit: cover; /* ensure images cover entire container */
            width: 100%;
			
		}
	</style>
<br><br><br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ul>

	<!-- The slideshow -->
	<div class="carousel-inner">
    <div class="carousel-item active">
			<img src="images/1.jpeg" alt="Slide 1">
		</div>
		<div class="carousel-item">
			<img src="images/2.jpeg" alt="Slide 2">
		</div>
		<div class="carousel-item">
			<img src="images/3.jpeg" alt="Slide 3">
		</div>
        <div class="carousel-item">
			<img src="images/4.jpeg" alt="Slide 3">
		</div>
        <div class="carousel-item">
			<img src="images/5.jpeg" alt="Slide 3">
            
		</div>
	</div>
    

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>



<br><br>
    <section class="about-us"></section>
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-6" style="padding: 0px;background: url(images/bck.jpeg) center / cover no-repeat;">
                    <p><br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
                <div class="col-md-12 col-lg-6">
                    <br><br><br>
                    <h1 class="text-dark" style="padding-top: 20px;padding-left: 15px;padding-right: 15px;">About Us</h1>
                    <hr>
                    <p class="text-black-50" style="padding-left: 15px;padding-right: 15px;">
                        Empathy Group Limited is a business conglomerate that was registered 
                        in the Republic of The Gambia, West Africa, on November 19, 2023. 
                        The company's mission is to create unprecedented value and opportunities 
                        for its customers, employees, investors, and partners, while its vision 
                        is to establish a sincere, honest, and genuine business environment for all. 
                        Empathy Group Limited aims to venture into various sectors, such as agri and 
                        aquaculture, telecommunication, healthcare, information and communication 
                        technology (ICT), energy, construction, education, real estate development, 
                        consultancy, oil and petroleum products and accessories, mining, and general 
                        trading (import and export). The company has a subsidiary company in Sierra 
                        Leone that was opened on April 14, 2023, with the same name, Empathy Group Limited.
                        </p>
                        <p class="text-black-50" id="about-text" style="padding-left: 15px;padding-right: 15px; display:none;">
                         Empathy Group Limited has diversified interests and operations in various sectors. 
                         In the agri and aquaculture sector, the company plans to invest and develop farming
                          and fishery. In telecommunication, the company is involved in the installation 
                          and alignment of VSAT and towers. Empathy Group Limited also plans to provide 
                          healthcare services and offer ICT services. The company is also focused on 
                          renewable energy and is involved in the installation of solar panels. 
                          In the construction sector, Empathy Group Limited is involved in the construction
                           of towers, rooftop towers, buildings, and piling. The company acquired the 
                           complete set of piling machineries and their entire staff/workforce in Sierra 
                           Leone from Terratest, which decided to wrap up its operations in Africa and 
                           move to the Americas and Europe. Empathy Group Limited uses modern, free-fall 
                           equipment to drive precast square elements, which are joint together with special
                            keys (ABB seal) designed by Terratest technical department. Precast piles are 
                            especially used for their low cost, and are recommendable for sites in remote 
                            areas and for foundations where high vertical loads are applied. Empathy Group 
                            Limited also uses bore piles and continuous auger bored piles for construction 
                            in foundations, especially for bridges and tall buildings.</p>
                <div style="text-align: center;">
                <button class="button" type="button" data-hover="SURE!" id= "myButton"  type="button" style="margin-bottom: 25px; border-color: green; color: green;" onclick="toggleAboutText();" onclick="toggleAboutButton()">
                    <span>WANNA SEE MORE?</span>
                </button>
                <!-- <button class="btn btn-light btn-lg" id= "myButton"  type="button" style="margin-bottom: 21px;" onclick="toggleAboutText();" onclick="toggleAboutButton()"; onclick="hideButton()">Read More</button> -->
            </div>

                    <script>

// Define a function called toggleAboutText
function toggleAboutText() {
    // Get the element with the ID of "about-text" and store it in a variable called aboutText
    var aboutText = document.getElementById("about-text");

    // If the display style of the aboutText element is "none"
    if (aboutText.style.display === "none") {
        // Set the display style of the aboutText element to "block"
        aboutText.style.display = "block";
        // Store the text content of the aboutText element in a variable called text
        var text = aboutText.textContent;
        // Set the text content of the aboutText element to an empty string
        aboutText.textContent = "";
        // Initialize a variable called i to 0
        var i = 0;
        // Set an interval to run every 50 milliseconds
        var intervalId = setInterval(function() {
            // If i is less than the length of the text variable
            if (i < text.length) {
                // Add the character at index i of the text variable to the text content of the aboutText element
                aboutText.textContent += text.charAt(i);
                // Increment i by 1
                i++;
            } else {
                // If i is not less than the length of the text variable, clear the interval
                clearInterval(intervalId);
            }
        }, 10);
    } else {
        // If the display style of the aboutText element is not "none", set it to "none"
        aboutText.style.display = "none";
    }
}


                    </script>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
    <?php include 'footer.php';?>
</body>

</html>
