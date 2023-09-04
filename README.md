# Meu Projeto com Docker, PHP e Nginx

Este projeto utiliza Docker para criar um ambiente de desenvolvimento com PHP e Nginx.

## Estrutura do Projeto

```plaintext
/projeto
├── /nginx
│   ├── Dockerfile.nginx
│   └── nginx.conf
├── Dockerfile.php-fpm
├── docker-compose.yml
└── index.php (e outros arquivos/folders do seu projeto)
```

## Pré-requisitos

- Docker (https://www.docker.com/get-started)
- Docker Compose (https://docs.docker.com/compose/install/)

## Como iniciar

1. Clonar o repositório:
```
git clone [URL_DO_SEU_REPOSITORIO] projeto
cd projeto
```

2. Construir e iniciar os contêineres:
```
docker-compose build
docker-compose up -d
```

3. Acesse o projeto em seu navegador através da URL http://localhost:8080.

## Parar o projeto

Para parar os contêineres:
docker-compose down

Nota: Não se esqueça de substituir [URL_DO_SEU_REPOSITORIO] pela URL do seu repositório real.
