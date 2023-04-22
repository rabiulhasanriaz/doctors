<header data-aos="fade-down" style="position: fixed;">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo text-left">
					<h1>
						<a class="navbar-brand" href="index.html"><i class="fas fa-copy"></i> Dr. Sumiya Islam</a>
					</h1>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-lg-right text-center">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('index') }}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#about">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#education" title="">My Education</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#education" title="">My Experience</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="{{ route('frontend.blogs') }}">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">Appointment</a>
						</li>
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
								<a class="dropdown-item scroll" href="#services">Services</a>
								<a class="dropdown-item scroll" href="#skills" title="">Skills</a>
								<a class="dropdown-item scroll" href="#education" title="">My Education</a>
								<a class="dropdown-item scroll" href="#education" title="">My Experience</a>
								<a class="dropdown-item scroll" href="#clients" title="">Clients</a>
								<a class="dropdown-item scroll" href="#awards" title="">Awards</a>
							</div>
						</li> --}}
						
						
					</ul>
				</div>
			</nav>
		</header>

		<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form>
				<div class="form-group">
				  <label for="exampleInputEmail1">Name</label>
				  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">DOB</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Issue</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Appointment time</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>

  <style>
	.btn{
		border: none;
	}
	.navbar-light .navbar-nav .nav-link{
		color: rgb(255 250 250);
	}
  </style>