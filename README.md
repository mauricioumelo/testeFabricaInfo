## Avisos sobre o Crud

- No lugar da coluna tipo_id foi utilizado a coluna id_tipo

- Foi utilizado o SGBD pgAdmin4 com a seguinte configuração:

    Arquivo .env :

        DB_CONNECTION=pgsql
        DB_HOST=localhost
        DB_PORT=5432
        DB_DATABASE=postgres
        DB_USERNAME=postgres
        DB_PASSWORD=1234

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

- Questões de 1 a 4

    Para rodar as questões de 1 a 4 sera nescessario:
    
    Ter o php na versao 7.4.16^ instalado em sua maquina, entrar na pasta questoes_teste e rodar o comando'php arquivo.php'

    Exemplo:
    
    `cd teste_leonardo\questoes_teste`
    `php questao1.php`