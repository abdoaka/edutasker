<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="icon" type="image/png" href="../images/icons/logo.png" />
        <title>Edutasker</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="../assets/css/ready.css">
        <link rel="stylesheet" href="../assets/css/demo.css">
    </head>

<div class="main-header">
	<div class="logo-header" style="display: flex; align-items: center;">
		<img src="../images/icons/logo.png" style="width: 80px;">
		<a href="../dashboard.php" class="logo">
			Edutasker
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
			data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
	</div>
</div>
<div class="sidebar">
	<div class="scrollbar-inner sidebar-wrapper">
		<div class="user">
			<div class="photo">
				<img src="../images/icons/logo.png">
			</div>
			<div class="info">
				<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
					<span>

						<span class="user-level">Administrator</span>
						<span class="caret"></span>
					</span>
				</a>
				<div class="clearfix"></div>

				<div class="collapse in" id="collapseExample" aria-expanded="true" >
					<ul class="nav">
						<li>
							<a href="#profile">
								<span class="link-collapse">My Profile</span>
							</a>
						</li>
						<li>
							<a href="#edit">
								<span class="link-collapse">Edit Profile</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<ul class="nav">
			<li class="nav-item active">
				<a href="../dashboard.php">
					<i class="la la-dashboard"></i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../school/school.php">
					<i class="la la-institution"></i>
					<p>School</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../professeur/professeur.php">
					<i class="la la-user-secret"></i>
					<p>Professeur</p>
					<!-- <span class="badge badge-count">6</span> -->
				</a>
			</li>
			<li class="nav-item">
				<a href="../student/student.php">
					<i class="la la-graduation-cap"></i>
					<p>Student</p>
					<!-- <span class="badge badge-count">6</span> -->
				</a>
			</li>
			<li class="nav-item">
				<a href="../devoir/devoir.php">
					<i class="la la-navicon"></i>
					<p>Devoir</p>
					<!-- <span class="badge badge-count">6</span> -->
				</a>
			</li>
			<li class="nav-item">
				<a href="../group/group.php">
					<i class="la la-group"></i>
					<p>Group</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../management/management.php">
					<i class="la la-cogs"></i>
					<p>management</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../payment/payment.php">
					<i class="la la-money"></i>
					<p>Payment</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../deconecter.php">
				<i class="la la-sign-out"></i>
					<p>Log out</p>
				</a>
			</li>
		</ul>
	</div>
</div>