<?
session_start();
if(isset($_SESSION['name'])){
	$text = $_POST['text'];
	
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".$text."<br></div>");
	fclose($fp);
}
?>
