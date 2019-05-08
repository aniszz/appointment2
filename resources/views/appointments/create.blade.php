@extends('layout')
 
@section('content') 

  	<div class="row" id="page-profile">
     <div class="col-sm-12">
      <form  method="POST" action="{{ route('appointments.store') }}">
       @csrf
       
          <div class="card-body" >
            <div class="row">
              <div class="col-sm-6">

                

                <div class="card-header thead-light pb-2 pt-2">User's Details</div>
                <br>
                <div class="form-group">
                  <label for="user_name" class="control-label col-sm-2">Name</label>
                  <input align="middle" type="text" name="user_name" class="form-control" id="user_name" aria-describedby="user_nameHelp" placeholder="Enter name">
                </div>

                <div class="form-group">
                  <label for="user_company">Company Name</label>
                  <input type="text" name="user_company" class="form-control" id="user_company" aria-describedby="user_companyHelp" placeholder="Enter your company name">
                </div>



                
           <!--     <div>
                <label for="user_officeAddress">Office Address</label>
                <input type="text" name="user_officeAddress" class="form-control" id="user_officeAddress" aria-describedby="user_officeAddressHelp" placeholder="Enter user's office address"></div>

              <div class="form-group">
                <label for="user_address">Address</label>
                <input type="text" name="user_address" class="form-control" id="user_address" aria-describedby="user_addressHelp" placeholder="Enter user's address"></div>

              <div class="form-group">
                <label for="user_description">Description</label>
                <input type="text" name="user_description" class="form-control" id="user_descritpion" aria-describedby="user_description" placeholder="Enter user's description"></div>

              <div class="form-group"><label for="user_officeNo">Office Number</label><input type="integer" name="user_officeNo" class="form-control" id="user_officeNo" ></div>
 -->



                <div class="form-group">
                  <label for="user_mobileNo">Mobile Number</label>
                  <input type="integer" name="user_mobileNo" class="form-control" id="user_mobileNo" aria-describedby="user_mobileNoHelp" placeholder="Enter mobile number">
                </div>

                <div class="form-group">
                  <label for="user_email">Email address</label>
                  <input type="email" name="user_email" class="form-control" id="user_email" aria-describedby="user_emailHelp" placeholder="Enter email">
                </div>

              </div>
 
             <div class="col-sm-6">
                <div class= "card-header thead-light pb-2 pt-2"> Meeting's Details</div>

                <br>
                <div class="col-sm-12">
                <div class="form-group">
                  <label for="c_name">Name</label>
                  <input type="text" name="c_name" class="form-control" id="c_name" aria-describedby="c_nameHelp" placeholder="Enter client's name">
                </div>

                <div class="form-group">
                  <label for="c_commpany">Company Name</label>
                  <input type="text" name="c_company" class="form-control" id="c_company" aria-describedby="c_companyHelp" placeholder="Enter client's company">
                </div>

                <div class="form-group">
                  <label for="c_mobileNo">Mobile Number</label>
                  <input type="integer" name="c_mobileNo" class="form-control" id="c_mobileNo" aria-describedby="c_mobileNoHelp" placeholder="Enter client's mobile number">
                </div>

                <div class="form-group">
                  <label for="c_email">Email address</label>
                  <input type="email" name="c_email"  class="form-control" id="c_email" aria-describedby="c_emailHelp" placeholder="Enter client's email">
                </div>

                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject"  class="form-control" id="subject" aria-describedby="subjectHelp" placeholder="Enter subject of meeting">
                </div>

                <div>
                  <label for="date">Date</label>
                  <input type="date" name="date" id="date" class="form-control">
                </div>

                <div class="form-group">
                  <label for="time">Time</label>
                  <select class="form-control" name="time" id="time" type="text">
                    <option>10.00 am</option>
                    <option>11.00 am</option>
                    <option>12.00 pm</option>
                    <option>3.00 pm</option>
                    <option>4.00 pm</option>
                    <option>5.00 pm</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="location">Location</label>
                  <input type="text" class="form-control" name="location" id="location" aria-describedby="locationHelp" placeholder="Enter location of meeting">
                </div>
              </div>
            </div>
          </div>
        </div>

            <br>
          <button type="submit" class="btn btn-primary mb-3" style="display: block; margin: 0 auto;" style="width:300px">Submit</button>
       </form> 
      </div>
    </div>

 @endsection