@extends('master')
@section('content')
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    .rtl table {
        text-align: right;
    }
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>
<body>
 <div class="row">
	<div class="col-md-12">
		<br />
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif
	</div>
		<style>
		@media print {
 	 #printPageButton {
    	display: none;
  }
}
</style>
</div>
    <div class="invoice-box mb-5">
    	@foreach($demos as $row)
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            	<div class="">
                                <img src="{{ url('assets/images/logo2.png') }}" alt="" style="height: 3.8rem;">
                    <h3><b>TMS Receipt</b></h3>
                </div>                   
                            <td>
                                <b>Booking ID </b>:{{$row->id}}<br>
                                <b>Package ID</b>: {{$row->PackId}}<br>
                                <b>Package Book Date</b>: {{$row->bookdate}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>        
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b>Customer Name</b>:{{ Auth::user()->name}}<br> 
                            </td>            
                            <td>
                                <b>Package Name</b>:{{$row->program_name}}<br>
                                <b>Package Starts</b>:{{$row->from_date}}<br>  
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    <b>Hotel</b>
                </td> 
                <td>   
                </td>
            </tr>  
            <tr class="details">
                <td>
                    {{$row->hotel}}
                </td> 
                            </tr>
            <tr class="heading">
                <td>
                  <b>  Details</b>
                </td>
                <td>
                   <b> Information</b>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Package Name:{{$row->program_name}}
                </td>       
            </tr>
            <tr class="item">
                <td>
                    Number of people     
                </td> 
                <td
                   id="n">{{$row->nop}}
                </td>
            </tr>
            <tr class="item">
                <td>
                	Details      
                </td>  
                <td>{{$row->detail}}
                </td>
            </tr>
            <tr class="item ">
                <td>
                    Price/Person
                </td>
                <td
                    id="p">{{$row->price}}
                </td>
            </tr>
             <tr class="item ">
                <td>
                   <b> Total</b>
                </td>  
                <td
                    id="tot">
                </td>
            </tr>
        </table>
        @endforeach
        <div align="left">
			<span style="border: none"  "overflow: auto" rows="2" cols="70" disabled>
Thank you very much for your business. Hope to see you again.
			</span>
		</div>
        <script type="text/javascript">
			var p=document.getElementById("p").textContent;
			var n=document.getElementById("n").textContent;
			var cal=p*n;
			document.getElementById("tot").textContent=cal;
			$("button").click(function (){
			window.print()
			});
		</script>
    </div>
    <br>
    <div class="col-md-12 align-center">
    	 <button id="printPageButton" class="btn btn-success "onclick="window.print();">Print</button>		
    <div class="col-md-9">
    	<a href="{!! url(url('tms/index1')) !!}"button id="printPageButton" class="btn btn-md btn-primary-outline display-7" style="border-radius: 45px;"  > 
                                    {{ __('Back To HomePage') }}</a>     
	</div>
</div>
    <br><br>
</body>
@endsection
