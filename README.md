 ## Duck TV - Телевидение для уток 🦆

Duck TV - это платформа, где утки могут смотреть видео, посвященные утиным делам.

### Установка

1. Склонируйте репозиторий:


bash
git clone https://github.com/ava-mirtl/duck_tv.git


 
2. Откройте папку проекта:

 
bash
cd duck_tv


 
3. Скопируйте файл .env из .env.example:

 
bash
cp .env.example .env


 
4. Настройте файл .env:

· DB_HOST:  Замените на адрес хоста вашей БД.

· DB_NAME: Замените на имя вашей базы данных.

· DB_USERNAME: Замените на имя пользователя вашей БД.

· DB_PASSWORD: Замените на пароль от вашей БД.




5. Поднимите проект в Docker:

 
bash
./vendor/bin/sail up


 
6. Установите зависимости:

 
bash
./vendor/bin/sail composer install
./vendor/bin/sail npm i


 
7. Запустите миграции:

 
bash
./vendor/bin/sail artisan migrate:fresh --seed


 
8. Запустите сборку фронтенда:

 
bash
./vendor/bin/sail npm run dev


 
9. Запустите проект:

· Доступен по адресу: http://localhost/
· Админ-панель: http://localhost/admin

![image](https://github.com/user-attachments/assets/f75efd05-34b6-4b29-a110-f6717d9f1fa3)





