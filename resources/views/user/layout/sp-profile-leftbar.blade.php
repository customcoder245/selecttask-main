@php
$user_id=Auth::user()->id;
@endphp

<div class="aboutLeft form-group30">
                   <div class="wtbox">
                       <div class="companyProfileRow d-flex form-group-30">
                           <img src="{{ get_profile_image_src($user_id)}}" alt="">
                           <div class="comProfileText text-lato">
                               <h4>{{ get_business_info($user_id,'businss_name')}}</h4>
                               <p class="reviewText">{{ get_total_review_by_user($user_id)}} Reviews</p>
                               <div><input id="input-21b" value="{{ get_average_review_by_user($user_id)}}"  name="rating" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.2 data-size="xm"
               required title="" readonly ></div>
                           </div>
                       </div><!--/Profile Info-->
                       <div class="form-group-30 projectProfile d-flex text-center">
                            <div class="projectProfileCol flex-grow-1">
                                <label class="label  
                                text-lato">Completed Projects</label>
                                <p class="f-16 Bold">{{ get_total_complete_jobs($user_id) }}</p>
                            </div>
                            <div class="projectProfileCol flex-grow-1">
                                <label class="label  
                                text-lato">Total years</label>
                                <p class="f-16 Bold">
								@php 
								 $get_date=get_business_info($user_id,'business_start_date');
								@endphp 
								  <?php 
								  $date2=date('Y-m-d');
								  $date1=date('Y-m-d',strtotime($get_date));
								  $diff = abs(strtotime($date2)-strtotime($date1));
								  echo $years = floor($diff / (365*60*60*24));
								  //$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								  //$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
								  ?>
								</p>
                            </div>
                       </div>

                       <ul class="comProfile-list">
                           <li>
                               <label class="label">Phone</label>
                               <p class="semiBold">{{ get_business_info($user_id,'business_contact')}}</p>
                           </li>
                           <li>
                                <label class="label">Email</label>
                                <p class="semiBold">{{ Auth::user()->email }}</p>
                            </li>
                            <li>
                                <label class="label">Address</label>
                                <p class="semiBold">{{ get_business_info($user_id,'business_address')}}</p>
                            </li>
                            <li>
                                <label class="label">Joined the Handsome Service Since</label>
								
                                <p class="semiBold">{{ date('d M Y',strtotime($get_date))}}</p>
                            </li>
                            <li id="businessHours">
                                <div class="d-flex justify-content-between">
                                    <label class="label">Business Hours</label>
                                    <a href="javascript:void(0)" onclick="businessHours();" class="textgreen underlinelink f-12 viewAllOptions">View All</a>
                                    <a href="javascript:void(0)" onclick="businessHours();" class="textgreen underlinelink f-12 viewLessOptions">View Less</a>
                                </div>  
                                 
                                 @php 
                                  $user_hour=get_user_meta($user_id,'business_hour');
								  $bh=json_decode($user_hour);
								 $current_day=date('l');
                                 @endphp
								@if($current_day=="Tuesday")					 
                                <p class="semiBold businessDay" id="singleDayRow">Tuesday <span class="busiHours">@if(isset($bh->tue->start_time) && isset($bh->tue->end_time)){{$bh->tue->start_time}} to {{ $bh->tue->end_time }} @else Closed @endif</span></p>    
                                 @elseif($current_day=="Monday")
								 <p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Monday</span> <span class="busiHours">@if(isset($bh->mon->start_time) && isset($bh->mon->end_time)){{$bh->mon->start_time}} to {{ $bh->mon->end_time }} @else Closed @endif</span></p>
                                   @elseif($current_day=="Wednesday")
								   <p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Wednesday</span> <span class="busiHours">@if(isset($bh->wed->start_time) && isset($bh->wed->end_time)){{$bh->wed->start_time}} to {{ $bh->wed->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Thursday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Thursday</span> <span class="busiHours">@if(isset($bh->thu->start_time) && isset($bh->thu->end_time)){{$bh->thu->start_time}} to {{ $bh->thu->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Friday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Friday</span> <span class="busiHours">@if(isset($bh->fri->start_time) && isset($bh->fri->end_time)){{$bh->fri->start_time}} to {{ $bh->fri->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Saturday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Saturday</span> <span class="busiHours">@if(isset($bh->sat->start_time) && isset($bh->sat->end_time)){{$bh->sat->start_time}} to {{ $bh->sat->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Sunday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Sunday</span> <span class="busiHours">@if(isset($bh->sun->start_time) && isset($bh->sun->end_time)){{$bh->sun->start_time}} to {{ $bh->sun->end_time }} @else Closed @endif</span></p>
								    @endif
								
                                <div id="weekDaysRow">
                                    <p class="semiBold businessDay"><span class="dayName">Monday</span> <span class="busiHours">@if(isset($bh->mon->start_time) && isset($bh->mon->end_time)){{$bh->mon->start_time}} to {{ $bh->mon->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Tuesday</span> <span class="busiHours">@if(isset($bh->tue->start_time) && isset($bh->tue->end_time)){{$bh->tue->start_time}} to {{ $bh->tue->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Wednesday</span> <span class="busiHours">@if(isset($bh->wed->start_time) && isset($bh->wed->end_time)){{$bh->wed->start_time}} to {{ $bh->wed->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Thursday</span> <span class="busiHours">@if(isset($bh->thu->start_time) && isset($bh->thu->end_time)){{$bh->thu->start_time}} to {{ $bh->thu->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Friday</span> <span class="busiHours">@if(isset($bh->fri->start_time) && isset($bh->fri->end_time)){{$bh->fri->start_time}} to {{ $bh->fri->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Saturday</span> <span class="busiHours">@if(isset($bh->sat->start_time) && isset($bh->sat->end_time)){{$bh->sat->start_time}} to {{ $bh->sat->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Sunday</span> <span class="busiHours">@if(isset($bh->sun->start_time) && isset($bh->sun->end_time)){{$bh->sun->start_time}} to {{ $bh->sun->end_time }} @else Closed @endif</span></p>
                                </div>
                            </li>
                       </ul>
                   </div>
                </div><!--/About Left-->