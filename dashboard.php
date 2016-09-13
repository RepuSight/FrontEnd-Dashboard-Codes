<?php include('header.php');?>

	<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					<div class="x_panel">
						<div class="x_content">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-xs-12">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<div class="row">
												<div class="col-xs-3">
													<i class="fa fa-comments fa-5x"></i>
												</div>
												<div class="col-xs-9 text-right">
													<div class="huge"><h2>26</h2></div>
													<div><h3>Number of Tickets</h3></div>
												</div>
											</div>
										</div>
										<!--<a href="#">
											<div class="panel-footer">
												<span class="pull-left">View Details</span>
												<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
												<div class="clearfix"></div>
											</div>
										</a>-->
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-xs-12">
									<div class="panel panel-green1">
										<div class="panel-heading">
											<div class="row">
												<div class="col-xs-3">
													<i class="fa fa-tasks fa-5x"></i>
												</div>
												<div class="col-xs-9 text-right">
													<div class="huge"><h2>12</h2></div>
													<div><h3>Open Task !</h3></div>
												</div>
											</div>
										</div>
										<!--<a href="#">
											<div class="panel-footer">
												<span class="pull-left">View Details</span>
												<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
												<div class="clearfix"></div>
											</div>
										</a>-->
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-xs-12">
									<div class="panel panel-yellow">
										<div class="panel-heading">
											<div class="row">
												<div class="col-xs-3">
													<i class="fa fa-support fa-5x"></i>
												</div>
												<div class="col-xs-9 text-right">
													<div class="huge"><h2>124</h2></div>
													<div><h3>Closed task !</h3></div>
												</div>
											</div>
										</div>
										<!--<a href="#">
											<div class="panel-footer">
												<span class="pull-left">View Details</span>
												<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
												<div class="clearfix"></div>
											</div>
										</a>-->
									</div>
								</div>
								<!--<div class="col-lg-3 col-md-6">
									<div class="panel panel-red">
										<div class="panel-heading">
											<div class="row">
												<div class="col-xs-3">
													<i class="fa fa-support fa-5x"></i>
												</div>
												<div class="col-xs-9 text-right">
													<div class="huge">13</div>
													<div>Support Tickets!</div>
												</div>
											</div>
										</div>
										<a href="#">
											<div class="panel-footer">
												<span class="pull-left">View Details</span>
												<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
												<div class="clearfix"></div>
											</div>
										</a>
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						<h2></h2>
						  <div class="x_content modelalign">
							
							<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Add Ticket</button>
							<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
		<form class="form-horizontal form-label-left" novalidate>

							  <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>-->
							  </p>
							 <!-- <span class="section">Personal Info</span>-->

							  
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								  </select>
								</div>
							  </div>
							 
							   <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Assign To</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								  </select>
								</div>
							  </div>
							   <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Assign Date</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								  </select>
								</div>
							  </div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Severity</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								  </select>
								</div>
							  </div>
							
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Due Date</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								  </select>
								</div>
							  </div>
							
							  <!--<div class="ln_solid"></div>-->
							  
							  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
							</div>
						  </div>
							 
							   <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Support Status</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Open</option>
									<option>Close</option>
									</select>
								</div>
							  </div>
							   <div class="form-group">
								<div class="col-md-6 col-md-offset-3">
								  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
								  <button id="send" type="submit" class="btn btn-success">Submit</button>
								</div>
							  </div>
							  <div class="row control-group">
                           
                        </div>
							</form>
			
        </div>
		<!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>
						  </div>
						</div>
					  </div>
					</div>
			<div class="clearfix"></div>
			<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						<h2>All Support Tickets</h2>
						  <div class="x_content">
							 <div class="table-responsive">
							<table class="table table-striped projects">
							  <thead>
								<tr>
								  <th>Sr No</th>
								  <th>Department</th>
								  <th>Description</th>
								  <th>Assigned To</th>
								  <th>Assigned Date</th>
								  <th>Severity</th>
								  <th>Due Date</th>
								  <th>Status</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1</td>
								  <td><a>Lorem</a></td>
								  <td><a>Lorem</a></td>
								  <td><a>Lorem </a></td>
								  <td><a>Lorem </a></td> 
								  <td><a>Lorem </a></td> 
								  <td><a>12/12/16 </a></td> 
								  
								  <td>
					<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Open</button>
					<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">Close</button>
								  </td>
								 
								</tr>
							   
								
								
								
							   
							  </tbody>
							</table>
						   </div>
						  </div>
						</div>
					  </div>
					</div>
					
					
			<div class="clearfix"></div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /page content -->
<?php include('footer.php');?>