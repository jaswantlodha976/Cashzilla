<?php
$page_title='Dashboard';
include 'inc/header.php';
$email = $_POST['email'] ?? 'demo@user.com';
$balance = 0;
?>
<div class="bg-white shadow rounded-lg p-6">
  <div class="flex items-center justify-between">
    <h2 class="text-xl font-semibold">Hello, <?= htmlspecialchars($email) ?></h2>
    <div class="text-right">
      <div class="text-sm text-gray-500">Membership</div>
      <div class="font-bold text-sky-600">Demo</div>
    </div>
  </div>
  <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="p-4 border rounded-lg bg-gradient-to-br from-sky-50 to-sky-100">
      <div class="text-sm text-gray-500">Current Balance</div>
      <div class="text-2xl font-bold">₹ <?= number_format($balance,2) ?></div>
    </div>
    <a href="deposit.php" class="p-4 border rounded-lg bg-white flex items-center justify-center">
      <div>
        <div class="text-sm text-gray-500">Add Money</div>
        <div class="text-lg font-semibold">Deposit</div>
      </div>
    </a>
    <a href="withdraw.php" class="p-4 border rounded-lg bg-white flex items-center justify-center">
      <div>
        <div class="text-sm text-gray-500">Withdraw</div>
        <div class="text-lg font-semibold">Withdraw Now</div>
      </div>
    </a>
  </div>

  <div class="mt-6">
    <h3 class="font-semibold">Recent Requests</h3>
    <?php
    $rfile = __DIR__ . '/data/requests.json';
    $content = file_exists($rfile) ? json_decode(file_get_contents($rfile), true) : ['withdraw_requests'=>[],'deposit_requests'=>[]];
    $recent = array_slice($content['withdraw_requests'], -5);
    if(count($recent) === 0){
      echo '<div class="text-gray-500 mt-2">No recent requests</div>';
    } else {
      echo '<ul class="mt-2">';
      foreach($recent as $req){
        echo '<li class="p-2 border-b flex justify-between"><div><b>'.htmlspecialchars($req['name']).'</b> requested ₹'.htmlspecialchars($req['amount']).'</div><div class="text-sm text-orange-500">'.htmlspecialchars($req['status']).'</div></li>';
      }
      echo '</ul>';
    }
    ?>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
