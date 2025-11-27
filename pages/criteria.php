<div class="content-area">
    <div class="page-intro">
        <h2><i class="fas fa-star"></i> Критерии оценки проектов</h2>
        <p>Наша система оценки основана на комплексном анализе трех ключевых категорий.</p>
    </div>

    <div class="criteria-grid">
        <div class="criteria-card">
            <div class="criteria-icon">🎯</div>
            <h3>Доходность (7 критериев)</h3>
            <ul>
                <li>Прогнозируемая рентабельность</li>
                <li>ROI (Return on Investment)</li>
                <li>Капитализация объекта</li>
                <li>Доход от аренды</li>
                <li>Срок окупаемости</li>
                <li>Потенциал роста стоимости</li>
                <li>Ликвидность актива</li>
            </ul>
        </div>

        <div class="criteria-card">
            <div class="criteria-icon">🛡️</div>
            <h3>Надежность (6 критериев)</h3>
            <ul>
                <li>Репутация застройщика</li>
                <li>Срок работы на рынке</li>
                <li>Количество завершенных проектов</li>
                <li>Юридическая прозрачность</li>
                <li>Финансовая стабильность</li>
                <li>Отзывы клиентов</li>
            </ul>
        </div>

        <div class="criteria-card">
            <div class="criteria-icon">🏘️</div>
            <h3>Класс жилья (12 критериев)</h3>
            <ul>
                <li>Качество строительства</li>
                <li>Инфраструктура района</li>
                <li>Близость к пляжу</li>
                <li>Транспортная доступность</li>
                <li>Развитие района</li>
                <li>Качество отделки</li>
                <li>Архитектура и дизайн</li>
                <li>Безопасность территории</li>
                <li>Экология района</li>
                <li>Престижность локации</li>
                <li>Социальная инфраструктура</li>
                <li>Перспективы развития</li>
            </ul>
        </div>
    </div>

    <div class="scoring-system">
        <h3>📊 Система оценок</h3>
        <div class="score-levels">
            <div class="score-level high">
                <div class="score-badge">85-100</div>
                <h4>Высокий уровень</h4>
                <p>Отличные показатели, минимальные риски, максимальная доходность</p>
            </div>
            <div class="score-level medium">
                <div class="score-badge">70-84</div>
                <h4>Средний уровень</h4>
                <p>Хорошие показатели, умеренные риски, стабильная доходность</p>
            </div>
            <div class="score-level low">
                <div class="score-badge">0-69</div>
                <h4>Базовый уровень</h4>
                <p>Базовые показатели, требуется внимательный анализ</p>
            </div>
        </div>
    </div>
</div>

<style>
.criteria-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin: 30px 0;
}

.criteria-card {
    background: linear-gradient(135deg, #f6f8fb 0%, #ffffff 100%);
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 25px;
    transition: all 0.3s ease;
}

.criteria-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: #667eea;
}

.criteria-icon {
    font-size: 48px;
    margin-bottom: 15px;
}

.criteria-card h3 {
    color: #2d3748;
    margin-bottom: 15px;
    font-size: 20px;
}

.criteria-card ul {
    list-style: none;
    padding: 0;
}

.criteria-card li {
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
    color: #4a5568;
}

.criteria-card li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #667eea;
    font-weight: bold;
}

.scoring-system {
    margin-top: 40px;
    padding: 30px;
    background: #f7fafc;
    border-radius: 12px;
}

.score-levels {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.score-level {
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.score-level.high {
    background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    color: white;
}

.score-level.medium {
    background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
    color: white;
}

.score-level.low {
    background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%);
    color: white;
}

.score-badge {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
}
</style>
