# Laravel Project Setup

## Prerequisites
Ensure you have the following installed on your system:
- PHP (>= 8.0)
- Composer
- Laravel Installer (optional)
- MySQL or any other supported database
- Apache with Virtual Host support
- Node.js & npm (for frontend dependencies)

## Installation Steps

### 1. Clone the Repository
```bash
git clone https://github.com/salim-hosen/print-manzil-test.git
cd print-manzil-test
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Copy `.env` File & Generate Key
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure `.env`
Update the following variables in your `.env` file:
```env

APP_URL=http://pm.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Setup Database
```bash
php artisan migrate --seed
```

### 6. Set Up Virtual Host
Edit the Apache configuration file (usually found in `/etc/apache2/sites-available/000-default.conf` or `/etc/apache2/sites-available/pm.test.conf`) and add the following:
```apache
<VirtualHost *:80>
    ServerName pm.test
    ServerAlias *.pm.test
    DocumentRoot "/path/to/your-repository/public"

    <Directory "/path/to/your-repository/public">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/pm_test_error.log
    CustomLog ${APACHE_LOG_DIR}/pm_test_access.log combined
</VirtualHost>
```

### 7. Enable Virtual Host & Restart Apache
```bash
sudo a2ensite pm.test.conf
sudo service apache2 restart
```

### 8. Add Entry to Hosts File
Edit your `/etc/hosts` file (Linux/Mac) or `C:\Windows\System32\drivers\etc\hosts` (Windows) and add:
```plaintext
127.0.0.1 pm.test
127.0.0.1 shop1.pm.test
127.0.0.1 *.pm.test
# if you need more subdomain you can add here
```

### 9. Run the Application
Run the build command if necessary:
```bash
php artisan build
```
then access it via `http://pm.test` in your browser.

Enjoy developing your Laravel project!
