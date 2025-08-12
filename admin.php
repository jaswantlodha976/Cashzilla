<?php
$page_title='Admin Panel';
include 'inc/header.php';
$ok = isset($_GET['key']) && $_GET['key'] === 'admin123';
if(!$ok){
  echo '<div class="bg-white p-6 rounded shadow text-center"><h2 class="text-lg font-semibold">Admin (Demo)</h2><p class="text-gray-600">Use ?key=admin123 to access admin list in this demo.</p></div>';
  include 'inc/footer.php';
  exit;
}
$rfile = __DIR__ . '/data/requests.json';
$content = file_exists($rfile) ? json_decode(file_get_contents($rfile), true) : ['withdraw_requests'=>[], 'deposit_requests'=>[]];
?>
<div class="bg-white shadow rounded-lg p-6">
  <h2 class="text-xl font-semibold">Admin - Requests</h2>
  <div class="mt-4">
    <h3 class="font-semibold">Withdraw Requests</h3>
    <?php if(count($content['withdraw_requests'])===0){ echo '<div class="text-gray-500">No withdraw requests</div>'; } else {
      echo '<table class="table-auto w-full mt-2"><thead><tr class="text-left"><th>ID</th><th>Name</th><th>Amount</th><th>Account</th><th>Status</th><th>Time</th></tr></thead><tbody>';
      foreach($content['withdraw_requests'] as $r){
        echo '<tr class="border-t"><td>'.htmlspecialchars($r['id']).'</td><td>'.htmlspecialchars($r['name']).'</td><td>'.htmlspecialchars($r['amount']).'</td><td>'.htmlspecialchars($r['acc']).'</td><td>'.htmlspecialchars($r['status']).'</td><td>'.htmlspecialchars($r['time']).'</td></tr>';
      }
      echo '</tbody></table>';
    } ?>
  </div>
  <div class="mt-6">
    <h3 class="font-semibold">Deposit Requests</h3>
    <?php if(count($content['deposit_requests'])===0){ echo '<div class="text-gray-500">No deposit requests</div>'; } else {
      echo '<table class="table-auto w-full mt-2"><thead><tr class="text-left"><th>ID</th><th>Amount</th><th>Method</th><th>Status</th><th>Time</th></tr></thead><tbody>';
      foreach($content['deposit_requests'] as $r){
        echo '<tr class="border-t"><td>'.htmlspecialchars($r['id']).'</td><td>'.htmlspecialchars($r['amount']).'</td><td>'.htmlspecialchars($r['method']).'</td><td>'.htmlspecialchars($r['status']).'</td><td>'.htmlspecialchars($r['time']).'</td></tr>';
      }
      echo '</tbody></table>';
    } ?>
</div>
<?php include 'inc/footer.php'; ?>
