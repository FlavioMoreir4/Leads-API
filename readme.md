## Executando a API

É muito simples colocar a API em funcionamento. Primeiro, crie o banco de dados e adicione-os ao arquivo `.env`.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Em seguida, instale, migre, semeie todo:

1. `composer install`
2. `php artisan migrate`
3. `php artisan db:seed`
4. `php artisan serve`

A API será executada em `localhost: 8000`.
