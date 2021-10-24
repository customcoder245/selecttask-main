<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Stripe;
use Mail;

class SignupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signup()
    {
		$user_id=Auth::user()->id;
		$company_info=DB::table("business_info")->where('user_id',$user_id)->first();
		$data['company_info']=$company_info;
		if(get_user_meta($user_id,'user_status')=="complete"){
			$url=route('provider-tasks-list');
			return redirect()->to($url);
		}
        return view('user.pages.provider.signup',$data);
    }
	
	public function business_details_save(Request $request){
		//print_r($request->all());
		if($request->action=="business_information"){
		$user_id=$request->user_id;
		$data=array('user_id'=>$request->user_id,'businss_name'=>$request->businss_name,'business_contact'=>$request->business_contact,
		'business_start_date'=>$request->business_start_date,'business_address'=>$request->business_address);
		$db_get=DB::table('business_info')->where('user_id',$user_id)->first();
		if(!empty($db_get)){
		$save_db=DB::table('business_info')->where('user_id',$user_id)->update($data);
		}else{
		$save_db=DB::table('business_info')->where('user_id',$user_id)->insert($data);
		}
		$result=array('code'=>200,'message'=>'Record save successfully');
		if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
		return json_encode($result);
		}else if($request->action=="category_location"){
			$user_id=Auth::user()->id;
			if(empty($request->service)){
				$result=array('code'=>201,'message'=>'Services are required. ','action'=>'service');
			}elseif(empty($request->location)){
				$result=array('code'=>201,'message'=>'Location are required. ','action'=>'location');
			}else{
				$user_id=$request->user_id;
				
				if(!empty(get_user_meta($user_id,'services'))){
				    update_user_meta($user_id,'services',$request->service);
				}else{
					add_user_meta($user_id,'services',$request->service);
				}
				
				if(!empty(get_user_meta($user_id,'location'))){
				    update_user_meta($user_id,'location',$request->location);
				}else{
					add_user_meta($user_id,'location',$request->location);
				}
				$result=array('code'=>200,'message'=>'Record save successfully');
				
			}
			if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
		    return json_encode($result);
		}elseif($request->action=="payment_form"){
			$user_id=$request->user_id;
			
			update_user_meta($user_id,'user_status','complete');
           
			$result=array('code'=>200,'message'=>'Record save successfully','action'=>'portfolio_status','action_url'=>route('provider-my-profile'));
			if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
			
			$u_data=get_userdata($user_id);
			$to_name =$u_data->name;
		$to_email=$u_data->email;
		
		
		$mdata = array("name"=>$to_name, 'email'=>$to_email);
		Mail::send("notification.EmailConfirmationCopyafter-SubmittingInfo",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Congrats on taking the first step to becoming a Select Task pro!");
			$message->from("support@selecttask.com","SelectTask");
			});
			
			
			
			
			return json_encode($result);
		}elseif($request->action=="profile_page"){
			$user_id=$request->user_id;
			if(isset($request->profile_image)){
			$file=$request->file('profile_image');
			$name=$file->getClientOriginalName();
			$file->move(public_path('uploads/service_provider/profile'),$name);
					
			if(!empty(get_user_meta($user_id,'profile_image'))){
				    update_user_meta($user_id,'profile_image',$name);
				}else{
					add_user_meta($user_id,'profile_image',$name);
				}
			}
			
			
			if(isset($request->cover_image)){
				$file2=$request->file('cover_image');
			$name2=$file2->getClientOriginalName();
			$file2->move(public_path('uploads/service_provider/cover'),$name2);
					
					if(!empty(get_user_meta($user_id,'cover_image'))){
				    update_user_meta($user_id,'cover_image',$name2);
				}else{
					add_user_meta($user_id,'cover_image',$name2);
				}
				
			}
			
			if(isset($request->about_me)){
					if(!empty(get_user_meta($user_id,'about_me'))){
				      update_user_meta($user_id,'about_me',$request->about_me);
				     }else{
					  add_user_meta($user_id,'about_me',$request->about_me);
				     }
			}
			$result=array('code'=>200,'message'=>'Record save successfully');
			if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
			return json_encode($result);
			
		}elseif($request->action=="business_license"){
			
			$user_id=$request->user_id;
			$bh=json_encode($request->bh);
			
				if(!empty(get_user_meta($user_id,'business_hour'))){
				    update_user_meta($user_id,'business_hour',$bh);
				}else{
					add_user_meta($user_id,'business_hour',$bh);
				}
			
			
			$result=array('code'=>200);
			if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
			return json_encode($result);
			
		}else if($request->action=="portfolio_status"){
			
			$user_id=Auth::user()->id;
			
			if(!empty(get_user_meta($user_id,'signups_tab'))){
			update_user_meta($user_id,'signups_tab',$request->action);
			}else{
				add_user_meta($user_id,'signups_tab',$request->action);
			}
			$result=array('code'=>200);
			return json_encode($result);
          			
			
		}else{
			$result=array('code'=>200);
			return json_encode($result);
		}
	}
	
	public function add_payment_card(Request $request){
		$card_no=str_replace(" ",'',$request->card_number);
		if($this->validatecard($card_no)){
		$card_type=$this->validatecard($card_no);
		$user_ids=$request->user_id;
		
		Stripe\Stripe::setApiKey('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
        
		$customer = \Stripe\Customer::create([
				'source' => $request->stripeToken,
				'email' => get_userdata($user_ids)->email,
					]);

        add_user_meta($user_ids,'customer_id', $customer->id);

		/* Stripe\Charge::create ([
                "amount" => 100,
                "currency" => "USD",
                'customer' => $customer->id,
                "description" => "Payment" 
        ]); */
		$expp=explode("/",$request->exp);
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		$payment_data=$stripe->paymentMethods->create([
                      'type' => 'card',
					  'card' => [
						'number' => str_replace(" ","",$request->card_number),
						'exp_month' => $expp[0],
						'exp_year' => $expp[1],
						'cvc' => $request->cvc,
					  ],'billing_details'=>['address'=>['city'=>$request->city,'line1'=>$request->address,'line2'=>$request->cvc,'postal_code'=>$request->zip,'state'=>$request->state],
					  'email'=>get_userdata($user_ids)->email,'name'=>get_userdata($user_ids)->name]
            ]);
				 
	    $stripe->paymentMethods->attach($payment_data->id,['customer' => $customer->id]);
		
		
		
        
		
		$array=array('user_id'=>$request->user_id,'address'=>$request->address,'city'=>$request->city,'state'=>$request->state,
		'zip'=>$request->zip,'customer_id'=>$customer->id,'payment_id'=>$payment_data->id,'card_hold_name'=>$request->card_holder_name);
		
		$data=DB::table("payment_card")->insert($array);
		if($data){
			$result=array('code'=>200,'message'=>'Record save successfully','action'=>'add');
		}else{
			$result=array('code'=>201,'message'=>'Something went wrong! Please try again. ');
		}
		}else{
			$result=array('code'=>201,'message'=>'Invalid Card Numbers ');
		}
		return json_encode($result);
	}
	public function stripe_card_info_details($customer_id){
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
			return $stripe->customers->allSources(
			  $customer_id
			  
			);
	}
	
	public function payment_card_list(){
		$user_id=Auth::user()->id;
		$data=DB::table("payment_card")->where('user_id',$user_id)->get();
		$html='';
		$i=1;
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		
		
		if(count($data)>0){
			
			
		
		foreach($data as $data){
			$payment_data=$stripe->paymentMethods->retrieve($data->payment_id,[]);
			
			$address=$payment_data->billing_details->address->line1;
			$city=$payment_data->billing_details->address->city;
			$postal_code=$payment_data->billing_details->address->postal_code;
			$state=$payment_data->billing_details->address->state;
			$card_no=$payment_data->card->last4;
			$card_mon=$payment_data->card->exp_month;
			$card_year=substr($payment_data->card->exp_year,-2);
			$card_type=$payment_data->card->brand;
			$check_st='';
			if($data->default_card==1){
				$check_st='checked';
			}
			
			$html .=' <div class="autoApplyList d-md-flex justify-content-between">
                                <div class="srNoCol sNumber">
                                    <label>S No.</label>
                                    <p>'.$i.'</p>
                                </div>
                                <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card number</label>
                                        <p>XXXX XXXX XXXX '.$card_no.'</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
                                        <label>Expiry Year</label>
                                        <p>'.$card_mon.'/'.$card_year.'</p>
                                    </div>
                                </div>

                                <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card Type</label>
                                        <p>'.$card_type.'</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
<label class="switch">
  <input type="checkbox" value="payment_status" class="payment_default"  data-id="'.$data->id.'" data-ur="'.route("update-default-card").'" '.$check_st.'>
  <span class="slider round"></span>
</label>
                                    </div>
                                </div>
                                <div class="actionCol text-left text-md-center">
                                    <label>Action</label>
                                    <div class="Action"> <a href="#" class="text-primary underlinelink edit_save_card" data-id="'.$data->id.'" data-url="'.route("edit-payment-card").'" data-toggle="modal" data-target="#editpaymentModal"><img src="'. url("/public/user/").'/assets/images/edit-icon.svg" alt=""></a> <a href="#" class="text-primary underlinelink delete_payment_card" data-url="'.url('/').'/provider/delete-payment-card/'.$data->id.'" data-toggle="modal" data-target="#deleteRowModal"><img src="'.url("/public/user/").'/assets/images/dustbin.svg" alt=""></a> </div>
                                </div>

                            </div>';
							++$i;
		}
		$html .='<script>edit_save_card();</script>';
		$result=array('code'=>200,'html'=>$html,'status'=>'data_list' );
		}else{
			$result=array('code'=>200,'html'=>$html, 'status'=>'nodata');
		}
		return $result;
	}
	
	public function update_default_card(Request $request){
	    $id=$request->id;
		$single_data=DB::table('payment_card')->where('id',$id)->first();
		$user_id=$single_data->user_id;
		$data=DB::table('payment_card')->where('user_id',$user_id)->get();
		
		foreach($data as $data){
			$default=0;
			if($data->id==$id){
				$default=1;
			}
			$up_data=array('default_card'=>$default);
			DB::table('payment_card')->where('id',$data->id)->update($up_data);
		}
		
		$result=array('code'=>200, 'status'=>'nodata');
		return $result;
	}
	
	public function validatecard($number) {
    

			$cardtype = array(
				"visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
				"mastercard" => "/^5[1-5][0-9]{14}$/",
				"amex"       => "/^3[47][0-9]{13}$/",
				"discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
			);

			if (preg_match($cardtype['visa'],$number))
			{
			$type= "visa";
				return 'visa';
			
			}
			else if (preg_match($cardtype['mastercard'],$number))
			{
			$type= "mastercard";
				return 'mastercard';
			}
			else if (preg_match($cardtype['amex'],$number))
			{
			$type= "amex";
				return 'amex';
			
			}
			else if (preg_match($cardtype['discover'],$number))
			{
			$type= "discover";
				return 'discover';
			}
			else
			{
				return false;
			} 
    }
	
	public function edit_payment_card(Request $request){
		$id=$request->id;
			$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		$db=DB::table('payment_card')->where('id',$id)->first();
		
		$payment_data=$stripe->paymentMethods->retrieve($db->payment_id,[]);
		
		    $address=$payment_data->billing_details->address->line1;
			$city=$payment_data->billing_details->address->city;
			$postal_code=$payment_data->billing_details->address->postal_code;
			$state=$payment_data->billing_details->address->state;
			$card_no=$payment_data->card->last4;
			$card_mon=$payment_data->card->exp_month;
			$card_year=substr($payment_data->card->exp_year,-2);
			$card_type=$payment_data->card->brand;
			$cvc=$payment_data->billing_details->address->line2;
			$card_hold_name=$db->card_hold_name;
			
			$result_data=array('id'=>$id,'address'=>$address,'city'=>$city,'postal_code'=>$postal_code,'state'=>$state,
			'card_no'=>$card_no,'exp'=>$card_mon.'/'.$card_year,'cvc'=>$cvc,'card_hold_name'=>$card_hold_name);
		
		
		return json_encode($result_data);
		
	}
	public function update_payment_card(Request $request){
		$card_no=str_replace(" ",'',$request->card_number);
		
			$id=$request->id;
		$db=DB::table('payment_card')->where('id',$id)->first();
	
		$user_ids=$request->user_id;
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		
		$expp=explode("/",$request->exp);
		
		$payment_data=$stripe->paymentMethods->update($db->payment_id,[
                     'card'=>['exp_month'=>$expp[0],'exp_year'=>$expp[1]],
					  'billing_details'=>['address'=>['city'=>$request->city,'line1'=>$request->address,
					  'line2'=>$request->cvc,'postal_code'=>$request->zip,'state'=>$request->state],
					  ]
            ]);
			
			
		$array=array('address'=>$request->address,'city'=>$request->city,'state'=>$request->state,
		'zip'=>$request->zip,'card_hold_name'=>$request->card_holder_name);
		
		$data=DB::table("payment_card")->where('id',$id)->update($array);
		
		


		$result=array('code'=>200,'message'=>'Record Update successfully','action'=>'edit');
		
		
		return json_encode($result);
	}
	
	public function delete_payment_card($id){
		$data=DB::table('payment_card')->where('id',$id)->first();
		$payment_id=$data->payment_id;
		$db=DB::table('payment_card')->where('id',$id)->delete();
		
		
		$stripe = new \Stripe\StripeClient('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
		
		$stripe->paymentMethods->detach($payment_id,[]);
		
		$result=array('code'=>200,'message'=>'Record delete successfuly');
		return json_encode($result);
		
	}
	
	public function addlicenseform(Request $request){
		
		if(isset($request->license_image)){
			$file2=$request->file('license_image');
			$name2=$file2->getClientOriginalName();
			$file2->move(public_path('uploads/image'),$name2);
		}
		
		
		$data=array('user_id'=>$request->user_id,'license_title'=>$request->license_title,'license_number'=>$request->license_number,
		'issued_by'=>$request->issued_by,'license_exp_date'=>$request->license_exp_date,'license_description'=>$request->license_description,'license_image'=>$name2);
		
		$db=DB::table('business_license_info')->insert($data);
		$result=array('code'=>200,'message'=>'Record delete successfuly');
		return json_encode($result);
		
	}
	
	
   public function get_business_license_list(){
	   $user_id=Auth::user()->id;
	   $db=DB::table('business_license_info')->where('user_id',$user_id)->get();
	   $html='';
	   $current_date=strtotime(date('m/d/Y'));
	   if(!empty($db)){
	   foreach($db as $record){
		   $licen_date=strtotime($record->license_exp_date);
		   $lic_date=$record->license_exp_date;
	   if($current_date>$licen_date){
		   $lic_date='<span class="expired">Expired</span>';
	   }
		   $image_url=url('/').'/public/uploads/image/'.$record->license_image;
		   $html .='<div class="autoApplyList d-md-flex justify-content-between">
                                <div class="licensePic text-center">
                                    <img src="'.$image_url.'" alt="">
                                </div>
                                <div class="licenseDetails d-md-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                        <div class="ApplyListsMobLeft">
                                            <label>Title </label>
                                            <p>'.$record->license_title.'</p>
                                        </div>
                                        <div class="ApplyListsMobRight">
                                            <label>License Number</label>
                                            <p>'.$record->license_number.'</p>
                                        </div>
                                    </div>
    
                                    <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                        <div class="ApplyListsMobLeft">
                                            <label>Issued By</label>
                                            <p>'.$record->issued_by.'</p>
                                        </div>
                                        <div class="ApplyListsMobRight">
                                            <label>Expiration Date</label>
                                            <p>'.$lic_date.'</p>
                                        </div>
                                    </div>
                                    <div class="actionCol d-flex justify-content-between text-right">
                                        <div class="ApplyListsMobLeft d-block d-md-none text-left w-100">
                                            <label>Description</label>
                                            <p class="normalFont">'.$record->license_description.'</p>
                                        </div><!--Mobile Visible-->
                                        <div class="ApplyListsMobRight">
                                            <label>Action</label>
                                            <div class="Action"> <a href="#" class="text-primary underlinelink editLicenceModal" data-id="'.$record->id.'" data-url="'.route("edit-business-license").'" data-toggle="modal" data-target="#editLicenceModal"><img src="'.url("/public/user/").'/assets/images/edit-icon.svg" alt=""></a> <a href="#" class="text-primary underlinelink delete_business_license" data-url="'.url('/').'/provider/delete-business-license/'.$record->id.'" data-toggle="modal" data-target="#deleteRowModal"><img src="'. url("/public/user/").'/assets/images/dustbin.svg" alt=""></a> </div>
                                        </div>                                        
                                    </div>

                                    <div class="d-none d-md-block w-100">
                                        <label>Description</label>
                                        <p class="normalFont">'.$record->license_description.'</p>
                                    </div><!--Mobile Hidden-->
    
                                </div>
                                
                            </div> ';
		          }
				  $html .='<script>edit_business_license();</script>';
				 $result=array('code'=>200,'html'=>$html,'message'=>'Record List ');
	   
	   }else{
		   $result=array('code'=>201,'html'=>'','message'=>'No Record Found. ');
	   }
	   return json_encode($result);
	   
   }

public function edit_business_license(Request $request){
	
	$id=$request->id;
	$data=DB::table('business_license_info')->where('id',$id)->first();
	$image_base_url=$image_url=url('/').'/public/uploads/image/';
	if(!empty($data)){
	$result=array('code'=>200,'html'=>$data,'image_url'=>$image_base_url);
	return json_encode($result);
	}else{
	$mesg="Record is not found";
	$result=array('code'=>201,'message'=>$mesg);
	return json_encode($result);
	}
	
  }   
  
 public function update_business_license(Request $request){
	  $id=$request->id;
	  if(isset($request->license_image)){
			$file2=$request->file('license_image');
			$name2=$file2->getClientOriginalName();
			$file2->move(public_path('uploads/image'),$name2);
			$data=array('user_id'=>$request->user_id,'license_title'=>$request->license_title,'license_number'=>$request->license_number,
		'issued_by'=>$request->issued_by,'license_exp_date'=>$request->license_exp_date,'license_description'=>$request->license_description,'license_image'=>$name2);
		}else{
			$data=array('user_id'=>$request->user_id,'license_title'=>$request->license_title,'license_number'=>$request->license_number,
		'issued_by'=>$request->issued_by,'license_exp_date'=>$request->license_exp_date,'license_description'=>$request->license_description);
		}
		
		
		 
		
		
		$db=DB::table('business_license_info')->where('id',$id)->update($data);
		$result=array('code'=>200,'message'=>'Record delete successfuly');
		return json_encode($result);
	  
	  
   } 
   
   
	 public function delete_business_license($id){
		 $db=DB::table('business_license_info')->where('id',$id)->delete();
	 } 
	 
	 public function add_portfolio(Request $request){
		  $image_url=url('/public/uploads/image/').'/';
		  
		  $images=array();
		 if($files=$request->file('images')){
				foreach($files as $file){
					$name=time().$file->getClientOriginalName();
					
					$file->move(public_path('uploads/image/'),$name);
					$images[]=$image_url.$name;
				}
          }
		 
		 $data=array('user_id'=>$request->user_id,
		 'portfolio_title'=>$request->portfolio_title,
		 'location'=>$request->location,
		'cost'=>$request->cost,
		'completion_date'=>$request->completion_date,
		'description'=>$request->description,'portfolio_image'=>json_encode($images));
		$db=DB::table('portfolio')->insert($data);
		$result=array('code'=>200,'message'=>'Record delete successfuly');
		return json_encode($result);
		 
	 }

   public function get_portfolio_list(){
	   $user_id=Auth::user()->id;
	   $html='';
	   $db=DB::table('portfolio')->where('user_id',$user_id)->get();
	   if(count($db)>0){
	   foreach($db as $record){
		   if(!empty($record->portfolio_image)){
			   $image=json_decode($record->portfolio_image);
			   if(!empty($image)){
			   $first_image=$image[0];
			    $image_url=$first_image;
			   }else{
				   $image_url=url('/').'/public/user/assets/images/No_Image_Available.jpg';
			   }
		   }else{
			   $image_url=url('/').'/public/user/assets/images/No_Image_Available.jpg';
		   }
		  $descc=substr($record->description,0,100);
		   $html .=' <div class="autoApplyList d-md-flex justify-content-between">
                                <div class="licensePic text-center">
                                    <p class="position-relative">
                                        <img src="'.$image_url .'" alt="">
                                        <a href="#" class="underlinelink view_all_portfolio" data-id="'.$record->id.'" data-url="'.route("portfolio/id").'"data-toggle="modal" data-target="#projectDetailsModal" >View All</a>
                                    </p>
                                </div>
                                <div class="licenseDetails d-md-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                        <div class="ApplyListsMobLeft">
                                            <label>Title</label>
                                            <p>'.$record->portfolio_title.'</p>
                                        </div>
                                        <div class="ApplyListsMobRight">
                                            <label>Location</label>
                                            <p>'.$record->location.'</p>
                                        </div>
                                    </div>
    
                                    <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                        <div class="ApplyListsMobLeft">
                                            <label>Cost</label>
                                            <p>$'.$record->cost.'</p>
                                        </div>
                                        <div class="ApplyListsMobRight">
                                            <label>Completion Date</label>
                                            <p>'.$record->completion_date.'</p>
                                        </div>
                                    </div>
                                    <div class="actionCol d-flex justify-content-between text-right">
                                        <div class="ApplyListsMobLeft d-block d-md-none text-left">
                                            <label>Description</label>
                                            <p class="normalFont" data-des="'.$record->description.'" >'.$descc.'...</p>
                                        </div><!--Mobile Visible-->
                                        <div class="ApplyListsMobRight">
                                            <label>Action</label>
                                            <div class="Action"> <a href="#" class="text-primary underlinelink portfolio_edit_link" data-id="'.$record->id.'" data-url="'.route("edit-portfolio").'" data-toggle="modal" data-target="#editPortfolioModal"><img src="'.url('public/user/assets/images/edit-icon.svg') .'" alt=""></a> <a href="#" data-url="'.url('/provider/delete-portfolio/').'/'.$record->id.'" class="text-primary underlinelink delete_portfolio" data-toggle="modal" data-target="#deleteRowModal"><img src="'.url('/public/user/assets/images/dustbin.svg') .'" alt=""></a> </div>
                                        </div>                                        
                                    </div>

                                    <div class="d-none d-md-block w-100">
                                        <label>Description</label>
                                        <p class="normalFont" data-des="'.$record->description.'">'.$descc.'...</p>
                                    </div><!--Mobile Hidden-->
    
                                </div>
                                
                            </div> ';
	            }
				$html .='<script>edit_portfolio_fun()</script>';
				$result=array('code'=>200,'html'=>$html,'status'=>'data_list');
	     }else{
			 $result=array('code'=>200,'html'=>$html,'status'=>'nodata');
		 } 
				
				return json_encode($result);
				
	   
   }
   
   public function edit_portfolio(Request $request){
	   $id=$request->id;
	   $image_url='';
	    $db=DB::table('portfolio')->where('id',$id)->first();
		$imgarr=json_decode($db->portfolio_image);
		
	    $result=array('code'=>200,'html'=>$db,'image_path'=>$image_url,'image_list'=>array_flip($imgarr));
		return json_encode($result);  
	   
   }
   
   public  function update_portfolio(Request $request){
	   $id=$request->id;
	   
	   $image_url=url('/public/uploads/image/').'/';
	    if($files=$request->file('photos')){
				foreach($files as $file){
					$name=time().$file->getClientOriginalName();
					
					$file->move(public_path('uploads/image/'),$name);
					$images[]=$image_url.$name;
				}
          }
		  if(isset($request->old)){
			  foreach($request->old as $old){
				  $images[]=$old;
			  }
		  }
	  
		
			 $data=array('user_id'=>$request->user_id,
		 'portfolio_title'=>$request->portfolio_title,
		 'location'=>$request->location,
		'cost'=>$request->cost,
		'completion_date'=>$request->completion_date,
		'description'=>$request->description,
		'portfolio_image'=>$images);
		 
		 
		 $db=DB::table('portfolio')->where('id',$id)->update($data);
		 $result=array('code'=>200,'message'=>'Record delete successfuly');
		return json_encode($result);
		 
	   
   }

	public function delete_portfolio($id){
		 $db=DB::table('portfolio')->where('id',$id)->delete();
	}
	
	public function get_portfolio_by_id(Request $request){
		$id=$request->id;
		$data=DB::table('portfolio')->where('id',$id)->first();
		$result_arr=array();
		$result_arr['title']=$data->portfolio_title;
		$result_arr['location']=$data->location;
		$result_arr['cost']=$data->cost;
		$result_arr['completion_date']=$data->completion_date;
		$result_arr['description']=$data->description;
		$img_arr=array();
		if(!empty($data->portfolio_image)){
			$img=json_decode($data->portfolio_image);
			 if(!empty($img)){
			foreach($img as $img_src){
				$img_arr[]=$img_src;
			}
			 }else{
				$img_arr[]=url('/').'/public/user/assets/images/No_Image_Available.jpg'; 
			 }
		}else{
			$img_arr[]=url('/').'/public/user/assets/images/No_Image_Available.jpg';
		}
		$result_arr['images']=$img_arr;
		$result=array('code'=>200, 'html'=>$result_arr);
		return json_encode($result);
		
	}

   public function save_business_hour(Request $request){
	  
	   $user_id=$request->user_id;
			$bh=json_encode($request->bh);
			
				if(!empty(get_user_meta($user_id,'business_hour'))){
				    update_user_meta($user_id,'business_hour',$bh);
				}else{
					add_user_meta($user_id,'business_hour',$bh);
				}
		return redirect()->route('provider-business-details')->with('status','Record update Successfully');
   }
   
   
   public function update_provider_info(Request $request){
	   if($request->action=="services"){
		   $user_id=$request->user_id;
		   
				if(!empty(get_user_meta($user_id,'services'))){
				    update_user_meta($user_id,'services',$request->service);
				}else{
					add_user_meta($user_id,'services',$request->service);
				}
			
			
			return redirect()->route('provider-service-settings')->with('status','Record update Successfully');
	   }else if($request->action=="location"){
		   $user_id=$request->user_id;
		   
				if(!empty(get_user_meta($user_id,'location'))){
				    update_user_meta($user_id,'location',$request->location);
				}else{
					add_user_meta($user_id,'location',$request->location);
				}
			return redirect()->route('provider-location-settings')->with('status','Record update Successfully');
	   }
	   
	   
	   
	   
   }
 
 
	
}
