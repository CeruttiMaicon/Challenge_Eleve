<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Bem vindo ao projeto Challenge Eleve

# Iniciando projeto

Entre no terminal na pasta que desaja baixar o projeto, e em seguida execute o comando:

```
$ git clone https://github.com/CeruttiMaicon/Challenge_Eleve.git
```

O projeto será baixado, e em sequência (para instalar as dependências do projeto):

```
$ composer install
```

Para instalar as dependencias do NPM

```
$ npm install 
```

Para gerar a chave de criptografia do Laravel:

```
$ php artisan key:generate
```

Abra a pasta do projeto com um editor de texto(de sua preferência), e verifique se o arquivo ".env" existe, caso ele não exista, crie um com base no ".env.example".

Crie em seu computador uma tabela de banco de dados.

Neste arquivo que acabamos de criar adicione as seguintes configurações, para o rodar localmente, utilizando o MySql.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_banco_de_dados
DB_USERNAME=user_admin
DB_PASSWORD=$enha_$uper_$ecreta
```
(Lembrando que estas configurações variam, pois usuario e senha são locais).

Se tudo ocorreu bem, execute o comando abaixo:

```
$ php artisan migrate
```

Se aparecer uma mensagem de erro, significa que você não conectou com seu banco de dados, e suas configurações estão erradas.

Para começar a utilizar o projeto.

```
$ php artisan serve
```

Abra o seu navegador no endereço:

```
http://localhost:8000/
```


## Dependências instaladas no projeto.

- **[Laravel Collective](https://laravelcollective.com/)**
- **[Vue-the-mask](https://vuejs-tips.github.io/vue-the-mask/)**
- **[Sweet Alert 2](https://packagist.org/packages/uxweb/sweet-alert)**


# Change Log

Etapas de desenvolvimento do desafio, utilizando o modelo de [Change Log](https://semver.org/lang/pt-BR/).

## [0.0.8] - 19-01-2018
### Adicionado
- Adicionado SweetAlert2

### Mudanças
- Adicionado SweetAlert2 para dar a notificação de cadastro no sistema.

### Removido
- Nada.

## [0.0.7] - 19-01-2018
### Adicionado
- Fazendo cadastro dos dados

### Mudanças
- Fazendo os dados da tela serem cadastrados no banco de dados do sistema.

### Removido
- Nada.

## [0.0.6] - 19-01-2018
### Adicionado
- Layout responsivo para as resoluções de 1440px, 1024px, 768px, e 320px, de acordo com os mokaps de tela apresentados para o desafio.

### Mudanças
- Feito layout responsivo utilizando CSS e Bootstrap 4

### Removido
- Nada.

## [0.0.5] - 17-01-2018
### Adicionado
- Adicionado ao projeto vue-the-mask

### Mudanças
- Adicionado ao projeto o Vue-the-mask para fazer as validações dos campos digitados, como CNPJ e Telefone.

### Removido
- Nada.

## [0.0.4] - 16-01-2018
### Adicionado
- Layout do Footer

### Mudanças
- Ajustando layout do footer, juntamente com toda a parte de textos e traduções da aplicação.

### Removido
- Nada.

## [0.0.3] - 16-01-2018
### Adicionado
- Laravel Collective

### Mudanças
- Os formulários do sistema podem ser feitos com os 'macetes' do Collective.

### Removido
- Nada.

## [0.0.2] - 16-01-2018
### Adicionado
- Logins no sistema, nativo do Laravel (Auth).

### Mudanças
- Agora é possível fazer login no sistema.

### Removido
- Nada.

## [0.0.1] - 16-01-2018
### Adicionado
- Projeto Laravel

### Mudanças
- Start inicial de um projeto Laravel na versão 5.7

### Removido
- Nada.

## Licença

O framework Laravel é um software de código aberto licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).
