# A drupal migration that migrates characters from SWAPI

## enable the the migration via drush:
1. enable the module via drush
    ``` drush en swapi_migration -y
2. ensure you have a character content type with the required fields:
    i. Title
    ii. field_hair_color
    iii. field_skin_color
3. run the migration
    ``` drush migrate:import swapi_characters

