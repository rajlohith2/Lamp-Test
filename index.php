<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Demo App</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #1a1a2e; color: #eee; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .card { background: #16213e; border-radius: 12px; padding: 32px; max-width: 400px; text-align: center; }
        h1 { color: #4fc3f7; }
        .info { background: #0f3460; border-radius: 8px; padding: 12px; margin: 8px 0; font-size: 14px; }
        .ok { color: #66bb6a; font-weight: bold; margin-top: 16px; }
    </style>
</head>
<body>
<div class="card">
    <h1>🚀 LAMP Demo</h1>
    <p>Deployed to Amazon Lightsail</p>
    <div class="info">PHP <?= phpversion() ?></div>
    <div class="info"><?= php_uname('s') . ' ' . php_uname('r') ?></div>
    <div class="info"><?= date('Y-m-d H:i:s T') ?></div>
    <p class="ok">✅ Running</p>
</div>
</body>
</html>
