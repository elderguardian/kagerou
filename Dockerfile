FROM node:18

WORKDIR /usr/src/app
COPY . .
RUN npm install
RUN npm run build
COPY dist/ /var/www/html

RUN apt-get update
RUN apt-get install nginx -y

EXPOSE 80
CMD ["nginx","-g","daemon off;"]