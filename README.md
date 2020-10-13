## ManageProductApp
Prosta aplikacja w wykorzystaniu laravel api zarządzająca produktami, która jest budowana wraz z cyklem artykułów na blogu [laraveldeveloper.pl](https://laraveldeveloper.pl/) 
## Inicjalizacja projektu
Pobieramy kod lokalnie na swój komputer:

    https://github.com/ThePatrykOOO/ManageProductApp.git
Przechodzimy do katalogu projektu:

    cd ManageProductApp
Instalujemy zależności laravela:

    composer install
Kopiujemy plik konfiguracyjny:

    cp .env.example .env
Generujemy klucz aplikacji:

    php artisan key:generate

Ustalamy odpowiednie dane do logowania bazy danych:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

Wykonujemy migrację:

    php artisan migrate
## Artykuły z serii tworzenia projektu:

 1.  [Jak działa observer w Laravel?](https://laraveldeveloper.pl/jak-dziala-observer-laravel/ "Jak działa observer w Laravel?")
 2. [Jak stworzyć CRUD w Laravel?](https://laraveldeveloper.pl/jak-stworzyc-crud-w-laravel/ "Jak stworzyć CRUD w Laravel?")
 3.  [Walidacja danych w Laravelu krok po kroku](https://laraveldeveloper.pl/walidacja-danych-laravel/ "Walidacja danych w Laravelu krok po kroku")
 4. [Niestandardowe reguły walidacji w Laravelu (Rule)](https://laraveldeveloper.pl/niestandardowe-reguly-walidacji-w-laravelu-rule/ "Niestandardowe reguły walidacji w Laravelu (Rule)")
