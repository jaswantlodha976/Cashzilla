<?php $page_title='Home'; include 'inc/header.php'; ?>
<div class="bg-white shadow rounded-lg p-6">
  <h1 class="text-2xl font-bold mb-2">Welcome to <?= $brand ?></h1>
  <p class="text-gray-700 mb-4">This is a demo website with deposit and withdraw UI only. No real payments are processed.</p>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="p-4 border rounded-lg bg-gradient-to-br from-sky-50 to-sky-100">
      <div class="text-sm text-gray-500">Balance</div>
      <div class="text-2xl font-bold">₹ <span id="balance">0</span></div>
    </div>
    <a href="deposit.php" class="p-4 border rounded-lg hover:shadow-lg bg-white flex items-center justify-center">
      <div>
        <div class="text-sm text-gray-500">Deposit</div>
        <div class="text-lg font-semibold">Add Money</div>
      </div>
    </a>
    <a href="withdraw.php" class="p-4 border rounded-lg hover:shadow-lg bg-white flex items-center justify-center">
      <div>
        <div class="text-sm text-gray-500">Withdraw</div>
        <div class="text-lg font-semibold">Withdraw Funds</div>
      </div>
    </a>
  </div>
  <div class="mt-6">
    <h2 class="text-lg font-semibold mb-2">How this demo works</h2>
    <ul class="list-disc ml-6 text-gray-700">
      <li>Deposit & Withdraw pages only simulate requests (no real transfer).</li>
      <li>Requests are stored in <code>data/requests.json</code>.</li>
      <li>Admin panel shows requests but doesn't send money.</li>
    </ul>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
