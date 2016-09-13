	<?php include('header.php');?>

				<!-- page content -->
				<div class="right_col" role="main">
				  <div class="">
					<div class="page-title">
					  <div class="title_left">
						<h3>Team Member<small></small></h3>
					  </div>
					</div>
					<div class="clearfix"></div>

					<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="x_panel">
						 <h2>Add Team Members<small></small></h2>
						  <div class="x_content">
						   <div class="row">
						   <div class="col-md-12 col-sm-12 col-xs-12">
							<form class="form-horizontal form-label-left" novalidate>

							  <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
							  </p>
							  <span class="section">Personal Info</span>-->

							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Team Member First Name <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Enter Name" required="required" type="text">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Team Member Last Name <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Team Member User Name <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Team Member Email <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="url" id="website" name="website" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="item form-group">
								<label for="password" class="control-label col-md-3">Password</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							  </div>
							  <div class="item form-group">
								<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Team Member Authority</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Editor</option>
									<option>Option one</option>
									<option>Option two</option>
								   
								  </select>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Team Member Status</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>Active</option>
									<option>Option one</option>
									<option>Option two</option>
								   
								  </select>
								</div>
							  </div>
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
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

					 
					</div>
					<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="x_panel">
						<h2>All Team Member View<small></small></h2>
						  <div class="x_content">
						  <div class="row">
						   <div class="col-md-12 col-sm-12 col-xs-12">
							 <div class="table-responsive">
							<table class="table table-striped projects">
							  <thead>
								<tr>
								  <th >Sr No</th>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Mobile</th>
								  <th>Authority</th>
								  
								  <th>Settings</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1</td>
								  <td>
									Lorem
								  </td>
								  <td>
								   Lorem
								  </td>
								  <td>
								   <small>+91 987654321</small>
								  </td>
								  <td>
									<button type="button" class="btn btn-success btn-xs">Admin</button>
								  </td>
								  <td>
									<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
									<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
									<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
								  </td>
								</tr>
								<tr>
								  <td>2</td>
								  <td>
								   Lorem
								  </td>
								  <td>
									Lorem
								  </td>
								  <td>
									
									<small>+91 987654321</small>
								  </td>
								  <td>
									<button type="button" class="btn btn-success btn-xs">Admin</button>
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

					 
					</div>
					
						
					<div class="clearfix"></div>
				  
				  </div>
				</div>
				<!-- /page content -->

		
		<?php include('footer.php');?>
		
		