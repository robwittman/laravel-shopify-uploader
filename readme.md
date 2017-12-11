## Shopify Admin Skeleton App

Template for Shopify Admin applications, built using Laravel, and Shopify Polaris

### Installation

1. Pull down the repository.

```sh
git clone https://github.com/robwittman/laravel-skeleton-app
```

2. Plug your app credentials and settings into `config/shopify.php`.

3. Migrate the database, run seeds, and update configuration

```sh
php artisan migrate
php artisan db:seed
php artisan config:cache
```

4. Visit the application, and go to `/shopify/install`. This loads a view where you can input a store name, and test the install!

### Design

The app is designed for the development of small applications. The Embedded Shopify app is loaded at `/app`, an admin panel is located at `/admin`, `/api` serves API / AJAX requests, and any other routes would utilize the main site layout, useful for landing pages, FAQS, etc.
