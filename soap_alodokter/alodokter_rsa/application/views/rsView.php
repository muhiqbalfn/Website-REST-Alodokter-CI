<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rumah Sakit</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/about.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/about_responsive.css">
</head>
<body>

	<div class="super_container">

		<!-- Menu -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container"><div class="menu_close"></div></div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required">
					<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<ul>
					<li class="menu_item"><a href="<?php echo base_url('C_dashboard'); ?>">Home</a></li>
					<li class="menu_item"><a href="<?php echo base_url('C_about'); ?>">About us</a></li>
					<li class="menu_item"><a href="<?php echo base_url('C_services'); ?>">Services</a></li> 
					<!-- <li class="menu_item"><a href="<?php echo base_url('C_news'); ?>">News</a></li> -->
					<!-- <li class="menu_item"><a href="<?php echo base_url('C_contact'); ?>">Contact</a></li> -->
					<li class="menu_item"><a href="<?php echo base_url('C_rumahsakit1'); ?>">Rumah Sakit</a></li>
					<li><a href="<?php echo base_url('C_pesanrs'); ?>">PESANAN RS</a></li>
					<li class="menu_item"><a href="<?php echo base_url('C_login/logout'); ?>">LOGOUT</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/about.jpg" data-speed="0.8"></div>

			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="#">ALODOKTER<span>+</span></a>	
										</div>
										<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
											<div class="header_top_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="#">Help Desk</a></li>
													<li><a href="#">Emergency Services</a></li>
													<li><a href="#">Appointment</a></li>
													<li><b><?php echo $this->session->userdata('nama'); ?></b></li>
												</ul>
											</div>
											<div class="header_top_phone">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<span>+34 586 778 8892</span>
											</div>
										</div>
										<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li><a href="<?php echo base_url('C_dashboard'); ?>">Home</a></li>
														<li><a href="<?php echo base_url('C_about'); ?>">About Us</a></li>
														<li><a href="<?php echo base_url('C_services'); ?>">Services</a></li>
														<!-- <li><a href="<?php echo base_url('C_news'); ?>">News</a></li> -->
														<!-- <li><a href="<?php echo base_url('C_contact'); ?>">Contact</a></li> -->
														<li class="active"><a href="<?php echo base_url('C_rumahsakit1'); ?>">Rumah Sakit</a></li>
														<li><a href="<?php echo base_url('C_pesanrs'); ?>">PESANAN RS</a></li>
														<li><a href="<?php echo base_url('C_login/logout'); ?>">LOGOUT</a></li>
													</ul>
												</nav>
												<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
													<form action="#" id="search_container_form" class="search_container_form">
														<input type="text" class="search_container_input" placeholder="Search" required="required">
														<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</header>

			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Rumah Sakit</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- About -->

		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">LIST OF THE HOSPITALS</div>
						<div class="section_subtitle">Book your hospital!</div>
					</div>
				</div>
				<br><br>
				<div  style="color: black;">
					<?php echo $this->session->flashdata('hasil'); ?>
					<center>
						<table style="width: 70%;" class="table table table-striped table-hover table-success">
							<tr  style="color: black;" class="center">
								<th>ID RS</th>
								<th>NAMA</th>
								<th>ALAMAT</th>
								<th>TELEPON</th>
							</tr>
							<?php
							if (is_array($rumahsakit) || is_object($rumahsakit))
							{
								foreach ($rumahsakit as $rs)
								{
									echo "<tr>
									<td>$rs->id_rs</td>
									<td>$rs->nama_rs</td>
									<td>$rs->alamat_rs</td>
									<td>$rs->tlp_rs</td>
									</tr>";
								}
							}
							?>
							<!-- <td>".anchor('C_pesanrs/create/'.$rs->id_rs,'Pesan')."</td> -->
						</table>
					</center>
				</div>




				<div class="row about_row row-eq-height">
					<div class="col-lg-4">
						<div class="logo">
							<a href="#">ALODOKTER<span>+</span></a>	
						</div>
						<div class="about_text_highlight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem max imus mauris.</div>
						<div class="about_text">
							<p>Aenean sit amet leo id enim dapibus eleifend. Phas ellus ut erat dapibus, tempor sapien non, porta.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="about_text_2">
							<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="about_image"><img src="<?php echo base_url(); ?>assets/images/hospital1.jpg" alt=""></div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="button about_button ml-auto mr-auto"><a href="#"><span>call now</span><span>call now</span></a></div>
					</div>
				</div>
			</div>
		</div>

		

		<!-- Milestones -->

		<div class="milestones">
			<div class="container">
				<div class="row">

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/images/icon_7.svg" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="365">0</div>
								<div class="milestone_text">Days a year</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/images/icon_6.svg" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="25" data-sign-after="k">0</div>
								<div class="milestone_text">Patients a year</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/images/icon_8.svg" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="125">0</div>
								<div class="milestone_text">Amazing Doctors</div>
							</div>

						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/images/icon_9.svg" alt=""></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="12" data-sign-after="k">0</div>
								<div class="milestone_text">Lab Results</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- CTA -->

		<div class="cta">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/cta_1.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
							<div class="cta_content text-xl-left text-center">
								<div class="cta_title">Make an appointment with the our professional Hospitals.</div>
								<div class="cta_subtitle">Medical service than you can trust.</div>
							</div>
							<div class="button cta_button ml-xl-auto"><a href="#"><span>call now</span><span>call now</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Doctors -->

		<div class="doctors">
			<div class="doctors_image"><img src="<?php echo base_url(); ?>assets/images/doctors.jpg" alt=""></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">Our Hospiltals</div>
						<div class="section_subtitle">to choose from</div>
					</div>
				</div>
				<div class="row doctors_row">

					<!-- Doctor -->
					<div class="col-xl-3 col-md-6">
						<div class="doctor">
							<div class="doctor_image"><img src="<?php echo base_url(); ?>assets/images/rssa1.jpg" alt=""></div>
							<div class="doctor_content">
								<div class="doctor_name"><a href="#">RS Saiful Anwar</a></div>
								<div class="doctor_title">Malang, Indonesian</div>
								<div class="doctor_link"><a href="#">+</a></div>
							</div>
						</div>
					</div>

					<!-- Doctor -->
					<div class="col-xl-3 col-md-6">
						<div class="doctor">
							<div class="doctor_image"><img src="<?php echo base_url(); ?>assets/images/rssa2.jpg" alt=""></div>
							<div class="doctor_content">
								<div class="doctor_name"><a href="#">Medical Santa st.</a></div>
								<div class="doctor_title">Sydney, Australian</div>
								<div class="doctor_link"><a href="#">+</a></div>
							</div>
						</div>
					</div>

					<!-- Doctor -->
					<div class="col-xl-3 col-md-6">
						<div class="doctor">
							<div class="doctor_image"><img src="<?php echo base_url(); ?>assets/images/rssa3.jpg" alt=""></div>
							<div class="doctor_content">
								<div class="doctor_name"><a href="#">Caims Hospital</a></div>
								<div class="doctor_title">Turin, Italian</div>
								<div class="doctor_link"><a href="#">+</a></div>
							</div>
						</div>
					</div>

					<!-- Doctor -->
					<div class="col-xl-3 col-md-6">
						<div class="doctor">
							<div class="doctor_image"><img src="<?php echo base_url(); ?>assets/images/rssa4.jpg" alt=""></div>
							<div class="doctor_content">
								<div class="doctor_name"><a href="#">Krab Hospital</a></div>
								<div class="doctor_title">New york, American</div>
								<div class="doctor_link"><a href="#">+</a></div>
							</div>
						</div>
					</div>

					
				</div>
				<div class="row">
					<div class="col">
						<div class="button doctors_button ml-auto mr-auto"><a href="#"><span>see all hospital</span><span>see all doctors</span></a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/footer.jpg" data-speed="0.8"></div>
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- Footer About -->
						<div class="col-lg-3 footer_col">
							<div class="footer_about">
								<div class="logo">
									<a href="#">ALODOKTER<span>+</span></a>	
								</div>
								<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
								<div class="footer_social">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</div>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-5 footer_col">
							<div class="footer_contact">
								<div class="footer_contact_title">Quick Contact</div>
								<div class="footer_contact_form_container">
									<form action="#" class="footer_contact_form" id="footer_contact_form">
										<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
											<input type="text" class="footer_contact_input" placeholder="Name" required="required">
											<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
										</div>
										<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
										<button class="footer_contact_button">send message</button>
									</form>
								</div>
							</div>
						</div>

						<!-- Footer Hours -->
						<div class="col-lg-4 footer_col">
							<div class="footer_hours">
								<div class="footer_hours_title">Opening Hours</div>
								<ul class="hours_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday – Thursday</div>
										<div class="ml-auto">8.00 – 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Friday</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 – 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 – 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
								<nav class="footer_nav">
									<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<li><a href="<?php echo base_url('C_dashboard'); ?>">Home</a></li>
										<li><a href="<?php echo base_url('C_about'); ?>">About Us</a></li>
										<li><a href="<?php echo base_url('C_services'); ?>">Services</a></li>
										<!-- <li><a href="<?php echo base_url('C_news'); ?>">News</a></li> -->
										<!-- <li><a href="<?php echo base_url('C_contact'); ?>">Contact</a></li> -->
										<li class="active"><a href="<?php echo base_url('C_rumahsakit1'); ?>">Rumah Sakit</a></li>
										<li><a href="<?php echo base_url('C_pesanrs'); ?>">PESANAN RS</a></li>
										<li><a href="<?php echo base_url('C_login/logout'); ?>">LOGOUT</a></li>
									</ul>
								</nav>
								<div class="footer_links">
									<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<li><a href="#">Help Desk</a></li>
										<li><a href="#">Emergency Services</a></li>
										<li><a href="#">Appointment</a></li>
										<li><b><?php echo $this->session->userdata('nama'); ?></b></li>
									</ul>
								</div>
								<div class="footer_phone ml-lg-auto">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<span>+34 586 778 8892</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/styles/bootstrap4/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/greensock/TweenMax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/greensock/TimelineMax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/greensock/animation.gsap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/easing/easing.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/about.js"></script>
</body>
</html>