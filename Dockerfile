FROM php:8 AS builder
WORKDIR /var/www


RUN apt-get update && \
    apt-get install -y git

COPY .git .git
COPY .gitmodules .gitmodules
RUN git submodule init && git submodule update

COPY . .
RUN php src/main.php

FROM nginx:latest
COPY --from=builder /var/www/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
