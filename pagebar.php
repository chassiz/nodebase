<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Masternode Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <!--<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>-->
                                <!--<li class="active">Sales</li>-->
                                <?php
								$url = "https://coinbase.com/api/v1/prices/spot_rate";
								$json = json_decode(file_get_contents($url), true);
								$price = $json["amount"];
								?>
		
								<li>Bitcoin $<?php echo $price; ?>
								</li>
                            </ol>
                        </div>
                    </div>