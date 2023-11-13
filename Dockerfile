FROM php:8 AS builder
WORKDIR /var/www
COPY . .
RUN php src/main.php

FROM nginx:latest
COPY --from=builder /var/www/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
