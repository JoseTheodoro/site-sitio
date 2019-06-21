FROM ubuntu:xenial
MAINTAINER Jose Theodoro <jose.theodoro42@gmail.com>

RUN apt-get update
# RUN apt-get -y dist-upgrade
RUN apt-get -y install python-software-properties
RUN apt-get -y install software-properties-common
RUN apt-get -y install locales

ENV OS_LOCALE="pt_BR.UTF-8"
RUN locale-gen ${OS_LOCALE}
ENV LANG=${OS_LOCALE} \
	LANGUAGE=en_US:en \
	LC_ALL=${OS_LOCALE} \
	NGINX_CONF_DIR=/etc/nginx
ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get -y install build-essential

# Install supervisor
RUN apt-get install -y supervisor && mkdir -p /var/log/supervisor
COPY ./docker-files/supervisord.conf /etc/supervisor/conf.d/

# INSTALL PHP
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get -y install wget
RUN apt update
RUN apt install -y zip unzip \
                   php7.3 \
                   php7.3-common \
                   php7.3-cli \
                   php7.3-fpm \
                   php7.3-curl \
                   php7.3-gd \
                   php7.3-mysql \
                   php7.3-mbstring \
                   php7.3-zip \
                   php7.3-xml

# INSTALL COMPOSER
RUN apt install -y curl
RUN curl -sS https://getcomposer.org/installer | php -- --version=1.4.1 --install-dir=/usr/local/bin --filename=composer

# INSTALL NGINX
RUN apt install -y nginx
COPY ./docker-files/nginx/default.conf /etc/nginx/conf.d/default.conf

# INSTALL GIT
RUN apt install -y git

# COPY CODE
ADD . /var/www/html/site

WORKDIR /var/www/html/site

EXPOSE 80

CMD ["/usr/sbin/php-fpm7.3"]
CMD ["/usr/bin/supervisord"]