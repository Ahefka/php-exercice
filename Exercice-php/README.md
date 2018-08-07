# PHP MariaDB skeleton

## Quick start

1. `docker-compose up`
1. go to http://localhost

## Database settings

You can connect to MySQL with a client (like MySQL Workbench) with these settings :

- user : `root`
- password : `root`
- host : `127.0.0.1`
- port : `3306`

A default database called `db` is created on first mariadb container startup.

## Installation

### Ubuntu

> #### Installing docker-ce :
>
> ```shell
> sudo apt-get remove docker docker-engine docker.io
> 
> sudo apt-get install \
>      apt-transport-https \
>      ca-certificates \
>      curl \
>      gnupg2 \
>      software-properties-common
> 
> curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
> 
> sudo add-apt-repository \
>    "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
>    $(lsb_release -cs) \
>    stable"
> 
> sudo apt-get update
> sudo apt-get install docker-ce
> 
> sudo usermod -a -G docker $USER
> ```


> #### Installing docker-compose :
>
> ```shell
> sudo apt install curl
> 
> sudo curl -L https://github.com/docker/compose/releases/download/1.22.0/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose
> sudo chmod +x /usr/local/bin/docker-compose
> ```
