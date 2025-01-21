$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';  // Use Gmail SMTP or your SMTP provider
$config['smtp_port'] = 587;  // Use the appropriate port
$config['smtp_user'] = 'muktabhosale3@gmail.com';  // Your email address
$config['smtp_pass'] = 'surekha9';  // Your email password
$config['smtp_crypto'] = 'tls';  // Use encryption (optional)
$config['mailtype'] = 'html';  // Set to HTML or plain text
$config['charset'] = 'utf-8';  // Character set
$config['wordwrap'] = TRUE;



$this->load->library('email', $config);
