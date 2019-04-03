@extends('layout')

@section('content')


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
						<td>{{ $appointment->c_name }}</td>
					</tr>
					<tr>
						<th>Company Name</th>
						<td>{{ $appointment->c_company }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ $appointment->c_email }}</td>
					</tr>
				</table>

				<div>
		          <button onclick="myFunction()" class="btn btn-primary mb-3" style="display: block; margin: 0 auto;" style="width:200px">Try it</button>
		          <p id="confirm"></p>
		          <script>
		            function myFunction() {
		              var txt;
		              var r = confirm("Are you sure to confirm the meeting?");
		              if (r == true) {
		                txt = "You have confirmed the meeting!";
		              } else {
		                txt = "You cancelled the meeting!";
		              }
		              document.getElementById("confirm").innerHTML = txt;
		            }
		          </script>
		        </div>

			</div>
		</div>
	</div>
@endsection