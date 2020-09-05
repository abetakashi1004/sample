FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/

FROM mysql:latest

RUN apt-get update
RUN apt-get -y install locales-all

ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV LC_ALL ja_JP.UTF-8