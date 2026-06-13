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

<img width="1346" height="671" alt="Captura de tela 2026-06-13 134432" src="https://github.com/user-attachments/assets/1ba691bd-327f-4594-b931-12bffecfbb73" />
<img width="1348" height="674" alt="Captura de tela 2026-06-13 134447" src="https://github.com/user-attachments/assets/4370289c-4e87-4405-9706-8a69d318b18b" />

