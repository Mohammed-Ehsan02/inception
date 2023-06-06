FROM debian:buster

RUN apt -y update && apt install -y nginx && apt upgrade -y openssl

RUN mkdir /etc/nginx/certificates && \
	openssl req -x509 -newkey rsa:2048 -days 365 -nodes \
		-keyout /etc/nginx/certificates/key.pem \
		-out /etc/nginx/certificates/cert.pem \
		-subj /CN=localhost

COPY ./requirements/nginx/conf/default.conf /etc/nginx/sites-available/default

ENTRYPOINT ["nginx", "-g", "daemon off;"]