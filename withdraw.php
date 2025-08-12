<?php $page_title='Withdraw'; include 'inc/header.php'; ?>
<div class="bg-white shadow rounded-lg p-6 max-w-lg mx-auto">
  <h2 class="text-xl font-semibold mb-3">Withdraw (Demo)</h2>
  <p class="text-gray-600 mb-4">Submit a withdraw request. Status will be "Pending" in this demo.</p>
  <form method="post" action="actions/handle_withdraw.php">
    <label class="block text-sm mb-1">Amount (₹)</label>
    <input name="amount" type="number" min="1" required class="w-full border p-2 rounded mb-3" placeholder="Enter amount to withdraw">
    <label class="block text-sm mb-1">Name</label>
    <input name="name" class="w-full border p-2 rounded mb-3" placeholder="Your full name" required>
    <label class="block text-sm mb-1">Account / UPI</label>
    <input name="acc" class="w-full border p-2 rounded mb-3" placeholder="UPI ID or account number" required>
    <label class="block text-sm mb-1">IFSC (if bank)</label>
    <input name="ifsc" class="w-full border p-2 rounded mb-4" placeholder="IFSC (optional)">
    <div class="flex justify-between items-center">
      <button class="px-4 py-2 bg-sky-500 text-white rounded">Submit Withdraw Request</button>
      <a href="dashboard.php" class="text-sm text-gray-500">Cancel</a>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>
