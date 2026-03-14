# Instruções de Instalação para cPanel

## Pré-requisitos

- Uma conta ativa no cPanel.
- Acesso ao gerenciador de arquivos do cPanel ou ao FTP.

## Passo a Passo

1. **Download do Código**
   - Faça o download do código-fonte do projeto.

2. **Carregar arquivos**
   - Acesse o gerenciador de arquivos no cPanel.
   - Navegue até a pasta `public_html` ou a pasta desejada para o seu site.
   - Carregue todos os arquivos do download do projeto.

3. **Configurar Banco de Dados**
   - No cPanel, acesse o recurso de banco de dados e crie um novo banco de dados.
   - Crie um novo usuário e associe-o ao banco de dados, garantindo que ele tenha todas as permissões.

4. **Configurar o arquivo .env**
   - Renomeie o arquivo `.env.example` para `.env`.
   - Edite o arquivo `.env` e insira as informações do banco de dados criado (nome do banco, usuário e senha).

5. **Instalação das Dependências**
   - Acesse o terminal do cPanel (se disponível) ou use o SSH para acessar o servidor.
   - Navegue até a pasta do projeto e execute:
     ```bash
     composer install
     ```

6. **Gerar a chave da aplicação**
   - Execute o seguinte comando:
     ```bash
     php artisan key:generate
     ```

7. **Ajustar permissões**
   - Acesse a pasta `storage` e `bootstrap/cache` e assegure-se de que as permissões estão definidas para que o servidor web possa escrever.

8. **Acessar o site**
   - Após todas as configurações, acesse a URL do seu site para verificar se está funcionando corretamente.