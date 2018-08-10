FROM nginx:stable-alpine

RUN rm /etc/nginx/conf.d/default.conf
RUN rm /etc/nginx/conf.d/examplessl.conf

ADD nginx.conf /etc/nginx/conf.d/default.conf

#RUN chown -R www-data:www-data /var/lib/nginx
## volume
#VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/var/log/nginx"]
WORKDIR /etc/nginx
CMD ["nginx"]