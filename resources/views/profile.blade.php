@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    	<div class="col-md-8 col-md-offset-2 ">
    		<div class="panel panel-default">
    			<div class="panel-heading"><h1><B>Profile</B></h1></div>
    			<div class="panel-body">
    				 <form method="POST" action="{{ url('/addprofile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}"  autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Enter Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">Country:</label>
                         <div class="col-md-6">
                         <select name="country" class="form-control @error('country') is-invalid @enderror" ><br><br>
                            <option value="">Select...</option>
                            <option value="india">India</option>
                            <option value="england">England</option>
                            <option value="america">America</option>
                            </select>
                             @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Gender:</label>
                        <div class="col-md-6">
                        <input type="radio" name="gender" value="male" >Male&nbsp;
                        <input type="radio" name="gender" value="female">Female
                         @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Hobby:</label>
                            <div class="col-md-6">
                            <input type="checkbox" name="hobby[singing]" >singing</input>
                            <input type="checkbox" name="hobby[reading]" >reading</input>&nbsp;
                        </div>
                        </div>


                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Enter Your Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="input" class="form-control @error('designation') is-invalid @enderror" name="designation" required autocomplete="current-designation">

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                            <div class="col-md-6">
                                <input id="profile_pic" type="file" class="form-control @error('profile_pic') is-invalid @enderror" name="profile_pic" required autocomplete="current-profile_pic">

                                @error('profile_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Add Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
    			</div>
			</div>
		</div>
	</div>
</div>
@endsection
