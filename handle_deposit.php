<?php
// actions/handle_deposit.php
$rfile = __DIR__ . '/../data/requests.json';
$data = file_exists($rfile) ? json_decode(file_get_contents($rfile), true) : ['withdraw_requests'=>[], 'deposit_requests'=>[]];

$amount = $_POST['amount'] ?? 0;
$method = $_POST['method'] ?? 'Demo';
$note = $_POST['note'] ?? '';
$time = date('Y-m-d H:i:s');

$req = [
  'id' => uniqid('dp_'),
  'amount' => $amount,
  'method' => $method,
  'note' => $note,
  'status' => 'Requested',
  'time' => $time
];

$data['deposit_requests'][] = $req;
file_put_contents($rfile, json_encode($data, JSON_PRETTY_PRINT));

header('Location: ../dashboard.php?msg=deposit_submitted');
exit;
