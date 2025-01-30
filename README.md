# Projeto Social Feed

Este projeto é uma aplicação web que simula uma rede social simples, permitindo que os usuários façam login, publiquem posts, curtam, comentem e atualizem seus perfis. A aplicação foi desenvolvida utilizando PHP e segue a arquitetura MVC (Model-View-Controller).

## Funcionalidades

- **Autenticação de Usuários**  
  - Login, Logout e Cadastro de novos usuários.
  - Proteção de rotas para usuários não autenticados.

- **Gestão de Perfil**  
  - Atualização de informações pessoais (nome, e-mail, cidade, trabalho, etc.).
  - Upload de fotos de perfil (avatar) e capas.

- **Interações Sociais**  
  - Publicação de posts no feed.  
  - Curtidas e comentários em posts.  
  - Visualização de fotos e lista de amigos no perfil.

- **Ajax e Uploads**  
  - Interações rápidas no front-end (exemplo: curtir posts via Ajax).  
  - Upload de imagens redimensionadas para posts e avatares.  

## Estrutura do Projeto

- **Rotas:** Gerenciadas no arquivo `Router.php` com endpoints para cada funcionalidade.  
- **Controladores:** Classes organizadas para lidar com lógica de cada área (ex: `LoginController`, `PostController`).  
- **Handlers:** Responsáveis por acessar e manipular os dados no banco de dados.  
- **Views:** Exibição das páginas para o usuário final.  

## Tecnologias Utilizadas

- **Backend:** PHP com estrutura MVC.  
- **Banco de Dados:** MySQL para armazenamento de usuários, posts e interações.  
- **Front-end:** HTML, CSS e JavaScript (com Ajax).  
- **Outras:** Manipulação de imagens com GD (PHP).

## Requisitos para Rodar

1. **Servidor Web:** Apache com suporte ao `mod_rewrite`.  
2. **PHP:** Versão 8.0 ou superior com GD habilitado.  
3. **Banco de Dados:** MySQL 5.7 ou superior.  
4. **Docker (opcional):** Ambiente de desenvolvimento configurável via containers.

## Como Rodar a Aplicação

1. Clone este repositório:
   ```bash
   git clone https://github.com/SeuUsuario/Projeto-Devsbook.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd Projeto-Devsbook
   ```

3. Configure o ambiente com Docker:
   ```bash
   docker-compose up -d
   ```

4. Instale as dependências do Laravel:
   ```bash
   docker-compose exec app composer install
   ```

5. Configure o arquivo `.env` com suas credenciais do banco de dados.

6. Execute as migrações:
   ```bash
   docker-compose exec app php artisan migrate
   ```

7. Acesse a aplicação no navegador: [http://localhost](http://localhost)
