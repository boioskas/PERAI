# PROJETO PERAI

## O que é o PERAI?

A pandemia em que nos encontramos atualmente nos colocou em uma situação em que as vias e métodos de aprendizado à distância tiveram que ser a principal forma de ensino. Porém, através desta mudança súbita na rotina dos alunos e dos professores pudemos perceber que não estamos devidamente preparados para toda essa mudança, e isso exige um esforço em conjunto para que os alunos possam ter acesso a uma plataforma  onde ele possa rever e efetuar segmentos recuperativos e reforços educacionais de matérias que possuem mais dificuldade e, Além disso ter materiais de referencia que tenham disponibilidade não só durante o tempo do curso, mas também, tenha disponibilidade para os formandos, para que possam reforçar e compartilhar seus conhecimentos com alunos atuais e outros formandos.  Acreditamos que criando uma comunidade ativa de alunos e formandos conseguiremos usufruir ao máximo da capacidade de ensino dos professores e de aprendizado dos alunos. Sendo assim, surgiu nosso projeto, O PERAI.

## Testando a Aplicação

Baixe o projeto ou clone em um diretório de sua preferência.

Após o terminar de baixar, execute o comando `composer update` no diretorio criado para atualizar os repositorios do projeto.

Você pode utilizar o servidor de testes do próprio CodeIgniter utilizando o comando `php spark serve`, mas se preferir, pode ser usado algum servidor Web, como o Apache, IIS etc. 


**Lembrando que o host deve ser apontado para o diretório '/public' da aplicação**

Mais detalhes na [documentação oficial do code igniter 4](https://codeigniter4.github.io/userguide/).


## Setup

Copie o arquivo `env` para `.env` e personalize seu aplicativo, especificamente a baseURL
e quaisquer configurações do banco de dados.

## Important Change with index.php

O `index.php` não está mais na raiz do projeto! Foi movido para dentro da pasta * public *,
para melhor segurança e separação de componentes.

Isso significa que você deve configurar seu servidor da Web para "apontar" para a pasta * public * do seu projeto e
não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar o servidor da Web para a raiz do projeto e esperar inserir * public /...*, como o restante de sua lógica e
estrutura são expostos.

## Base de Dados

Use o script db_perai.sql para criar a base de dados que é utilizada no projeto.

No arquivo `.env` descomente os campos e insira as informações de conexão do seu Banco de dados

```
database.default.hostname = localhost
database.default.database = ci4tutorial
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

## Mode de debug

Você também pode ativar o mode de depuração de erros no mesmo arquivo `.env`, basta alterar a linha `# CI_ENVIRONMENT = production` para `CI_ENVIRONMENT = development`


## Teste

Agora se tudo estiver correto, basta acessar a URL: http://localhost:8080/ e será exibido um belo `Hello Word!`, na página temos uma NavBar com os links disponíveis.
