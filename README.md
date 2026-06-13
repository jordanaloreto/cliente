# Sistema de Cadastro de Clientes

## Tecnologias

- PHP 8.2.30
- Laravel 12.62.0
- MySQL
- Bootstrap (SB Admin 2)
- DataTables
- Herd

## Funcionalidades

- Cadastro de clientes
- Edição de clientes
- Exclusão de clientes
- Upload de foto
- Listagem com DataTables

# Instalação

1. Clone o repositório

2. Configure o arquivo .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cliente
DB_USERNAME=root
DB_PASSWORD=

3. Execute as migrations

php artisan migrate

4. Crie o link simbólico para as imagens

php artisan storage:link

5. Acesse o projeto

http://cliente.test

# Imagens do projeto

![alt text](<Captura de tela 2026-06-13 134432.png>)
![alt text](image.png)