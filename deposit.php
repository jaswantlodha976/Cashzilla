<?php $page_title='Deposit'; include 'inc/header.php'; ?>
<div class="bg-white shadow rounded-lg p-6 max-w-lg mx-auto">
  <h2 class="text-xl font-semibold mb-3">Deposit (Demo)</h2>
  <p class="text-gray-600 mb-4">This demo does not process real payments. Submitting will create a deposit request that admin can view.</p>
  <form method="post" action="actions/handle_deposit.php">
    <label class="block text-sm mb-1">Amount (₹)</label>
    <input name="amount" type="number" min="1" required class="w-full border p-2 rounded mb-3" placeholder="Enter amount">
    <label class="block text-sm mb-1">Payment Method</label>
    <select name="method" class="w-full border p-2 rounded mb-3">
      <option>UPI (Demo)</option>
      <option>Bank Transfer (Demo)</option>
    </select>
    <label class="block text-sm mb-1">Note (optional)</label>
    <input name="note" class="w-full border p-2 rounded mb-4" placeholder="Any note">
    <div class="flex justify-between items-center">
      <button class="px-4 py-2 bg-orange-500 text-white rounded">Submit Deposit Request</button>
      <a href="dashboard.php" class="text-sm text-gray-500">Cancel</a>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>
