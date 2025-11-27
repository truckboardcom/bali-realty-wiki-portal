<?php
session_start();

// Document data
$document_title = "Рейтинг проектов недвижимости на Бали";
$document_subtitle = "Полный обзор 88 проектов с оценкой надежности и доходности";

// Load content data
$content_file = 'data/content.json';
$content = json_decode(file_get_contents($content_file), true);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title; ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-home"></i>
                <h2>Bali Недвижимость</h2>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php" class="active"><i class="fas fa-home"></i> Главная</a></li>
                    <li><a href="index.php?page=criteria"><i class="fas fa-star"></i> Критерии оценки</a></li>
                    <li><a href="index.php?page=rating"><i class="fas fa-chart-bar"></i> Рейтинг проектов</a></li>
                    <li><a href="index.php?page=about"><i class="fas fa-info-circle"></i> О портале</a></li>
                </ul>
            </nav>

            <!-- Table of Contents -->
            <div class="toc">
                <h3><i class="fas fa-list"></i> Содержание</h3>
                <ul>
                    <?php foreach ($content['sections'] as $index => $section): ?>
                        <li>
                            <a href="#section-<?php echo $index; ?>">
                                <?php echo htmlspecialchars($section['title']); ?>
                            </a>
                            <?php if (!empty($section['subsections'])): ?>
                                <ul>
                                    <?php foreach ($section['subsections'] as $sub_index => $subsection): ?>
                                        <li>
                                            <a href="#subsection-<?php echo $index . '-' . $sub_index; ?>">
                                                <?php echo htmlspecialchars($subsection['title']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="page-header">
                <h1><?php echo $document_title; ?></h1>
                <p class="subtitle"><?php echo $document_subtitle; ?></p>
            </header>

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            switch($page) {
                case 'criteria':
                    include 'pages/criteria.php';
                    break;
                case 'rating':
                    include 'pages/rating.php';
                    break;
                case 'about':
                    include 'pages/about.php';
                    break;
                case 'home':
                default:
                    include 'pages/home.php';
                    break;
            }
            ?>
        </main>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>
