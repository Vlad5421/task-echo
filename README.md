<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

---

# Комметарии к решению

Фронт - не реализовано. Точнее реализовано совсем бедно. Спешил, и что бы связать с фронтом - нужно время.
Поясню. В Laravel я не делал проектов. А каждый фреймворк тусует папки и подходы к внедрению зависимостей и методике разработки.
Уходит время на поиск и разбор, как реализована та или иная функция.


1) База данных реализована. С внешними ключами, потому что потом делать вборки по связным таблицам.
2) seeders - сделано
3) Страницы с реализацией REST API получения авторов, статей, категорий:
   - /autors - список авторов. Не реализовал писк - просмотрел
   - /articles-categoryes - список категорий
   - /articles - статьи.
   - /articles-categoryes/all/{slug} - api выборки статей по категории (через get, что бы не тратить время на фронт)
   - /autors/all/{slug} - api выборки статей по автору (через get, что бы не тратить время на фронт)

4) JSON Rest API выборки всех данных - не усел, планировал с использованием последних
    2-х пунктов п.3
5) Со swager не успеваю
 ---
Равернуть:

git clone https://github.com/Vlad5421/task-echo.git
cd task-echo

-- Далее команды, если нужно развернуть с оптимизацией

composer install --optimize-autoloader --no-dev

php artisan config:cache

--

Переименовать .env.example в .env
Дальше - заполнить данные для подключения к БД в файле .env

php artisan migrate:fresh --seed

php artisan serve

Сервер запущен и можно открывать http://127.0.0.1:8000
