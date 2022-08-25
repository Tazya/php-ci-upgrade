# CI Example Kolesa Upgrade
![Tests](https://github.com/Tazya/php-ci-upgrade/workflows/tests/badge.svg)

## Установка локально
Нужно иметь установленные в системе: 
- PHP > 8.1 
- Composer 2

PHP можно установить командой ```make php-install```

Установить зависимости:
```
composer install
```
Запуск тестов
```
vendor/bin/phpunit tests
```