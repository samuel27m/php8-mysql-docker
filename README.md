# php8-mysql-docker

A docker-compose with PHP 8 &amp; MySQL 5.7, ready to go

### Quick Start

1. Ensure you have docker & docker-compose install in your machine.
2. Clone the repo `git clone https://github.com/samuel27m/php8-mysql-docker.git`
3. Go to 'php8-mysql-docker' folder.
4. Run `docker-compose up -d `

### Commands

1. Go into the PHP container

```
docker-compose exec app bash
```

2. Go into the MySQL container

```
docker-compose exec db bash
```

### Database access

```
USERNAME = user
PASSWORD = secret
DATABASE = db
PORT = 3306
HOST = db (if you're connecting from a container)
HOST = localhost (if you're connecting from your machine)
```

### Disclaimer - **only tested in:**

-   Linux
-   Windows (With Docker Desktop and WSL2 integration)
