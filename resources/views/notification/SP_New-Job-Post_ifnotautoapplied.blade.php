<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="format-detection" content="telephone=no"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

<title>Select Task</title>
<style type="text/css">
	body{padding:0; margin:0; background-color:#F7F7F7; font-family:arial; font-size:13px;}
	table{ border-collapse:collapse !important; mso-table-lspace:0pt !important; mso-table-rspace:0pt !important; }  
	td {font-family: arial, sans-serif; color: #010101;}
	img{border:0!important;}	
		
	@media all and (max-width: 767px) 
	{	
		body,table,td,p,a,li,blockquote { -webkit-text-size-adjust:none !important;}
		a{white-space:nowrap;}
		table [class="contenttable"], .contenttable { width:100% !important;}
		.responsive-image img { height: auto !important; max-width: 100% !important; }
		img{max-width: 100% !important;}
		
		.mobileCenter{text-align: center!important;}
		.mobilelR-pad{padding-right:20px!important; padding-left:20px!important;}
		.viewJobs{padding: 25px 10px 15px!important;}

		.mobilelinks {
			display: table!important;
			max-height: auto!important;
			float: none!important;
			font-size: 12px!important;
			line-height: normal!important;
			width: 100%!important;
		}
		.mob-hidden { display: none!important;}
	}
	
		
</style>
</head>

<body text="#706c72" link="#706c72" vlink="#706c72" alink="#706c72" marginheight="0" marginwidth="0" bgcolor="#F7F7F7" style="background-color:#F7F7F7; color:#000000;"><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" style="background-color:#F7F7F7; color:#000000; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
  <tbody>   
    <tr>
      <td><table border="0" cellpadding="0" cellspacing="0" width="650" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" class="contenttable">
  <tbody>	
    <tr>
		<td class="content" style="text-align: center; padding:30px 0 24px;"><img src="{{ url('/')}}/public/notifications/images/logo.png" alt="" width="232" height="36"></td>
	</tr>
	<tr>
		<td class="responsive-image"><img src="{{ url('/')}}/public/notifications/images/map.jpg" width="650" height="140" alt=""></td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" style="background: #ffffff; padding:25px 20px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
			<tr>
				<td><table border="0" cellpadding="0" cellspacing="0" width="180" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
					
					<tr>
						<td width="70" style="padding-bottom: 10px;"><table width="120" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right">
							<tbody>
							  <tr>
								<td height="40" valign="middle" bgcolor="#00A651" style="background:#00A651; font-family:Arial, Helvetica, sans-serif; font-size:16px; text-align:center; font-weight:bold;"><a class="btn-color" href="{{ route('provider-Status-open',['id'=>$data['task_id']])}}" style="color:#ffffff; text-decoration:none; display:block; width:100%; line-height:40px;">Apply Now</a></td>                  
							  </tr> 
							  
							</tbody>
						  </table></td>			
					</tr>					
				</table><table border="0" cellpadding="0" cellspacing="0" width="330" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
					<tr>
					@php 
					
					
					 $task_data=get_job_by_id($data['task_id']);
					 $cat_id=$task_data->category;
					 $address_id=$task_data->address;
					 $user_id=$task_data->user_id;
					 $user_data=get_userdata($user_id);
					 
					@endphp
					
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; line-height: 26px; font-weight: bold; padding-bottom: 25px;">A new Job for {{ get_services_category_by_id($cat_id) }} has been posted in {{ get_address_by_id($address_id)->address}} by {{  $user_data->name }}.</td>			
					</tr>					
				</table></td>				
			</tr>
			<tr>
				<td><table border="0" cellpadding="0" cellspacing="0" width="210" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
					<tr>
						<td style="padding-top: 20px; text-align: center;"><img src="{{ url('/')}}/public/notifications/images/vector-2.png" width="227" height="140" alt=""></td>				
					</tr>									
				</table><table border="0" cellpadding="0" cellspacing="0" width="280" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
					<tr>
						<td style="padding-bottom: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px #F7931D solid;" class="contenttable">
							<tr>
								<td align="center" style="padding: 10px 15px 8px 15px; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px; color: #929292; text-align: center;"><h2 style="margin: 0; padding: 0; font-size: 16px; font-weight: normal;">Price</h2>
								<p style="margin: 0; padding: 0; line-height: 24px; color: #F7941D;"><strong>$10.00</strong></p></td>
							</tr>									
						</table></td>			
					</tr>
					
					<tr>
						<td><table width="280" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="contenttable">
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px; color:#000000; background-color: #feefe8; padding: 10px;">Respond quickly and tell the customer why you’re the best choice</td>
							</tr>									
						</table></td>
					</tr>
				</table></td>				
			</tr>			
		</table></td>
	</tr>
	<tr>
		<td class="viewJobs" style="font-family: Arial, Helvetica, sans-serif; font-size: 24px; line-height: 30px; font-weight: bold; color:#F7941D; padding: 50px 10px 15px; text-align: center;">View all job details for free</td>
	</tr>
	
	
		<tr>
		<td class="mobilelR-pad" style="padding:20px 0; border-bottom:1px #E6E6E6 solid;"><table width="380" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
			<tr>
				<td><table width="150" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Service Category</td>					
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ get_services_category_by_id( $cat_id) }}</td>				
					</tr>									
				</table><table width="180" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Preferred Time</td>					
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ get_preferred_time($task_data->preferred_time)}}</td>				
					</tr>									
				</table></td>					
			</tr>									
		</table><table width="190" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Preferred Contact</td>					
			</tr>
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">
				@php
									$p_con='';
									
									
									if(isset($task_data->quotes)){
										if(!empty($task_data->quotes)){
										$qut=json_decode($task_data->quotes);
									    if(!empty($qut) && $qut !="null"){
											echo implode(", ",$qut);
										}
										}
									}
									
										
									
									@endphp
				
				</td>				
			</tr>									
		</table></td>
	</tr>
	<tr>
		<td class="mobilelR-pad" style="padding:20px 0; border-bottom:1px #E6E6E6 solid;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
			<tr>
				<td><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="contenttable">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Job Description</td>					
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ $task_data->description}}</td>				
					</tr>									
				</table></td>					
			</tr>									
		</table></td>
	</tr>
	
	
	
 
	
	
	
	<tr>
		<td class="mobilelR-pad" style="padding:20px 0; border-bottom:1px #E6E6E6 solid;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left">
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Images</td>					
			</tr>
			<tr>
				<td style="padding:10px 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left">	
					<tr>
					 <?php 
					
                         $image=json_decode($task_data->images);
                       
                          if(!empty($image)){
                            foreach($image as $image){
								?>
								<td class="responsive-image" style="padding-right: 20px;"><img src="{{ url('/')}}/public/uploads/user/post-task/<?php echo $image; ?>" height="78" width="84" alt=""></td>
								<?php 
							 
							}
						  }else{
							  ?>
							  <td class="responsive-image" style="padding-right: 20px;"><img src="{{ url('/')}}/public/user/assets/images/No_Image_Available.jpg" height="78" width="84" alt=""></td>
							  <?php 
						  }							  
					?>
					
						</tr>									
				</table></td>				
			</tr>									
		</table></td>
	</tr>
	<tr>
		<td class="mobilelR-pad" style="padding:25px 0;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left">
			<tr>
				<td><table width="170" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
					<tbody>
					  <tr>
						<td height="40" valign="middle" bgcolor="#00A651" style="background:#00A651; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-align:center; font-weight:bold;"><a class="btn-color" href="{{ route('provider-Status-open',['id'=>$data['task_id']])}}" style="color:#ffffff; text-decoration:none; display:block; width:100%; line-height:40px;">I’m interested</a></td>                  
					  </tr> 
					  
					</tbody>
				  </table></td>					
			</tr>									
		</table></td>
	</tr>
	<tr>
		<td bgcolor="#F7941D" class="mobilelR-pad" style="padding:15px 0; background-color: #F7941D;"><table bgcolor="#F7941D" width="320" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; background-color: #F7941D;" align="center" class="contenttable">
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#fff; padding:22px 15px 12px; text-align: center;">View other opportunities in your market</td>					
			</tr>
			<tr>
				<td style="padding-bottom:17px; text-align: center;"><table width="130" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
					<tbody>
					  <tr>
						<td height="40" valign="middle" bgcolor="#ffffff" style="background:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-align:center; font-weight:bold;"><a class="btn-color" href="{{ route('provider-Status-open',['id'=>$data['task_id']])}}" style="color:#F7941D; text-decoration:none; display:block; width:100%; line-height:40px;">Learn More</a></td>
					  </tr> 
					  
					</tbody>
				  </table></td>					
			</tr>									
		</table></td>
	</tr>
	
  </tbody>
</table></td>
	</tr>
	<tr>
		<td><img src="{{ url('/')}}/public/notifications/images/spacer.png" width="20" height="26" alt=""></td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" class="footer" style="padding: 20px; background-color: #ffffff;"><table width="650" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" class="contenttable">
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color:#000000; padding-bottom:14px; text-align: center;">Follow Us</td>					
			</tr>
			<tr>
				<td style="padding-bottom:17px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
					<tr>
							
						<td style="padding:0 5px;"><a href="https://twitter.com/SelectTask"><img src="{{ url('/')}}/public/notifications/images/twitter.jpg" height="40" width="40" alt=""></a></td>					
					</tr>																
				</table></td>					
			</tr>
			<tr>
				<td style="padding-top:20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" class="mob-hidden">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Account</span></a></td>	
						<td style="padding:0 8px;"><img src="{{ url('/')}}/public/notifications/images/dot.png" height="3" width="3" alt=""></td>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Notification Settings</span></a></td>	
						<td style="padding:0 8px;"><img src="{{ url('/')}}/public/notifications/images/dot.png" height="3" width="3" alt=""></td>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Contact Us</span></a></td>	
					
						<td style="padding:0 8px;"><img src="{{ url('/')}}/public/notifications/images/dot.png" height="3" width="3" alt=""></td>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Unsubscribe</span></a></td>										
					</tr>																
				</table><table border="0" cellpadding="0" cellspacing="0" style="mso-hide:all; display:none; font-size:0; line-height:0; width: 0; max-height: 0; overflow: hidden; float: left; text-align: center;" class="mobilelinks">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; padding:8px;"><a href="#" style="color: #F7941D; text-decoration: none;;">Account</a></td>
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; padding:8px;"><a href="#" style="color: #F7941D; text-decoration: none;;">Notification Settings</a></td>	
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; padding:8px;"><a href="#" style="color: #F7941D; text-decoration: none;;">Contact Us</a></td>	
					</tr>
					
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; padding:8px;"><a href="#" style="color: #F7941D; text-decoration: none;;">Unsubscribe</a></td>	
					</tr>																
				</table></td>					
			</tr>													
		</table></td>
	</tr>
	<tr>
		<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#727272; text-align: center; padding:20px 10px;">Is this opportunity abusive or inappropriate? <a href="#" style="color:#727272; text-decoration:underline;">Report this opportunity.</a></td>
	</tr>	
	</tbody>
</table>
</body>
</html>