# Teste Prático - Desenvolvedor Web Júnior

🎯 **Objetivo**: Desenvolver um sistema de cadastro de usuários utilizando framework PHP Laravel, HTML, CSS, JavaScript e banco de dados MySQL.


### Funcionalidades

1. Cadastro de novos usuários.
2. Listagem dos usuários cadastrados.
3. Edição e exclusão de usuários.

### Tecnologias Utilizadas

- **Frontend**: HTML, CSS e JavaScript.
- **Backend**: PHP puro ou utilizando o framework Laravel.
- **Banco de Dados**: MySQL.

## 📝 Requisitos do Sistema

### 1. Página de Cadastro:
- Campos: Nome, E-mail, Senha.
- Validação de campos obrigatórios.

### 2. Página de Listagem de Usuários:
- Exibir uma tabela com as colunas: Nome, E-mail e Ações (Editar/Excluir).

### 3. Funcionalidades de Edição e Exclusão:
- Permitir editar os dados do usuário.
- Permitir excluir um usuário.

### 4. Validações:
- O **e-mail** deve ser único (não permitir cadastro duplicado).
- **Senha** com pelo menos 6 caracteres.

### 5. Banco de Dados (MySQL):
- Tabela `usuarios` com os campos: `id`, `nome`, `email`, `senha`.

## 📸 Demonstração

Adicione imagens ou vídeos do funcionamento do sistema aqui.

### Exemplos de imagens e vídeos:

![Exemplo de Cadastro](caminho/para/imagem.jpg)

[Assista o vídeo de demonstração](caminho/para/video.mp4)

## ⚙️ Como Rodar o Projeto

### Pré-requisitos

- PHP 7.4 ou superior
- Composer (para o Laravel)
- MySQL ou MariaDB
- Node.js (para o frontend)

### Passos para Executar

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/FIXER3600/teste-chromasoft.git
   ```

2. **Instale as dependências do Composer**: 
    ```bash 
    composer install 
    ``` 

3. **Configure suas variáveis de ambiente**: `.env.example` para `.env` e configure as variáveis de ambiente.

4. **Gere a chave da aplicação**: 
    ```bash 
    php artisan key:generate 
    ``` 

5. **Execute as migrations e seeders**: 
    ```bash 
    php artisan migrate --seed 
    ```


6. **Rodar o servidor**:

     ```bash
     php artisan serve
     ```

7. **Acessar o sistema**:
   Abra o navegador e vá para `http://localhost:8000` para começar a usar o sistema.

## 📑 Estrutura do Projeto

- **public/**: Arquivos públicos como CSS, JS e imagens.
- **resources/views/**: Arquivos Blade ou arquivos de frontend em HTML.
- **app/Http/Controllers/**: Controladores para as funcionalidades do sistema.
- **database/migrations/**: Arquivos de migração do banco de dados (para Laravel).
- **routes/web.php**: Definição das rotas.
- **.env**: Arquivo de configuração do ambiente.


