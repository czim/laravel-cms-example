all: docker env migrate seed

.PHONY: docker env migrate seed

docker:
	${INFO} "Setting up docker..."
	docker-compose up -d --force-recreate --remove-orphans

env:
	${INFO} "Preparing environment..."
	cp .env.example .env && \
		docker-compose exec app bash -c 'php artisan key:generate; (exit $?)'

migrate:
	${INFO} "Migrating database..."
	docker-compose exec app bash -c 'php artisan migrate; (exit $?)' && \
    		docker-compose exec app bash -c 'php artisan cms:migrate; (exit $?)'

seed:
	${INFO} "Seeding database..."
	docker-compose exec app bash -c 'php artisan db:seed; (exit $?)'

cache:
	${INFO} "Caching menu & models information..."
	docker-compose exec app bash -c 'php artisan cms:menu:cache; (exit $?)' && \
		docker-compose exec app bash -c 'php artisan cms:models:cache; (exit $?)' && \
		docker-compose exec app bash -c 'php artisan config:cache; (exit $?)' && \
		docker-compose exec app bash -c 'php artisan route:cache; (exit $?)'

flush:
	${INFO} "Flushing cache for menu & models..."
	docker-compose exec app bash -c 'php artisan cms:menu:clear; (exit $?)' && \
		docker-compose exec app bash -c 'php artisan cms:models:clear; (exit $?)'

destroy:
	${INFO} "Destroying docker containers & volumes..."
	docker-compose stop && docker-compose kill && docker-compose rm && \
		docker volume prune


YELLOW := "\e[1;33m"
NC := "\e[0m"

INFO := @bash -c '\
  printf $(YELLOW); \
  echo "=> $$1"; \
  printf $(NC)' SOME_VALUE
