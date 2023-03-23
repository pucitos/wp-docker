FROM nginx:stable-alpine

#ARG APP_DOMAIN=blog.necchishop.test
ARG APP_DOMAIN
#ENV APP_DOMAIN=$APP_DOMAIN
ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf.template
ADD ./nginx/certs /etc/nginx/certs/self-signed

RUN envsubst '${APP_DOMAIN}' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf
RUN rm /etc/nginx/conf.d/default.conf.template

RUN mkdir -p /var/www/html


