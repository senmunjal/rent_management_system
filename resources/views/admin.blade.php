@extends('layout')



@section('content')



<div class="container">
    <h2>Admin</h2>
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
            <label for="email_id">Email_Id:</label>
            <input type="email_id" class="form-control" id="email_id" placeholder="Email_Id" name="email_id">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm_Password:</label>
            <input type="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm_Password" name="confirm_password">
        </div>
        <div class="form-group">
            <label for="current_address">Current_Address:</label>
            <input type="current_address" class="form-control" id="current_address" placeholder="Current_Address" name="current_address">
        </div>
        <div class="form-group">
            <label for="shop_address">Shop_Address:</label>
            <input type="shop_address" class="form-control" id="shop_address" placeholder="Shop_Address" name="shop_address">
        </div>
        <div class="form-group">
            <label for="aadhar_no.">Aadhar_No.:</label>
            <input type="" class="form-control" id="aadhar_no." placeholder="Aadhar_No." name="aadhar_no.">
        </div>
        <div class="form-group">
            <label for="dob">DOB:</label>
            <input type="dob" class="form-control" id="dob" placeholder="DOB" name="dob">
        </div>
        <div class="form-group">
            <label for="admin_id">Admin_Id:</label>
            <input type="admin_id" class="form-control" id="admin_id" placeholder="Admin_Id" name="admin_id">
        </div>
        <div class="form-group">
            <label for="shop_document">Shop_Document:</label>
            <input type="shop_document" class="form-control" id="shop_document" placeholder="Shop_Document" name="shop_document">
        </div>
        <div class="form-group">
            <label for="rent_agreement">Rent_Agreement:</label>
            <input type="rent_agreement" class="form-control" id="rent_agreemant" placeholder="Rent_Agreement" name="rent_agreement">
        </div>
        <div class="form-group">
            <label for="total_shop">Total_Shop:</label>
            <input type="total_shop" class="form-control" id="total_shop" placeholder="Total_Shop" name="total_shop">
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
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
            <label>Profile Pic:</label>
            <input type="file" class="form-control" id="profile_pic" placeholder="Profile Pic" name="profile_pics">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection