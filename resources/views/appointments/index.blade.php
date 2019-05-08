@extends('layout')

@section('content')

  <div class="card-header thead-light pb-3 pt-3" ><h2><font face="OldSansBlack"><center>Your Appointment Has Been Submitted!</center></font></h2> </div>

	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<table class="table table-sm table-hover">

					@foreach ($appointments as $appointment)
					<tr>
						<th>Subject</th>
						<td>{{ $appointment->subject }}</td>
					</tr>
					<tr>
						<th>Date</th>
						<td>{{ $appointment->date }}</td>
					</tr>
					<tr> 
						<th>Time</th>
						<td>{{ $appointment->time }}</td>
					</tr>
					@endforeach

					@foreach ($others as $other)
					<tr>
						<th>Contact Info</th>
						<td>{{ $other->c_name }}</td>
						<td>{{ $other->c_company }}</td>
						<td>{{ $other->c_mobileNo }}</td>
						<td>{{ $other->c_email }}</td>
						<td>{{ $other->c_location }}</td>
					</tr>
					@endforeach
					
				</table>

			</div>
		</div>
	</div>
@endsection