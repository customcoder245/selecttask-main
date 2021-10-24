<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/public/user')}}/assets/images/favicon.png">
    <title>Select Task</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
    <!-- Theme CSS -->
    <link href="{{ url('/public/user')}}/assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="invoiceWrapper text-lato">
    <div class="invoiceContainer">
        <div class="invoiceheder clearfix">
            <div class="headerLeft">
                <p class="logo"><img src="assets/images/logo.svg" alt=""></p>
                <span class="headerLabel">19th August, 2020  </span>
            </div>
            <div class="headerRight text-right">
                <h2>Invoice</h2>
				@php
                  $user_id=Auth::user()->id;				
				@endphp
				
                <span class="headerLabel">#{{ get_transaction_info($task_id,$user_id)}}</span>
            </div>
        </div><!--/Top-->
        <div class="invoiceContent">
            <table class="table">
                <thead>
                    <tr>
                        <th width="25%">Service</th>
                        <th width="75%" align="right" colspan="6" style="text-align: right;">Amount</th>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td>{{ get_services_category_by_id($data->category)}}
                            <p class="grayColorText">{{ $data->description }}</p>
                        </td>
                       
                        <td align="right" colspan="6" class="totalamout"><strong>$10</strong></td>
                    </tr> 
                                 
                </tbody>
            </table>
        </div><!--/Middle-->

        <div class="invoiceFooter clearfix">
            <div class="invoiceFooterLeft">
                <h2 class="orangeCol">From :</h2>
                <p>{{ get_invoice_info('invoice_business_name')}}</p>
                <ul class="addressRow">
                   <li> <?php  echo get_invoice_info('invoice_address');?></li>
                    <li class="emailInfo">{{ get_invoice_info('invoice_email')}}</li>
                </ul>                
            </div><!--/Footer Left-->
            <div class="invoiceFooterRight text-right">
                <h2 class="greenColr">To :</h2>
				@php 
				 $sp_user= get_user_id_for_invoice($task_id);
				@endphp
                <p>{{ get_business_info($sp_user,'businss_name')}}</p>
                <ul class="addressRow">
                    <li>{{ get_business_info($sp_user,'business_address')}}</li>
                    <li class="emailInfo">@if(!empty(get_userdata($sp_user)->email)){{ get_userdata($sp_user)->email }} @endif</li>
                </ul>                
            </div><!--/Footer Right-->
        </div>
    </div>
</div>
 
<!-- jQuery CDN Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ url('/public/user')}}/assets/js/custom.js"></script>
</body>
</html>