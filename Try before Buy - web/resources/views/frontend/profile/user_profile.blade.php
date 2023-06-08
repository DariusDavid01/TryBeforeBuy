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
                    <h3 class="text-center"><span class="text-danger">@if(session()->get('language') == 'romanian') Buna, @else Hi, @endif</span><strong>{{Auth::user()->name}}</strong> @if(session()->get('language') == 'romanian') Actualizeaza-ti profilul @else Update your profile @endif</h3>
                    <div class="card-body">
                        <form method="post" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Nume @else Name @endif <span>*</span></label>
	    	            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
	  	                </div>
                          
                          <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Adresa de mail @else Email address @endif <span>*</span></label>
	    	            <input type="email" value="{{$user->email}}" id="email" name="email" class="form-control">
	  	                </div>
                            <div class="form-group">
	    	            <label class="info-title" for="exampleInputEmail2">@if(session()->get('language') == 'romanian') Imagine utilizator @else User image @endif <span>*</span></label>
	    	            <input type="file" name="profile_photo_path" class="form-control">
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