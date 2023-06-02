@extends('layouts.app')
@section('title', 'Blog-WWC')
@section('breadcrumb')
<div class="container">
	<div class="row">
		<div class="col-sm-9 breadcrumb2 mt-3">
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
			<li class="breadcrumb-item active">Blog</li>
		</div>
	</div>
</div>
@endsection
@section('content')
<div class="container">
	<h1>My Blog Page</h1>
</div>
@endsection