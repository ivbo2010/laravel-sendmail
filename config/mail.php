<?php


return [
  "driver" => "smtp",
  "host" => "smtp.mailspons.com",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "aeaf94c73958440395cd",
  "password" => "fef5906b898042a6b0fa4cc1434fdb5e",
  "sendmail" => "/usr/sbin/sendmail -bs"
];
/*

smtp.mailspons.com
Port:
25, 587 or 2525 (STARTTLS / cleartext)
465 (Implicit TLS)
Username:
aeaf94c73958440395cd
Password:
fef5906b898042a6b0fa4cc1434fdb5e 

return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "da848d9cf65e29",
  "password" => "b6537de7dc9bd4",
  "sendmail" => "/usr/sbin/sendmail -bs"
];
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=da848d9cf65e29
MAIL_PASSWORD=b6537de7dc9bd4
MAIL_FROM_ADDRESS=from@example.com
MAIL_FROM_NAME=Example

*/