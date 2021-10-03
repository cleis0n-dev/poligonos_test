# poligonos_test

<h3>Descrição: </h3>
<p>Api criada no Laravel para realizar cadastros de retângulos e triângulos e, automaticamente obter o valor de suas respectivas áreas através dos valores de base e altura informados previamente. </p>
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

