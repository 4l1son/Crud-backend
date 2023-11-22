## Crud MKTP - Cadastro de produtos
O projeto se baseia em uma API Rest que fornece os métodos (GET,POST,PUT,DELETE) para controle e cadastro de produtos. O front-end que consome esta api se encontra no seguinte repositório: https://github.com/4l1son/Crud-laravel-MKTP-front
<h2>Tecnologias utilizadas</h2>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



<h2>Requisitos</h2>
  <li>Permitir o cadastro de veiculos</li>
  <li>Permitir a atualização de dadso de um veiculo</li>
  <li>Permitir a exclusão de um veiculo</li>


  <h2>Endpoints</h2>
<ol>GET<ol>
  <li><b>http://127.0.0.1:8000/api/products</b>-- retorna todos  produtos (metodo: index)</li> </li>
</ol>
</ol>
  <ol>POST<ol>
  <li><b>http://127.0.0.1:8000/api/products</b> -- cadastrar um novo produtos (metodo: store)</li>
</ol>
</ol>
<ol>PUT<ol>
  <li><b>http://127.0.0.1:8000/api/products/id</b> -- altera os dados de um produtos  (metodo: alterarVeiculo)</li>
</ol>
</ol>


<ol>DELETE<ol>
  <li><b>http://127.0.0.1:8000/api/products/id</b> -- exclui um veiculo (metodo: destroy)</li>
</ol>
</ol>

<h2>Regra de Negócio - CRUD de Produtos</h2>

Listar Produtos (index):
- Retorna todos os produtos existentes.

Cadastrar Produto (store):
- Valida os dados do produto recebidos no pedido.
- Se os dados são válidos, cria um novo produto no banco de dados.
- Opcionalmente, consulta a API ViaCEP para obter o bairro do CEP.
- Retorna o produto recém-criado.

Visualizar Detalhes do Produto (show):
- Encontra um produto específico com base no ID fornecido.
- Retorna os detalhes desse produto.

Atualizar Produto (update):
- Encontra um produto específico com base no ID fornecido.
- Valida os dados atualizados do produto.
- Se os dados são válidos, atualiza o produto no banco de dados.
- Retorna o produto atualizado.

Excluir Produto (destroy):
- Encontra um produto específico com base no ID fornecido.
- Exclui o produto do banco de dados.
- Retorna uma resposta indicando que a exclusão foi bem-sucedida.


<h2>Demonstração da aplicação</h2>
<p>https://drive.google.com/file/d/1edQa7i-L5kUpd92HaVNOAIriKFuwbgf9/view?usp=sharing</p>
  

   
