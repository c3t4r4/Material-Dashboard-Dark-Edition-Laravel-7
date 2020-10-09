## Instalação do Tema Material Dashboard Dark & Tradução do Laravel - Português do Brasil (pt-BR)
Esse repositório tem a finalidade de configurar o Tema SmartAdmin Bootstrap e as traduções dos arquivos contidos em `/resources/lang/en` para o português brasileiro.

## Pré-requisito
O laravel deve estar instalado e rodando normalmente dentro do seu ambiente (independente se é desenvolvimento ou produção).

### Aviso
Esse procedimento pode sobrescrever o seu arquivo Routes/web.php
<br />


## Instalação

* Acesse o diretório antes da pasta do projeto

```
$ cd projetos
```

* Efetue o clone deste repositório na pasta do seu projeto

```
git clone https://github.com/c3t4r4/SmartAdmin.git ./tmp
rm -rf tmp/README.md tmp/.git
cp -R tmp/* PASTADOPROJETO/
rm -rf tmp
```

* Para gerar o mix dos assets

```
cd PASTADOPROJETO
npm install
composer dump-autoload
npm run dev
```

Nesse momento será feito o clone do repositório para dentro do seu projeto!<br />

* Lembre-se que nesse momento o arquivo Routes/web.php será substituído

* Agora basta informar ao Laravel de que há outro idioma. Para isso, edite o arquivo `/config/app.php` e altere o valor da propriedade `locale` para `pt-BR`

```
'locale' => 'pt-BR',
```

##
<br><br>
<p align="center"><a href="https://laravel.com/docs/7.x" target="_blank"><img src="https://i0.wp.com/wp.laravel-news.com/wp-content/uploads/2020/03/laravel7.jpg?fit=2200%2C1125&ssl=1?resize=2200%2C1125" width="400"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About Material Dashboard Dark

<p align="center"><img src="https://s3.amazonaws.com/creativetim_bucket/products/95/original/opt_mdb_thumbnail.jpg?1535551949" width="400"></p>

The Material Dashboard is built on top of Bootstrap 4, so you can safely use it on your existing or new Bootstrap project.

- **[Live Preview](https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.html)**
- **[More](https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html)**
- **[Material Dashboard Dark Edition](https://www.creative-tim.com/product/material-dashboard-dark)**
- **[Creative Tim](https://www.creative-tim.com/)**
