# ReserveNU

A PHP and MySQL university room reservation project with separate user and administrator interfaces and Google Calendar integration.

## Features

- User registration, login, and reservation requests
- Room availability and reservation status pages
- Administrator dashboards, request review, and history
- Google Calendar viewing and event synchronization

## Local setup

1. Use PHP with PDO MySQL, MySQL, Composer, and a local PHP web server such as Laragon or XAMPP.
2. Run `composer install` to install the locked dependencies.
3. Create the `reservenu_db` database and import your own compatible schema. A database schema or dump is not included in this repository.
4. Configure `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD` in the PHP server environment. Local defaults are `localhost`, `reservenu_db`, `root`, and an empty password. `.env` files are not loaded automatically.
5. For calendar viewing, copy `config/calendar.example.php` to `config/calendar.local.php` and enter calendar IDs approved for your viewers. Google Calendar sharing settings control access.
6. For Google Calendar synchronization, create your own Google OAuth client and place its downloaded configuration at `admin/php/credentials.json`. Register `http://localhost/reservenu/admin/php/oauth_callback.php` as the redirect URI, or update both OAuth scripts to match your local URL. Run `admin/php/google_auth.php` locally to authorize; the resulting `token.json` stays local.
7. Serve this folder as `/reservenu` and open `/reservenu/user/html/index.html`.

## Repository privacy

OAuth credentials and tokens, local configuration, uploaded documents, database exports, and installed dependencies are excluded from Git. Contact information in the public demo uses placeholders. Never commit real account records or private documents.

This repository is a portfolio source project. Publishing it on GitHub does not deploy the PHP application. Production deployment needs a separate security review, especially of password recovery, authorization, OAuth, and file uploads.
