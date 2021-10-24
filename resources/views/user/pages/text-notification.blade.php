@extends('user.layout.app')
@section('content')
        <!--Right Content-->
          <!--Right Content-->
      <!--Right Content-->
	  @php 
	  $user_id=Auth::user()->id;
	  @endphp
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Notification Settings</h2>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                      <li>
                            <a class="nav-link " href="{{ route('notification-setting')}}">Email Notifications</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ route('text-notification')}}">Text Notifications</a>
                        </li>           
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-8 col-xl-6">
                        <div class="wtBoxnoti">
                            <div class="form-group">
                                <div class="customcheck customRadio squareRadio">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input checkbox_input" type="checkbox" name="text_message" data-key="text_message" @if(get_user_meta( $user_id, 'text_message')=="on") checked @endif id="inlineRadio1" value="on">
                                        <label class="form-check-label Bold f-12" for="inlineRadio1">Please send me text messages</label>
                                     </div>
                                </div>
                                <div class="notiTextPad">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="flex-grow-1 notiTextContent">
                                    <h4>New Chat</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                </div>
                                <div class="switchButton">
                                    <input type="checkbox" class="toggle text_notification2" data-key="text_new_chat" @if(get_user_meta( $user_id, 'text_new_chat')=="on") checked @endif id="toggle"  />
                                    <label for="toggle">
                                      <span class="on">On</span>
                                      <span class="off">Off</span>
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="alert alert-success" style="display:none; ">
				  <strong>Success!</strong> Indicates a successful or positive action.
				</div>
                
            </div>
            <!-- //Task List-->

        </div>
        <!--//Right Content-->
		        <!--//Right Content-->
		@endsection