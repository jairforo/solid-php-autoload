# PHP8 + SOLID + OOP
The goal of this repository is to give a quick start application for programmers that will code assessments in raw PHP.


### Folder Structure

    .
    ├── public                  # Entry point index.php importing  vendor/autoload.php
    ├── src                     # Source files (classes, Inteerrfaces and Exceptions, etc)
    ├── test                    # Automated tests
    ├── .gitignore
    ├── composer.json
    ├── composer.lock
    ├── phpunit.xml
    └── README.md
    
### Running tests
```
./vendor/phpunit/phpunit/phpunit
```

### Development Server
```
php -S 127.0.0.1:8000 -t public
```
