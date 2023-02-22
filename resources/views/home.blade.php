@extends('navigation.navigation')
@section('home', 'active')

@section('content')
<div class="mt-2 container">
	<div class="row justify-content-center">
		<div class="col">
			<h2 class="mt-2 fw-bold" style="color: #000; margin-bottom: 20px;">Dashboard</h2>
			<div class="jumbotron" style="color: #000; background-color: #fff">
				<h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
				<p class="lead">Selamat datang di aplikasi RAB Sederhana.</p>
			</div>
		</div>
	</div>
</div>
@endsection

