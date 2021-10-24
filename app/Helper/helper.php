<?php 

 
if(!function_exists('get_user_meta')) {
	function get_user_meta($id,$meta_key){
		$record=DB::table('users_meta')->where('user_id',$id)->where('meta_key',$meta_key)->first();
	 if(!empty($record)){
	  return $record->meta_value;
	 }else{
		 return '';
	 }
	}
}
if(!function_exists('check_user_meta')) {
	function check_user_meta($id,$meta_key){
		$record=DB::table('users_meta')->where('user_id',$id)->where('meta_key',$meta_key)->first();
	 return $record;
	}
}

if(!function_exists('update_user_meta')){
	function update_user_meta($id,$meta_key,$meta_value){
		$data=DB::table('users_meta')->where('user_id', $id)->where('meta_key',$meta_key)->update(array('meta_value'=>$meta_value));
		if($data){
			return true;
		}else{
			return false;
		}
		
	}
}




if(!function_exists('add_user_meta')){
	function add_user_meta($id,$meta_key,$meta_value){
		$data=DB::table('users_meta')->insert(array('meta_value'=>$meta_value,'user_id'=>$id,'meta_key'=>$meta_key));
		if($data){
			return true;
		}else{
			return false;
		}
		
	}
}
if(!function_exists('user_profile_image_url')){
	function user_profile_image_url($id){
		$image_name=get_user_meta($id,'profile_image');
		
		if(!empty($image_name)){
		  return URL::to('/').'/public/uploads/user/profile/'.$image_name;
		}else{
			return URL::to('/').'/public/user/assets/images/profile-pic.png';
		}
		
	}
} 

 if(!function_exists('get_address')){
	function get_address(){
		$id=Auth::user()->id;
		$data2=DB::table('address')->where('user_id',$id)->get();
		return $data2;
	}
}

if(!function_exists('get_address_by_id')){
	function get_address_by_id($id){
		$data=DB::table('address')->where('id',$id)->first();
		return $data;
	}
}


if(!function_exists('get_services_category')){
	function get_services_category(){
		
		$data=DB::table('services_category')->get();
		return $data;
	}
}
if(!function_exists('get_services_category_by_id')){
	function get_services_category_by_id($id){
		$data=DB::table('services_category')->where('id',$id)->first();
		if(!empty($data)){
			return $data->name;
		}else{
			return '';
		}
		
	}
} 

if(!function_exists('get_preferred_time')){
	function get_preferred_time($id){
		$id=$id;
		switch ($id){
			case 1:
			return "Within the next 24 hours";
			
			case 2: 
			return "Within the next few days";
			
			case 3:
			return "My timing is flexible";
			
			default :
			return "Preferred time";
			
		}
		
	}
}

if(!function_exists('get_location')){
   function get_location(){
	   $data=DB::table("location")->get();
	   return $data;
   }
  }
  
  if(!function_exists('get_location_by_id')){
	function get_location_by_id($id){
		$data=DB::table('location')->where('id',$id)->first();
		if(!empty($data)){
			return $data->name;
		}else{
			return '';
		}
		
	}
}
 if(!function_exists('get_profile_image_src')){
	function get_profile_image_src($id){
		$image_src=get_user_meta($id,'profile_image');
		if(!empty($image_src)){
			return url('/').'/public/uploads/service_provider/profile/'.$image_src;
		}else{
			return url('/public/user/assets/images/profile-pic.png');
		}
		
	} 
 }
 
  if(!function_exists('get_cover_image_src')){
	function get_cover_image_src($id){
		$image_src=get_user_meta($id,'cover_image');
		if(!empty($image_src)){
			return url('/').'/public/uploads/service_provider/cover/'.$image_src;
		}else{
			return url('/public/user/assets/images/about-banner.jpg');
		}
		
	} 
 }
 
 if(!function_exists('get_timestamp_option')){
	 function get_timestamp_option(){
		 $data=array('12:00 am','1:00 am','2:00 am','3:00 am','4:00 am','5:00 am','6:00 am','7:00 am','8:00 am','9:00 am','10:00 am','11:00 am','12:00 pm',
		 '1:00 pm','2:00 pm','3:00 pm','4:00 pm','5:00 pm','6:00 pm','7:00 pm','8:00 pm','9:00 pm','10:00 pm','11:00 pm');
		 return $data;
	 }
	 
	 
 }
 
if(!function_exists('get_business_info')){
	function get_business_info($user_id,$column_name){
		$data=DB::table('business_info')->where('user_id',$user_id)->first();
		if(isset($data->$column_name)){
			return $data->$column_name;
		}else{
			return '';
		}
		
		
	}
} 

if(!function_exists('get_post_task_list')){
	function get_post_task_list(){
		$data=DB::table('task')->orderBy('id','DESC')->get();
		return $data;
	}
}
 
 if(!function_exists('get_task_meta')) {
	function get_task_meta($id,$meta_key){
		$record=DB::table('task_meta')->where('task_id',$id)->where('meta_key',$meta_key)->first();
	 if(!empty($record)){
	  return $record->meta_value;
	 }else{
		 return '';
	 }
	}
}

if(!function_exists('update_task_meta')){
	function update_task_meta($id,$meta_key,$meta_value){
		$data=DB::table('task_meta')->where('task_id', $id)->where('meta_key',$meta_key)->update(array('meta_value'=>$meta_value));
		if($data){
			return true;
		}else{
			return false;
		}
		
	}
}


if(!function_exists('add_task_meta')){
	function add_task_meta($id,$meta_key,$meta_value){
		$data=DB::table('task_meta')->insert(array('meta_value'=>$meta_value,'task_id'=>$id,'meta_key'=>$meta_key));
		if($data){
			return true;
		}else{
			return false;
		}
		
	}
}
	if(!function_exists('get_job_by_id')){
		function get_job_by_id($id){
			$data=DB::table('task')->where('id',$id)->first();
			return $data;
		}
	}
	
	if(!function_exists('get_job_by_id_with_category')){
		function get_job_by_id_with_category($id,$cat){
			$data=DB::table('task')->where('id',$id)->where('category',$cat)->first();
			return $data;
		}
	}
	
	if(!function_exists('get_userdata')){
		function get_userdata($id){
			$data=DB::table('users')->where('id',$id)->first();
			return $data;
		}
	}
	
	if(!function_exists('get_total_job_by_userid')){
		function get_total_job_by_userid($id){
			$data=DB::table("task")->where('user_id',$id)->count();
			return $data;
		}
	}
	
	if(!function_exists('get_total_open_jobs')){
		function get_total_open_jobs($id){
			$data=DB::table("task")->where('user_id',$id)->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(!isset($meta_list) || empty($meta_list)){
					++$total;
				}
			}
			return $total;
		}
	}
	
	if(!function_exists('get_total_awaiting_jobs')){
		function get_total_awaiting_jobs($id){
			$data=DB::table("task")->where('user_id',$id)->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(isset($meta_list1->apply_user) && !isset($meta_list1->hire) && !isset($meta_list1->complete)){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}
	
	if(!function_exists('get_total_progress_jobs')){
		function get_total_progress_jobs($id){
			$data=DB::table("task")->where('user_id',$id)->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(isset($meta_list1->hire)){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}
	
	if(!function_exists('get_total_complete_jobs')){
		function get_total_complete_jobs($id){
			$data=DB::table("task")->where('user_id',$id)->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(isset($meta_list1->complete)){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}
	
	if(!function_exists('get_total_review_by_user')){
		function get_total_review_by_user($user_id){
			$data=DB::table("reviews")->where('user_id',$user_id)->count();
			return $data;
		}
	}
	if(!function_exists('get_average_review_by_user')){
		function get_average_review_by_user($user_id){
			$data=DB::table('reviews')->where('user_id',$user_id)->get();
			
			if(!empty($data)){
				$number= 0;
            $totalStars= 0;
				foreach($data as $data){
					
					  ++$number;
					   $totalStars += $data->rating;
					
				}
				
				if(!empty($number) && !empty($totalStars)){
				$average = $totalStars/$number;
				}else{
					return '0';
				}
				return $average;
			}else{
				return '0';
			}
			
			
		}
	}
	
	
	if(!function_exists('get_userid_by_taskid')){
		function get_userid_by_taskid($task_id){
			$data=DB::table("task")->where('id',$task_id)->first();
			if(!empty($data)){
				return $data->user_id;
			}else{
				return false;
			}
		}
		
		
	}
	
	if(!function_exists('get_total_applicant_for_task')){
		function get_total_applicant_for_task($id){
			$data=DB::table('task_meta')->where('task_id',$id)->where('meta_key','applicant_user')->first();
			$total=0;
			if(!empty($data)){
			$data1=json_decode($data->meta_value);
			
				if(isset($data1->apply_user)){
				 $total=count($data1->apply_user);
				}
				if(isset($data1->hire)){
					if(!empty($data1->hire)){
					$total=$total+1;
					}
				}
				
				if(isset($data1->complete)){
					if(!empty($data1->complete)){
					$total=$total+1;
					}
				}
			}
			return $total;
		}
		
		
	}
	
	if(!function_exists('get_total_hire_sp')){
		function get_total_hire_sp($user_id){
			$data=get_user_meta($user_id,'task_list');
			$total=0;
			if(!empty($data)){
				
				$data1=json_decode($data);
				if(isset($data1->hire)){
					$total=$total + count($data1->hire);
				}
				if(isset($data1->complete)){
					$total=$total + count($data1->complete);
				}
			}
			return $total;
		}
	}
	
	if(!function_exists('get_latitude_langtute')){
	function get_latitude_langtute($address){
				
			$url = "https://maps.google.com/maps/api/geocode/json?address=".urlencode($address)."&key=AIzaSyBH6ME_dpQFfJjIVXeilhngCv22rpa5B9Q";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
			$responseJson = curl_exec($ch);
			curl_close($ch);

			$response = json_decode($responseJson);
			$arra=array();
			if ($response->status == 'OK') {
				$latitude = $response->results[0]->geometry->location->lat;
				$longitude = $response->results[0]->geometry->location->lng;

				$arra['lat']= $latitude;
			  
				$arra['long']= $longitude;
			}  
			return $arra;
			}
	}	
	
	
	if(!function_exists('get_assign_to_another')){
		function get_assign_to_another($task_id,$user_id){
			$data=get_task_meta($task_id,'applicant_user');
			$status=0;
			if(isset($data)){
				$data1=json_decode($data);
				if(isset($data1->apply_user)){
					if(in_array($user_id,$data1->apply_user)){
						$status=0;
					}else{
						$status=1;
					}
				}
				if(isset($data1->hire)) {
					if($data1->hire==$user_id){
						$status=0;
					}else{
						$status=1;
					}
				}
				if( isset($data1->complete)){
					if($data1->complete==$user_id){
						$status=0;
					}else{
						$status=1;
					}
				}
				
			}
			return $status;
			
		}
	}
	
	
 if(!function_exists('get_total_user_by_role')){
	 function get_total_user_by_role($role){
      $data=DB::table('users')->where('role',$role)->count();		
		return $data;
	 }
 }

 if(!function_exists('get_total_job')){
	 function get_total_job(){
		 $data=DB::table('task')->count();
		 return $data;
	 }
	 
 } 

if(!function_exists('get_total_open_jobs_for_admin')){
		function get_total_open_jobs_for_admin(){
			$data=DB::table("task")->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(!isset($meta_list)){
					++$total;
				}
			}
			return $total;
		}
	}
	
	if(!function_exists('get_total_awaiting_jobs_for_admin')){
		function get_total_awaiting_jobs_for_admin(){
			$data=DB::table("task")->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(isset($meta_list1->apply_user) && !isset($meta_list1->hire) && !isset($meta_list1->complete)){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}
	
	if(!function_exists('get_total_progress_jobs_for_admin')){
		function get_total_progress_jobs_for_admin(){
			$data=DB::table("task")->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(!empty($meta_list1->hire) && !isset($meta_list1->complete) ){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}
	
	if(!function_exists('get_total_complete_jobs_for_admin')){
		function get_total_complete_jobs_for_admin(){
			$data=DB::table("task")->get();
			$total=0;
			foreach($data as $data){
				$meta_list=get_task_meta($data->id,'applicant_user');
				if(isset($meta_list)){
					$meta_list1=json_decode($meta_list);
					if(isset($meta_list1->complete)){
					++$total;	
					}
				}
			}
			
			return $total;
		}
	}

if(!function_exists('get_total_job_by_category')){
	function get_total_job_by_category($cat_id){
		return DB::table("task")->where('category',$cat_id)->count();
	}
	
}

if(!function_exists('sp_total_job')){
	function sp_total_job($user_id){
		$user_data=get_user_meta($user_id,'task_list');
		$user_data_json=json_decode($user_data);
		$total=0;
		if(isset($user_data_json->apply)){
			$total=$total+count($user_data_json->apply);
		}
		if(isset($user_data_json->hire)){
			$total=$total+count($user_data_json->hire);
		}
		if(isset($user_data_json->complete)){
			$total=$total+count($user_data_json->complete);
		}
		return $total;
	}
}

if(!function_exists('sp_total_complete_job')){
	function sp_total_complete_job($user_id){
		$user_data=get_user_meta($user_id,'task_list');
		$user_data_json=json_decode($user_data);
		$total=0;
		if(isset($user_data_json->complete)){
			$total=$total+count($user_data_json->complete);
		}
		return $total;
	}
}

if(!function_exists('sp_total_job_by_status')){
	function sp_total_job_by_status($user_id,$status){
		$user_data=get_user_meta($user_id,'task_list');
		$user_data_json=json_decode($user_data);
		$total=0;
		
		if(isset($user_data_json->$status)){
			$total=$total+count($user_data_json->$status);
		}
		return $total;
		
	}

	
}

if(!function_exists('get_job_images_by_id')){
	function get_job_images_by_id($task_id){
		$data=DB::table('task')->where('id',$task_id)->first();
		$image_arr=array();
		if(!empty($data)){
			$image=json_decode($data->images);
			if(!empty($image)){
				foreach($image as $image){
					$image_arr[]=url("/").'/public/uploads/user/post-task/'.$image;
				}	
			}else{
				$image_arr[]=url('/').'/public/user/assets/images/No_Image_Available.jpg';
			}
			
		}
		return json_encode($image_arr);
	}
}


if(!function_exists('get_admin_profile_image')){
	function get_admin_profile_image($user_id){
		$admin_image=get_user_meta($user_id,'profile_image');
		if(!empty($admin_image)){
			return url('/').'/public/uploads/image/'.$admin_image;
		}else{
			return url('/').'/public/assets/images/avatar_2x.png';
		}
		
	}
}

if(!function_exists('get_services_provider_by_category')){
	function get_services_provider_by_category($cat_id){
		$data=DB::table("users")->where("role",'service_provider')->get();
		$user_services2=array();
		$total=0;
		foreach($data as $data){
             $user_data=get_user_meta($data->id,'services');
			 if(!empty($user_data)){
              $user_services2=explode(',',$user_data);
			  if(in_array($cat_id,$user_services2)){
				  ++$total;
			  }
			 }
         }
		 return $total;
	   }
}


if(!function_exists('get_services_provider_by_category_live')){
	function get_services_provider_by_category_live($cat_id){
		$data=DB::table("users")->where("role",'service_provider')->where('user_type',1)->get();
		$user_services2=array();
		$total=0;
		foreach($data as $data){
             $user_data=get_user_meta($data->id,'services');
			
			  if(!empty($user_data)){
              $user_services21=json_decode($user_data);
			  if($user_services21 >=1 ){
				 $user_services2= $user_services21;
			  }
			  if(in_array($cat_id,$user_services2)){
				  ++$total;
			  }
			 } 
         }
		 return $total;
	   }
}




if(!function_exists('get_services_provider_by_location')){
	function get_services_provider_by_location($loc_id){
		$data=DB::table("users")->where("role",'service_provider')->get();
		$user_services2=array();
		$total=0;
		foreach($data as $data){
             $user_data=get_user_meta($data->id,'location');
			 if(!empty($user_data)){
              $user_services2=explode(',',$user_data);
			  if(in_array($loc_id,$user_services2)){
				  ++$total;
			  }
			 }
         }
		 return $total;
	   }
}

if(!function_exists('get_services_provider_by_location_live')){
	function get_services_provider_by_location_live($loc_id){
		$data=DB::table("users")->where("role",'service_provider')->where('user_type',1)->get();
		$user_services2=array();
		$total=0;
		foreach($data as $data){
             $user_data=get_user_meta($data->id,'location');
			 if(!empty($user_data)){
              $user_services21=json_decode($user_data);
			  if(count($user_services21) >= 1){
				  $user_services2=$user_services21;
			  }
			  if(in_array($loc_id,$user_services2)){
				  ++$total;
			  }
			 }
         }
		 return $total;
	   }
}

if(!function_exists('get_location_service_other')){
	function get_location_service_other(){
				$data=DB::table("users")->where("role",'service_provider')->where('user_type',1)->get();
		        $user_services2=array();
		        $total=0;
				foreach($data as $data){
             $user_data=get_user_meta($data->id,'other_info');
			 if(!empty($user_data)){
              
			  ++$total;
			  
			    }
              }
			return $total;	
				
	}
	
}


if(!function_exists('get_location_service_other_list')){
	function get_location_service_other_list(){
				$data=DB::table("users")->where("role",'service_provider')->where('user_type',1)->get();
		        $user_services2=array();
		        $total=0;
				foreach($data as $data){
             $user_data=get_user_meta($data->id,'other_info');
			 if(!empty($user_data)){
              $user_services2[]=$data->id;
			  ++$total;
			  
			    }
              }
			return $user_services2;	
				
	}
	
}




if(!function_exists('get_location_by_category_live')){
 function get_location_by_category_live($cat_id){
	 $data=DB::table("location")->get();
		
		 return $data;
 }

	
}

if(!function_exists('get_services_other_live')){
	function get_services_other_live($id){
		$data=DB::table("users")->where("role",'service_provider')->where('user_type',1)->get();
		        $user_services2=array();
		        $total=0;
				foreach($data as $data){
             $user_data=get_user_meta($data->id,'other_info');
			 if(!empty($user_data)){
               $user_data3=get_user_meta($data->id,'location');
			   if(!empty($user_data3)){
				   $user_data3=json_decode($user_data3);
				   if(count($user_data3)>=1){
					   $user_services2=$user_data3;
				   }
				   if(in_array($id,$user_services2)){
					   ++$total;
				   }
			   }
			  
			  
			    }
              }
			return $total;
	}
}





if(!function_exists('get_location_by_category')){
 function get_location_by_category($cat_id){
	 $data=DB::table("users")->where("role",'service_provider')->get();
		$user_services2=array();
		$total=array();
		foreach($data as $data){
             $user_data=get_user_meta($data->id,'services');
			 if(!empty($user_data)){
              $user_services2=explode(',',$user_data);
			  if(in_array($cat_id,$user_services2)){
				  $data_loc=get_user_meta($data->id,'location');
				  $total[]=explode(',',$user_data);
				  
			  }
			 }
         }
		 return $total;
 }

	
}

if(!function_exists('get_invoice_info')){
	function get_invoice_info($info){
		$user_id=1;
		$data=get_user_meta($user_id,$info);
		if(!empty($data)){
			return $data;
		}else{
			return '';
		}
	}
		
}

if(!function_exists('get_user_id_for_invoice')){
	function get_user_id_for_invoice($id){
		$data=get_task_meta($id,'applicant_user');
		if(!empty($data)){
			$data=json_decode($data);
			if(!empty($data->hire)){
				return $data->hire;
			}elseif(!empty($data->complete)){
				return $data->complete;
			}
			
		}else{
			return false;
		}
		
	}

	
}
if(!function_exists('get_user_noti_text_status')){
	function get_user_noti_text_status($user_id){
		$data=get_user_meta($user_id,'text_notification');
		if($data==1){
			return 'yes';
		}else{
			return 'no';
		}
	}
}

if(!function_exists('update_phone_no')){
	function update_phone_no($phone){
		return str_replace("-","",str_replace(")","",str_replace("(","",str_replace(" ","",$phone))));
	}
}


if(!function_exists('get_payment_card_history')){
	function get_payment_card_history($user_id){
		$data=DB::table("payment_card")->where('user_id',$user_id)->get();
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		$db_data=array();
		if(count($data)>0){
			foreach($data as $data){
			$payment_data=$stripe->paymentMethods->retrieve($data->payment_id,[]);
			$card_no=$payment_data->card->last4;
			$db_data[]=array('card'=>$card_no,'customer_id'=>$data->customer_id,'default_card'=>$data->default_card);
			}
		}
		return $db_data;
	}
}


if(!function_exists('get_transaction_info')){
	function get_transaction_info($task_id,$user_id){
		$data=DB::table('transaction')->where('user_id',$user_id)->where('task_id',$task_id)->first();
		return $data->invoice_no;
	}
}

if(!function_exists('save_option')){
	function save_option($option_name,$option_val){
		$data=DB::table("setting")->where('option_name',$option_name)->first();
 	    
    	if(!empty($data)){
			$u_data=array('option_value'=>$option_val);
			DB::table('setting')->where('option_name',$option_name)->update($u_data);
		}else{
			$u_data=array('option_value'=>$option_val,'option_name'=>$option_name);
			DB::table('setting')->where('option_name',$option_name)->insert($u_data);
		}
	}
}

if(!function_exists('get_option')){
	function get_option($key){
		$data=DB::table("setting")->where('option_name',$key)->first();
		if(!empty($data)){
			return $data->option_value;
		}else{
			return '';
		}
	}
	
	
}




?>