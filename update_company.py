# Скрипт для обновления компании в базе

import json

def update_company(company_id, data):
    """
    Обновить данные компании

    Args:
        company_id (str): ID компании (например, "comp_1")
        data (dict): Данные для обновления
    """
    # Загрузить базу
    with open('companies_database.json', 'r', encoding='utf-8') as f:
        db = json.load(f)

    # Найти компанию
    company = next((c for c in db['companies'] if c['id'] == company_id), None)

    if not company:
        print(f"❌ Компания {company_id} не найдена")
        return

    # Обновить данные
    company.update(data)
    company['parsed'] = True
    company['parsed_date'] = '2025-11-27'

    # Сохранить
    with open('companies_database.json', 'w', encoding='utf-8') as f:
        json.dump(db, f, ensure_ascii=False, indent=2)

    print(f"✅ Компания {company['name']} обновлена!")

# Пример использования:
if __name__ == "__main__":
    # Обновить первую компанию
    update_company("comp_1", {
        "contacts": {
            "website": "https://example.com",
            "email": "info@example.com",
            "phone": "+62 123 456 7890",
            "whatsapp": "+62 123 456 7890",
            "telegram": "@company"
        },
        "social_media": {
            "instagram": "https://instagram.com/company",
            "facebook": "https://facebook.com/company",
            "youtube": "",
            "tiktok": "",
            "linkedin": ""
        },
        "description": "Описание компании...",
        "projects": ["Проект 1", "Проект 2"],
        "rating": {
            "reliability": 7,
            "profitability": 6.5,
            "class": 8,
            "total": 13.5
        }
    })
