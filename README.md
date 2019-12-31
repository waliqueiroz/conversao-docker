# Conversão

## Estrutura do projeto entregue neste repositório
**[Docker compose](https://docs.docker.com/compose/)** de 3 conteineres contendo:
- Servidor [nginx](https://www.nginx.com/) rodando nas portas **8000 (API)** e **8080 (frontend)**.
- [php-fpm](https://www.php.net/manual/en/install.fpm.php) v. `7.1.9` na porta **9000**.
- [postgres](https://www.postgresql.org/) na porta **5432**.

### Diretórios do projeto
- **[htdocs](https://github.com/carloshatus/test-mobly/tree/master/htdocs)**: arquivos do projeto.
  - **[conversao-back](https://github.com/waliqueiroz/conversao-docker/tree/master/htdocs/conversao-back)**: projeto **Laravel (PHP)**.
  - **[conversao-front](https://github.com/waliqueiroz/conversao-docker/tree/master/htdocs/conversao-front)** projeto **VueJs**.
- **[nginx](https://github.com/waliqueiroz/conversao-docker/tree/master/nginx)**: arquivos de configurações do **nginx**.
- **[php-fpm](https://github.com/waliqueiroz/conversao-docker/tree/master/php-fpm)**: arquivos de configurações do **PHP**.
