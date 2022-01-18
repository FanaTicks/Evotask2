#  Завдання №2 #
>Потрібно написати веб-сервіс. На головній сторінці форма з полем введення імені та кнопкою "Привітатись". При натисканні на кнопку, якщо ім'я зустрілося вперше, виведи "Привіт, <Ім'я+Прізвище> або "Привіт, <email>" (на твій вибір). Якщо таке ім'я вже зустрічалося, виведи "Вже бачилися, ім'я".
Також на головній має бути посилання, при натисканні на яке потрібно показати список усіх, з ким уже привіталися.
Подумай, де краще зберігати стан (state). Як його краще зберігати? Чи можливо оптимізувати по пам'яті, якщо ми очікуємо, що до нас прийдуть вітатись користувачі всього Інтернету. Зроби проект на Github із репозиторієм.
Плюс, якщо є зрозумілий README, проект загорнутий у Docker, застосовані GitHub Actions, проект розгорнутий на будь-якому хостингу (heroku, digitalocean, будь-який інший)
Якщо хочеться додати щось до цього завдання - не соромся проявити творчість.
>
##  Зберігання даних ##  
  Використав текстовий файл. Розумію, що краще виконати за допомогою MySQL, але вирішив приділити більше часу саме плюсав роботи(Docker, Git Action)
###  З плюсів виконав: ###
  * підключив хостинг
  ![Без имени-2](https://user-images.githubusercontent.com/75033218/149921265-3c617bcb-14a9-4f1c-aa45-b6d85ebb33e1.jpg)
  * застосовав GitHub Actions(одразу пушить на Git та на зостинг)
  ![Без имени-2](https://user-images.githubusercontent.com/75033218/149921646-6c8c4402-e46e-4d83-9f96-964d1ad93212.png)
  * загорнув сайт у Docker
  ![1](https://user-images.githubusercontent.com/75033218/149921931-34278bc3-4246-4273-8e3e-3e522a97d750.png)
####  Посилання: ####
  * Хостинг: http://fanaticks.great-site.net/
  ![image](https://user-images.githubusercontent.com/75033218/149922043-856fe909-6a1b-483c-9d8f-98ad56979630.png)
  * Репозиторій Docker: https://hub.docker.com/repository/docker/fanaticks/evo2022
  ![image](https://user-images.githubusercontent.com/75033218/149922092-249e7643-168c-4e15-b082-10f3225883e1.png)


