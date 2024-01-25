<?php
$hostname = '{imap.gmail.com:993/imap/ssl}';
$username = 'username@gmail.com';
$password = 'less app password';
$inbox = imap_open($hostname, $username, $password);
$nums = imap_num_msg($inbox);
echo  $nums;
for ($i = 1; $i <= $nums; $i++) {
  // $headers = imap_fetchheader($inbox, $i);
  // echo  $headers;
  $overview = imap_fetch_overview($inbox, $i, 0);
  echo $overview[0]->subject . "<BR>";
}
imap_close($inboxi);
