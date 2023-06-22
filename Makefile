DIR = /Users/${USER}

all: inception

inception:
	sudo mkdir -p ${DIR}/data/mariadb
	sudo mkdir -p ${DIR}/data/wordpress
	docker-compose -f ./srcs/docker-compose.yml up --build -d

clean:
	docker-compose -f ./srcs/docker-compose.yml down --rmi all -v --remove-orphans 2>/dev/null || true
	docker-compose -f ./srcs/docker-compose-bonus.yml down --rmi all -v --remove-orphans 2>/dev/null  || true

fclean: clean
	sudo rm -rf ${DIR}/data/*
	docker rmi -f $$(docker images -a -q) 2> /dev/null || true
	docker volume prune -f

re: fclean all
