# Automação residencial

Protótipo de página Web para o controle de um microcontrolador. 

## Getting Started

Para executar esse projeto em sua máquina basta clonar esse repositório usando o git-bash ou Github desktop ou simplismente baixando todo o projeto. 

### Pré-requisites

#### XAMPP

* Instalar o [XAMPP](https://www.apachefriends.org/pt_br/index.html) - Contém o Apache, MySql e o PHP que são importantes para executar a aplicação localmente.

#### Composer

* Instalar [Composer](https://getcomposer.org/) - É um gerenciador de dependências e bibliotecas para o PHP e para o Laravel que é um Framework PHP.

#### Dependências do Laravel

* Quando esse projeto é clonado em sua máquina as dependências do projeto não estão instaladas então é necessário executar um comando no diretório do projeto para baixar as dependências.

```
composer update
```

#### Configurar arquivo .env

* Renomear o arquivo **.env-example** para **.env**;
* Executar o seguinte comando no diretório do projeto para criar a chave única para a aplicação:
	```
	php artisan key:generate
	```
* Configurar o Banco de dados:
	```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nome_do_banco
	DB_USERNAME=usuário_do_banco
	DB_PASSWORD=senha_se_houver_se_não_houver_pode_deixar_vazio
	```

## Executar

* Iniciar o XAMPP e executar o MySql;
* Executar o comando no diretório do projeto para iniciar o servidor:
	```
	php artisan serve
	```
* Abrir o navegador e digitar:
	```
	localhost:8000
	```

## Autores

* **Patrícia Carmona** - [carmonapat](https://github.com/carmonapat)
* **Johnny da Silva** - *Initial work* - [JohnnySanttana72](https://github.com/JohnnySanttana72)
* **Rafael Brito** - [rafabrito](https://github.com/rafabrito)

Veja a lista de [contribuidores](https://github.com/JohnnySanttana72/Problema-2-SD/graphs/contributors) que participaram deste projeto.


