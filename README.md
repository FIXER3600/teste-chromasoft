# Teste Prático - Desenvolvedor Web Júnior

🎯 **Objetivo**: Avaliar seus conhecimentos em PHP, HTML, CSS, JavaScript e MySQL através do desenvolvimento de um sistema web simples e funcional. Tanto o backend quanto o frontend serão criteriosamente avaliados.

## 🚀 Desafio

Desenvolver um sistema de cadastro de usuários.

### Funcionalidades

Você deve criar um sistema web que permita:

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

## 📐 Critérios de Avaliação

1. **Organização e estrutura do código**: Código bem estruturado, legível e com boas práticas de organização.
2. **Funcionalidade do sistema**: O sistema deve funcionar corretamente, permitindo realizar as operações de cadastro, listagem, edição e exclusão de usuários.
3. **Uso correto das tecnologias solicitadas**: Utilização adequada de HTML, CSS, JavaScript, PHP (ou Laravel) e MySQL.
4. **Boas práticas de programação**: Utilização de boas práticas como nomeação de variáveis, funções, e organização de arquivos.
5. **Validação e tratamento de erros**: Implementação de validações tanto no frontend quanto no backend, com mensagens de erro claras e úteis.
6. **Qualidade do frontend**: Design intuitivo, responsividade e usabilidade.
7. **Implementação eficiente do backend**: Implementação segura, com boas práticas de performance, segurança e estrutura no backend.

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
   git clone https://github.com/seu-usuario/teste-pratico-junior.git
   ```

2. **Configure o Banco de Dados**:
   - Crie um banco de dados no MySQL chamado `usuarios_db`.
   - Importe o arquivo `database.sql` para criar a tabela `usuarios`.

3. **Instale as dependências**:
   - Se estiver utilizando Laravel:
     ```bash
     cd seu-projeto
     composer install
     php artisan key:generate
     ```

4. **Configuração do `.env`**:
   - Configure as variáveis de ambiente no arquivo `.env` para conectar o banco de dados MySQL.

5. **Rodar o servidor**:
   - Se estiver usando Laravel:
     ```bash
     php artisan serve
     ```

6. **Acessar o sistema**:
   Abra o navegador e vá para `http://localhost:8000` para começar a usar o sistema.

## 📑 Estrutura do Projeto

- **public/**: Arquivos públicos como CSS, JS e imagens.
- **resources/views/**: Arquivos Blade (se estiver usando Laravel) ou arquivos de frontend em HTML.
- **app/Http/Controllers/**: Controladores para as funcionalidades do sistema.
- **database/migrations/**: Arquivos de migração do banco de dados (para Laravel).
- **routes/web.php**: Definição das rotas (se estiver usando Laravel).
- **.env**: Arquivo de configuração do ambiente.


