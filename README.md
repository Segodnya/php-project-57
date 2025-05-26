### Hexlet tests and linter status:

[![Actions Status](https://github.com/Segodnya/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Segodnya/php-project-57/actions)
[![PHP CI](https://github.com/Segodnya/php-project-57/actions/workflows/php-ci.yml/badge.svg)](https://github.com/Segodnya/php-project-57/actions/workflows/php-ci.yml)

[![Quality gate](https://sonarcloud.io/api/project_badges/quality_gate?project=Segodnya_php-project-57)](https://sonarcloud.io/summary/new_code?id=Segodnya_php-project-57)

# Task Manager

Task Manager is a task management system similar to [Redmine](http://www.redmine.org/). It allows you to create tasks, assign executors, and change task statuses. Registration and authentication are required to work with the system.

Demo: https://php-project-57-koti.onrender.com

## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite (for local development)
- PostgreSQL (for production)

## Installation

### Local Development

1. Clone the repository:
```bash
git clone https://github.com/Segodnya/php-project-57.git
cd php-project-57
```

2. Install dependencies:
```bash
make setup
```
or
```bash
composer install
cp -n .env.example .env
php artisan key:generate --ansi
touch database/database.sqlite
php artisan migrate
php artisan db:seed
npm ci
npm run build
```

3. Start the development server:
```bash
make start
```
or
```bash
php artisan serve
```

4. Start the frontend development server:
```bash
make start-frontend
```
or
```bash
npm run dev
```

### Production Deployment

1. Configure your production environment variables in `.env` file or through your hosting provider.
2. Make sure to set `APP_ENV=production` and `APP_DEBUG=false`.
3. Configure your PostgreSQL database connection in `.env`:
```
DB_CONNECTION=pgsql
DB_HOST=your_db_host
DB_PORT=5432
DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

4. Run production setup:
```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
npm ci
npm run build
```

## Testing

Run the automated tests with:
```bash
make test
```
or
```bash
php artisan test
```

## Linting

Run code style checks with:
```bash
make lint
```
or
```bash
composer phpcs
```

## License

This project is open-sourced software licensed under the MIT license.

## Mail Configuration

The application is configured to use Mailtrap for email testing. Follow these steps to set up Mailtrap:

1. Register for a free account at [Mailtrap.io](https://mailtrap.io/).
2. After registration, go to your Inboxes and select the default inbox (or create a new one).
3. In the SMTP Settings section, find your credentials.
4. Update your `.env` file with these credentials:
```
MAIL_MAILER=smtp
MAIL_SCHEME=tls
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```
5. All emails sent by the application will be captured in your Mailtrap inbox, allowing you to test email functionality without sending real emails.
