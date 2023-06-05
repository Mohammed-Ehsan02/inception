FROM debian:buster

USER root

RUN apt update && apt install -y \
    mariadb-server \
    mariadb-client

COPY ./requirements/mariadb/tools/docker_entry.sh /usr/local/bin/

ENTRYPOINT ["docker_entry.sh"]