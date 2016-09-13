	<?php include('header.php');?>

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="row">
						
						<div class="col-md-4 col-lg-4 col-sm-5 col-xs-4 form-group pull-right">
							<input class="form-control" type="text" id="weekpicker" required="required" placeholder="Please Select The Week"name="newsdate"/>
							</div>
					</div>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-3 col-sm-12 col-xs-12 col-lg-3">
							<div class="x_panel">
							<div class="x_content">
							<h2>Source </h2>
							<label><input type="checkbox" class="checkme">Select All</label><br>
							<label><input type="checkbox" class="checkme">Burrp</label><br>
							<label><input type="checkbox" class="checkme">Zomato</label><br>
							<label><input type="checkbox" class="checkme"> FoodPanda</label><br>
							<label><input type="checkbox" class="checkme"> Mouthshut</label><br>
							<label><input type="checkbox" class="checkme"> DineOut</label><br>
							<label><input type="checkbox" class="checkme"> Trip Advisor </label><br>
							<label><input type="checkbox" class="checkme">Evening Flavour</label>
							<label><input type="checkbox" class="checkme"> Expedia</label><br>
						<label><input type="checkbox" class="checkme">Goibibo</label><br>
						<label><input type="checkbox" class="checkme">HolidayIQ</label><br>
						<label><input type="checkbox" class="checkme"> Inhotel</label><br>
						<label><input type="checkbox" class="checkme"> Makemytrip</label><br>
						<label><input type="checkbox" class="checkme"> TravelGuru </label><br>
						<label><input type="checkbox" class="checkme"> Booking.com</label><br>
							</div>
							</div>
							</div>
							<div class="col-md-9 col-sm-12 col-xs-12 col-lg-9">
							<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="x_panel">
							<div class="x_content">
							<div class="table-responsive">
							<table class="table table-responsive">
							<thead>
							<tr>
							<th>Mentions</th>
							<th>Distribution</th>
							<th>Change</th>
							<th>Review</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>5081</td>
							<td> <div class="progress">
							<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							<span class="meter blue1" style="width: 20%;"data-toggle="tooltip" data-placement="top" title="20%"></span>
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
							</div></td>
							<td>490</td>
							<td>490</td>
							</tr>
							
							</tbody>
							</table>
							</div>
							</div>
							</div>
							</div>
							</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<h2>Mention Distribution</h2>
										<div class="x_panel">
											<div class="x_content">
												<canvas id="mybarChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="x_panel">
							<h1>Semantic Mentions</h1>
							<div class="x_content">
							<div class="table-responsive">
							<table class="table table-responsive semantictable">
							<thead>
							<tr>
							<th>Concept</th>
							<th>Mentions</th>
							<th>Positive</th>
							<th>Negative</th>
							
							<th>Related Concepts</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>Room</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							
							<td>Otto</td>
							</tr>
							<tr>
							<td>Bed</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							<tr>
							<td>Location</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							<tr>
							<td>Services</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							<tr>
							<td>View</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							
							<td>Otto</td>
							</tr>
							<tr>
							<td>Food</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							<tr>
							<td>Bed Room</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							<tr>
							<td>Staff</td>
							<td>55</td>
							<td> 
							
								<div class="progress">
									<span class="leftpositive" >50</span>
						<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
							
							</div></td>
							<td> 
							<div class="progress">
							<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
								<span class="rightpositive" >50</span>
							</div>
						
							</td>
							<td>Otto</td>
							
							</tr>
							</tbody>
							</table>
							</div>
							</div>
							</div>
							</div>
							</div>
							<div class="clearfix"></div>
							</div>
						</div>
						<!-- /page content -->
		
	<?php include('footer.php');?>