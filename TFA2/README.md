# IT0049 SimplePOS

This CodeIgniter 4 application displays customer and user accounts retrieved from MySQL using Query Builder-backed Models.

## Setup

1. Start Apache and MySQL in XAMPP.
2. Create the database and sample records using `database/it0049_pos.sql` in phpMyAdmin, or use the migration and seeder commands below.
3. Check the database values in `.env`. The provided configuration assumes XAMPP's default MySQL user `root` with no password.
4. Open `http://localhost/IT0049_ROQUE/public/`.

## Migration and seeding

From the project directory, run:

```text
php spark migrate
php spark db:seed PosSeeder
```

The migration creates `customers` and `users` with the schema specified in the activity. The seeder inserts five sample records into each table.

## Pages

- `/customers` - customer accounts from `CustomerModel`
- `/users` - user accounts from `UserModel`
