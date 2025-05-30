clear:
	php artisan view:clear && php artisan config:clear && php artisan cache:clear

start:
	php artisan serve --host 0.0.0.0

start-frontend:
	npm run dev

validate-and-start: clear setup validate lint phpstan test start

setup:
	composer install
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed
	npm ci
	npm run build
	make ide-helper

validate:
	composer validate

autoload:
	composer dump-autoload

watch:
	npm run watch

migrate:
	php artisan migrate

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

lint:
	composer phpcs

lint-fix:
	composer phpcbf

compose:
	docker-compose up

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n

mail-test:
	@read -p "Enter email address for test: " email; \
	php artisan mail:test $$email

clear-config:
	php artisan config:clear

phpstan:
	./vendor/bin/phpstan analyse --ansi --memory-limit=512M