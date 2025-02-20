<?php
declare(strict_types=1);

// $pageTitle, $content are extracted from the data array in View::render()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?= htmlspecialchars($pageTitle ?? 'PHP Security', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/about">About</a>
        </nav>
    </header>

    <main>
        <!-- Include the actual view file -->
        <?php include $viewFile; ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> - The Irony of PHP Security</p>
    </footer>

    <script src="/js/main.js"></script>
</body>
</html>
