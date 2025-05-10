### 1. DRY (Don't Repeat Yourself — Не повторюй себе)
Уся логіка роботи з грошима винесена в окремий клас `Money`, щоб уникнути дублювання коду.

- [Money.php, рядки 3–25](./Classes/Money.php#L3-L25)


### 2. KISS (Keep It Simple, Stupid — Залиш простим)
Класи прості, з чітко визначеною відповідальністю. Немає зайвої логіки.

- [Product.php, рядки 3–21](./Classes/Product.php#L3-L21)
- [Warehouse.php, рядки 3–13](./Classes/Warehouse.php#L3-L13)


### 3. S — Single Responsibility Principle (Принцип єдиної відповідальності)
Кожен клас виконує тільки одну роль:

- `Money` — оперує грошима
- `Product` — описує товар
- `Warehouse` — зберігає товари
- `Reporting` — формує звіти

- [Money.php](./Classes/Money.php)
- [Reporting.php](./Classes/Reporting.php)


### 4. O — Open/Closed Principle (Принцип відкритості/закритості)
Можна додавати нові типи звітів без зміни коду класу `Reporting`.

- [Reporting.php, рядки 5–12](./Classes/Reporting.php#L5-L12)


### 5. L — Liskov Substitution Principle (Принцип підстановки Барбари Лісков)
Можна буде створити дочірні класи від `Product` (наприклад, `FoodProduct`), і вони будуть працювати всюди, де використовується базовий клас.

### 6. I — Interface Segregation Principle (Принцип розділення інтерфейсу)
Кожен клас реалізує лише необхідні методи. У коді немає непотрібної логіки, яка б змушувала реалізовувати зайві функції.

- [Warehouse.php](./Classes/Warehouse.php)

### 7. D — Dependency Inversion Principle (Принцип інверсії залежностей)
У майбутньому легко замінити реалізації через інтерфейси (наприклад, форматер валют або сховище товарів).

### 8. YAGNI (You Aren’t Gonna Need It — Тобі це не знадобиться)
Код не містить зайвих можливостей (наприклад, підтримки кількох валют чи авторизації), які не потрібні для цієї задачі.

### 9. Composition Over Inheritance (Композиція замість наслідування)
Клас `Product` використовує об'єкт `Money`, замість того щоб наслідувати його.

- [Product.php, рядок 5](https://github.com/kirilolsh/Software-design-Lab1/blob/fbc0c9c47e57254e70e83ab01fdb4591fd7a8ccd/Classes/Product.php#L5)

### Демонструється:
- Створення продукту
- Зниження ціни
- Додавання на склад
- Формування звітів


DRY (Don't Repeat Yourself)
- Уникаємо дублювання логіки збереження грошей. Уся логіка зберігається в класі [Money.php](./Money.php)

KISS (Keep It Simple, Stupid)
- Класи прості та мають єдину відповідальність. Приклад: [Product.php](./Product.php)

S - Single Responsibility Principle
- Кожен клас має свою відповідальність: `Money` для грошей, `Product` для товару, `Warehouse` для складу, `Reporting` для звітів.

O - Open/Closed Principle
- Можна додавати нові типи звітів, не змінюючи існуючий клас `Reporting`.

L - Liskov Substitution Principle
- Якщо будуть створені дочірні класи продуктів, їх можна буде підставити замість базового `Product`.

I - Interface Segregation Principle
- Класи не змушені реалізовувати непотрібні методи — використано поділ відповідальностей.

D - Dependency Inversion Principle
- У прикладі можна застосувати інтерфейси, якщо потрібно замінити реалізацію (наприклад, валюти).

YAGNI (You Aren’t Gonna Need It)
- Ми не реалізовуємо надлишкову логіку, поки вона не знадобиться.

Composition Over Inheritance
- `Product` включає об'єкт `Money`, а не наслідує його.

Program to Interfaces not Implementations
- У випадку розширення, доцільно використовувати інтерфейси для `Reporting` чи `Product`.

Fail Fast
- Конструктори можуть бути доповнені перевірками коректності введених даних.

