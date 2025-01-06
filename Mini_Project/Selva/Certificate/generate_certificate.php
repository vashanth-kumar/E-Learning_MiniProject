<?php
// Example data - Replace these with values from your form or database
$name = isset($_POST['name']) ? $_POST['name'] : 'John Doe';
$course = isset($_POST['course']) ? $_POST['course'] : 'Web Development';
$score= isset($_POST['score']) ? $_POST['score'] : '50';
$date_issued = isset($_POST['date_issued']) ? $_POST['date_issued'] : date('Y-m-d');
$certificate_id = uniqid('CERT-');

// Load the HTML template
$template = file_get_contents('certificate_template.html');

// Replace placeholders with actual data
$template = str_replace('[Recipient Name]', $name, $template);
$template = str_replace('[Course Name]', $course, $template);
$template = str_replace('[score]', $score, $template);
$template = str_replace('[Date]', $date_issued, $template);

$template = str_replace('[Certificate ID]', $certificate_id, $template);

// Display the certificate
echo $template;
?>