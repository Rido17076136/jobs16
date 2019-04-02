<!DOCTYPE html>
<html>
<head>
<title>Simple AJAX CRUD Application in PHP & MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="styles.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="myScript.js"></script>
</head>
<body onload="ajax();">
<div class="container">
<div class="row" id="edit">
<form class="form-horizontal col-md-6 col-md-offset-3">
<h2>Create Operation in CRUD Application</h2>
<div class="form-group">
<label for="input1" class="col-sm-2 control-label">First Name</label>
<div class="col-sm-10">
<input type="text" id="fname" class="form-control" placeholder="First Name" />
</div>
<div class="form-group">
<label for="input1" class="col-sm-2 control-label">Last Name</label>
<div class="col-sm-10">
<input type="text" id="lname" class="form-control" placeholder="Last Name" />
</div>
</div>
<div class="form-group">
<label for="input1" class="col-sm-2 control-label">E-Mail</label>
<div class="col-sm-10">
<input type="email" id="email" class="form-control" placeholder="E-Mail" />
</div>
</div>
<div class="form-group" class="radio">
<label for="input1" class="col-sm-2 control-label">Gender</label>
<div class="col-sm-10">
<label>
<input type="radio" id="gender" value="male"> Male
</label>
<label>
<input type="radio" id="gender" value="female"> Female
</label>
</div>
</div>
</div>
<div class="form-group">
<label for="input1" class="col-sm-2 control-label">Age</label>
<div class="col-sm-10">
<select id="age" class="form-control">
<option value="">Select Your Age</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
</select>
</div>
</div>
<!--<a class="btnbtn-primary" onclick="ajax();" >Get View Data</a> -->
<input type="submit" class="btnbtn-primary col-md-2 col-md-offset-10" value="submit" onclick="ajax('create'); return false;"/>
</form>
</div>
<div class="row">
	<table class="table ">
<thead>
<tr>
<th>#</th>
<th>Full Name</th>
<th>E-Mail</th>
<th>Age</th>
<th>Gender</th>
<th>Extras</th>
</tr>
</thead>
<tbody id="result">
</tbody>
</table>
</div>
</div>
</body>
</html>