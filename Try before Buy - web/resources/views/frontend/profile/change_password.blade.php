@extends('frontend.main_master')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            
        @include('frontend.common.user_sidebar')
            <div class="col-md-2">

            </div> <!-- //end col md 2 -->
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">@if(session()->get('language') == 'romanian') Schimba parola @else Change password @endif</span></h3>
                    <div class="card-body">
                        <form method="post" action="{{route('user.password.update')}}" >
                            @csrf
                            
                            <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Parola curenta @else Current password @endif <span>*</span></label>
	    	            <input type="password" id="current_password" name="oldpassword" class="form-control">
	  	                </div>
                          
                          <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Parola noua @else New password @endif <span>*</span></label>
	    	            <input type="password"  id="password" name="password" class="form-control">
	  	                </div>
                            <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Confirma parola noua @else Confirm new password @endif <span>*</span></label>
	    	            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
	  	                </div>
                            <div class="form-group">
	    	            <button type="submit" class="btn btn-danger">@if(session()->get('language') == 'romanian') Actualizeaza @else Update @endif</button>
	  	                </div>
                        </form>
                    </div>
                </div>
            </div> <!-- //end col md 6 -->
        </div> <!-- //end row -->
    </div>
</div>
@endsection