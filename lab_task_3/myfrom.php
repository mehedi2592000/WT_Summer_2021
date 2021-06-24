<?php include "control/jon.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		
		<hr>
		
		<form action="" method="post">
			<table>
				<tr>
				<td> Name :</td>
				<td><input name="fname" type="text"></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="email" name="email"> </td>
				</tr>
				
				<tr>
				<td>Password :</td>
				<td><input type="password" name="password"> </td>
				</tr>
				
				<tr>
				<td>Comment :</td>
				<td><textarea rows="4" cols="40" name="comment"></textarea></td></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
					</td>
				</tr>
				
				
				
				
				<tr>
					<td><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>