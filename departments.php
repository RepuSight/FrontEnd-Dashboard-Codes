<?php include('header.php');?>

		<!-- page content -->
		<div class="right_col" role="main">
			<div class="">
				<div class="page-title">
					<div class="title_left">
						<h3>Departments<small></small></h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-5 col-xs-4 col-lg-4 form-group pull-right">
				<input class="form-control" type="text" id="weekpicker" required="required" placeholder="Please Select The Week"name="newsdate"/>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="x_panel">
							<h2>Add Departments</h2>
							<div class="x_content">
								<div class="row">
									<form class="form-horizontal form-label-left" novalidate>
										<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Department Name <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Enter Dept Name" required="required" type="text">
										</div>
										</div>
										<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Department Status</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										<select class="form-control">
										<option>Active</option>
										<option>Option one</option>
										<option>Option two</option>
										</select>
										</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
										<div class="col-md-6 col-md-offset-3">
										<button type="submit" class="btn btn-primary">Cancel</button>
										<button id="send" type="submit" class="btn btn-success">Submit</button>
										</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="x_panel"><h2>All Departments<small></small></h2>
							<div class="x_content">
								<div class="row">
									<div class="table-responsive">
										<table class="table table-striped projects">
											<thead>
												<tr>
												  <th>Sr No</th>
												  <th>Departmet Name</th>
												  <th>Department Date</th>
												  <th>Status</th>
												  <th>Settings</th>
												</tr>
											</thead>
											<tbody>
											<tr>
											  <td>#</td>
											  <td>
												<p>Lorem Ipsum</p>
											  </td>
											  <td>
												<p>Lorem Ipsum</p>
											  </td>
											  <td class="project_progress">
												<div class="progress progress_sm">
												  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="56" style="width: 57%;"></div>
												</div>
												<small>57% Complete</small>
											  </td>
											  <td>
												<button type="button" class="btn btn-success btn-xs">Active</button>
											  </td>
											  <td>
												<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
												<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- /page content -->
	<?php include('footer.php');?>