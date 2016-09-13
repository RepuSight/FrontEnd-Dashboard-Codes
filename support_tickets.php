<?php include('header.php');?>


				<!-- page content -->
				<div class="right_col" role="main">
				  <div class="">
					<div class="page-title">
					  <div class="title_left">
						<h3>Support Ticket</h3>
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
								  <th >Ticket Id</th>
								  <th>Support Name</th>
								  <th>Severity</th>
								  <th>Department</th>
								  <th >Assign To</th>
								  <th >Ticket Raised</th>
								  <th >Dead Line</th>
								  <th >Settings</th>
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
								  <td class="project_progress">
									<div class="progress progress_sm">
									  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="56" style="width: 57%;"></div>
									</div>
									<small>57% Complete</small>
								  </td>
								  <td>
									<button type="button" class="btn btn-success btn-xs">Success</button>
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
					<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						<h2>Add Support Tickets</h2>
							<div class="x_content">
							<form class="form-horizontal form-label-left" novalidate>

							  <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>-->
							  </p>
							 <!-- <span class="section">Personal Info</span>-->

							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Support Ticket Title<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
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
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Support Severity</label>
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
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Support Department</label>
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
							  <label class="control-label col-md-3 col-sm-3 col-xs-12">Dead Line</label>
								<div class="input-group date col-md-6 col-sm-6 col-xs-12" id='datetimepicker1'>
									<input type='text' class="form-control " />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
					</div>
						   
							  <!--<div class="ln_solid"></div>-->
							  <div class="form-group">
							  
								 <div class="x_content">
								  <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
								   <div class="col-md-6 col-sm-6 col-xs-12">
								  
						  <div id="alerts"></div>
						  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
							<div class="btn-group">
							  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
							  <ul class="dropdown-menu">
							  </ul>
							</div>

							<div class="btn-group">
							  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li>
								  <a data-edit="fontSize 5">
									<p style="font-size:17px">Huge</p>
								  </a>
								</li>
								<li>
								  <a data-edit="fontSize 3">
									<p style="font-size:14px">Normal</p>
								  </a>
								</li>
								<li>
								  <a data-edit="fontSize 1">
									<p style="font-size:11px">Small</p>
								  </a>
								</li>
							  </ul>
							</div>

							<div class="btn-group">
							  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
							  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
							  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
							  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
							</div>

							<div class="btn-group">
							  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
							  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
							  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
							  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
							</div>

							<div class="btn-group">
							  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
							  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
							  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
							  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
							</div>

							<div class="btn-group">
							  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
							  <div class="dropdown-menu input-append">
								<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
								<button class="btn" type="button">Add</button>
							  </div>
							  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
							</div>

							<div class="btn-group">
							  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
							  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
							</div>

							<div class="btn-group">
							  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
							  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
							</div>
						  </div>

						  <div id="editor" class="editor-wrapper"></div>

						  <textarea name="descr" id="descr" style="display:none;"></textarea>
						  
						  <br />

						  <!--<div class="ln_solid"></div>-->

						  
						</div>
						</div>
							  </div>
							  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Solution</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
							</div>
						  </div>
							  <div class="form-group">
								<div class="col-md-6 col-md-offset-3">
								  <button type="submit" class="btn btn-primary">Cancel</button>
								  <button id="send" type="submit" class="btn btn-success">Submit</button>
								</div>
							  </div>
							   <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Support Status</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control">
									<option>---Open---</option>
									<option>Support One</option>
									<option>Support two</option>
								   
								  </select>
								</div>
							  </div>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						<h2>Support Severity</h2>
							<div class="x_content">
							 <div class="table-responsive">
							<table class="table table-striped projects">
							  <thead>
								<tr>
								  <th>Sr No</th>
								  <th >Ticket Id</th>
								  <th>Support Name</th>
								  <th>Severity</th>
								  <th>Department</th>
								  <th >Assign To</th>
								  <th >Ticket Raised</th>
								  <th >Dead Line</th>
								  <th >Settings</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1</td>
								  <td>
									<a>Lorem</a>
								   
								   
								  </td>
								  <td>
									<a>Lorem</a>
								   
								   
								  </td>
								  <td>
									<a>Lorem </a>
								   
								   
								  </td><td>
									<a>Lorem </a>
								   
								   
								  </td> 
								  <td>
									<a>Lorem </a>
								   
								   
								  </td> 
								  <td class="project_progress">
									<div class="progress progress_sm">
									  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="56" style="width: 57%;"></div>
									</div>
									<small>57% Complete</small>
								  </td>
								  <td>
									<button type="button" class="btn btn-success btn-xs">Success</button>
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
				<!-- /page content -->

		<?php include('footer.php');?>
		
		