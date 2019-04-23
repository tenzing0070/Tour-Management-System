<!DOCTYPE html>
<html lang="">
<head>
<title>Tour Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ url('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.form-control{
    color:black;
}
.card-body{
    font-size: 22px;
}
</style>
</head>
<body id="top">
<div class="modal fade col-md-12" id="modalHelp">
  <div class="modal-dialog modal-dialog-center modal-lg col-md-10">
    <div class="modal-content">
      <div class="modal-header">
         &nbsp &nbsp
        <h2 class="text-center" id="">TMS</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="height: 700px;">
        <embed src="{{ url('userManual.pdf') }}" type="application/pdf" width="100%" height="100%" />      
    </div>
    </div>
  </div>
</div>   
<div class="bgded overlay" style="background-image:url('{{ url('../images/demo/backgrounds/01.png') }}');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear">     
      <div id="logo" class="fl_left">
        <h1><a href="{!! url('tms/editProfile') !!}">Profile Edit</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">       
    <li class="">
                <a title="Help" class="fa fa-info-circle" href="" data-target="#modalHelp" data-toggle="modal"> HELP
                  <span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>
                </a>
              </li>         
            </ul>
          </li>    
        </ul>
      </nav>
    </header>
  </div> 
   <div>
        @if($message=Session::get('success'))
        <div class="alert alert-info">
                <p><h3>{{$message}}</h3></p>
        </div>
        @endif
    </div>
<div id="pageintro" class="container col-md-12 p-5">
    <div class="row justify-content-center" style="">
        <div class="col-md-12">
            <div class="">
                <div class=""><h2><b>{{ __('Profile') }}</b></h2></div>

                <div class="card-body">
                    <form method="POST" action="{!! url('/updateProfile',Auth::user()->id) !!}">
                        @csrf
                        {!!method_field('put')!!}
<div class="form-group row">
 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
 <div class="col-md-6">
  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{Auth::user()->name}}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ Auth::user()->address }}" required autofocus>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ Auth::user()->phone }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<div class="form-group row">
    <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
 <div class="col-md-6">
  <input id="nationality" type="text" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ Auth::user()->nationality }}" required autofocus>

      @if ($errors->has('nationality'))
             <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('nationality') }}</strong>
                                 </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
<div class="col-md-6">
 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>
          @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
  <button type="submit" class="btn btn-primary" >
                                    {{ __('Edit') }}
  </button>
   &nbsp &nbsp &nbsp &nbsp  &nbsp
  <a href="{!! url('tms/index1') !!}"button type="submit" class="btn btn-primary"  > 
                {{ __('Back') }}</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
