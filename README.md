## Installation
laravel 8.1
tailwindcss 
breeze
livewire

# Clone repository
git clone https://github.com/khalidLV/MWN.git

# project directory
cd MWN

# Install composer
composer install

#  .env file
cp .env.example .env

# create database 
# name database : MWN

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
npm run dev
php artisan serve
