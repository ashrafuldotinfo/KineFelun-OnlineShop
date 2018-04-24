@extends('layouts.home')

@section('pagetitle')
    Kine Felun | User Details
@endsection

@section('content')
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Kine Felun</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/cart">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                @if(session('user'))
                    @if(session('user')->type=='admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.index')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Log out</a>
                        </li>
                    @else
                    @endif
                    @if(session('user')->type=='user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('userprofile.show')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Log out</a>
                        </li>
                    @else
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.index')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registration.index')}}">Register</a>
                    </li>
                @endif
            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div> -->
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">{{Cart::content()->count()}}</span>
                </a>
            <!-- </form> -->
        </div>
    </div>
</nav>

	<fieldset>
		<h2>Profile Details</h2>

        <div class="row">
            <div class="col-md-8">
                <table class="table">
	                <tbody>	                	
                    	<tr>
	                        <td style="text-align: right; width: 30%">User ID :</td>
	                        <td style="text-align: left; width: 70%">{{session('user')->id}}</td>
	                    </tr>
	                    <tr>
	                    	<td style="text-align: right">User Name :</td>
	                		<td>
	                			<B>{{session('user')->username}}</B>
	                		</td>
	                	</tr>
	                    <tr>
	                        <td style="text-align: right">EMAIL :</td>
	                        <td style="text-align: left">
	                            {{session('user')->email}}
	                        </td>
	                    </tr>               
	                </tbody>
            	</table>
            	<p>Do you want to change your Information ?</p>
                <a href="/profile/{{session('user')->id}}/edit">Click here</a>
            	<p>Your <a href="/order">Order List</a></p>
            </div>
        </div>
        
    </fieldset>
@endsection