<?php $page_title='Login'; include 'inc/header.php'; ?>
<div class="bg-white shadow rounded-lg p-6 max-w-md mx-auto">
  <h2 class="text-xl font-bold mb-4">Login (Demo)</h2>
  <form method="post" action="dashboard.php">
    <label class="block mb-2 text-sm">Email</label>
    <input name="email" class="w-full border p-2 rounded mb-3" placeholder="you@example.com" required>
    <label class="block mb-2 text-sm">Password</label>
    <input type="password" name="password" class="w-full border p-2 rounded mb-3" placeholder="password" required>
    <div class="flex justify-between items-center">
      <button class="px-4 py-2 bg-sky-500 text-white rounded">Login</button>
      <a href="index.php" class="text-sm text-gray-500">Back to home</a>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>
