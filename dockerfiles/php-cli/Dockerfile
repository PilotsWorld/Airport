FROM debian:latest
MAINTAINER Wojciech Wójcik <wojtaswojcik@gmail.com>
ENV DEBIAN_FRONTEND noninteractive
# Set environmental variables
ENV COMPOSER_HOME /root/composer

RUN apt-get update -y
RUN apt-get install  wget -y
RUN echo "deb http://packages.dotdeb.org wheezy-php56 all" >> /etc/apt/sources.list.d/dotdeb.list
RUN wget http://www.dotdeb.org/dotdeb.gpg -O- |apt-key add -
RUN apt-get update -y
RUN apt-get install -y --force-yes acl curl supervisor git
RUN apt-get install -y --force-yes php5-cli php5-fpm php5-json php5-xsl php5-intl php5-mcrypt  php-pear
RUN mkdir -p /var/log/supervisor
RUN sed -i "s@^;date.timezone =.*@date.timezone = $TIMEZONE@" /etc/php5/*/php.ini
# Set timezone
RUN echo $TIMEZONE > /etc/timezone && dpkg-reconfigure --frontend noninteractive tzdata

# apt clean
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/*
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set up the application directory.
VOLUME ["/app"]
WORKDIR /app

# Set up the command arguments
#CMD ["-"]
#ENTRYPOINT ["composer", "--ansi"]
