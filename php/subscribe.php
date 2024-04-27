<?php

// 1. Validate email address:
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email address.";
  exit;
}

$email = $_POST['email'];

// 2. Choose your mailing service (replace with your provider's code):
// - Example using Mailgun (replace with your API key and domain):

$apiKey = 'bd4f0c74b4796ad5e614886fb2265ac7-2175ccc2-629796f6';
$domain = 'sandboxc04bf5506406417cbd7d800fb45b44b3.mailgun.org';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.mailgun.net/v3/$domain/messages");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "api:$apiKey");
$formData = array(
  'from' => 'Your Name <youremail@example.com>',
  'to' => $email,
  'subject' => 'Welcome to Our Newsletter!',
  'html' => '<h1>Thanks for subscribing!</h1><p>You\'ll now receive our updates.</p>'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($formData));
$result = curl_exec($ch);
curl_close($ch);

if ($result) {
  echo "Subscription successful!";
} else {
  echo "Error subscribing.";
}
*/

// - Replace with your preferred mailing service's API integration code.

// 3. (Optional) Confirmation email (if not handled by your service):
// /*
// $to = $email;
// $subject = 'Confirm your subscription';
// $message = 'Click this link to confirm: https://yourwebsite.com/confirm.php?email=' . urlencode($email);
// $headers = 'From: Your Name <youremail@example.com>';
// mail($to, $subject, $message, $headers);
// */

?>