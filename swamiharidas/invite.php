<?php
	//include_once('backup.php');
?>
<!DOCTYPE html>
<html>
  	<head>
  		<title>Get an Invite - Swami Haridas Tansen Mahotsava</title>
  		<meta charset="UTF-8">
		<meta name="description" content="Entry free. Seating on first come first serve basis. Get an invite today! 9th-11th January 2015.">
		<meta name="keywords" content="invite, get invite, swami haridas tansen, tansen, mahotsav, mahotsava, sir shankar lall, barakhamba road, new delhi, january, event, concert">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  		<meta name="format-detection" content="telephone=no">
  		<link href="css/custom.css" rel="stylesheet">
  		<link href="css/r.css" rel="stylesheet">
  		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700italic,900' rel='stylesheet' type='text/css'>
  		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  		<script src="js/hammer.min.js"></script>
  		<script src="js/jquery.hammer.js"></script>
  		<script src="js/jquery.cookie.js"></script>
  		<script src="js/custom.js"></script>
  		<link href="css/responsive.css" rel="stylesheet">
  		<script src="js/navigation.js"></script>
  		<script>
	  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-57872235-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function () {
		$('#formid').validate({ // initialize the plugin
			rules: {
				"check[]": {
					required: true,
					}
			},
			messages: {
				"check[]": {
					required: "",
					
				}
			},
			errorLabelContainer: '#error-day',
		});		
		
});

</script>
		
  	</head>
  	<body id="noBackground">
  		<div id="navigation" class="navigationTop" style="left: -383px;width: 766px;">
  			<div id="close"></div>
  			<ul>
  				<li><a href="index.php">HOME</a></li>
  				<li><a href="about.php">ABOUT</a></li>

	  				<li><a href="artist.php">ARTISTS</a></li>

	  				<!--<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>invite.php">GET INVITE</a></li>-->
                    <!--<li><a href="gallery.php">GALLERY</a></li>-->
	  				<li><a href="contact.php">CONTACT</a></li>
  			</ul>
  		</div>
  		<div id="exceptNavigation" class=""  style="z-index:3;position:absolute;top:0;width: 100%;">
	  		<div id="header" style="position:relative">
	  			<div id="navigationIcon">
	  			</div>
	  			<a href="/">
	  				<div style="float:right;text-align:right;font-weight:900;padding: 8px 5px 5px;">
	  					<div style="font-size:13px;color:#96A241;">SWAMI HARIDAS TANSEN</div>
	  					<div style="font-size:16px;color:#334a24;">SANGEET NRITYA MAHOTSAV</div>
	  				</div>
	  			</a>
	  			<div class="clear"></div>
	  		</div>
	  	</div>
  		<div class="container" style="margin-top:150px;" id="responsivePosition">
  			<div class="row">
	  			<div class="span3">
	  				<a href="index.php"><img src="images/logoInverted.png" style="width: 100%;" id="responsiveLogo"></a>
	  				<div class="mtop10">
	  					<div class="fw7 fsi f24 bottomBorder padding10">Things to Know</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">Invites for all the events are free.</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">Seating is on first come first serve basis.</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">Please be at the auditorium 30 minutes before performance.</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">You will receive an email confirming your invite.</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">Please carry a print out of the email to the venue.</div>
	  					<div class="fw4 fsi f13 bottomBorder padding10">Every invite admits two.</div>
	  				</div>
	  			</div>
	  			<div class="span9 artist" id="artist1">
	  				<div class="fw7 fsi f24 bottomBorder padding10">Please enter your contact details</div>
	  				<form method="POST" action="backup.php" id="formid" name="inviteForm">
	  				<div class="row mtop10">
	  					<div class="span12">
  							<input type="text" placeholder="name" id="name" name="name" class="<?php echo ($nameE == 1)?'error':''; ?>">
  						</div>
	  				</div>
	  				<div class="row mtop10">
	  					<div class="span4">
	  						<input type="text" placeholder="phone number" id="number" name="phoneNumber" class="<?php echo ($phoneNumberE == 1)?'error':''; ?>">
	  					</div>
	  					<div class="span8">
	  						<input type="text" placeholder="email address" id="email" name="email" class="<?php echo ($emailE == 1)?'error':''; ?>">
	  					</div>
	  				</div>
	  				<div class="padding10 bottomBorder"></div>
	  				<div class="fw7 fsi f24 padding10">Get invite for one day or all Four days</div>
					<div class="invite mtop10">
	  					<table>
	  						<tr>
	  							<td style="background-color:#65803E;" colspan="5"></td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 f30 fw7" style="width: 150px;">DAY 1</td>
	  							<td>UMA SHARMA (KATHAK)</td>
	  							<td>USTAD SHUJAAT KHAN (SITAR)</td>
	  							<td>PT. AJOY CHAKRABARTY (VOCAL)</td>
	  							<td>
	  								Quantity<br>
	  								<select class="mtop10 quantity" id="quantity5" data-option="Five">
	  									<option value="1">1</option>
	  									<option value="2">2</option>
	  									<option value="3">3</option>
										<option value="3">4</option>
	  								</select>
	  							</td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 fw7">08 JANUARY 2016</td>
	  							<td colspan="3">Starts 6:30 pm<br>Sir Shankarlal Hall, Barakhamba Road, New Delhi</td>
	  							<td style="width:100px;">
									<div class="squaredTwo">
										<input type="checkbox" value="08" id="squaredFive" name="check[]" class="selectDay" data-day="5"/>
										<label for="squaredFive"></label>
									</div>
	  							</td>
	  						</tr>
	  					</table>
	  				</div>
	  				<div class="invite mtop10">
	  					<table>
	  						<tr>
	  							<td style="background-color:#65803E;" colspan="5"></td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 f30 fw7" style="width: 150px;">DAY 2</td>
	  							<td>SMT. ASHWINI BHIDE DESHPANDE (VOCAL)</td>
	  							<td>PT. HARIPRASAD CHAURASIA (FLUTE)</td>
	  							<td>USTAD AASHISH KHAN (SAROD)</td>
	  							<td>
	  								Quantity<br>
	  								<select class="mtop10 quantity" id="quantity1" data-option="Two">
	  									<option value="1">1</option>
	  									<option value="2">2</option>
	  									<option value="3">3</option>
										<option value="3">4</option>
	  								</select>
	  							</td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 fw7">09 JANUARY 2016</td>
	  							<td colspan="3">Starts 6:30 pm<br>Sir Shankarlal Hall, Barakhamba Road, New Delhi</td>
	  							<td style="width:100px;">
	  								<div class="squaredOne">
										<input type="checkbox" value="09" id="squaredOne" name="check[]" class="selectDay" data-day="2"/>
										<label for="squaredOne"></label>
									</div>
	  							</td>
	  						</tr>
	  					</table>
	  				</div>
	  				<div class="invite mtop10">
	  					<table>
	  						<tr>
	  							<td style="background-color:#65803E;" colspan="5"></td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 f30 fw7" style="width: 150px;">DAY 3</td>
	  							<td>PT. VISHWAMOHAN BHATT (MOHAN VEENA)</td>
	  							<td>PT. CHHANNULAL MISHRA (VOCAL)</td>
	  							<td>SMT. ANOUSHKA SHANKAR (SITAR)</td>
	  							<td>
	  								Quantity<br>
	  								<select class="mtop10 quantity" id="quantity2" data-option="Three">
	  									<option value="1">1</option>
	  									<option value="2">2</option>
	  									<option value="3">3</option>
										<option value="3">4</option>
	  								</select>
	  							</td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 fw7">10 JANUARY 2016</td>
	  							<td colspan="3">Starts 6:30 pm<br>Sir Shankarlal Hall, Barakhamba Road, New Delhi</td>
	  							<td style="width:100px;">
									<div class="squaredTwo">
										<input type="checkbox" value="10" id="squaredTwo" name="check[]" class="selectDay" data-day="3"/>
										<label for="squaredTwo"></label>
									</div>
	  							</td>
	  						</tr>
	  					</table>
	  				</div>
	  				<div class="invite mtop10">
	  					<table>
	  						<tr>
	  							<td style="background-color:#65803E;" colspan="5"></td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 f30 fw7" style="width: 150px;">DAY 4</td>
	  							<td>USTAD AMJAD ALI KHAN</td>
	  							<td>AMAAN ALI KHAN </td>
	  							<td>AYAAN ALI KHAN (SAROD)</td>
	  							<td>
	  								Quantity<br>
	  								<select class="mtop10 quantity" id="quantity3" data-option="Four">
	  									<option value="1">1</option>
	  									<option value="2">2</option>
	  									<option value="3">3</option>
										<option value="3">4</option>
	  								</select>
	  							</td>
	  						</tr>
	  						<tr>
	  							<td class="color404f23 fw7">11 JANUARY 2016</td>
	  							<td colspan="3">Starts 6:30 pm<br>Sir Shankarlal Hall, Barakhamba Road, New Delhi</td>
	  							<td style="width:100px;">
	  								<div class="squaredThree">
										<input type="checkbox" value="11" id="squaredThree" name="check[]" class="selectDay" data-day="4"/>
										<label for="squaredThree"></label>
									</div>
	  							</td>
	  						</tr>
	  					</table>
	  				</div>
	  				<div class="invite mtop10">
	  					<table>
	  						<tr>
	  							<td style="text-align:left;padding:5px 0 5px 15px;border-right: 1px solid rgba(0, 0, 0, 0);">
	  								<div style="color:#65803E;text-transform:uppercase;font-weight:700" class="f60">All Four Days</div>
	  							</td>
	  							<td style="width:50px;">
	  								Quantity<br>
	  								<select class="mtop10 quantity" id="quantity4" data-option="Five">
	  									<option value="1">1</option>
	  									<option value="2">2</option>
	  									<option value="3">3</option>
										<option value="3">4</option>
	  								</select>
	  								<div class="squaredFour mtop10">
										<input type="checkbox" value="All" id="squaredFour" name="check[]" class="selectDay" data-day="4"/>
										<label for="squaredFour"></label>
									</div>
	  							</td>
	  						</td>
	  					</table>
	  				</div>
	  				<div class="row mtop10">
	  					<div class="span12">
	  						<div id="error" class=""></div>
							<div id="error-day" class=""></div>
	  					</div>
	  					<div class="span12 mtop10">
	  						<button class="w100p" id="getInvite" name="getInvite">Get An Invite</button>
	  						<div class="bottomBorder mtop10"></div>
	  					</div>
	  				</div>
	  				<div class="row mtop10 mbot10">
	  				</div>
	  			</form>
		  		</div>
	  		</div>
  		</div>
  		<div class="contactAlignTopRight">
  			<div id="contactBox">
	  			<div class="padding10">
	  				<div class="contactText">
	  					<div class="whiteBorder">
	  						<div class="alignPhone" style="float:left;line-height: 35px;" id="connectWithUs">Connect</div>
	  						<div class="alignPhone" style="float:right">
	  							<a href="https://www.facebook.com/SwamiHaridasTansenSangeetNrityaMahotsav" target="_blank">
	  								<div id="facebookImage"></div>
	  							</a>
	  							<a href="https://www.youtube.com/channel/UCS5cLE8VF29s-UzVaQeA6NQ" target="_blank">
	  								<div id="youtubeImage"></div>
	  							</a>
	  						</div>
	  						<div style="clear:both"></div>
	  					</div>
	  					<div class="mtop10">
		  					<div class="whiteBorder">
		  						<div class="alignPhone">P: 011 2643 2998</div>
		  						<div class="whiteSpaceResponsive"> | </div>
		  						<div class="alignPhone">P: 011 2331 5978</div>
		  						<div class="whiteSpaceResponsive block"></div>
		  						<div class="alignPhone">M: +91 88004 33200</div>
		  						<div class="whiteSpaceResponsive"> | </div>
		  						<div class="alignPhone">M: +91 98105 02186</div>
		  					</div>
		  				</div>
	  				</div>
		  		</div>
		  	</div>
		</div>  	
	
	</body>
  	
	
	
</html>

