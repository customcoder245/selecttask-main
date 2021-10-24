@extends('user.layout.app')
@section('content')

       
        <!--Right Content-->
        <div class="contentArea">
          
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Notification Settings</h2>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link" href="{{ route('provider-notification-settings')}}">Email Notification</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ route('provider-text-notification')}}">Text Notification</a>
                        </li>          
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-8 col-xl-6">
                        <div class="wtBoxnoti form-group">
                            <div class="form-group">
                                <div class="customcheck customRadio squareRadio">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label Bold f-12" for="inlineRadio1">Please Send me Text Message</label>
                                     </div>
                                </div>
                                <div class="notiTextPad pb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="wtBoxnoti d-flex justify-content-between align-items-center form-group">
                            <div class="flex-grow-1 notiTextContent">
                                <h4>New Available Tasks</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                            <div class="switchButton">
                                <input type="checkbox" class="toggle" id="toggle2" checked />
                                <label for="toggle2">
                                  <span class="on">On</span>
                                  <span class="off">Off</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
			@endsection