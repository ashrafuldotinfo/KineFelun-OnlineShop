@extends('layouts.main')

@section('pagetitle')
    Login | Kine Felun
@endsection

@section('content')

<div class="container" background="">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <h1>Welcome</h1>
			<div class="panel panel-info">
                <div class="panel-heading">Sign In</div>
                <div class="panel-body">
                    <form method="post" autocomplete="off">
                    	{{csrf_field()}}
                        <div class="form-group">
                        	<label>Username</label>
                        	<input type="text" class="form-control" name="username" id="txtUsername" >
                        </div>
                        <div class="form-group">
                        	<label>Password</label>
                        	<input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" name="buttonLogin" value="Sign In"><i class="icon-signin"></i> Sign In</button>
                        
                        <div class="clearfix">
                            <label>Don't have an account?<a href="{{route('registration.index')}}"> Register</a></label>
                        </div>
                    </form>
                    <br/>
                    <!-- <div class="alert alert-danger">
                        <strong>
                            @if(session('message'))
                                <label>{{session('message')}}</label>
                            @endif
                        </strong>
                    </div> -->
                    @component('message.alert')
                        @slot('type')
                            danger
                        @endslot
                        @slot('slot')
                            {{session('message')}}
                        @endslot
                    @endcomponent
                </div>
            </div>
		</div>
	</div>
</div>
@endsection