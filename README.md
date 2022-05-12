<h3 align="center">The project of the information system «TestOrders»</h3>

<p align="center">
    <a href="https://laravel.com"><img alt="Laravel v8.x" src="https://img.shields.io/badge/Laravel-v8.x-FF2D20?style=for-the-badge&logo=laravel"></a>
    <a href="https://php.net"><img alt="PHP 7.4" src="https://img.shields.io/badge/PHP-7.4-777BB4?style=for-the-badge&logo=php"></a>
</p>


## Инструкции

composer install

php artisan migrate

php artisan db:seed --class=OrdersTableSeeder

php artisan serve

## Список адресов с методами

    List: метод:GET, URL:http://localhost:8000/api/orders
    Create: метод:POST, URL:http://localhost:8000/api/orders
    Show: метод:GET, URL:http://localhost:8000/api/orders/{id}
    Update: метод:PUT, URL:http://localhost:8000/api/orders/{id}
    Delete: метод:DELETE, URL:http://localhost:8000/api/orders/{id}

В качестве номера заказа использован id записи в базе, можно было вынести в отдельное поле number если необходимо.

Дополнительно создать таблицу связи заказа с пользователем и при создании заказа проверять есть ли пользователь в базе, в модели реализовать связь один ко многим.

Так же валидацию вынести в отдельный Request.

Так как в задачу не входила аутентификация она не была реализована.
