<?php

$isSent = false;
$hasError = false;
$isURLAllowed = false;
$fields = array("name", "organisation", "email", "phone", "subject", "message", "rate");

if (isset($_POST["email"]) && isset($_POST["submit"]) ) {
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $_POST[email]\r\n";

	foreach($fields as $field) {
		$message .= ucwords($field) . ": " . $_POST[$field] . "<br/>";
	}
	
	if (((strpos($message, "http://") === false && !$isURLAllowed) || $isURLAllowed) && $_POST["email"] != "") {
		$isSent = @mail("lateefnation@gmail.com", $_POST["subject"], $message, $headers);

		if(!$isSent) {
		$hasError = true;
		}
	}
	else {
		$hasError = true;
	}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Contact Us</title>
		<link href='css/style.css' type='text/css' rel='stylesheet' media='all' />
	</head>
<body>
	<p id="feedback"><?php echo $feedback; ?></p>
    <?php if ($isSent)	 { ?>
Thanks for your submission.
<?php } else { ?>	
		<?php if ($hasError) { ?>
        <font color="red">Mail cannot be sent. Please try again later.</font>
        <?php } ?>
	<form action="" method="POST" name="simpleform" id="simpleform">
		
		<table border="0" cellspacing="4" cellpadding="4" width="640" summary="table for layout only">
		<tr>
			<td align="right" width="250">Your Name:</td>
			<td><input type="text" name="name" id="name" value="<?=$_POST["name"]?>"></td>
		</tr>
		
		<tr>
			<td align="right" width="250">Organisation:</td>
			<td><input type="text" name="organisation" id="organisation" value="<?=$_POST["organisation"]?>"></td>
		</tr>
		
		<tr>
			<td align="right" width="250"><font color="red">*</font> Email Address:</td>
			<td><input type="text" name="email" id="email" size="35" value="<?=$_POST["email"]?>"></td>
		</tr>
		
		<tr>
			<td align="right" width="250">Your Telephone:</td>
			<td><input type="text" name="phone" id="phone" size="35" value="<?=$_POST["phone"]?>"></td>
		</tr>
		
		<tr>
			<td align="right" width="250"><label for="topic">Subject:</label></td>
			<td>
				<select name="subject" id="subject">
					<option value="Enquiry">Enquiry</option>
					<option value="Complaint">Complaint</option>
					<option value="Vacancy">Vacancy</option>
					<option value="Recommendation">Recommendation</option>
					<option value="Charity">Charity</option>
					<option value="Service">Service</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td align="right" width="250"></td>
			<td>Please type your message in the box below:<textarea id="message" name="message" cols="42" rows="9"><?=$_POST["message"]?></textarea></td>
		</tr>
		
		<tr>
			<td align="right" width="250" valign="top">Rate Site:</td>
			<td>
				<input type="radio" name="rate" id="rate1" value="Excellent">Excellent<br>
				<input type="radio" name="rate" id="rate2" value="Okay">Okay<br>
				<input type="radio" name="rate" id="rate3" value="Average">Average<br>
				<input type="radio" name="rate" id="rate4" value="Bad">Bad
			</td>
		</tr>
		
		<tr>
			<td align="right" width="250" valign="top"><input type="reset" value="Reset Form"></td>
			<td><input type="submit" name="submit" value="Submit Form" alt="submit form"></td>
		</tr>
		
		</table>
		
	</form>
    <?php } ?>
</body>
</html>