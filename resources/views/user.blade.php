@extends('layout')



@section('content')


<div class="container">
    <h2>User</h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="first_name">First_Name:</label>
            <input type="first_name" class="form-control" id="first_name" placeholder="First_Name" name="first_name">
        </div>
        <div class="form-group">
            <label for="middle_name">Middle_Name:</label>
            <input type="middle_name" class="form-control" id="middle_name" placeholder="Middle_Name" name="middle_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last_Name:</label>
            <input type="last_name" class="form-control" id="last_name" placeholder="Last_Name" name="last_name">
        </div>
        <div class="form-group">
            <label for="phone_no.">Phone_No.:</label>
            <input type="phone_no." class="form-control" id="phone_no." placeholder="Phone_No." name="phone_no.">
        </div>
        <div class="form-group">
            <label for="alternate_no.">Alternate_No.:</label>
            <input type="alternate_no." class="form-control" id="alternate_no." placeholder="Alternate_No." name="alternate_no.">
        </div>
        <div class="form-group">
            <label for="email_id">Email_Id:</label>
            <input type="email_id" class="form-control" id="email_id" placeholder="Email_Id" name="email_id">
        </div>

        <div class="form-group">
            <label for="current_address">Current_Address:</label>
            <input type="current_address" class="form-control" id="current_address" placeholder="Current_Address" name="current_address">
        </div>

        <div class="form-group">
            <label for="aadhar_no.">Aadhar_No.:</label>
            <input type="" class="form-control" id="aadhar_no." placeholder="Aadhar_No." name="aadhar_no.">
        </div>
        <div class="form-group">
            <label for="rent_agreement">Rent_Agreement:</label>
            <input type="rent_agreement" class="form-control" id="rent_agreemant" placeholder="Rent_Agreement" name="rent_agreement">
        </div>
        <div class="form-group">
            <label for="Security">Security:</label>
            <input type="security" class="form-control" id="security" placeholder="Security" name="security">
        </div>
        <div class="form-group">
            <label for="tr">Total Rent(per month):</label>
            <input type="tr" class="form-control" id="tr" placeholder="" name="tr">
        </div>

        <div class="form-group">
            <label for="sa">Shop Allotment:</label>
            <input type="sa" class="form-control" id="sa" placeholder="" name="sa">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <div class="form-group">
            <label>Photo:</label>
            <input type="file" class="form-control" id="profile_pic" placeholder="Profile Pic" name="profile_pics">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection