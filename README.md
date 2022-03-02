# Sistema de cadastro de cliente
Sistema de cadastro de clientes desenvolvido em Laravel.

## 🚀 Começando

Essas instruções permitirão que você consiga rodar o projeto no seu local de desenvolvimento.

### 📋 Pré-requisitos

Ter um servidor **PHP** com php => 7.0 e banco de dados **Mysql**.

## 🔧 Para rodar este projeto
```bash
$ git clone https://github.com/brunosilvabrn/sistema-laravel.git
$ cd sistema-laravel
$ php artisan migrate  #Configure o arquivo .env => antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan serve
$ php artisan db:seed  #para gerar os seeders, dados de teste
```
Acesssar pela url: http://localhost:8000

**Configure o arquivo .env da raiz do projeto** (renomear arquivo .env.example para .env)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_sistema #Nome do sue banco de dados
DB_USERNAME=root
DB_PASSWORD=

```

### Rode este comando para obter os dados de login do sistema (Email, senha)
Por padrão todos as senhas gerada pela seeders do Laravel são **password**
```
php artisan tinker 
>>> App\Models\User::find(1)
=> App\Models\User {#4498
     id: 1,
     name: "Kaela Wuckert",
     email: "dandre42@example.com",
     email_verified_at: "2022-03-02 16:45:01",
     #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
     #remember_token: "JJH65hzvcw",
     created_at: "2022-03-02 16:45:02",
     updated_at: "2022-03-02 16:45:02",
   }

```
## 📦 Desenvolvimento

- HTML5
- BOOTSTRAP
- PHP 7
- JAVASCRIPT 
- LARAVEL 9.0

## 🎁 Detalhes

⌨️ Feito por [Bruno Lopes Silva](https://github.com/brunosilvabrn) 
