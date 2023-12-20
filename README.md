# CRUD MKTP - Cadastro de Produtos

O projeto consiste em uma API Rest que oferece métodos (GET, POST, PUT, DELETE) para controle e cadastro de produtos. O front-end que consome esta API está disponível no seguinte repositório: [Repositório do Front-end](https://github.com/4l1son/Crud-laravel-MKTP-front).

## Tecnologias Utilizadas

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

## Requisitos

- Permitir o cadastro de produtos
- Permitir a atualização de dados de um produto
- Permitir a exclusão de um produto

## Endpoints

![image](https://github.com/4l1son/Crud-laravel-MKTP-api-back/assets/111581261/5e59fc9c-e266-4456-b3ed-80a66e0689ae)



## Como Rodar a Aplicação

Certifique-se de ter o Composer e o Laravel instalados. Execute os seguintes comandos:

```bash
php artisan migrate
```

E em seguida

```bash
php artisan serve
```



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
<p>https://drive.google.com/file/d/1gvHn_d-YpDQTUB95bb-8OfvkKSLqJvMD/view?usp=sharing</p>
  

   
