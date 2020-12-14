.PONY: build deps composer-install composer-update composer reload test run-tests start stop destroy doco rebuild start-local

current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

build: deps start

deps: composer-install

# 🐘 Composer
composer-install: CMD=install
composer-update: CMD=update
composer composer-install composer-update:
	@docker run --rm --interactive --volume $(current-dir):/app --user $(id -u):$(id -g) \
		clevyr/prestissimo $(CMD) \
			--ignore-platform-reqs \
			--no-ansi \
			--no-interaction

reload:
	@docker-compose exec php-fpm kill -USR2 1
	@docker-compose exec nginx nginx -s reload

test:
	@docker exec optime-php make run-tests

run-tests:
	mkdir -p build/test_results/phpunit
	./vendor/bin/phpunit --exclude-group='disabled' --log-junit build/test_results/phpunit/junit.xml tests

exercise-first-test:
	@docker exec optime-php make run-first-test

run-first-test:
	mkdir -p build/test_results/phpunit
	./vendor/bin/phpunit --filter ExerciseOneTest --exclude-group='disabled' --log-junit build/test_results/phpunit/junit.xml tests


exercise-two-test:
	@docker exec optime-php make run-two-test

run-two-test:
	mkdir -p build/test_results/phpunit
	./vendor/bin/phpunit --filter ExerciseTwoTest --exclude-group='disabled' --log-junit build/test_results/phpunit/junit.xml tests


exercise-three-test:
	@docker exec optime-php make run-three-test

run-three-test:
	mkdir -p build/test_results/phpunit
	./vendor/bin/phpunit --filter ExerciseThreeTest --exclude-group='disabled' --log-junit build/test_results/phpunit/junit.xml tests


exercise-four-test:
	@docker exec optime-php make run-four-test

run-four-test:
	mkdir -p build/test_results/phpunit
	./vendor/bin/phpunit --filter ExerciseFourTest --exclude-group='disabled' --log-junit build/test_results/phpunit/junit.xml tests


# 🐳 Docker Compose
start: CMD=up -d
stop: CMD=stop
destroy: CMD=down

# Usage: `make doco CMD="ps --services"`
# Usage: `make doco CMD="build --parallel --pull --force-rm --no-cache"`
doco start stop destroy:
	@docker-compose $(CMD)

rebuild:
	docker-compose build --pull --force-rm --no-cache
	make deps
	make start


prepare-local:


start-local:

stop-local:
