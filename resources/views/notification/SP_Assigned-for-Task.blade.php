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
		<td style="background-color: #FEF8F4;" bgcolor="#FEF8F4"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; line-height: 30px; color: #000000; padding:8px 15px;">Congrats, you’ve been assigned a new Task on Select Task!</td>	
				<td width="50" style="text-align: center;"><img src="{{ url('/')}}/public/notifications/images/thumb-up.png" width="37" height="36" alt=""></td>			
			</tr>
						
		</table></td>
	  </tr>
	<tr>
		<td bgcolor="#ffffff" style="background: #ffffff; padding:20px 15px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">			
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #383838; line-height: 24px; padding-bottom:25px">Congratulations, a customer assigned you a Task!</td>
			</tr>
			<tr>
				<td class="mobilelR-pad" style="padding:0 0 5px; border-bottom:1px #E6E6E6 solid;"><table width="380" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
					<tr>
						<td><table width="150" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Name</td>					
							</tr>
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ $data['name'] }}</td>				
							</tr>									
						</table><table width="180" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Email</td>					
							</tr>
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ $data['email'] }}</td>				
							</tr>									
						</table></td>					
					</tr>									
				</table><table width="170" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="right" class="contenttable">
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Contact</td>					
					</tr>
					<tr>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ $data['phone'] }}</td>				
					</tr>									
				</table></td>
			</tr>
			<tr>
				<td class="mobilelR-pad" style="padding:15px 0 5px; border-bottom:1px #E6E6E6 solid;"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="left" class="contenttable">
					<tr>
						<td><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="contenttable">
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color:#838383;">Address</td>					
							</tr>
							<tr>
								<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color:#000000; padding:10px 0;">{{ $data['address']}}</td>				
							</tr>									
						</table></td>					
					</tr>									
				</table></td>
			</tr>
			
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #383838; line-height: 24px; padding-bottom:25px; padding-top: 20px;">To learn more about the project, visit your profile, and arrange details with your customer to get started!</td>
			</tr>
			<tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #383838; line-height: 24px; padding-bottom:25px">Once you’ve finished the project, get paid and start finding more Tasks.</td>
			</tr>
			<tr>
				<td><table width="170" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
					<tbody>
					  <tr>
						<td height="40" valign="middle" bgcolor="#00A651" style="background:#00A651; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-align:center; font-weight:bold;">
						<a class="btn-color" href="{{ route('provider-Status-open',['id'=>$data['task_id']])}}" style="color:#ffffff; text-decoration:none; display:block; width:100%; line-height:40px;">View Task Details</a></td>                  
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
						<td style="padding:0 8px;"><img src="images/dot.png" height="3" width="3" alt=""></td>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Notification Settings</span></a></td>	
						<td style="padding:0 8px;"><img src="images/dot.png" height="3" width="3" alt=""></td>
						<td style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;"><a href="#" style="color: #F7941D; text-decoration: none;;"><span style="color:#f7941d; text-decoration:none;">Contact Us</span></a></td>	
					
						<td style="padding:0 8px;"><img src="images/dot.png" height="3" width="3" alt=""></td>
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