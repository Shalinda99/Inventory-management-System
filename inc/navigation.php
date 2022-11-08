	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#000000;">
      
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="icon" href="ACCOUNTABLES.png" type="image/gif">

    <div class="container" >
        <img height=20 src="ACCOUNTABLES.png" alt="LOGO">
        <a class="navbar-brand" href="#">Accountables</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> -->
			<li class="nav-item">
				<span class="nav-link"><?php echo $_SESSION['fullName']; ?></span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="model/login/logout.php">Log Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>