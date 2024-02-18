<!--
    Item Name: Luxurious - Hotel Booking HTML Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 2.2.0
    Copyright 2024
	Author URI: https://themeforest.net/user/ashishmaraviya
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 13:00:58 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best Luxurious Hotel Booking Template.">
    <meta name="keywords"
        content="hotel, booking, business, restaurant, spa, resort, landing, agency, corporate, start up, site design, new business site, business template, professional template, classic, modern">
    <meta name="author" content="ashishmaraviya">

	<title>Luxurious - Hotel Booking HTML Template + Admin Dashboard</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico">

	<!-- Icon CSS -->
	<link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
	<link href="assets/css/vendor/remixicon.css" rel="stylesheet">

	<!-- Vendor -->
	<link href='assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/daterangepicker.css' rel='stylesheet'>
	<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/vendor/apexcharts.css" rel="stylesheet">
	<link href="assets/css/vendor/simplebar.css" rel="stylesheet">
	<link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

	<!-- Main CSS -->
	<link id="mainCss" href="assets/css/style.css" rel="stylesheet">
<!-- My CSS -->
	<link id="mainCss" href="mycss.css" rel="stylesheet">
</head>

<body data-lh-mode="light">
	<main class="wrapper sb-default">
		<!-- Loader -->
		<div class="lh-loader">
			<span class="loader"></span>
		</div>

		<!-- Header -->
		<header class="lh-header">
			<div class="container-fluid">
				<div class="lh-header-items">
					<div class="left-header">
						<a href="javascript:void(0)" class="lh-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
						</a>
						<div class="header-search-box">
							<div class="header-search-drop">
								<a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
								<form class="lh-search">
									<input class="search-input" type="text" placeholder="Search...">
									<a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
					<div class="right-header">
						<div class="lh-right-tool lh-flag-drop language">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="flag" src="assets/img/flag/us.png" alt="flag">
								</div> 
								<div class="lh-hover-drop-panel right">
									<ul>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/us.png"
													alt="flag">English</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/in.png"
													alt="flag">Hindi</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool apps">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<i class="ri-apps-2-line"></i>
								</div>
								<div class="lh-hover-drop-panel right apps">
									<h6 class="title">Apps</h6>
									<ul>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/1.png"
													alt="flag">Github</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/2.png"
													alt="flag">Dribbble</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/3.png"
													alt="flag">Dropbox</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/4.png"
													alt="flag">Figma</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/5.png"
													alt="flag">Meta</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/6.png"
													alt="flag">Adsense</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool display-screen">
							<a class="lh-screen full" href="javascript:void(0)"><i class="ri-fullscreen-line"></i></a>
							<a class="lh-screen reset" href="javascript:void(0)"><i
									class="ri-fullscreen-exit-line"></i></a>
						</div>
						<div class="lh-right-tool">
							<a class="lh-notify" href="javascript:void(0)">
								<i class="ri-notification-2-line"></i>
								<span class="label"></span>
							</a>
						</div>
						<div class="lh-right-tool display-dark">
							<a class="lh-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
							<a class="lh-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
						</div>
						<div class="lh-right-tool lh-user-drop">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="user" src="assets/img/user/1.jpg" alt="user">
								</div>
								<div class="lh-hover-drop-panel right">
									<div class="details">
										<h6>Moris Waites</h6>
										<p>moris@example.com</p>
									</div>
									<ul class="border-top">
										<li><a href="team-profile.php">Profile</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Messages</a></li>
										<li><a href="team-update.php">Settings</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="signin.php"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- sidebar -->
		<div class="lh-sidebar-overlay"></div>
		<div class="lh-sidebar" data-mode="dark">
			<div class="lh-sb-logo">
				<a href="index.php" class="sb-full"><img src="assets/img/logo/full-logo.png" alt="logo"></a>
				<a href="index.php" class="sb-collapse"><img src="assets/img/logo/collapse-logo.png" alt="logo"></a>
			</div>
			<div class="lh-sb-wrapper">
				<div class="lh-sb-content">
					<ul class="lh-sb-list">
						<li class="lh-sb-item sb-drop-item">
							<a href="dark.php" class="lh-drop-toggle">
								<i class="ri-dashboard-3-line"></i>
								<span class="condense">Dashboard</i></span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="gallrey.php" class="lh-page-link">
								<i class="ri-home-8-line"></i><span class="condense"><span
										class="hover-title">Gallrey</span> </span>
							</a>
						</li>
												
						
						
						<li class="lh-sb-item">
							<a href="rooms.php" class="lh-page-link">
								<i class="ri-home-8-line"></i><span class="condense"><span
										class="hover-title">Rooms</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="bookings.php" class="lh-page-link">
								<i class="ri-contacts-book-line"></i><span class="condense"><span
										class="hover-title">Bookings</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="guest-details.php" class="lh-page-link">
								<i class="ri-user-search-line"></i><span class="condense"><span class="hover-title">Guest
										Details</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="invoice.php" class="lh-page-link">
								<i class="ri-bill-line"></i><span class="condense"><span
										class="hover-title">Invoice</span> </span>
							</a>
						</li>
						<li class="lh-sb-item-separator"></li>
					
						<li class="lh-sb-item">
							<a href="menu.php" class="lh-page-link">
								<i class="ri-restaurant-2-line"></i><span class="condense"><span
										class="hover-title">Menu</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="menu-add.php" class="lh-page-link">
								<i class="ri-restaurant-2-line"></i><span class="condense"><span
										class="hover-title">Add Menu</span> </span>
							</a>
						</li>
						<li class="lh-sb-item">
							<a href="orders.php" class="lh-page-link">
								<i class="ri-bookmark-3-line"></i><span class="condense"><span
										class="hover-title">Orders</span> </span>
							</a>
						</li>

						
						<li class="lh-sb-item-separator"></li>
					
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-shield-user-line"></i><span class="condense">Staff<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="team-profile.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Profile</a></li>
								<li><a href="team-add.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Add</a></li>
								<li><a href="team-update.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team Update</a></li>
								<li><a href="team-list.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Team List</a></li>
							</ul>
						</li>
						<li class="lh-sb-item-separator"></li>
					
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-pages-line"></i><span class="condense">Authentication<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="signin.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Login</a></li>
								<li><a href="signup.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Signup</a></li>
								<li><a href="forgot.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Forgot password</a></li>
								<li><a href="reset-password.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Reset password</a></li>
							</ul>
						</li>
						<li class="lh-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="lh-drop-toggle">
								<i class="ri-service-line"></i><span class="condense">Service pages<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="lh-sb-drop condense">
								<li><a href="404-error-page.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>404 error</a></li>
								<li><a href="maintenance.php" class="lh-page-link drop"><i
											class="ri-git-commit-line"></i>Maintenance</a></li>
							</ul>
						</li>
						<li class="lh-sb-item-separator"></li>
					
						<li class="lh-sb-item">
							<a href="role.php" class="lh-page-link">
								<i class="ri-magic-line"></i><span class="condense"><span
										class="hover-title">Role</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="lh-notify-bar-overlay"></div>
		<div class="lh-notify-bar">
			<div class="lh-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="lh-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="lh-alert-list">
							<ul>
								<li>
									<div class="icon lh-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your final report is overdue</div>
										<p class="time">Just now</p>
										<p class="message">Please submit your quarterly report before - June 15.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your Booking campaign is stop!</div>
										<p class="time">5:45AM - 25/05/2024</p>
										<p class="message">Please submit your quarterly report before Jun 15.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2024</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Budget threshold exceeded!</div>
										<p class="time">4:15AM - 01/04/2024</p>
										<p class="message">Budget threshold was exceeded for project "Luxurious" B612
											elements.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">Booking was decline!</div>
										<p class="time">4:15AM - 01/04/2024</p>
										<p class="message">Your booking "B126" is declined by Theresa Mayeras.</p>
									</div>
								</li>
								<li>
									<div class="icon lh-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2024</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li class="check"><a class="lh-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="lh-message-list">
							<ul>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Boris Whisli</a>
										<p class="time">5:30AM, Today</p>
										<p class="message">Hello, Room 204 need to be clean.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/room/1.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/room/2.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/room/3.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Please take a look and get order from table 06.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Room 65 AC repair service is done.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/facilities/1.png" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Paige Turner</a>
										<p class="time">4:30PM, 12/12/2024</p>
										<p class="message">Take a Spa trainer interview.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Allie Grater</a>
										<p class="time">8:30PM, 05/12/2024</p>
										<p class="message">Take marketing module task.</p>
									</div>
								</li>
								<li class="check"><a class="lh-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
