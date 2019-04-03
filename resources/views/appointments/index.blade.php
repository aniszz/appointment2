@extends('layout')

@section('content')

  <div class="card-header thead-light pb-3 pt-3" ><h2><font face="OldSansBlack"><center>Your Appointment Has Been Submitted!</center></font></h2> </div>

	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<table class="table table-sm table-hover">
					<tr>
						<th>Subject</th>
						<td>{{ $appointments->subject }}</td>
					</tr>
					<tr>
						<th>Date</th>
						<td>{{ $appointments->date }}</td>
					</tr>
					<tr>
						<th>Time</th>
						<td>{{ $appointments->time }}</td>
					</tr>
					<tr>
						<th>Contact Info</th>
						<td>{{ $others->c_name }}</td>
						<td>{{ $others->c_company }}</td>
						<td>{{ $others->c_mobileNo }}</td>
						<td>{{ $others->c_email }}</td>
						<td>{{ $others->c_location }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection