<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger mt-all-20" role="alert" onclick="this.classList.add('hidden')">
	<strong>Oh snap!</strong> <?= $message ?>
</div>