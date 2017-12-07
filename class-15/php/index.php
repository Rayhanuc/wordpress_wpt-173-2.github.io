<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Personal Information</h1>

	<form action="" method="post">
		<table>
			<tr>		
				<td><lebel for="first">First name:</lebel></td>
				<td><input type="text" name="first_name" id="first"></td>
			</tr>

			<tr>
				<td><lebel for="last-name">Last name:</lebel></td>
				<td><input type="text" name="last_name" id="last-name"></td>
			</tr>

			<tr>
				<td><lebel for="father-name">Father's name:</lebel></td>
				<td><input type="text" name="father_name" id="father-name"></td>
			</tr>

			<tr>
				<td><lebel for="mother-name">Mother's name:</lebel></td>
				<td><input type="text" name="mother_name" id="father-name"></td>
			</tr>

			<tr>
				<td><lebel for="date-birth">Date of Birth:</lebel></td>
				<td><input type="text" name="date_birth" id="date-birth"></td>
			</tr>

			<tr>
				<td><lebel for="religion">Religion:</lebel></td>
				<td><input type="text" name="religion" id="religion"></td>
			</tr>

			<tr>
				<td><lebel for="marital-status">Marital Status:</lebel></td>
				<td><input type="text" name="marital_status" id="marital-status"></td>
			</tr>

			<tr>
				<td><lebel for="language-known">Language Known:</lebel></td>
				<td><input type="text" name="language_known" id="language-known"></td>
			</tr>

			<tr>
				<td><lebel for="gender">Gender</lebel></td>
				<td><input type="text" name="gender" id="gender"></td>
			</tr>

			<tr>
				<td><lebel for="interested-in">Interested In</lebel></td>
				<td><input type="text" name="interested_in" id="interested-in"></td>
			</tr>

			<tr>
				<td><lebel for="political-view">Political Views</lebel></td>
				<td><input type="text" name="political_view" id="political-view"></td>
			</tr>

			<tr>
				<td><lebel for="permanent-address">Permanent Address:</lebel></td>
				<td><input type="text" name="permanent_address" id="permanent-address"></td>
			</tr>

			<tr>
				<td><lebel for="present-address">Present Address:</lebel></td>
				<td><input type="text" name="present_address" id="present-address"></td>
			</tr>

			<tr>
				<td><lebel for="school-name">School Name:</lebel></td>
				<td><input type="text" name="school_name" id="school-name"></td>
			</tr>

			<tr>
				<td><lebel for="college-name">College Name:</lebel></td>
				<td><input type="text" name="college_name" id="college-name"></td>
			</tr>

			<tr>
				<td><lebel for="university-name">University Name:</lebel></td>
				<td><input type="text" name="university_name" id="university-name"></td>
			</tr>

			<tr>
				<td><lebel for="mobile-no">Mobile No:</lebel></td>
				<td><input type="text" name="mobile_no" id="mobile-no"></td>
			</tr>

			<tr>
				<td><lebel for="email-address">Email Address:</lebel></td>
				<td><input type="text" name="email_address" id="email-address"></td>
			</tr>

			<tr>
				<td><lebel for="facebook-address">Facebook Address:</lebel></td>
				<td><input type="text" name="facebook_address" id="facebook-address"></td>
			</tr>

			<tr>
				<td><lebel for="twitter-address">Twitter Address:</lebel></td>
				<td><input type="text" name="twitter_address" id="twitter-address"></td>
			</tr>

			<tr>
				<td><lebel for="linkedin-address">Linkedin Address:</lebel></td>
				<td><input type="text" name="linkedin_address" id="linkedin-address"></td>
			</tr>

			<tr>
				<td><lebel for="national-id-no">National ID No:</lebel></td>
				<td><input type="text" name="national_id_no" id="national-id-no"></td>
			</tr>

			<tr>
				<td><lebel for="district">District:</lebel></td>
				<td><input type="text" name="district" id="district"></td>
			</tr>

			<tr>
				<td><label for="city">City:</label></td>
				<td><input type="text" name="city" id="city"></td>
			</tr>

			<tr>
				<td><label for="country">Country:</label></td>
				<td><input type="text" name="country" id="country"></td>
			</tr>

			<tr>
				<td></td>
				<td><input class="btn" type="submit" value="submit" name="submit"></td>
			</tr>
		</table>
	</form>



	<?php

		if(isset($_POST['submit'])) {

		$first_name =$_POST['first_name'];
		$last_name =$_POST['last_name'];
		$father_name =$_POST['father_name'];
		$mother_name =$_POST['mother_name'];
		$date_birth =$_POST['date_birth'];
		$religion =$_POST['religion'];
		$marital_status =$_POST['marital_status'];
		$language_known =$_POST['language_known'];
		$gender =$_POST['gender'];
		$interested_in =$_POST['interested_in'];
		$political_view =$_POST['political_view'];
		$permanent_address =$_POST['permanent_address'];
		$present_address =$_POST['present_address'];
		$school_name =$_POST['school_name'];
		$college_name =$_POST['college_name'];
		$university_name =$_POST['university_name'];
		$mobile_no =$_POST['mobile_no'];
		$email_address =$_POST['email_address'];
		$facebook_address =$_POST['facebook_address'];
		$twitter_address =$_POST['twitter_address'];
		$linkedin_address =$_POST['linkedin_address'];
		$national_id_no =$_POST['national_id_no'];
		$district =$_POST['district'];
		$city =$_POST['city'];
		$country =$_POST['country'];


		echo "First Name: " . $first_name. "<br/>";
		echo "Last Name: " . $last_name. "<br/>";
		echo "Father Name: " . $father_name. "<br/>";
		echo "Mother Name: " . $mother_name. "<br/>";
		echo "Date of Birth: " . $date_birth. "<br/>";
		echo "Religion: ". $religion. "<br/>";
		echo "Marital Status " . $marital_status. "<br/>";
		echo "Language Known: " . $language_known. "<br/>";
		echo "Gender: " . $gender. "<br/>";
		echo "Interested In: " . $interested_in. "<br/>";
		echo "Political View: " . $political_view. "<br/>";
		echo "Permanent Address: " . $permanent_address. "<br/>";
		echo "Persent Address: " . $present_address. "<br/>";
		echo "School Name: " . $school_name. "<br/>";
		echo "College Name: " . $college_name. "<br/>";
		echo "University Name: " . $university_name. "<br/>";
		echo "Mobile No: " . $mobile_no. "<br/>";
		echo "Email Address: " . $email_address. "<br/>";
		echo "Facebook Address: " . $facebook_address. "<br/>";
		echo "Twitter Address: " . $twitter_address. "<br/>";
		echo "Linkedin Address: " . $linkedin_address. "<br/>";
		echo "National ID No:" . $national_id_no. "<br/>";
		echo "District: " . $district. "<br/>";
		echo "City: " . $city. "<br/>";
		echo "Country: " . $country. "<br/>";

	}
		






	?>
</body>
</html>