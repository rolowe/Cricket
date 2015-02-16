<h2>New User? Register to Play</h2>
    		
<form action="functions/register_user.php" method="post" id="register">
	<p><label>First Name: </label> <input type="text" name="first_name" id="first_name"></p>
	<p><label>Last Name: </label> <input type="text" name="last_name" id="last_name"></p>
	<p><label>Email Address: </label> <input type="text" name="email" id="email"></p>
	<p><label>Password: </label> <input type="password" name="password" id="password"></p>
	<p><label>Confirm Password: </label> <input type="password" name="password_conf" id="password_conf"></p>

	<p><label>Select your club: </label>
		<select name="club" id="club">
			<option value="">- Please select -</option>
		  	<?php
				while($club = mysql_fetch_array($clubs)) {
					echo "<option value='" .$club['name']. "'>" .$club['name']. "</option>";
				}
			?>
			<option value="other">Other</option>
		</select>
	</p>
	<p id="otherMsg" style="display:none;">Your club not listed? Register / Login to add your club to FCC.</p>

	<p><input type="submit" value="Register" /></p>
</form>