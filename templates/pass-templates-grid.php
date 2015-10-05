<?php

require_once(dirname(dirname(__FILE__)).'/base/config.php');
require_once(dirname(dirname(__FILE__)).'/base/request.php');
require_once(dirname(dirname(__FILE__)).'/base/files.php');
require_once(dirname(dirname(__FILE__)).'/base/client-api.php');
require_once(dirname(dirname(__FILE__)).'/base/helper.php');
require_once(dirname(dirname(__FILE__)).'/base/getlists.php');
require_once(dirname(dirname(__FILE__)).'/base/debug.php');

	//PASSBUILDER_PASSLIST_URL
	$current_userid = get_current_user_id( ); 

	$uid = (isset($_GET['uid'])) ? $_GET['uid'] : '';


	$pageSize = 20;
	$currentPointer = (isset($_GET['page'])) ? $currentPointer = (int)$_GET['page']-1 : 0;
	$cursorNo = $currentPointer+1;

	$userPassList = array();
	$list = new GetLists();
	$passData = ($uid == '') ? $list->getPassTemplates($current_userid) : $list->getCustomerPassTemplates($uid);
	

	if(count($passData) > 0){
		$userPassList = array_chunk( $passData , $pageSize );	
	}
	
	
	$totalRecords = count($passData);
	$current_role = Helper::getRole();  //administrator 



	$LIVE_BASE_URL = (ICL_LANGUAGE_CODE == 'en') ? get_site_url() : get_site_url().'/da';

?>



<h3> <?php echo(Helper::_t('head3','heading')); ?> </h3>



<div class="passContentContainer">

	<div class="right">
		<a href="<?php echo($LIVE_BASE_URL); ?>/?pass-builder=templates&q=create" class="btn btn-default"><?php echo(Helper::_t('head1','heading')); ?></a>
	</div>
	<div class="clear"></div>

	<div class="gridContainer">

		<?php
		if($current_role == 'administrator'){
			$cutomerUsers = get_users('role=subscriber');
			  
	?>

	<div class="filterControl" style="width:370px;">
			<form action="" method="GET">
				<select id="userFilterPasses" name="userFilterPasses" class="form-control left" style="width:300px;">
					<option value="">--Select Customer Pass Templets--</option>
					<?php
						foreach( $cutomerUsers as $user ) {
							if($uid == $user->ID){
								echo '<option value="'.$user->ID.'" selected="selected" >'.$user->user_login.'</option>';
							}else{
								echo '<option value="'.$user->ID.'">'.$user->user_login.'</option>';	
							}
						}	
					?>
				</select>
			</form>
			<div class="filterReset right">
				<?php
					if($uid != ''){
						$baseUrl = $LIVE_BASE_URL.'/?pass-builder=templates';
						echo '<a href="'.$baseUrl.'">Reset</a>';
					}
				?>
			</div>
			</div class="clear"></div>

	</div><!--@filterControl-->	


	<?php
		}
	?>



	<br/>
	<div class="row">

		<?php
			// admin's grid
			if($current_role == 'administrator'){
		?>
			<?php
				if(count($userPassList) > 0){
			?>
			<form action="" method="POST">
			<input type="hidden" name="formAction" value="removepass" > 	
			
			<div class="row">
				<div class="col-md-10">
				</div>
				<div class="col-md-2" style="text-align:right;">
					<input type="submit" value="Delete" class="roundBtn">
				</div>	
			</div><!--@row-->	

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Username</th>
						<th><?php echo(Helper::_t('template','msg')); ?></th>
						<th>Size</th>
						<th>Preview</th>
						<th>Created</th>
						<th>Barcode</th>
						<th>Pass Data</th>
						<th>Publish</th>
						<th>Url Keys</th>
						<th>Edit</th>
						<th>Replicate</th>
						<th>X</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($userPassList[$currentPointer] as $id=>$dataArray){
					?>
					<tr>
						<td><b>
							<?php 
								$user_info = get_userdata($dataArray['uid']);
								echo $user_info->user_login; 
							?>
						</b></td>
						<td><b><?php echo $dataArray['template']; ?></b></td>
						<td><?php echo $dataArray['size']; ?></td>
						<td></td>
						<td><?php echo $dataArray['created']; ?></td>
						<td><?php echo $dataArray['barcode']; ?></td>
						<td></td>
						<td>
							<?php
							    $baseUrl = "'".$LIVE_BASE_URL.'/?pass-builder=templates&action=publish&id='.$dataArray['couponid'];
								if($dataArray['distribution'] == '1'){
									$paramVars = $baseUrl.'&status=1'."'";  
									echo '<input type="checkbox" value="1" onchange="window.location.assign('.$paramVars.')" name="disstatus[]" id="disstatus" checked>';
								}else{
									$paramVars = $baseUrl.'&status=0'."'";
									echo '<input type="checkbox" value="1" onchange="window.location.assign('.$paramVars.')" name="disstatus[]" id="disstatus">';
								}

							?>
							
						</td>
						<td>
						</td>
						<td>
							<a href="<?php echo($LIVE_BASE_URL);?>/?pass-builder=templates&q=edit&id=<?php echo $dataArray['couponid']; ?>" class="btn btn-info btn-sm">Edit</a>
						</td>
						<td>
							<a href="<?php echo($LIVE_BASE_URL); ?>/?pass-builder=templates&action=replicate&id=<?php echo $dataArray['couponid']; ?>" class="btn btn-info btn-sm">Replicate</a>
						</td>
						<td>
							<input type="checkbox" value="<?php echo $dataArray['couponid']; ?>" name="del[]">
						</td>
					</tr>
					<?php } ?>
				</tbody>	
			</table>
			<div class="row">
				<div class="col-md-10">
				</div>
				<div class="col-md-2" style="text-align:right;">
					<input type="submit" value="Delete" class="roundBtn">
				</div>	
			</div><!--@row-->

			<?php
				echo Helper::drawPaging($currentPointer, $cursorNo , $totalRecords ,  $pageSize);
			?>

			</form>	
			<?php }else{ ?>
				<br/>
				<h4>No pass template found.</h4>
			<?php } ?>



		<?php
			// other users grid		
			}else{
		?>
			<?php
				if(count($userPassList) > 0){
			?>
			<div class="row">
				<div class="col-md-10">
				</div>
				<div class="col-md-2" style="text-align:right;">
					<input type="submit" value="Delete" class="roundBtn">
				</div>	
			</div><!--@row-->
			<form action="" method="POST">
			<input type="hidden" name="formAction" value="removepass" > 	
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo(Helper::_t('template','msg')); ?></th>
						<th>Size</th>
						<th>Preview</th>
						<th>Created</th>
						<th>Barcode</th>
						<th>Pass Data</th>
						<th>Publish</th>
						<th>Url Keys</th>
						<th>Edit</th>
						<th>Replicate</th>
						<th>X</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($userPassList[$currentPointer] as $id=>$dataArray){
					?>
					<tr>
						<td><b><?php echo $dataArray['template']; ?></b></td>
						<td><?php echo $dataArray['size']; ?></td>
						<td></td>
						<td><?php echo $dataArray['created']; ?></td>
						<td><?php echo $dataArray['barcode']; ?></td>
						<td></td>
						<td>
							<?php
							    $baseUrl = "'".$LIVE_BASE_URL.'/?pass-builder=templates&action=publish&id='.$dataArray['couponid'];
								if($dataArray['distribution'] == '1'){
									$paramVars = $baseUrl.'&status=1'."'";  
									echo '<input type="checkbox" value="1" onchange="window.location.assign('.$paramVars.')" name="disstatus[]" id="disstatus" checked>';
								}else{
									$paramVars = $baseUrl.'&status=0'."'";
									echo '<input type="checkbox" value="1" onchange="window.location.assign('.$paramVars.')" name="disstatus[]" id="disstatus">';
								}

							?>
							
						</td>
						<td>
						</td>
						<td>
							<a href="<?php echo($LIVE_BASE_URL); ?>/?pass-builder=templates&q=edit&id=<?php echo $dataArray['couponid']; ?>" class="btn btn-info btn-sm">Edit</a>
						</td>
						<td>
							<a href="<?php echo($LIVE_BASE_URL); ?>/?pass-builder=templates&action=replicate&id=<?php echo $dataArray['couponid']; ?>" class="btn btn-info btn-sm">Replicate</a>
						</td>
						<td>
							<input type="checkbox" value="<?php echo $dataArray['couponid']; ?>" name="del[]">
						</td>
					</tr>
					<?php } ?>
				</tbody>	
			</table>
			<div class="row">
				<div class="col-md-10">
				</div>
				<div class="col-md-2" style="text-align:right;">
					<input type="submit" value="Delete" class="roundBtn">
				</div>	
			</div><!--@row-->
			<?php
				echo Helper::drawPaging($currentPointer, $cursorNo , $totalRecords ,  $pageSize);
			?>
			</form>	
			<?php }else{ ?>
				
				<br/>
				<h4>No pass template found.</h4>
			<?php } ?>


		<?php		
			}
		?>





	</div><!--@gridContainer-->	


</div><!--@passContentContainer-->  




	

<br/>
<br/>


<script type="text/javascript">
	jQuery(function($){
		$("#userFilterPasses").change(function() {
			
			var userId = $(this).val();
			console.log('Respone:'+userId);

			var baseUrl = '<?php echo($LIVE_BASE_URL.'/?pass-builder=templates');?>';

			var pathUrl = (userId == '') ? baseUrl : baseUrl+'&uid='+userId ;
			window.location.href = pathUrl;
		});	
	});//@	
</script>





