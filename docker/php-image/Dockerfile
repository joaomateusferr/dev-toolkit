FROM ubuntu

RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive TZ=America/Sao_Paulo apt-get -y install tzdata
RUN apt-get -y install git vim nano apache2 php8.1 libapache2-mod-php8.1 php-soap php-xml php-curl php-opcache php-gd php-sqlite3 php-mbstring

COPY ./deploy-config.sh /
RUN sh /deploy-config.sh
RUN rm /deploy-config.sh

EXPOSE 80
EXPOSE 443

CMD ["bash", "apachectl", "-D", "FOREGROUND"]