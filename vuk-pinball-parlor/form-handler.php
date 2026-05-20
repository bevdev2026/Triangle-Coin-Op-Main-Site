<?php
/**
 * Form handler — routes form submissions to the correct address.
 * Hostinger supports PHP mail() out of the box.
 *
 * IMPORTANT: For production, consider PHPMailer + SMTP for deliverability.
 * Hostinger SMTP details available in their hPanel.
 */

require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php'); exit;
}

// --- sanitize ---
function clean($v) {
    return trim(strip_tags(is_string($v) ? $v : ''));
}

$form_type = clean($_POST['form_type'] ?? '');
$name      = clean($_POST['name'] ?? $_POST['contact_name'] ?? '');
$email     = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

// Page to return to — derived from the form type, never from user input,
// so the redirect can't be hijacked into an open redirect.
$return = ($form_type === 'venue_intake') ? 'venue-operations.php' : 'leagues.php';

// --- honeypot: humans never see or fill the hidden "company" field ---
if (!empty($_POST['company'])) {
    // Silently accept and drop the spam — don't tip off the bot.
    header("Location: $return?sent=ok");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: $return?sent=err");
    exit;
}

// --- route by form type ---
switch ($form_type) {

    case 'venue_intake':
        $to      = $SITE['venue_email'];   // steve@optidynamics.org
        $subject = '[' . $SITE['brand'] . ' Venue Intake] ' . clean($_POST['venue_name'] ?? 'New inquiry');
        $body  = "New venue intake submission\n";
        $body .= "================================\n\n";
        $body .= "Venue:        " . clean($_POST['venue_name']  ?? '') . "\n";
        $body .= "Location:     " . clean($_POST['location']    ?? '') . "\n";
        $body .= "Foot Traffic: " . clean($_POST['foot_traffic']?? '') . "\n";
        $body .= "Contact:      $name\n";
        $body .= "Email:        $email\n\n";
        $body .= "Notes:\n"  . clean($_POST['notes'] ?? '') . "\n";
        break;

    case 'league_signup':
        $to      = $SITE['public_email'];
        $subject = '[' . $SITE['brand'] . ' League Signup] ' . $name;
        $body  = "New league registration\n";
        $body .= "================================\n\n";
        $body .= "Name:   $name\n";
        $body .= "Email:  $email\n";
        $body .= "Skill:  " . clean($_POST['skill'] ?? '') . "\n\n";
        $body .= "Notes:\n" . clean($_POST['notes'] ?? '') . "\n";
        break;

    default:
        header('Location: index.php?sent=err');
        exit;
}

$mail_host = parse_url('https://' . ($_SERVER['HTTP_HOST'] ?? 'trianglecoinop.com'), PHP_URL_HOST);
$headers  = "From: " . $SITE['brand'] . " <no-reply@" . $mail_host . ">\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = @mail($to, $subject, $body, $headers);

// --- redirect back to the form page with a status flag ---
header("Location: $return?sent=" . ($sent ? 'ok' : 'err'));
exit;
