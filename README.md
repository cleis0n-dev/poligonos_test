<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# poligonos_test

<h3>Descrição: </h3>
<p>Api criada no Laravel 8 para realizar cadastros de retângulos e triângulos e, automaticamente obter o valor de suas respectivas áreas através dos valores de base e altura informados previamente. </p>
<h4>Necessário: </h4>
<ul>
  <li>Composer</li>
  <li>Banco de Dados MySQL</li>
  <li>PHP 7.3^</li>
  <li>Criar base de dados: "poligonos"</li>
  <li>Após clonar o repositório, utilizar o comando: php artisan migrate</li>
</ul>

<p>Os dados podem ser visualizados pelo Postman ou pelo navegador, porém a criação de dados somente utilizando uma ferramenta de teste de API específica.</p>

<p>Para cadastrar um novo retângulo:http://localhost/api/retangulos/create </p>
<p>Para cadastrar um novo triângulo:http://localhost/api/triangulos/create </p>
<p>Em ambos os casos, é necessário informar os campos: "descricao", "base", "altura".</p>

<h5>Para visualizar a área dos poligonos cadastrados: http://localhost/api/poligonos </h5>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
