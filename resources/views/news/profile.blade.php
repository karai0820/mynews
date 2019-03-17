@extends('layouts.front')
@section('content')
<div  class="container">	
	<div class="row">
		<h2>Profile</h2>
	</div>
	<div class="row">
		<div class="list-news col-md-12 mx-auto">
			<div class="row">
				@foreach($profiles as $profile)
				<table class="table table-white">
					
					<thead>
						<tr>
							<th width="30%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>name</td>
							<td>{{$profile->name}}</td>
						</tr>	
						<tr>	
							<td>gender</td>
							<td>{{$profile->gender}}</td>
						</tr>	
						<tr>	
							<td>hobby</td>
							<td>{{$profile->hobby}}</td>
						</tr>	
						<tr>	
							<td>introduction</td>
							<td>{{$profile->introduction}}</td>
						</tr>			
					</tbody>	
				</table>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection


