<?php

if (isset($_POST['submit']))
{
$name       = $_POST['name'];
$subject    = $_POST['subject'];
$mailFrom   = $_POST['mail'];
$message    = $_POST['message'];

$mailTo = "Ruben.Rosalia2002@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contactform.php?mailsend");
}
echo "Mail has been sent, I'll respond in 24hours!";
echo "<a href='index.html'>Go back to website</a>";
