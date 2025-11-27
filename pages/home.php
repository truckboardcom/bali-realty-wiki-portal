<div class="content-area">
    <?php
    // Display all sections and subsections
    foreach ($content['sections'] as $index => $section):
    ?>
        <section id="section-<?php echo $index; ?>" class="content-section">
            <h2 class="section-title">
                <?php echo htmlspecialchars($section['title']); ?>
            </h2>

            <?php if (!empty($section['content'])): ?>
                <div class="section-content">
                    <?php foreach ($section['content'] as $paragraph): ?>
                        <p><?php echo nl2br(htmlspecialchars($paragraph)); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($section['subsections'])): ?>
                <?php foreach ($section['subsections'] as $sub_index => $subsection): ?>
                    <div id="subsection-<?php echo $index . '-' . $sub_index; ?>" class="subsection">
                        <h3 class="subsection-title">
                            <?php echo htmlspecialchars($subsection['title']); ?>
                        </h3>

                        <?php if (!empty($subsection['content'])): ?>
                            <div class="subsection-content">
                                <?php foreach ($subsection['content'] as $paragraph): ?>
                                    <p><?php echo nl2br(htmlspecialchars($paragraph)); ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($subsection['subsections'])): ?>
                            <?php foreach ($subsection['subsections'] as $sub_sub): ?>
                                <div class="sub-subsection">
                                    <h4><?php echo htmlspecialchars($sub_sub['title']); ?></h4>
                                    <?php if (!empty($sub_sub['content'])): ?>
                                        <div class="content">
                                            <?php foreach ($sub_sub['content'] as $paragraph): ?>
                                                <p><?php echo nl2br(htmlspecialchars($paragraph)); ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    <?php endforeach; ?>
</div>
