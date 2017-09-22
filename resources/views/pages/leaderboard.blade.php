@extends ('layouts.navbar') @section('content')
<br><br>
<div class="container">
	<div class="jumbotron" style="background-color:#787878;color:white">
		<div class="row">
			{{--  <img src="{{ URL::to('images/trophy.jpg') }}" alt="brand logo">  --}}
			<div class="col-sm-12">
				<h1>Leaderboard</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		
		<div class="col-sm-12" <div class="list-group">
			<a href="#" class="list-group-item ">Chistiano Ronaldo</a>
			<a href="#" class="list-group-item">Lio Messi</a>
			<a href="#" class="list-group-item">Jr Neymar</a>
		</div>
		
	</div>
</div>


@endsection