FROM desmart/php:7.1-fpm-debian

RUN apt-get update -y \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y \
        php7.1-xdebug \
    && /build/cleanup.sh

RUN echo xdebug.remote_enable=1 >> /etc/php/7.1/mods-available/xdebug.ini; \
    echo xdebug.remote_autostart=0 >> /etc/php/7.1/mods-available/xdebug.ini; \
	echo xdebug.remote_connect_back=1 >> /etc/php/7.1/mods-available/xdebug.ini;