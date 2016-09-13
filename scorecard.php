<?php include('header.php');?>

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="row">
						<div class="col-md-12 col-xs-12">  
						<div class="col-md-4 col-xs-4">  
							<div class="title_left">
								<h2 style="text-align:left">Scorecard </h2>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="col-md-9 col-sm-5 col-xs-4 form-group pull-left">
							<input class="form-control" type="text" id="weekpicker" required="required" placeholder="Please Select The Week"name="newsdate"/>
							</div>
							<div class="col-md-3 col-sm-5 col-xs-4 form-group pull-right">
							<button class="btn btn-success">Run Model</button>
							</div>
						</div>
						
					</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
							<div class="x_panel">
								<div class="x_content">
									<div class="row">
										<div class="scoreborder height">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="tile-stats">
												<h5>Customer Satisfaction Score </h5>
												<div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
												<!-- pie chart -->
												<div class="col-md-12 col-sm-6 col-xs-12">
												<span class="count_top"></span>
												<div class="x_content2">
												<div id="echart_guage" style="width:250px;height: 230px;"></div>
												</div>
												</div>
												<!-- /Pie chart -->
												</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
											<span class="count_top">% Change </span>
											
											<div class="globalreview  green"><i class="green"><i class="fa fa-sort-asc"></i> </i>25 </div>
											
											</div>
											<div class="col-lg-4 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
											<span class="count_top"> Ranking</span>
											<div class="globalreview  green" >25 / 100 </div>
										
											</div>
											<div class="col-lg-4 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
											<span class="count_top"> LW Rank</span>
									<div class="globalreview  red"><i class="red"><i class="fa fa-sort-desc"></i></i> 24</div>
											</div>
											<div class="pad"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
							<div class="x_panel">
								<div class="x_content">
									<div class="row">
										<div class="scoreborder height">
										<div class="tile-stats">
										
										
													<h5>Review Analysis                                 </h5>
													
													<div class="col-lg-12 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
									<div id="graph_donut" style="width:100%;height: 243px;padding: 13px 0px;"></div>
													</div>
													
													<div class="col-lg-6 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
														<span class="count_top"># Review</span>
														<div class="globalreview  green">1500</div>
													</div>
													<div class="col-lg-6 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
													<span class="count_top">Change </span>
													<div class="globalreview  green"><i class="fa fa-sort-asc"></i>+250</div>
													</div>
												</div>
												</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
							<div class="x_panel">
								<div class="x_content">
									<div class="row">
										<div class="scoreborder height">
										<div class="tile-stats">
										
													<h5>Semantic Analysis</h5>
													<div class="col-lg-12 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
													<div id="graph_donut1" style="width:100%;height: 243px;padding: 13px 0px;"></div>
													
													<!--<p><i class="green"><i class="fa fa-sort-asc"></i>34% </i></p>
													<span class="count_bottom"> From last Week</span>-->
													</div>
													<div class="col-lg-6 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
													<span class="count_top">Mentions</span>
													<div class="globalreview  green">2000</div>
													
													<!--<p><i class="green"><i class="fa fa-sort-asc"></i>+8 </i></p>
													<span class="count_bottom"> From last Week</span>-->
													</div>
													<div class="col-lg-6 col-sm-4 col-xs-12 tile_stats_count" style="text-align: left;">
													
														<span class="count_top">Change </span>
													<div class="globalreview  green"><i class="fa fa-sort-asc"></i>+300</div>
													</div>
												</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="x_panel">
								<div class="x_content">
									<div class="row">
									<h2>Score Distribution<small></small></h2>
										<div class="scoreborder">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="x_content">
													<canvas id="lineChart" style="width: 1107px;height:150px!important;"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
									<h2>Group Details</h2>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="table-responsive">
												<table class="table table-responsive table-bordered">
													<thead>
														<tr>
														  <th>Hotel Name</th>
														  <th>CSI</th>
														  <th>%Change </th>
														  <th>Ranking </th>
														  <th>LW Rank </th>
														  <th>Reviews</th>
														  <th>Change</th>
														  <th>Distribution</th>
														  <th>Mentions</th>
														  <th>Change</th>
														  <th>Distribution</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">Taj Delhi</th>
															<td>86 %</td>
															<td>+16</td>
															<td>25</td>
															<td>30</td>
															<td>250</td>
															<td>+90</td>
															<td> 
																<div class="progress">
																   <span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
																   <span class="meter blue1" style="width: 20%;"data-toggle="tooltip" data-placement="top" title="20%"></span>
																   <span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
																</div>
															</td>
															<td>100</td>
															<td>+25</td>
															<td> 
																<div class="progress">
																	<span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
																	<span class="meter blue1" style="width: 20%;"data-toggle="tooltip" data-placement="top" title="20%"></span>
																	<span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
																</div>
															</td>
														</tr>
														<tr>
														  <th scope="row">Taj Chennai</th>
														  <td>75</td>
														  <td>-5</td>
														  
														  <td>45</td>
														  <td>40</td>
														  <td>300</td>
														  <td>+20</td>
														  
														  <td> <div class="progress">
																   <span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
																   <span class="meter blue1" style="width: 20%;"data-toggle="tooltip" data-placement="top" title="20%"></span>
																   <span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
																	
																		</div></td>
														
														  <td>250</td>
														  <td>+40</td>
														  <td> 
														  <div class="progress">
																   <span class="meter green1" style="width: 30%;"data-toggle="tooltip" data-placement="top" title="30%"></span>
																   <span class="meter blue1" style="width: 20%;"data-toggle="tooltip" data-placement="top" title="20%"></span>
																   <span class="meter red1" style="width: 50%;"data-toggle="tooltip" data-placement="top" title="50%"></span>
																</div>
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
		<?php include('footer.php');?>
	