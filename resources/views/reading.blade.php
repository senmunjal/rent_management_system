@extends('layout')



@section('content')



<div class="container">
    <h2>Meter Reading</h2>
    <form method="post" action="/submitreading">
        @csrf
        <div class="form-group">
            <label for="pmr">Previous Month Reading:</label>
            <input type="pmr" class="form-control" id="pmr" placeholder="Previous Month Reading" name="pmr">
        </div>
        <div class="form-group">
            <label for="cr">Current Reading</label>
            <input type="cr" class="form-control" id="cr" placeholder="Current Reading" name="cr">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection