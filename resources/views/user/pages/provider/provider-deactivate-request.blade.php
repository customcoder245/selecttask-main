@extends('user.layout.app')
@section('content')     
   <!--Right Content-->
       <div class="contentArea">
        <!--Title Top-->
        <div class="sectionRow">
            <div class="titleRow d-flex justify-content-between align-items-center">
                <h2 class="title-head">Deactivation Request</h2>
                <a href="{{ route('provider-my-profile')}}" class="btn btn-sm btn-primary">Back to my account</a>
            </div>                
        </div>
        <!-- //Title Top-->
        <div class="alert alert-danger text-lato deact-alert borderRadius8">
            <p>Once your account has been deactivated you will lose access and all your account information.</p>
            <p>If you are getting too many notifications from us then change your notification settings <a href="#" class="underlinelink">here</a>.</p>
            <p>We are sorry to see you go. If there’s anything we can help, please contact us <a href="#" class="underlinelink">here</a> and we’ll be more than glad to assist you.</p>

        </div>
        <!--Form-->
        <div class="row mt-4">
            <div class="col-md-8 col-xl-6">
                <form class="deactivate_account_form" action="{{ route('provider-deactivate-request')}}" method="post">
                  @csrf
				  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="formbtns text-center text-md-left">
                        <button class="btn btn-green btnLg btn-green-shadow" type="submit">Submit</button>
                        <span class="redColor ml-md-3 d-block d-md-inline-block text-lato">This action cannot be undone.</span>
                    </div>
                </form>
            </div>
        </div>
        <!-- //Form-->
    </div>
    <!--//Right Content-->
	
	@endsection