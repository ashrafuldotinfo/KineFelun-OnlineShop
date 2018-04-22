
@extends('layouts.productlist')

<!-- @section('styles')
	<style type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	</style>
@endsection -->

@section('pagetitle')
	Kine Felun | All products
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="col-md-12 col-sm-8 content">
    	<div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                	<li class="active"><a href="/admin">Profile</a></li>
                  	<li class="active">List of Products</li>
                </ol>
            </div>
        </div>
	    <div class="row">    
	        <div class="col-md-12">
	            <div class="panel panel-default panel-table">
	              <div class="panel-heading">
	                <div class="row">
	                  <div class="col col-xs-6">
	                  	<h1><a href="/admin">Profile</a></h1>
	                  		<a href="{{route('home.index')}}">Back to Home</a>
	                  </div>
	                  <div class="col col-xs-6 text-right">
	                    <!-- <button type="button" class="btn btn-sm btn-primary"> --><a class="btn btn-sm btn-primary" href="/product/create" style="color: white; text-decoration: none;">Create New</a><!-- </button> -->

	                    <div class="container">
							<div class="col-md-5">
							  <form class="navbar-form" role="search" method="post" action="/product/search">
							  	{{csrf_field()}}
							    <div class="input-group add-on">
							      <input class="form-control" placeholder="Search" name="searchText" id="srch-term" type="text">
							      <div class="input-group-btn">
							        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							      </div>
							    </div>
							  </form>
		                  </div>
		                </div>

	              </div>
	              <div class="panel-body">
	                <table class="table table-striped table-bordered table-list">
	                  <thead>
	                    <tr>
	                        <th><em class="fa fa-cog"></em></th>
	                        <th class="hidden-xs">ID</th>
	                        <th>Product name</th>
	                        <th>Price</th>
	                        <th>Quantity</th>
	                        <th>Catagory Name</th>
	                        <th>Product Image</th>
	                        <th>Description</th>
	                    </tr> 
	                  </thead>
	                  <tbody>
	                    @foreach($products as $product)
	                          <tr>
	                            <td align="center">
	                              <a class="btn btn-info" href="/product/{{$product->productId}}"><em class="fa fa-info"></em></a>
	                              <a class="btn btn-warning" href="/product/{{$product->productId}}/edit"><em class="fa fa-pencil"></em></a>
	                              <a class="btn btn-danger" href="/product/{{$product->productId}}/delete"><em class="fa fa-trash"></em></a>
	                            </td>
	                            <td class="hidden-xs">{{$product->productId}}</td>
	                            <td>{{$product->productName}}</td>
	                            <td>{{$product->price}} $</td>
	                            <td>{{$product->quantity}}</td>
	                            <td>{{$product->category->categoryName}}</td>
	                            <td><img src="{{$product->image}}" style="height: 20%; width: 20%;"></td>
	                            <td width="20%">{{$product->description}}</td>
	                          </tr>
	                    @endforeach
	                        </tbody>
	                </table>
	            
	              </div>
	              <div class="panel-footer">
	                <div class="row">
	                  <div class="col col-xs-4">Number of product(s) count: {{$products->count()}}
	                  </div>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
			</div>
		</div>
	</div>
</div>

@endsection