<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Custom Popup Message With jQuery</title>
		<link rel="stylesheet href="css/style.css">
	</head>

	<style>
	body{

		padding: 0;
		margin: 0 auto;
	}
	.container{
		position: relative;
		margin: 0 auto;
		text-align: center;
		margin-top: 100px;
	}
	.btn{
		padding: 10px 15px;
		background-color: #E91E63;
		border-radius:4px;
		color:#fff;
		border:none;
		font-weight: bold;
		text-transform: uppercase;
	}
	.popup{
		width:900px;
		height:180px;
		background-color: lightblue;
		border-radius: 4px;
		margin: 0 auto;
		position:relative;
	}
	p{
		font-size:px;
		line-height: 100px;
		font-size: 25px;
		color: #EF5350;
	}
	.option{
		position:absolute;
		width: 100%;
		bottom: 0;
		left: 0;
	}
	#close{
		width:50px;
		height: 25px;
		line-height: 25px;
		
		border-radius: 50%;
		float:center;
		
		border: 2px solid #EF9A9A;
	}
	a:first-child{
		float:left;
		width:50%;
		background-color: #2ECC71;
	}
	a:last-child{
		float:left;
		width:50%;
		background-color: #F44336;
	}
	a{
		text-transform: uppercase;
		text-decoration: none;
		color: #fff;
		text-align: center;
		padding:15px 0px;

	}
</style>
	<body>
		<div class="container">
			<button class="btn">alert message</button>
			<div class="popup">
				
				<p>Congratulation to Mr/Mrs:{{ Auth::user()->name}} . Your package has been successfully booked.</p>
			<div class="option">
				<a href="{!! url('tms/receipt') !!}">Click here for Receipt</a>
				<a href="{!! url('tms/index1') !!}">Back to HomePage</a>
			</div>
		</div>
	</div>
	</body>
	</html>