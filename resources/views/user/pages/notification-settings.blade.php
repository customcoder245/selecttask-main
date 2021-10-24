@extends('user.layout.app')
@section('content')
@php
$user_id=Auth::user()->id;
@endphp
        <!--Right Content-->
            <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Notification Settings</h2>
                </div> 
				<form method="post" action="{{ route('notification-setting')}}" class="notification-setting-form">
                 @csrf
				<input type="hidden" class="user_ids" name="user_id" value="{{Auth::user()->id }}">
				<input type="hidden" class="action_url" value="{{ route('update-user-info')}}">
                <div class="row">
                    <div class="col-md-8 col-xl-7 form-group">
                        <h3 class="notiHead">Email Notifications </h3>
                        <div class="wtBoxnoti d-flex justify-content-between align-items-center form-group">
                            <div class="flex-grow-1 notiTextContent">
                                <h4>Task Updates</h4>
                                <p>Turn on notifications to receive updates about Tasks you post. </p>
                            </div>
                            <div class="switchButton">
                                <input type="checkbox" class="toggle" name="task_update" data-key="task_update" id="toggle"  @if(get_user_meta($user_id,'task_update')==1) checked @endif />
                                <label for="toggle">
                                  <span class="on">On</span>
                                  <span class="off">Off</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-xl-7 form-group">
                        <h3 class="notiHead">Text Notifications</h3>
                        <div class="wtBoxnoti">
                            <div class="form-group">
                                <div class="customcheck customRadio squareRadio">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input text_notification" type="checkbox" name="text_notification" data-key="text_notification"  id="inlineRadio1" value="option1" @if(get_user_meta($user_id,'text_notification')==1) checked @endif>
                                        <label class="form-check-label Bold f-12" for="inlineRadio1">Please send me text messages</label>
                                     </div>
                                </div>
                                <div class="notiTextPad">
                                    <p>Send me text messages to notify me about job updates, and job reminders.</p>
                                    <ul class="bullettedText">
                                        <li>Please reply to the text message to complete activation. </li>
                                        <li>Standard data and message rates may apply. </li>
                                        <li>Text the word STOP to ##### to opt out at any time.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="flex-grow-1 notiTextContent">
                                    <h4>New Applicants</h4>
                                    <p>Get notified when a service provider applies to a Task you posted.</p>
                                </div>
                                <div class="switchButton">
                                    <input type="checkbox" class="toggle" id="toggle1" name="new_applicant" data-key="new_applicant" @if(get_user_meta($user_id,'new_applicant')==1) checked @endif />
                                    <label for="toggle1">
                                      <span class="on">On</span>
                                      <span class="off">Off</span>
                                    </label>
                                </div>
                            </div>
							
						
                            
                        </div>
                    </div>
                </div>
				<button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
	
                
                </form>
            </div>
            <!-- //Task List-->

        </div>
		        <!--//Right Content-->
		@endsection