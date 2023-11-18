all:
	mkdir -p /Users/arobu/data/mariadb
	mkdir -p /Users/arobu/data/wordpress
	@docker compose -f ./srcs/docker-compose.yml up -d --build

down:
	@docker compose -f ./srcs/docker-compose.yml down

re:
	mkdir -p /Users/arobu/data/mariadb
	mkdir -p /Users/arobu/data/wordpress
	@docker compose -f srcs/docker-compose.yml up -d --build

clean:
	@rm -rdf /Users/arobu/data/
	@docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa);\
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);\
	docker network rm $$(docker network ls -q);\

.PHONY: all re down clean