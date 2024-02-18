<?php include "header.php" ?>

		<!-- main content -->
		<div class="lh-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="lh-page-title">
					<div class="lh-breadcrumb">
						<h5>Bookings</h5>
						<ul>
							<li><a href="dark.php">Home</a></li>
							<li>Bookings</li>
						</ul>
					</div>
					<div class="lh-tools">
						<a href="javascript:void(0)" title="Refresh" class="refresh"><i class="ri-refresh-line"></i></a>
						<div id="pagedate">
							<div class="lh-date-range" title="Date">
								<span></span>
							</div>
						</div>
						<div class="filter">
							<div class="dropdown" title="Filter">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="ri-sound-module-line"></i>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="bookings.php">Booking</a></li>
									<li><a class="dropdown-item" href="#">Revenue</a></li>
									<li><a class="dropdown-item" href="#">Expence</a></li>
								</ul>
							</div>
						</div>
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
													placeholder="Enter name">
											</div>
											<div class="form-group p-b-15">
												<input type="text" class="form-control"
													placeholder="Enter Phone No">
											</div>
											<div class="form-group p-b-15">
												<input type="text" class="form-control"
													placeholder="Enter Email">
											</div>
											<div class="form-group">
												<textarea type="text" class="form-control"
													placeholder="Enter Address"></textarea>
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
								<h4 class="lh-card-title">Booking Details</h4>
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
												<li><strong>CheckIn : </strong>
													<div class="form-group">
														<input type="date" name="dateofbirth">
													</div>
												</li>
												<li><strong>CheckOut : </strong>
													<div class="form-group">
														<input type="date" name="dateofbirth">
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Person : </strong>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Enter Person">
													</div>
												</li>
												<li><strong>Rooms : </strong>
													<input type="text" class="form-control" placeholder="Enter Rooms">
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Bed type : </strong>
													<div class="form-group">
														<select name="select" id="select">
															<option value="option-1">Single</option>
															<option value="option-2">Double</option>
															
												          </select>
													</div>
												</li>
												<li><strong>Proof : </strong>
													<div class="form-group">
														<select name="select" id="select">
															<option value="option-1">Pan Card</option>
															<option value="option-2">Adhar Card</option>
														</select>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="lh-user-detail">
											<ul>
												<li><strong>Room Type : </strong>
													<div class="form-group">
														<select name="select" id="select">
															<option value="option-1">single room</option>
															<option value="option-2">Doubleroom</option>
															<option value="option-2">Delux room</option>
															<option value="option-2">family room</option>
															<option value="option-2">VIP</option>
														</select>
													</div>
												</li>
												<li><strong>Payment : </strong>
													<div class="form-group">
														<select name="select" id="select">
															<option value="option-1">Cash</option>
															<option value="option-2">UPI</option>
															<option value="option-2">ATM</option>
														</select>
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
								<h4 class="lh-card-title">Latest Bookings</h4>
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
													<th>Room_Name</th>
													<th>CheckIn</th>
													<th>CheckOut</th>
													<th>Proof</th>
													<th>Payment</th>
													<th>Amount</th>
													<th>RoomNo</th>
													<th>Rooms</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="token">2650</td>
													<td><img class="cat-thumb" src="assets/img/room/1.png"
															alt="clients Image"><span class="name">Deluxe King Double Bed</span>
													</td>
													<td>15/01/2024</td>
													<td>20/01/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$550</td>
													<td class="type"><span>VIP : </span>101, 102</td>
													<td class="rooms">
														<span class="mem">6 Member</span> /
														<span class="room">2 Room</span>
													</td>
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
													<td><img class="cat-thumb" src="assets/img/room/2.png"
															alt="clients Image"><span class="name">VIP King Double Bed</span></td>
													<td>19/04/2024</td>
													<td>29/04/2024</td>
													<td>Pan Card</td>
													<td class="close">Cheque</td>
													<td>$200</td>
													<td class="type"><span>Junior : </span>105</td>
													<td class="rooms">
														<span class="mem">4 Member</span> /
														<span class="room">1 Room</span>
													</td>
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
													<td class="token">2365</td>
													<td><img class="cat-thumb" src="assets/img/room/3.png"
															alt="clients Image"><span class="name">Junior Suites Double Bed</span></td>
													<td>01/07/2024</td>
													<td>02/07/2024</td>
													<td>Pan Card</td>
													<td class="pending">Pending</td>
													<td>$400</td>
													<td class="type"><span>VVIP : </span>107</td>
													<td class="rooms">
														<span class="mem">2 Member</span> /
														<span class="room">1 Room</span>
													</td>
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
													<td class="token">2205</td>
													<td><img class="cat-thumb" src="assets/img/room/4.png"
															alt="clients Image"><span class="name">Deluxe King Double Bed</span></td>
													<td>01/07/2024</td>
													<td>02/07/2024</td>
													<td>Adhar Card</td>
													<td class="success">Gpay</td>
													<td>$1200</td>
													<td class="type"><span>Premium :</span> 103, 104, <span>Delux : </span>106</td>
													<td class="rooms">
														<span class="mem">12 Member</span> /
														<span class="room">3 Room</span>
													</td>
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
													<td class="token">2187</td>
													<td><img class="cat-thumb" src="assets/img/room/5.png"
															alt="clients Image"><span class="name">VVIP Queen Double Bed</span>
													</td>
													<td>22/03/2024</td>
													<td>05/04/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$1200</td>
													<td class="type"><span>Delux : </span>108</td>
													<td class="rooms">
														<span class="mem">1 Member</span> /
														<span class="room">1 Room</span>
													</td>
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
													<td class="token">2050</td>
													<td><img class="cat-thumb" src="assets/img/room/6.png"
															alt="clients Image"><span class="name">Deluxe King Double Bed</span>
													</td>
													<td>09/09/2022</td>
													<td>15/09/2022</td>
													<td>Adhar Card</td>
													<td class="close">Cheque</td>
													<td>$1560</td>
													<td class="type"><span>VIP : </span>203</td>
													<td class="rooms">
														<span class="mem">2 Member</span> /
														<span class="room">1 Room</span>
													</td>
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
													<td class="token">1995</td>
													<td><img class="cat-thumb" src="assets/img/room/2.png"
															alt="clients Image"><span class="name">Junior Double Bed</span>
													</td>
													<td>16/08/2024</td>
													<td>20/08/2024</td>
													<td>Pan Card</td>
													<td class="success">Gpay</td>
													<td>$1560</td>
													<td class="type"><span>VIP : </span>204, <span>Junior : </span>401, 402</td>
													<td class="rooms">
														<span class="mem">6 Member</span> /
														<span class="room">3 Room</span>
													</td>
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
													<td class="token">1985</td>
													<td><img class="cat-thumb" src="assets/img/room/4.png"
															alt="clients Image"><span class="name">Deluxe King Double Bed</span>
													</td>
													<td>19/12/2021</td>
													<td>25/12/2021</td>
													<td>Pan Card</td>
													<td class="success">Gpay</td>
													<td>$1560</td>
													<td class="type"><span>Deluxe : </span>104, <span>Junior : </span>401, 402</td>
													<td class="rooms">
														<span class="mem">10 Member</span> /
														<span class="room">4 Room</span>
													</td>
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
													<td class="token">1945</td>
													<td><img class="cat-thumb" src="assets/img/room/6.png"
															alt="clients Image"><span class="name">VIP Double Bed</span>
													</td>
													<td>25/02/2024</td>
													<td>25/02/2024</td>
													<td>Pan Card</td>
													<td class="pending">pending</td>
													<td>$400</td>
													<td class="type"><span>VIP : </span>104</td>
													<td class="rooms">
														<span class="mem">1 Member</span> /
														<span class="room">1 Room</span>
													</td>
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
													<td class="token">1865</td>
													<td><img class="cat-thumb" src="assets/img/room/1.png"
															alt="clients Image"><span class="name">Deluxe King Double Bed</span>
													</td>													
													<td>28/02/2024</td>
													<td>05/03/2024</td>
													<td>Passport</td>
													<td class="active">Cash</td>
													<td>$800</td>
													<td class="type"><span>Deluxe : </span>304, 305</td>
													<td class="rooms">
														<span class="mem">7 Member</span> /
														<span class="room">2 Room</span>
													</td>
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


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/bookings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 13:01:01 GMT -->
</html>