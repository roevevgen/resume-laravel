# Installation

Clone the repo

`git clone https://github.com/roevevgen/resume-laravel.git`

Switch into the newly created repo folder

`cd resume-laravel`

# Install the dependencies

`composer install`
`npm install`

###### Create the .env file

`mv .env.example .env`

# Generate encryption key

`php artisan key:generate`

# Create, Migrate, and Seed the Database

`cd code`

###### Run the migrations

`php artisan migrate`

###### Seed the database

`php artisan db:seed`
