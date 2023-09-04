# Agilita

Este projeto utiliza Docker para criar um ambiente de desenvolvimento com PHP e Nginx.

## Pré-requisitos

- Docker (https://www.docker.com/get-started)
- Docker Compose (https://docs.docker.com/compose/install/)
- Composer (https://getcomposer.org/download/)

## Como iniciar

1. Clonar o repositório:
```
git clone https://github.com/rodrigogolfeto/agilita.git projeto
cd projeto
```

2. Construir e iniciar os contêineres:
```
docker-compose down
docker-compose build
docker-compose up -d
```

3. Instalar as dependências do projeto:
```
docker-compose exec php composer install
```

4. Acesse o projeto em seu navegador através da URL http://localhost:8080

## Parar o projeto

Para parar os contêineres:
```
docker-compose down
```