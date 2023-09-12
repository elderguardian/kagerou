FROM node:18

WORKDIR /var/www
COPY package*.json ./
RUN npm install
COPY . .

RUN npm run build

RUN mv /var/www/dist /var/www/html

RUN apt-get update
RUN apt-get install nginx -y

EXPOSE 80
CMD ["nginx","-g","daemon off;"]