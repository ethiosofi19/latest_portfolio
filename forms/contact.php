<!-- <?php
  // Replace with your actual receiving email
  $receiving_email_address = 'sofoniasadmassu19@gmail.com'; 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get and sanitize form inputs
      $name = strip_tags(trim($_POST["name"]));
      $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
      $subject = trim($_POST["subject"]);
      $message = trim($_POST["message"]);
      $phone = isset($_POST['phone']) ? trim($_POST['phone']) : 'Not provided';

      // Basic validation
      if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          http_response_code(400);
          echo "Please complete all fields correctly.";
          exit;
      }

      // Format the email content
      $email_content = "Name: $name\n";
      $email_content .= "Email: $email\n";
      $email_content .= "Phone: $phone\n\n";
      $email_content .= "Message:\n$message\n";

      // Email headers
      $email_headers = "From: $name <$email>";

      // Send the email
      if (mail($receiving_email_address, $subject, $email_content, $email_headers)) {
          http_response_code(200);
          echo "OK"; 
      } else {
          http_response_code(500);
          echo "Oops! Something went wrong and we couldn't send your message.";
      }
  } else {
      http_response_code(403);
      echo "There was a problem with your submission, please try again.";
  }
?> -->