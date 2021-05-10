## Avisos sobre o Crud
- Foi utilizado o SGBD pgAdmin4 com a seguinte configuração:

    Arquivo database.php :

       'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'postgres'),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', '1234'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    Arquivo .env :

        DB_CONNECTION=pgsql
        DB_HOST=localhost
        DB_PORT=5432
        DB_DATABASE=postgres
        DB_USERNAME=postgres
        DB_PASSWORD=1234


- No lugar da coluna tipo_id foi utilizado a coluna id_tipo