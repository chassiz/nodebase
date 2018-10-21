                        <div class="state-overview">
							<?php
								// Interval Per Day
					  			$now = time();
					  			$your_date = strtotime("2018-06-03"); //Starting date
					  			$datediff = floor(($now - $your_date)/(60*60*24));
							?>
							
							<?php
					  			// Converts a number into a short version, eg: 1000 -> 1k
 					  			function number_format_short( $n, $precision = 1 ) {
					  				if ($n < 900) {
					  					// 0 - 900
					  					$n_format = number_format($n, $precision);
					  					$suffix = '';
					  				} else if ($n < 900000) {
					  					// 0.9k-850k
					  					$n_format = number_format($n / 1000, $precision);
					  					$suffix = 'K';
					  				} else if ($n < 900000000) {
					  					// 0.9m-850m
					  					$n_format = number_format($n / 1000000, $precision);
					  					$suffix = 'M';
					  				} else if ($n < 900000000000) {
					  					// 0.9b-850b
					  					$n_format = number_format($n / 1000000000, $precision);
					  					$suffix = 'B';
					  				} else {
					  					// 0.9t+
					  					$n_format = number_format($n / 1000000000000, $precision);
					  					$suffix = 'T';
					  				}
 					  			 // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
 					  			 // Intentionally does not affect partials, eg "1.50" -> "1.50"
						  			if ( $precision > 0 ) {
						  				$dotzero = '.' . str_repeat( '0', $precision );
					  					$n_format = str_replace( $dotzero, '', $n_format );
					  				}
					  				return $n_format . $suffix;
					  			}
 
 					  			?>
  
							<div class="row">
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-orange">
						            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Coins</span>
						              <span class="info-box-number"><?php  echo number_format_short($datediff*300+15000); ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              <span class="progress-description">
						                    ~<span>$</span>400
						              </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-purple">
						            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Daily Coins</span>
						              <span class="info-box-number"><?php  echo number_format_short($datediff*300+15000); ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 40%"></div>
						              </div>
						              <span class="progress-description">
						                    ~400% ROI
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-purple">
						            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Monthly</span>
						              <span class="info-box-number"><?php  echo number_format_short($datediff*300+15000); ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 85%"></div>
						              </div>
						              <span class="progress-description">
						                    10%+ Nodes
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-purple">
						            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Yearly</span>
						              <span class="info-box-number"><?php  echo number_format_short($datediff*300+15000); ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 50%"></div>
						              </div>
						              <span class="progress-description">
						                    50% Increase in 28 Days
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						      </div>
						      
						      
						      <div class="row">
	                  
		
						<div class="col-sm-12">
							<div class="card-box">
								<!--<div class="card-head">
									<header> </header>
								</div>-->
								<div class="card-body ">
					            <div class = "mdl-tabs mdl-js-tabs">
					               <div class = "mdl-tabs__tab-bar tab-left-side">
					                  <a href = "#tab4-panel" class = "mdl-tabs__tab tabs_three is-active">Bitcoin Lightning</a>
					                  <a href = "#tab5-panel" class = "mdl-tabs__tab tabs_three">Held Coin</a>
					                  <a href = "#tab6-panel" class = "mdl-tabs__tab tabs_three">Mutual Fund</a>
					               </div>
					               <div class = "mdl-tabs__panel is-active p-t-20" id = "tab4-panel">
					               <div class="table-responsive">
										<table class="table" style="color: black;">
											<tbody>
												<tr>
 													<th>Node</th>
													<th>IP Address</th>
													<th>Amount</th>
													<th>Wallet</th>
													<th>Status</th>
												</tr>
												<tr>
 													<td>Bryannode</td>
													<td>45.77.75.215</td>
													<td><?php echo $datediff*52+2750; ?></td>
													<td>BT47jkhezq4LVMz57LSj8EFvPD6yRs6yuu</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
												<tr>
 													<td>Brybrynode</td>
													<td>108.61.192.136</td>
													<td><?php echo $datediff*52+3000; ?></td>
													<td>BNx8sTn9mVBQ3k9soiX6FKPU4BVfNLF1kd</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
 												<tr>
 													<td>Morrisonnode</td>
													<td>144.202.40.224</td>
													<td><?php echo $datediff*52+3050; ?></td>
													<td>BCEJz4JkjqvQGSsfVYnmLKB9FRP5STimp3</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
												<tr>
 													<td>BryanLightNode</td>
													<td>104.207.147.56</td>
													<td><?php echo $datediff*52+2730; ?></td>
													<td>B8Ge5ofEskPgpCYKnhmMC8vD3f7TDRMCm6</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
 											</tbody>
										</table>
									</div>
									 
					               </div>
					               <div class = "mdl-tabs__panel p-t-20" id = "tab5-panel">
										<div class="table-responsive">
										<table class="table" style="color: black;">
											<tbody>
												<tr>
 													<th>Node</th>
													<th>IP Address</th>
													<th>Amount</th>
													<th>Wallet</th>
													<th>Status</th>
												</tr>
												<tr>
 													<td>HeldNode</td>
													<td>45.77.72.194</td>
													<td><?php echo $datediff*52+2050; ?></td>
													<td>HM9CXiLvuTURRzCLKVyUsutRdiBh38Y1og</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
												<tr>
 													<td>RosaritaNode</td>
													<td>45.77.199.45</td>
													<td><?php echo $datediff*52+1650; ?></td>
													<td>HTxXiiNfqvUqaGsfFk5wtrjdbwfapXa7oW</td>
													<td><span class="label label-success">Active</span></td>
												</tr>
 											</tbody>
										</table>
									</div>
									 
					               </div>
					               <div class = "mdl-tabs__panel p-t-20" id = "tab6-panel">
					               		<div class="table-responsive">
										<table class="table" style="color: black;">
											<tbody>
												<tr>
 													<th>Node</th>
													<th>IP Address</th>
													<th>Amount</th>
													<th>Wallet</th>
													<th>Status</th>
												</tr>
												<tr>
													<th>

													</th>
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
					
						</div>