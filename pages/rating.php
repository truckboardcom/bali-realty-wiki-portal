<div class="content-area">
    <div class="page-intro">
        <h2><i class="fas fa-chart-bar"></i> Рейтинг проектов недвижимости</h2>
        <p>Полный список проектов с детальными оценками по всем критериям.</p>
    </div>

    <?php
    // Extract project information from content
    $projects = [];

    foreach ($content['sections'] as $section) {
        if (strpos($section['title'], 'Полный рейтинг') !== false || 
            strpos($section['title'], 'рейтинг проектов') !== false) {

            foreach ($section['subsections'] as $subsection) {
                foreach ($subsection['subsections'] as $project) {
                    $title = $project['title'];

                    // Parse project data
                    if (preg_match('/^(\d+)\.\s*Застройщик:\s*(.+)$/u', $title, $matches)) {
                        $projects[] = [
                            'rank' => $matches[1],
                            'developer' => $matches[2],
                            'content' => implode("\n", $project['content'])
                        ];
                    }
                }
            }
        }
    }

    if (empty($projects)) {
        // Show all subsections as projects
        foreach ($content['sections'][0]['subsections'] as $subsection) {
            if (!empty($subsection['subsections'])) {
                foreach ($subsection['subsections'] as $idx => $project) {
                    $projects[] = [
                        'rank' => $idx + 1,
                        'developer' => $project['title'],
                        'content' => implode("\n", $project['content'])
                    ];
                }
            }
        }
    }
    ?>

    <div class="projects-list">
        <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-header">
                    <div>
                        <span class="project-rank">#<?php echo $project['rank']; ?></span>
                        <h3 class="project-title"><?php echo htmlspecialchars($project['developer']); ?></h3>
                    </div>
                </div>
                <div class="project-details">
                    <?php echo nl2br(htmlspecialchars(substr($project['content'], 0, 500))); ?>
                    <?php if (strlen($project['content']) > 500): ?>
                        <a href="#" class="read-more">Читать далее...</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if (empty($projects)): ?>
        <div class="no-data">
            <i class="fas fa-info-circle"></i>
            <p>Данные о проектах загружаются. Пожалуйста, проверьте раздел "Главная".</p>
        </div>
    <?php endif; ?>
</div>

<style>
.projects-list {
    margin-top: 30px;
}

.project-rank {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    margin-right: 15px;
}

.no-data {
    text-align: center;
    padding: 60px 20px;
    color: #718096;
}

.no-data i {
    font-size: 64px;
    margin-bottom: 20px;
}
</style>
