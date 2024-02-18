<?php include "header.php" ?>

		<!-- main content -->
		<div class="lh-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="lh-page-title lh-page-title-2">
					<div class="lh-breadcrumb">
						<h5>Add Members</h5>
						<ul>
							<li><a href="index.html">Luxurious</a></li>
							<li>Team Add</li>
						</ul>
					</div>
				</div>
				<form class="lh-profile-add">
					<div class="row">
						<div class="col-xxl-3 col-xl-4 col-md-12">
							<div class="team-sticky-bar">
								<div class="col-xl-12">
									<div class="lh-card">
										<div class="lh-card-content">
											<div class="lh-team-block-img">
												<div class="lh-team-block-detail">
													<div class="profile-img">
														<div class="avatar-preview">
															<div class="t-img" id="imagePreview"
																style="background-image: url(assets/img/user/thumb.jpg);">
															</div>
														</div>
														<span class="tag-label online"></span>
														<div class="avatar-edit">
															<input type='file' id="imageUpload"
																accept=".png, .jpg, .jpeg">
															<label for="imageUpload"></label>
														</div>
													</div>
													<div class="form-group p-b-15">
														<input type="text" class="form-control" id="name_profile"
															placeholder="Enter name">
													</div>
													<div class="lh-settings">
														<a href="#" class="lh-btn-primary m-r-10">Add Profile</a>
														<div class="dropdown" title="Status">
															<button class="btn btn-secondary dropdown-toggle"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false">
																<i class="mdi mdi-dots-vertical"></i>
															</button>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label online"></span>Online</a>
																</li>
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label offline"></span>Offline</a>
																</li>
																<li><a class="dropdown-item" href="#"><span
																			class="tag-label busy"></span>Busy</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="form-group">
													<textarea class="form-control" id="profile_detail" rows="9"
														placeholder="Enter Details"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-9 col-xl-8 col-md-12">
							<div class="lh-card team-overview">
								<div class="lh-card-content lh-card-team team-details">
									<div class="row">
										<div class="col-sm-12">
											<h3>Account Details</h3>
											<div class="lh-team-detail">
												<p>From your account you can easily view and track Deals. You can manage
													and change your account information like address, contact
													information
													and history of deals.</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>E-mail address</h6>
												<ul>
													<li><strong>Email 1 : </strong>
														<div class="form-group">
															<input type="email" class="form-control"
																placeholder="Enter email">
														</div>
													</li>
													<li><strong>Email 2 : </strong>
														<div class="form-group">
															<input type="email" class="form-control"
																placeholder="Enter email">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Contact nubmer</h6>
												<ul>
													<li><strong>Phone Nubmer 1 : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter number">
														</div>
													</li>
													<li><strong>Phone Nubmer 2 : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter number">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Address</h6>
												<ul>
													<li>
														<textarea class="form-control" id="profile_address1" rows="2"
															placeholder="Enter address"></textarea>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Address 2</h6>
												<ul>
													<li>
														<textarea class="form-control" id="profile_address2" rows="2"
															placeholder="Enter address"></textarea>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Bank Accounts</h6>
												<ul>
													<li><strong>Account Name : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc name">
														</div>
													</li>
													<li><strong>Account Nubmer : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc number">
														</div>
													</li>
													<li><strong>IFSC Code : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter acc ifsc">
														</div>
													</li>
													<li><strong>Bank name : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Enter bank name">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Social media</h6>
												<ul>
													<li><strong>Facebook</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Faceboot id">
														</div>
													</li>
													<li><strong>Twitter</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Twitter id">
														</div>
													</li>
													<li><strong>Linkedin</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Linkedin id">
														</div>
													</li>
													<li><strong>Github</strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Github Id">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Payment</h6>
												<ul>
													<li><strong>Paypal : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Paypal id">
														</div>
													</li>
													<li><strong>Payoneer : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Payoneer id">
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="lh-team-detail">
												<h6>Tax Info</h6>
												<ul>
													<li><strong>TIN NO : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="TIN No">
														</div>
													</li>
													<li><strong>Tax ID Number : </strong>
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Tax id">
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
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


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/team-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 13:00:58 GMT -->
</html>