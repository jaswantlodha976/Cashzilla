<?php
// inc/header.php
$brand = "ColorPay";
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= isset($page_title) ? $page_title . " - $brand" : $brand ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-sky-50 to-orange-50 min-h-screen">
<nav class="bg-white/80 backdrop-blur sticky top-0 shadow">
  <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-gradient-to-br from-sky-500 to-orange-400 rounded-full flex items-center justify-center text-white font-bold">CP</div>
      <div>
        <div class="text-lg font-semibold"><?= $brand ?></div>
        <div class="text-xs text-gray-500">Demo Website</div>
      </div>
    </div>
    <div class="flex items-center gap-3">
      <a href="index.php" class="text-sm px-3 py-1 rounded hover:bg-slate-100">Home</a>
      <a href="dashboard.php" class="text-sm px-3 py-1 rounded hover:bg-slate-100">Dashboard</a>
      <a href="deposit.php" class="text-sm px-3 py-1 rounded hover:bg-slate-100">Deposit</a>
      <a href="withdraw.php" class="text-sm px-3 py-1 rounded hover:bg-slate-100">Withdraw</a>
      <a href="login.php" class="text-sm px-3 py-1 rounded bg-sky-500 text-white">Login</a>
    </div>
  </div>
</nav>
<main class="max-w-5xl mx-auto px-4 py-8">
