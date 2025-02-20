<?php
declare(strict_types=1);

// Provided by the controller via $data array
?>
<h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
<p><?= nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8')) ?></p>
