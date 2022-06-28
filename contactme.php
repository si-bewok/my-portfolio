<?php 

if (!$_POST) {
    echo "tidak ada data";
  } else {
    $data = [
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "email" => $_POST["email"],
        "message" => $_POST["message"]
    ];
  
    sendEmail($data);
  }

function sendEmail($data) {
  $subject = "Hi! I'm " . $data['firstname'] . ' ' . $data['lastname'];
  $headers = "From: " . $data['email'];
  $txt = $data['message'];
  $to = "zhafari.work@gmail.com";

  if (mail($to, $subject, $txt, $headers)) {
    return $h2 = 'Email berhasil terkirim.';
  } else {
    return $h2 = 'Email gagal terkirim.';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me | M. Zhafari</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
      background-color: rgba(69, 162, 158, 0.8);
    }

    h2 {
      color: whitesmoke;
    }
  </style>
</head>
<body>
    <h2><?= $h2; ?></h2>
</body>
</html>