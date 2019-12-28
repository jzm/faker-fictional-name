# FakerFictionalName
Generate fictional names in PHP using [fzaninotto/Faker](https://github.com/fzaninotto/Faker).

## Installation
Add the FakerFictionalName library to your `composer.json` file:

    composer require jupicose/faker-fictional-name
    
## Usage
To use this with Faker, you must add the `FakerFictionalName\FictionalName` class to the Faker generator:

````php
    <?php

    $faker = \Faker\Factory::create();
    $faker->addProvider(new \FakerFictionalName\Provider\en_US\FictionalName($faker));

    $faker->fictionalName; // A randomly generated fictional name.
````
