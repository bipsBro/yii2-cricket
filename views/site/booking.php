    

	<!-- Booking --> 
	<div id="booking" class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center"  style="background-color: #fff !important;"> 
	  <div class="w3-content">
		<h1 class="w3-text-grey"><b>BOOKING</b></h1> 
		  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th style="text-align: center;">BOOKING DURATION</th>
				<th style="text-align: center;">PRICE</th>
				<th style="text-align: center;">ACTION</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>      
			  <tr class="success">
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>
			  <tr class="danger">
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>
			  <tr class="info">
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>
			  <tr class="warning">
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>
			  <tr class="active">
				<td>1 hr</td>
				<td>$200</td>
				<td>
					<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span> Book now</button>
				</td>
			  </tr>
			</tbody>
		  </table> 
	  </div>   
	</div> 
	<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide"  style="background-color: #003580 !important;"> 
		<div class="w3-content">
			<h3>Contact Form</h3>
			<div class="row">
				<div class="col-md-8">
					<div class="contact-form">
						<form class="form-horizontal" action="/action_page.php">
							  <div class="form-group">
								<label class="control-label col-sm-2">Name:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" placeholder="Enter Full Name" required >
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-2">Email:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" placeholder="Enter email" required>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-2">Mobile:</label>
								<div class="col-sm-10"> 
								  <input type="text" class="form-control" placeholder="Enter Contact Number" required>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-2">Message:</label>
								<div class="col-sm-10"> 
								  <textarea class="form-control" placeholder="Enter password" rows="8" required></textarea>
								</div>
							  </div> 
							  <div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default">Submit</button>
								  <button type="rest" class="btn btn-gray">Cancel</button>
								</div>
							  </div>
						</form>
					</div>	
				</div>
				<div class="col-md-4"> 
					<div class="address">
						<ul style="list-style-type:none">
							<li><i class="glyphicon glyphicon-map-marker"></i> DR Cricket Academy, Sweden</li>
							<li><i class="glyphicon glyphicon-envelope"></i> info@drcricketacademy.com</li> 
							<li><i class="glyphicon glyphicon-phone"></i> +99 1111 111 11</li> 
							<li> 
								<div class="map">	
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15899224.636730123!2d-0.2866107761057535!3d60.8928750028283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465cb2396d35f0f1%3A0x22b8eba28dad6f62!2sSweden!5e0!3m2!1sen!2snp!4v1521546170973" width="100%" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>	
							</li> 
						</ul> 
					</div>	
				</div>
			</div>
		</div> 
	</div>  
	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-16" style="margin-bottom: 50px;">
		<div class="row">	
			<div class="col-md-6">
				<span class="footer-left"> <p>© 2018 D.R. Cricket Academy HB</p></span>
			</div>		
			<div class="col-md-6">
				<span class="footer-right"><p>Developed by <a href="http://www.kodstack.com/" title="Kodstack Int Lab" target="_blank" class="w3-hover-text-green">Kodstack Int Lab</a></p></span>
			</div>	
		</div>	
	</footer> 
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog"> 
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Booking Form for <b>Package Name</b></h4>
			</div>
			<div class="modal-body">
			  <form role="form">
				<div class="form-group">
				  <label for="email">Name:</label>
				  <input type="text" class="form-control" id="email">
				</div>
				<div class="form-group">
				  <label for="email">Email address:</label>
				  <input type="email" class="form-control" id="email">
				</div> 
				<div class="form-group">
				  <label for="mobile">Contact number:</label>
				  <input type="text" class="form-control" id="mobile">
				</div> 
				<div class="checkbox">
				  <label><input type="checkbox"> Accept Terms & Conditions</label>
				  <p>No cricket team in the world depends on one or two players. The team always plays to win.</p>
				</div>
				<button type="submit" class="btn btn-info"><span class='glyphicon glyphicon-user'></span> Submit</button>
				<button type="reset" class="btn btn-default"><span class='glyphicon glyphicon-remove'></span> Cancel</button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div> 
		</div>
	</div> 