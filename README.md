# Filament Issue Reproduction

This repository is a reproduction of an issue with Filament. Don't attempt to use this. It's just a test/reproduction.

## Issue

Models with `MorphOneOfMany` (and probably all `OneOfMany`) Eloquent relationships do not build the query correctly and 
cause an error when loading the forms. Essentially, what appears to be happening is that Filament sees the `MorphOne` 
relation returned and doesn't account for their being a pivot table, looking for the `morph_id` on the related models 
table instead.

## Steps to Reproduce

1.  Clone repo
2. `composer install`
3. If necessary for your environment, set up the `.env` file. The default env file was used in my testing environment, so it should work out of the box for most people
4. `php artisan migrate --seed`
5. Navigate to rooms resource in filament, and attempt to create or edit. Rooms resource is incredibly barebones for the sake of simplified testing so expect the table to look a bit odd.

## Notes

- The root of the Filament panel is at `/` and there is no auth gate, so you can access the resources without logging in.
- The `Room` model has a `MorphOneOfMany` relationship with the `Product` model, discriminated by the duration column.
- This repo was built using SQLite for simplicity, but the issue is present in MySQL as well.
- The issue is present in both the create and edit forms.
