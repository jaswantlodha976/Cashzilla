<?php
// actions/handle_withdraw.php
$rfile = __DIR__ . '/../data/requests.json';
$data = file_exists($rfile) ? json_decode(file_get_contents($rfile), true) : ['withdraw_requests'=>[], 'deposit_requests'=>[]];

$name = $_POST['name'] ?? 'Anonymous';
$amount = $_POST['amount'] ?? 0;
$acc = $_POST['acc'] ?? '';
$ifsc = $_POST['ifsc'] ?? '';
$time = date('Y-m-d H:i:s');

$req = [
  'id' => uniqid('wd_'),
  'name' => $name,
  'amount' => $amount,
  'acc' => $acc,
  'ifsc' => $ifsc,
  'status' => 'Pending',
  'time' => $time
];

$data['withdraw_requests'][] = $req;
file_put_contents($rfile, json_encode($data, JSON_PRETTY_PRINT));

header('Location: ../dashboard.php?msg=withdraw_submitted');
exit;
