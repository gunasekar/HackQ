<?php
	$msg = NULL;
	if(isset($_POST['submit'])){
		if(isset($_POST['name']) && isset($_POST['from']) && isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message'])){
			$name = $_POST['name'];
			$from = $_POST['from'];
			$to = $_POST['to'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$message = $message."\n\n\n\n\n\n\nThis is a fake mail sent from gct.net.in/hackq [Intended for educational purpose!]\n\nauto | bots>>";
			mail($to, $subject, $message, "From: \"$name\" <$from>\r\n" . "X-Mailer: PHP/" . phpversion());
			$msg = "Fake Mail Sent!";
		}
		else
		$msg = "Invalid/Missing inputs";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta name="Description" content="MathGenie - Online Math Contest" />
<meta name="Keywords" content="IQ, InfoQuest, IQ 12, InfoQuest 12, GCT, Coimbatore, InfoQuestGCT, infoquest gct" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="images/Envision.css" type="text/css" />

<title>Fake Mail from auto | bots >></title>

</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header">			
				
			<h1 id="logo-text"><a href="./">Fake Mail</a></h1>		
			<p id="slogan" style="margin-left: 100px">from auto | bots >> <a style="color:white; text-decoration: none; font-weight: bold" href="http://infoquest.gct.net.in/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only @ hackQ</a></p>		
			<div id="header-links">
			
		</div>		
						
		</div>
		
		<!-- menu -->	
		<div  id="menu">
		</div>					
			
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			<div id="sidebar">
			This site is purely for educational purpose!<br><br>
			Misusing this is highly prohibited and it is an offence according to Section 66 of Indian IT Act!
			</div>
				
			<div id="main">
			<?php
			if($msg)
			echo "<h4 align='center'>$msg</h4>";
			?>
				<form name="sendForm" id="sendForm" action="index.php" method="post">
					<label>Name of the Sender</label>
					<input name="name" id="name" type="text" value=""/><br>
					<label>Sender Mail ID</label>
					<input name="from" id="from" type="text" value=""/><br>
					<label>Target Mail ID</label>
					<input name="to" id="to" type="text" value=""/><br>
					<label>Subject</label>
					<input name="subject" id="subject" type="text" value=""/><br>
					<label>Your Message</label>
					<textarea name="message" id="message" rows="10" cols="50"></textarea>
					<input type="submit" name="submit" value="Send Your Message!">
				</form>
				<div id="sendForm_errorloc"></div>
				<script language="JavaScript" type="text/javascript">
					var frmvalidator  = new Validator("sendForm");
					frmvalidator.EnableOnPageErrorDisplaySingleBox();
					frmvalidator.EnableMsgsTogether();
					frmvalidator.addValidation("name","req","Please enter the Sender's name!");
					frmvalidator.addValidation("from","req","Please enter the Sender Mail ID!");
					frmvalidator.addValidation("to","req","Please enter the Target Mail ID!");
					frmvalidator.addValidation("subject","req","Please enter the Subject!");
					frmvalidator.addValidation("content","req","Please enter the Content!");
				</script>

			</div>
		
		<!-- content-wrap ends here -->	
		</div>
					
		<!--footer starts here-->
		<div id="footer">
			
            <p>
		    &copy; 2012 <strong>GCT CSITA - iTeam</strong>

   	    </p>
				
		</div>	

<!-- wrap ends here -->
</div>

</body>
</html>
