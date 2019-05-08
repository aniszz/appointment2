@extends('layout')

@section('content')

	<div class="card-header thead-light pb-3 pt-3" ><h2><font face="OldSansBlack"><center>Meeting Request</center></font></h2> </div>

	<div class="container">
		<div class="row card">
			<div class="col card-body">
				<table class="table table-sm table-hover">
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
					<tr>
						<th>Name</th>
						<td>{{ $others->c_name }}</td>
					</tr>
					<tr>
						<th>Company Name</th>
						<td>{{ $others->c_company }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ $others->c_email }}</td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>

@endsection