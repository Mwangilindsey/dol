<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Lindsey Mwangi',
    'mail_from' => 'lindsey.mwangi@strathmore.edu',
    'name_to' => 'Lindsey Mwangi',
    'mail_to' => 'lindseymwangi25@gmail.com',
    'subject' => 'Greetings from BBIT DevOps',
    'body' => 'Welcome to <b>BBIT DevOps</b>! This is a new semester of learning and growth.'
];

// $ObjSendMail->Send_Mail($conf, $mailCnt);

print basename($_SERVER['PHP_SELF']);