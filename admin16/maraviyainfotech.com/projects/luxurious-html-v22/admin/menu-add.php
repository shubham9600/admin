<?php include "header.php" ?>


		<!-- main content -->
		<div class="lh-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="lh-page-title">
					<div class="lh-breadcrumb">
						<h5>Menu Add</h5>
						<ul>
							<li><a href="dark.php">Home</a></li>
							<li>Menu Add</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-3 col-xl-4 col-md-12">
						<div class="lh-card-sticky guest-card">
							<div class="lh-card">
								<div class="lh-card-content card-default">
									<div class="guest-profile">
										<div class="lh-team-block-detail lh-profile-add">
											<div class="profile-img">
												<div class="avatar-preview">
													<div class="t-img" id="imagePreview"
														style="background-image: url(assets/img/user/thumb.jpg);">
													</div>
												</div>
												<div class="avatar-edit">
													<input type='file' id="imageUpload"
														accept=".png, .jpg, .jpeg">
													<label for="imageUpload"></label>
												</div>
											</div>
											<div class="form-group p-b-15">
												<input type="text" class="form-control"
													placeholder="Enter Chef name">
											</div>
											<div class="form-group p-b-15">
												<input type="text" class="form-control"
													placeholder="Enter Chef Phone No">
											</div>
											<div class="form-group p-b-15">
												<input type="text" class="form-control"
													placeholder="Enter Chef Email">
											</div>
											<div class="form-group">
												<textarea type="text" class="form-control"
													placeholder="Enter Chef Address" rows="6"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-9 col-xl-8 col-md-12">
						<div class="lh-card" id="bookingtbl">
							<div class="lh-card-header">
								<h4 class="lh-card-title">Menu Details</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="lh-full-card"><i class="ri-fullscreen-line"
											title="Full Screen"></i></a>
								</div>
							</div>
							<div class="lh-card-content card-booking">
								<div class="row mtb-m-12">
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Start Time : </strong>
													<div class="form-group">
														<input type="time" name="dateofbirth" id="dateofbirth">
													</div>
												</li>
												<li><strong>End Time : </strong>
													<div class="form-group">
														<input type="time" name="dateofbirth" id="dateofbirth">
													</div>
												</li>
												<li><strong>Recipe name : </strong>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Enter Recipe">
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Junior Price : </strong>
													<div class="form-group">
														<select name="select">
															<option value="option-1">$100</option>
															<option value="option-2">Free</option>
														</select>
													</div>
												</li>
												<li><strong>Delux Price : </strong>
													<div class="form-group">
														<select name="select">
															<option value="option-1">$100</option>
															<option value="option-2">Free</option>
														</select>
													</div>
												</li>
												<li><strong>Vip Price : </strong>
													<div class="form-group">
														<select name="select">
															<option value="option-1">$100</option>
															<option value="option-2">Free</option>
														</select>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Recipe type : </strong>
													<div class="form-group">
														<select name="select">
															<option value="option-1">Breakfast</option>
															<option value="option-2">Lunch</option>
															<option value="option-2">Dinner</option>
														</select>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Image Upload : </strong>
													<div class="form-group">
														<input type="file">
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li>
													<div class="form-group">
														<textarea type="file" rows="2" placeholder="Enter Recipe Details..."></textarea>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li>
													<button type="submit" class="lh-btn-primary">Submit</button>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-md-12">
						<div class="lh-card" id="bookingtbl">
							<div class="lh-card-header">
								<h4 class="lh-card-title">Latest Recipe</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 lh-full-card"><i
											class="ri-fullscreen-line" title="Full Screen"></i></a>
									<div class="lh-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="lh-card-content card-default">
								<div class="booking-table">
									<div class="table-responsive">
										<table id="booking_table" class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>Recipe_Name</th>
													<th>Time</th>
													<th>Type</th>
													<th>Junior</th>
													<th>Deluxe</th>
													<th>VIP</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/1.png"
															alt="clients Image"><span class="name">Toast with butter-jam</span>
													</td>
													<td>6am - 9am</td>
													<td>Breakfast</td>
													<td>$100</td>
													<td>Free</td>
													<td>Free</td>
													<td class="close">Unavailable</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/2.png"
															alt="clients Image"><span class="name">Hummus and vegetable wrap</span>
													</td>
													<td>12pm - 2pm</td>
													<td>Lunch</td>
													<td>$150</td>
													<td>$150</td>
													<td>Free</td>
													<td class="success">Available</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/3.png"
															alt="clients Image"><span class="name">Chickpea and Veg Stir-Fry</span>
													</td>
													<td>7pm - 9pm</td>
													<td>Dinner</td>
													<td>$120</td>
													<td>Free</td>
													<td>Free</td>
													<td class="success">Available</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/4.png"
															alt="clients Image"><span class="name">Waffles</span>
													</td>
													<td>6am - 9am</td>
													<td>Breakfast</td>
													<td>$50</td>
													<td>Free</td>
													<td>Free</td>
													<td class="close">Unavailable</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/5.png"
															alt="clients Image"><span class="name">Grilled vegetable panini</span>
													</td>
													<td>11am - 1pm</td>
													<td>Lunch</td>
													<td>$130</td>
													<td>$130</td>
													<td>$100</td>
													<td class="close">Unavailable</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/6.png"
															alt="clients Image"><span class="name">Stuffed Bell Peppers</span>
													</td>
													<td>7pm - 9pm</td>
													<td>Dinner</td>
													<td>$90</td>
													<td>$90</td>
													<td>Free</td>
													<td class="success">Available</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/1.png"
															alt="clients Image"><span class="name">Pancakes with syrup</span>
													</td>
													<td>6am - 9am</td>
													<td>Breakfast</td>
													<td>$80</td>
													<td>$50</td>
													<td>Free</td>
													<td class="success">Available</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/1.png"
															alt="clients Image"><span class="name">Chickpea and avocado salad</span>
													</td>
													<td>11am - 12:30pm</td>
													<td>Lunch</td>
													<td>$110</td>
													<td>Free</td>
													<td>Free</td>
													<td class="close">Unavailable</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/2.png"
															alt="clients Image"><span class="name">Roasted Vegetables</span>
													</td>
													<td>6pm - 9pm</td>
													<td>Dinner</td>
													<td>$40</td>
													<td>$40</td>
													<td>Free</td>
													<td class="success">Available</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/restaurant/3.png"
															alt="clients Image"><span class="name">Avocado toast</span>
													</td>
													<td>6am - 9am</td>
													<td>Breakfast</td>
													<td>$90</td>
													<td>Free</td>
													<td>Free</td>
													<td class="close">Unavailable</td>
													<td>
														<div class="d-flex justify-content-center">
															<button type="button" class="btn btn-outline-success"><i
																	class="ri-information-line"></i></button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only"><i
																		class="ri-settings-3-line"></i></span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="container-fluid">
				<div class="copyright">
					<p><span id="copyright_year"></span> © Luxurious, All rights Reserved.</p>
					<p>Design by MaraviyaInfotech.</p>
				</div>
			</div>
		</footer>

		<!-- Feature tools -->
		<div class="lh-tools-sidebar-overlay"></div>
		<div class="lh-tools-sidebar">
			<a href="javascript:void(0)" class="lh-tools-sidebar-toggle in-out">
				<i class="ri-settings-4-line"></i>
			</a>
			<div class="lh-bar-title">
				<h6>Tools</h6>
				<a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
			</div>
			<div class="lh-tools-detail">
				<div class="lh-tools-block">
					<h3>Modes</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item mode active" data-lh-mode-tool="light">
							<img src="assets/img/tools/light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item mode" data-lh-mode-tool="dark">
							<img src="assets/img/tools/dark.png" alt="dark">
							<p>dark</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Sidebar</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item sidebar active" data-sidebar-mode-tool="light">
							<img src="assets/img/tools/side-light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="dark">
							<img src="assets/img/tools/side-dark.png" alt="dark">
							<p>dark</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-1">
							<img src="assets/img/tools/side-bg-1.png" alt="background">
							<p>Bg-1</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-2">
							<img src="assets/img/tools/side-bg-2.png" alt="background">
							<p>Bg-2</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-3">
							<img src="assets/img/tools/side-bg-3.png" alt="background">
							<p>Bg-3</p>
						</div>
						<div class="lh-tools-item sidebar" data-sidebar-mode-tool="bg-4">
							<img src="assets/img/tools/side-bg-4.png" alt="background">
							<p>Bg-4</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Header</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item header active" data-header-mode="light">
							<img src="assets/img/tools/header-light.png" alt="light">
							<p>light</p>
						</div>
						<div class="lh-tools-item header" data-header-mode="dark">
							<img src="assets/img/tools/header-dark.png" alt="dark">
							<p>dark</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Backgrounds</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item bg active" data-bg-mode="default">
							<img src="assets/img/tools/bg-0.png" alt="default">
							<p>Default</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-1">
							<img src="assets/img/tools/bg-1.png" alt="bg-1">
							<p>Bg-1</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-2">
							<img src="assets/img/tools/bg-2.png" alt="bg-2">
							<p>Bg-2</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-3">
							<img src="assets/img/tools/bg-3.png" alt="bg-3">
							<p>Bg-3</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-4">
							<img src="assets/img/tools/bg-4.png" alt="bg-4">
							<p>Bg-4</p>
						</div>
						<div class="lh-tools-item bg" data-bg-mode="bg-5">
							<img src="assets/img/tools/bg-5.png" alt="bg-5">
							<p>Bg-5</p>
						</div>
					</div>
				</div>
				<div class="lh-tools-block">
					<h3>Box Design</h3>
					<div class="lh-tools-info">
						<div class="lh-tools-item box active" data-box-mode-tool="default">
							<img src="assets/img/tools/box-0.png" alt="default">
							<p>Default</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-1">
							<img src="assets/img/tools/box-1.png" alt="box-1">
							<p>Box-1</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-2">
							<img src="assets/img/tools/box-2.png" alt="box-2">
							<p>Box-2</p>
						</div>
						<div class="lh-tools-item box" data-box-mode-tool="box-3">
							<img src="assets/img/tools/box-3.png" alt="box-3">
							<p>Box-3</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Vendor Custom -->
	<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
	<script src="assets/js/vendor/simplebar.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/vendor/apexcharts.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
	<!-- Data Tables -->
	<script src='assets/js/vendor/jquery.datatables.min.js'></script>
	<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
	<script src='assets/js/vendor/datatables.responsive.min.js'></script>
	<!-- Caleddar -->
	<script src="assets/js/vendor/jquery.simple-calendar.js"></script>
	<!-- Date Range Picker -->
	<script src="assets/js/vendor/moment.min.js"></script>
	<script src="assets/js/vendor/daterangepicker.js"></script>
	<script src="assets/js/vendor/date-range.js"></script>

	<!-- Main Custom -->
	<script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/menu-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 13:01:03 GMT -->
</html>