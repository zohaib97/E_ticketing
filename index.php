<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<head>
    <title>The Travel - Tour Travel</title>

</head>

<body>
    

    
	<!--HEADER SECTION-->
	<?php
include_once('header.php');
?>
    <section>
       
    
		<!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Enter city</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
							</div>
							<div class="input-field">
								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->

	<!--HEADER SECTION-->
	<section>
		<div class="book-tab">
			<div class="container">
				<div class="row">
				<div class="caption center-align slid-cap book-tit">
					<h5 class="light grey-text text-lighten-3">World's leading tour and travels Booking website</h5>
					<h2>All booking now easy</h2>
				</div>
				<div class="book-tab-inn">
					<ul class="nav nav-tabs">
					  <li class="active" id="1"><a data-toggle="tab" href="#home"><i class="fab fa-fly"></i> Travel Country</a></li>
					  <li id="2"><a data-toggle="tab" href="#menu1">City/Places Select</a></li>
					  <li id="3"><a data-toggle="tab" href="#menu2">Custom Package</a></li>
					  <li id="4"><a data-toggle="tab" href="#menu3">Car Rentals </a></li>
					   <li id="5"><a data-toggle="tab" href="#menu4">Flight Booking  </a></li>
					</ul>

					<div class="tab-content book-tab-body">
					  <div id="home" class="tab-pane fade in active">
						<div class="book-tab-tit">
							<h3>Tour Package booking now!</h3>
							<p>Experience the various exciting tour and travel Countries and find vacation</p>
						</div>
						<form class="contact__form v2-search-form book-tab-form" method="post" action="">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
							
							<div class="row">
								<div class="col s6">
								<div class="form-group">
<label for="country1">From</label>
<select class="form-control js-example-disabled-results" id="country-dropdown1" name="country1">
<option value="">Select Country</option>
<?php

$result = mysqli_query($con,"SELECT * FROM country");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["cname"];?></option>
<?php
}
?>
</select>
									
</div>
									</div>
								<div class="col s6">
									<div class="form-group">
<label for="country">To</label>
<select class="form-control js-example-disabled-results" id="country-dropdown" name="country">
<option value="">Select Country</option>
<?php

$result1 = mysqli_query($con,"SELECT * FROM country");
while($row1 = mysqli_fetch_array($result1)) {
?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1["cname"];?></option>
<?php
}
?>
</select>
									
</div>
								</div>
							</div>
												
							<div class="row">
								<div class="input-field col s12">
									<a data-toggle="tab" href="#menu1" class="waves-effect waves-light tourz-sear-btn v2-ser-btn" id="next1">Next</a>
								</div>
							</div>
						</form>
					  </div>
					  <div id="menu1" class="tab-pane fade">
						<div class="book-tab-tit">
							<h3>City/places booking </h3>
							<p>Experience the various exciting places and events</p>
						</div>
						<form class="contact__form v2-search-form book-tab-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/hotelbooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
							<div class="row">
								<div class="col s6">
									<div class="form-group">
<label for="city">City</label>
<select class="form-control js-example-disabled-results" id="city-dropdown" style="width:100%;">
</select>
</div>
								</div>
								<div class="col s6">
									<div class="form-group">
<label for="places">Places</label>
<select class="form-control js-example-disabled-results" id="places-dropdown" style="width:100%;">
</select>
</div> 
								</div>
							</div>
														
							<div class="row">
								<div class="input-field col s10">
									<a data-toggle="tab" href="#menu2" class="waves-effect waves-light tourz-sear-btn v2-ser-btn" id="next2">Next</a>
								</div>
								
							</div>
						</form>
					  </div>
					  <div id="menu2" class="tab-pane fade">
						<div class="book-tab-tit">
							<h3>Custom Package</h3>
							<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
						</div>
						<form class="contact__form v2-search-form book-tab-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/custombooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select name="howmanytravellers">
										<option value="" disabled selected>How many travellers?</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
								  <input type="text" class="validate" name="travelername1">
								  <label>Traveller name 1</label>
								</div>
								<div class="input-field col s12">
									<input type="text" class="validate" name="travelername2">
									<label>Traveller name 2</label>
								</div>
								<div class="input-field col s12">
									<input type="text" class="validate" name="travelername3">
									<label>Traveller name 3</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete validate" name="city">
									<label for="select-city-1">Select City or Place</label>
								</div>
								<div class="input-field col s12">
									<select name="package">
										<option value="" disabled selected>Select your package</option>
										<option value="Honeymoon Package">Honeymoon Package</option>
										<option value="Family Package">Family Package</option>
										<option value="Holiday Package">Holiday Package</option>
										<option value="Group Package">Group Package</option>
										<option value="Regular Package">Regular Package</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="arrival" readonly>
									<label for="from">Arrival Date</label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="departure" readonly>
									<label for="to">Departure Date</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>							

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>						
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					  </div>
					  <div id="menu3" class="tab-pane fade">
						<div class="book-tab-tit">
							<h3>Car Rentals easy now!</h3>
							<p>Lowest car hire prices in over 60000 locations worldwide through 300 big global car hire brands include avis,herz,sixt,europcar. Easy car hire and anytime free cancellation. </p>
						</div>
						<form class="contact__form v2-search-form book-tab-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/carbooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city" class="autocomplete" name="pickuplocation">
									<label for="select-city">Pick up location</label>
								</div>
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete" name="droplocation">
									<label for="select-city">Dropping off location</label>
								</div>								
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="pickdate">
									<label for="from">Pick up date</label>
								</div>
								<div class="input-field col s6">
									<select name="picktime">
										<option value="" disabled selected>Pick up time</option>
										<option value="24:00 midnight">24:00 midnight</option>
										<option value="01:00 AM">01:00 AM</option>
										<option value="02:00 AM">02:00 AM</option>
										<option value="03:00 AM">03:00 AM</option>
										<option value="04:00 AM">04:00 AM</option>
										<option value="05:00 AM">05:00 AM</option>
										<option value="06:00 AM">06:00 AM</option>
										<option value="07:00 AM">07:00 AM</option>
										<option value="08:00 AM">08:00 AM</option>
										<option value="09:00 AM">09:00 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="12:00 noon">12:00 noon</option>
										<option value="13:00 PM">13:00 PM</option>
										<option value="14:00 PM">14:00 PM</option>
										<option value="15:00 PM">15:00 PM</option>
										<option value="16:00 PM">16:00 PM</option>
										<option value="17:00 PM">17:00 PM</option>
										<option value="18:00 PM">18:00 PM</option>
										<option value="19:00 PM">19:00 PM</option>
										<option value="20:00 PM">20:00 PM</option>
										<option value="21:00 PM">21:00 PM</option>
										<option value="22:00 PM">22:00 PM</option>
										<option value="23:00 PM">23:00 PM</option>
										<option value="24:00 midnight">06:00 AM</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="to" name="dropdate">
									<label for="to">Drop off date</label>
								</div>
								<div class="input-field col s6">
									<select name="droptime">
										<option value="" disabled selected>Drop off time</option>
										<option value="24:00 midnight">24:00 midnight</option>
										<option value="01:00 AM">01:00 AM</option>
										<option value="02:00 AM">02:00 AM</option>
										<option value="03:00 AM">03:00 AM</option>
										<option value="04:00 AM">04:00 AM</option>
										<option value="05:00 AM">05:00 AM</option>
										<option value="06:00 AM">06:00 AM</option>
										<option value="07:00 AM">07:00 AM</option>
										<option value="08:00 AM">08:00 AM</option>
										<option value="09:00 AM">09:00 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="12:00 noon">12:00 noon</option>
										<option value="13:00 PM">13:00 PM</option>
										<option value="14:00 PM">14:00 PM</option>
										<option value="15:00 PM">15:00 PM</option>
										<option value="16:00 PM">16:00 PM</option>
										<option value="17:00 PM">17:00 PM</option>
										<option value="18:00 PM">18:00 PM</option>
										<option value="19:00 PM">19:00 PM</option>
										<option value="20:00 PM">20:00 PM</option>
										<option value="21:00 PM">21:00 PM</option>
										<option value="22:00 PM">22:00 PM</option>
										<option value="23:00 PM">23:00 PM</option>
										<option value="24:00 midnight">06:00 AM</option>
									</select>
								</div>
							</div>							
							<div class="row">
								<div class="input-field col s6">
									<select name="selectcar">
										<option value="" disabled selected>Select car type</option>
										<option value="Micro">Micro</option>
										<option value="Mini">Mini</option>
										<option value="Prime">Prime</option>
										<option value="Prime SUV">Prime SUV</option>
										<option value="Luxury Cars">Luxury Cars</option>
										<option value="Mini Van">Mini Van</option>
										<option value="Small Bus">Small Bus</option>
										<option value="Luxury Bus">Luxury Bus</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="totalpassangers">
										<option value="" disabled selected>Total passengers</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="10">10</option>
										<option value="15">15</option>
										<option value="20">20</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>								

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					  </div>
					  <div id="menu4" class="tab-pane fade">
						<div class="book-tab-tit">
							<h3>Flight Booking</h3>
							<p>Find and compare Flight Tickets at lowest airfare at Traveller. Also Get best deals on online Flight Ticket Booking for your business and leisure travel.</p>
						</div>
						<form class="contact__form v2-search-form book-tab-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/flightbooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city" class="autocomplete" name="flyingfrom">
									<label for="select-city">Flying From</label>
								</div>
								<div class="input-field col s12">
									<input type="text" id="select-city" class="autocomplete" name="flyingto">
									<label for="select-city">Flying To</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="arrivaldate">
									<label for="from">Arrival Date</label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="departuredate">
									<label for="to">Departure Date</label>
								</div>
							</div>
								<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>								

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					  </div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->		

<section>
		<div class="rows pad-bot-redu tb-space hom2-ban-pack">
			<div class="container">
				<div>
					<!-- TOUR PLACE 1 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.5s">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="images/band.png" alt=""> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="images/t5.png" alt="Tour Booking" title="Tour Booking"> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
									</li>
									<li>
										<a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
									</li>
									<li>
										<a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
									</li>
									<li>
										<a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 2 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1s">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="images/band1.png" alt=""> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="images/t1.png" alt="Tour Booking" title="Tour Booking"> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
									</li>
									<li>
										<a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
									</li>
									<li>
										<a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
									</li>
									<li>
										<a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 3 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
						<div class="v_place_img"><img src="images/t2.png" alt="Tour Booking" title="Tour Booking"> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
									</li>
									<li>
										<a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
									</li>
									<li>
										<a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
									</li>
									<li>
										<a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-bot-redu pad-top-o">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Popular <span>Cities</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- CITY -->
				<div class="col-md-6">
					<a href="tour-details.html">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home.jpg" alt=""> </div>
							<div class="tour-mig-lc-con">
								<h5>Europe</h5>
								<p><span>12 Packages</span> Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.html">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home3.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Dubai</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.html">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home2.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>India</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.html">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home1.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Usa</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.html">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home4.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>London</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Hotels <span>booking open now! </span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- HOTEL GRID -->
				<div class="to-ho-hotel">
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="images/hotels/1.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="images/hotels/2.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Taaj Grand Resorts</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="images/hotels/3.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Keep Grand Hotels</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== SECTION: FREE CONSULTANT ==========-->
	<!--====== REQUEST A QUOTE ==========-->
	  <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis1.png" alt="">
									</a><span>Free WiFi</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis2.png" alt=""> </a><span>Breakfast</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis3.png" alt=""> </a><span>Pool</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis4.png" alt=""> </a><span>Television</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis5.png" alt=""> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	 <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Events</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Time</th>
                            <th class="e_h1">Location</th>
                            <th>Book</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="images/iplace-2.jpg" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="images/iplace-3.jpg" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">JAPAN</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Switzerland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="images/iplace-5.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="images/iplace-6.jpg" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="images/iplace-7.jpg" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">France</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="images/iplace-8.jpg" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">England</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><img src="images/iplace-9.jpg" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
	
	 <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Sight Seeing</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 1 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place2.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 2 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place1.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 3 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place3.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 4 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="images/place4.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section>
		<div class="ho-popu tb-space pad-bot-redu pad-top-o">
			<div class="rows container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Top <span>Branding</span> for this month</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
				<div class="ho-popu-bod">
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Hotels</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/2.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/8.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Packages</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/2.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Reviewers</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/2.png" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.html">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/5.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== REQUEST A QUOTE ==========-->
	<section>
		<div class="foot-mob-sec tb-space">
			<div class="rows container">
				<!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
				<div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="images/mobile.png" alt="" /> </div>
				<!-- REQUEST A QUOTE -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- THANK YOU MESSAGE -->
					<div class="foot-mob-app">
						<h2>Have you tried our mobile app?</h2>
						<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews</li>
						</ul>
						<a href="#"><img src="images/android.png" alt=""> </a>
						<a href="#"><img src="images/apple.png" alt=""> </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--====== TIPS BEFORE TRAVEL ==========-->
	<section>
		<div class="rows tips tips-home tb-space home_title">
			<div class="container tips_1">
				<!-- TIPS BEFORE TRAVEL -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3>Tips Before Travel</h3>
					<div class="tips_left tips_left_1">
						<h5>Bring copies of your passport</h5>
						<p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
					</div>
					<div class="tips_left tips_left_2">
						<h5>Register with your embassy</h5>
						<p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
					</div>
					<div class="tips_left tips_left_3">
						<h5>Always have local cash</h5>
						<p>Donec et placerat ante. Etiam et velit in massa. </p>
					</div>
				</div>
				<!-- CUSTOMER TESTIMONIALS -->
				<div class="col-md-8 col-sm-6 col-xs-12 testi-2">
					<!-- TESTIMONIAL TITLE -->
					<h3>Customer Testimonials</h3>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
					<!-- ARRANGEMENTS & HELPS -->
					<h3>Arrangement & Helps</h3>
					<div class="arrange">
						<ul>
							<!-- LOCATION MANAGER -->
							<li>
								<a href="#"><img src="images/Location-Manager.png" alt=""> </a>
							</li>
							<!-- PRIVATE GUIDE -->
							<li>
								<a href="#"><img src="images/Private-Guide.png" alt=""> </a>
							</li>
							<!-- ARRANGEMENTS -->
							<li>
								<a href="#"><img src="images/Arrangements.png" alt=""> </a>
							</li>
							<!-- EVENT ACTIVITIES -->
							<li>
								<a href="#"><img src="images/Events-Activities.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER 1 ==========-->
	<?php
include_once('footer.php');
?>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script>
	var $disabledResults = $(".js-example-disabled-results");
$disabledResults.select2();
		$(document).ready(function() {
			$('#city-dropdown').html('<option value="">Select Country First</option>');
			$('#places-dropdown').html('<option value="">Select City First</option>'); 
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "state-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
$('#places-dropdown').html('<option value="">Select City First</option>'); 
}
});
});    
$('#city-dropdown').on('change', function() {
var place_id = this.value;
$.ajax({
url: "city-state.php",
type: "POST",
data: {
place_id: place_id
},
cache: false,
success: function(result){
$("#places-dropdown").html(result);
}
});
});
			$("#next1").click(function() {
          $("#1").removeClass("active");
          $("#2").addClass("active");
        });
			$("#next2").click(function() {
          $("#2").removeClass("active");
          $("#3").addClass("active");
        });
			$("#next3").click(function() {
          $("#3").removeClass("active");
          $("#4").addClass("active");
        });
});
	</script>
</body>

</html>