<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#181818;">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="images/livecbse_logo.png" alt="" class="logo-img logo-mobile-show">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto" style="color:#fff;">
					<li class="nav-item">
						<a href="" class="nav-link" style="color: #fff;
                    font-size: 18px;
                    font-weight: 400;">Online Coaching</a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropbtn" href="#" style="color: #fff;
                            font-size: 18px;
                            font-weight: 400;">Test Series <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<div class="dropdown-content">
								<a href="https://www.livecbse.com/test_series_xii.php">Test
									Series XII</a>
								<a href="https://www.livecbse.com/test_series_xi.php">Test
									Series XI</a>
								<a href="https://www.livecbse.com/test_series_x.php">Test
									Series X</a>
								<a href="https://www.livecbse.com/test_series_ix.php">Test
									Series IX</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropbtn" href="#" style="color: #fff;
                            font-size: 18px;
                            font-weight: 400;">Study Material <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<div class="dropdown-content">
								<a href="https://www.livecbse.com/study_material_xii.php">Study
									Material XII</a>
								<a href="https://www.livecbse.com/study_material_xi.php">Study
									Material XI</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropbtn" href="#" style="color: #fff;
                            font-size: 18px;
                            font-weight: 400;">Doubt Removal <i class="fa fa-angle-down" aria-hidden="true"></i></a>

							<div class="dropdown-content">
								<a href="https://www.livecbse.com/doubt_removal_xii.php">Doubt
									Removal XII</a>
								<a href="https://www.livecbse.com/doubt_removal_xi.php">Doubt
									Removal XI</a>
							</div>
						</div>
					</li>

					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropbtn" href="#" style="color: #fff;
                            font-size: 18px;
                            font-weight: 400;">Group Sites <i class="fa fa-angle-down" aria-hidden="true"></i></a>

							<div class="dropdown-content">
								<a href="https://www.domain-education.com">www.domain-education.com</a>
								<a href="https://www.livejee.com">www.livejee.com</a>
								<a href="https://www.wingxp.com">www.wingxp.com</a>
								<a href="https://www.detpl.com">www.deptl.com</a>
							</div>
						</div>
					</li>

					<li class="nav-item">
						<a href="" class="nav-link" style="color: #fff;
                    font-size: 18px;
                    font-weight: 400;">FAQs</a>
					</li>

					<li class="nav-item">
						<a href="" class="nav-link" style="color: #fff;
                    font-size: 18px;
                    font-weight: 400;" data-toggle="modal" data-target="#modalLogin">Student Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
   
   
    <div class="top-form">
		<div class="container">
			<a href="#" class="schedule-link-mobile-show" data-target="#schedule-form-modal"
				data-toggle="modal">Schedule Demo</a>
			<form action="" class="schedule-form">
				<div class="form_group">
					<h1 class="form_groupHeader">Schedule Demo</h1>
				</div>
				<div class="form_group">
					<input type="text" placeholder="Student Name" name="student_name" id="student_name"
						class="form_fields">
				</div>
				<div class="form_group">
					<input type="text" placeholder="Phone Number" name="phone_number" id="phone_number"
						class="form_fields">
				</div>
				<div class="form_group">
					<div class="cntr">
						<div>
							<span class="class-head">Class: </span>
						</div>
						<div class="md-radio" style="margin: 6px 8px;">
							<input id="class_ix" type="radio" name="class_select" value="ix"
								onclick="change_subjects()">
							<label for="class_ix" class="md-radio-text">IX</label>
						</div>

						<div class="md-radio" style="margin: 6px 8px;">
							<input id="class_x" type="radio" name="class_select" value="x" onclick="change_subjects()">
							<label for="class_x">X</label>
						</div>

						<div class="md-radio" style="margin: 6px 8px;">
							<input id="class_xi" type="radio" name="class_select" value="xi"
								onclick="change_subjects()">
							<label for="class_xi" class="md-radio-text">XI</label>
						</div>

						<div class="md-radio" style="margin: 6px 8px;">
							<input id="class_xii" type="radio" name="class_select" value="xii"
								onclick="change_subjects()">
							<label for="class_xii" class="md-radio-text">XII</label>
						</div>
					</div>
				</div>
				<div class="form_group">
					<select id="contact_subject" name="contact_subject" class="class_select">
						<option value="">Subjects</option>

					</select>
				</div>
				<div class="form_group">
					<a class="schedule_link" onclick="schedule_demo_new1()" style="cursor:pointer">Submit</a>
				</div>
			</form>
		</div>
	</div>
	<div class="body-inner">
		<!-- Header start -->
		<header id="header" class="header-one">
		    <!-- 
			<div class="container">
				<div class="row">
					<div class="logo-area">
						<div class="logo col-xs-12 col-md-3">
							<a href="https://www.livecbse.com/livecbse_constra">
								<img src="https://www.livecbse.com/livecbse_constra/images/livecbse_logo.png " alt=""
									style="width:207px">
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-9">
						<ul class="top-info-box">
							<li>
								<div class="info-box">
									<div class="info-box-content">
										<p class="info-box-title">Call Us</p>
										<p class="info-box-subtitle">(+91) 9571010999</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-box">
									<div class="info-box-content">
										<p class="info-box-title">Email Us</p>
										<p class="info-box-subtitle">contact@livecbse.com</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
	</div> 


		 
		
		</header>
		<!--/ Header end -->