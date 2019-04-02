<?php require_once('connect.php'); 
//if($_REQUEST['operation'] == 'edit'){ 
$id = $_REQUEST['id']; 
$SelSql = "SELECT * FROM `crud` WHERE id=$id"; 
$res = mysqli_query($connection, $SelSql); 
$r = mysqli_fetch_assoc($res);
if($_REQUEST['operation'] == 'update'){ 
	$id = $_REQUEST['id']; 
	$fname = mysql_real_escape_string($_REQUEST['fname']); 
	$lname = mysql_real_escape_string($_REQUEST['lname']); 
	$email = mysql_real_escape_string($_REQUEST['email']); 
	$gender = $_REQUEST['gender']; $age = $_REQUEST['age'];
	$UpdateSql = "UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id"; $res = mysqli_query($connection, $UpdateSql);
}?>
<form method="post" class="form-horizontal col-md-6 col-md-offset-3"> 
	<h2>UPDATE Operation in CRUD Application</h2> 
	<div class="form-group"> 
	<label for="input1" class="col-sm-2 control-label">First Name</label> 
	<div class="col-sm-10"> 
	<input type="text" id="fname" class="form-control" value="<?php echo 
$r['first_name']; ?>" placeholder="First Name" />
	</div> 
	</div>
	<div class="form-group"> 
	<label for="input1" class="col-sm-2 control-label">Last Name</label> 
	<div class="col-sm-10"> 
	<input type="text" id="lname" class="form-control" value="<?php echo 
$r['last_name']; ?>" placeholder="Last Name" /> 
	</div> 
	</div>
	<div class="form-group"> 
	<label for="input1" class="col-sm-2 control-label">E-Mail</label> 
	<div class="col-sm-10"> 
	<input type="email" id="email" class="form-control" value="<?php echo 
$r['email_id']; ?>" placeholder="E-Mail" /> 
	</div> 
	</div>
	<div class="form-group" class="radio"> 
	<label for="input1" class="col-sm-2 control-label">Gender</label> 
	<div class="col-sm-10"> 
	<label> 
	<input type="radio" id="gender" value="male" <?php if($r['gender'] == 'male'){ 
echo "checked";} ?>> Male 
	</label> 
		<label> 
	<input type="radio" id="gender" value="female" <?php if($r['gender'] == 'female'){ echo "checked";} ?>> Female 
	</label> 
	</div> 
	</div>
	<div class="form-group"> 
	<label for="input1" class="col-sm-2 control-label">Age</label> 
	<div class="col-sm-10">
<select id="age" class="form-control">
<option>Select Your Age</option>
<option value="20" <?php if($r['age'] == '20'){ echo "selected";} ?>>20</option>
<option value="21" <?php if($r['age'] == '21'){ echo "selected";} ?>>21</option>
<option value="22" <?php if($r['age'] == '22'){ echo "selected";} ?>>22</option>
<option value="23" <?php if($r['age'] == '23'){ echo "selected";} ?>>23</option>
<option value="24" <?php if($r['age'] == '24'){ echo "selected";} ?>>24</option>
<option value="25" <?php if($r['age'] == '25'){ echo "selected";} ?>>25</option>
</select>
</div>
</div>
<input type="submit" class="btnbtn-primary col-md-2 col-md-offset-10" value="Update" onclick="ajax_edit('update', <?php echo $r['id']; ?>); return false;"/>
</form>
	