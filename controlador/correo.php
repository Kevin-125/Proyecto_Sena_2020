
<?php

$nombre = $_POST['n'];
$correo = $_POST['c'];

$pass = substr( md5(microtime()), 1, 10);

//Conexion con la base
$conn = new mysqli("localhost", "root", "", "database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // codigo para enviar correo por medio de localhost
    $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'kevinandres1250987@gmail.com';                     // SMTP username
    $mail->Password   = 'kaneki1250987';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('kevinandres1250987@gmail.com', 'kevin');
    $mail->addAddress($correo, $pass);     // Add a recipient
                  // Name is optional
  

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Restablecimiento de Contraseña';
    $mail->Body    = $nombre.' su nueva contraseña es: ' .$pass;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}

$sql = "Update usuarios Set clave='$pass' Where correo='$correo'";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error modificando: " . $conn->error;
}