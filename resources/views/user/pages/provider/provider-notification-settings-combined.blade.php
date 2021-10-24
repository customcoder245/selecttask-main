@extends('user.layout.app')
@section('content')
<!--Right Content-->
        <!--Right Content-->
         <!--Right Content-->
        <div class="contentArea">
          
            <!--Task List-->
            <div class="sectionRow profileVH">               
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Notification Settings</h2>
                </div> 
                <div class="row">
                    <div class="col-md-8 col-xl-7 form-group">
                        <h3 class="notiHead">Email Notification</h3>
                        <div class="wtBoxnoti d-flex justify-content-between align-items-center form-group">
                            <div class="flex-grow-1 notiTextContent">
                                <h4>Task Updates</h4>
                                <p>Turn on notifications to hear when new Tasks are posted in your neighborhood.</p>
                            </div>
                            <div class="switchButton">
                                <input type="checkbox" class="toggle" id="toggle" checked />
                                <label for="toggle">
                                  <span class="on">On</span>
                                  <span class="off">Off</span>
                                </label>
                            </div>
                        </div>
                        <div class="wtBoxnoti d-flex justify-content-between align-items-center form-group">
                            <div class="flex-grow-1 notiTextContent">
                                <h4>Task Reminders</h4>
                                <p>Stay up to date on the Tasks you’ve been assigned</p>
                            </div>
                            <div class="switchButton">
                                <input type="checkbox" class="toggle" id="toggle3" />
                                <label for="toggle3">
                                  <span class="on">On</span>
                                  <span class="off">Off</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-xl-7">
                        <h3 class="notiHead">Text Notification</h3>
                        <div class="wtBoxnoti form-group">
                            <div class="form-group">
                                <div class="customcheck customRadio squareRadio">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label Bold f-12" for="inlineRadio1">Please send me text messages</label>
                                     </div>
                                </div>
                                <div class="notiTextPad pb-0">
                                    <p>Send me text messages to notify me about job updates, and job reminders.</p>
                                    <ul class="bullettedText">
                                        <li>Please reply to the text message to complete activation. </li>
                                        <li>Standard data and message rates may apply. </li>
                                        <li>Text the word STOP to ##### to opt out at any time.</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>

                        <div class="wtBoxnoti d-flex justify-content-between align-items-center form-group">
                            <div class="flex-grow-1 notiTextContent">
                                <h4>New Available Tasks</h4>
                                <p>Get notified when there are new Tasks available in your area.</p>
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
            <!-- //Task List-->
			@endsection