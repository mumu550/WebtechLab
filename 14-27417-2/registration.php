<?php
	require 'config.php';
?>

<?php error_reporting(0);?>



<?php
			if(isset($_POST['submit_btn']))
			{
				
				$name =$_POST['name'];
				$email = $_POST['email'];
				$userName = $_POST['userName'];
				$password = $_POST['password'];
				$confirmPassword = $_POST['confirmPassword'];
				$gender = $_POST['gender'];
				$yy = $_POST['yy'];
				$mm = $_POST['mm'];
				$dd = $_POST['dd'];
			
                 
				
				
				
				if($password==$confirmPassword)
				{
					
					$query= "select * from fileuploadtable WHERE username='$userName'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					
					
					
					
					else
					{
							
						$query= "insert into fileuploadtable values('$name','$email','$userName','$password','$gender','$yy-$mm-$dd')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
					
					
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
				
				
				
				
			}
			
			
		?>


<fieldset>
     <h4>All fileds need to fillup </h4>
    <legend><b>REGISTRATION</b></legend>
	<form action="registration.php"method="post" enctype="multipart/form-data" >
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" <?php if(empty($_post['name'])){echo "required";} ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" <?php if(empty($_post['email'])){echo "required";} ?>>
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text" <?php if(empty($_post['userName'])){echo "required";} ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" <?php if(empty($_post['password'])){echo "required";} ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" <?php if(empty($_post['confirmPassword'])){echo "required";} ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male" <?php if(empty($_post['gender'])){echo "required";} ?> >Male
						<input name="gender" type="radio" value="Female" <?php if(empty($_post['gender'])){echo "required";} ?>>Female
						<input name="gender" type="radio" value="Other" <?php if(empty($_post['gender'])){echo "required";} ?>>Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" name="yy" size="4" />/
						<input type="text" name="mm" size="2" />/
						<input type="text" name="dd" size="2" />
						<font size="2"><i>(yyyy/mm/dd)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input name="submit_btn" type="submit" value="Submit" >
		<input type="reset">
	</form>
</fieldset>