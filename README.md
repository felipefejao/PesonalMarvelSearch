<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://developer.marvel.com/i/images/developers/docs-bg.jpg" width="400"></a></p>


## Como executar

1. Clone o repositório e entre na pasta criada
   >git  clone  https://github.com/felipefejao/PesonalMarvelSearch.git
   > 
   > cd PesonalMarvelSearch
1. Execute o comando de instalação

   >composer install

1. Copie o arquivo `.env-example` para `.env`
    >cp .env.example .env

1. No arquivo `.env`, digite os dados de acesso ao banco de dados
   >DB_CONNECTION=mysql\
   >DB_HOST=127.0.0.1\
   >DB_PORT=[PORTA]\
   >DB_DATABASE=[BANCO]\
   >DB_USERNAME=[USUARIO]\
   >DB_PASSWORD=[SENHA]
1. Criar nova Key
    >php artisan key:generate
1. Executar as Migrations
    >php artisan migrate
   > 
1. Executar os seeds para preencher as tabelas
   > php artisan db:seed

