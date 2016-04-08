@extends('app')

@section('content')

<div class="container">
		<form class="form-horizontal" action="{{url('login')}} " method="POST" >
		{!! csrf_field() !!} 
                <div class="row tm5">
                    <div class="col-xs-2 col-md-offset-4">
                        <label>Email: </label><br/>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="col-xs-2 error">
                        
                    </div>
                </div>
                <div class="row tm5">
                    <div class="col-xs-2 col-md-offset-4">
                        <label>Password: </label><br/>
                    </div>
                    <div class="col-xs-2">
                        <input type="password" name="password" />
                    </div>
                    <div class="col-xs-2 error">
                        
                    </div>
                </div>
                <div class="row tm5">
                    <div class="col-xs-2 col-md-offset-6">
                        <input type="submit" name="action" value="Log In" />                        
                    </div>
                </div>
		</form>
</div>

@stop