<?php
require_once '../cache-config.php';
require_once '../advanced-cache.php';
wp_cache_check(); // Start output buffering and check cache
?>
<!DOCTYPE html>
<html>
<head><title>Test Page</title></head>
<body>
<h1>Welcome to Index.php</h1>
<p>This page was generated at: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>
<?php wp_cache_store(); // Save output to cache ?>   
// Silence is golden.
