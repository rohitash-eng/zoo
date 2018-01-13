<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success mt-all-20" role="alert" onclick="this.classList.add('hidden')">
	<strong>Well done!</strong> <?= $message ?>
</div>

