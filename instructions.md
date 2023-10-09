# Jadu Engineer Code Exercise

This code exercise was created as part of the application process for a PHP Engineer role at Jadu.\
Using the Symfony framework create an application that will complete the following operations:\
isPalindrome, isAnagram and is Pangram.

## Requirements

Docker
composer
Symfony 6 

## Usage

Create a docker environment using the installation instructions below.

Use the sidebar to navigate the test pages when on the home page.\
then follow the instructions provided on each page.

## To create a docker image (ensure VSCode and Docker are already installed)

Clone or Download this repository

Create a new directory called JaduExercise

Open the JaduExercise directory in VSCode

Copy the docker-compose.yml file into the JaduExercise directory

Create a directory called nginx inside the JaduExercise directory

Create a directory called php inside the JaduExercise directory

Copy the default.conf file into the nginx directory

Copy the Dockerfile into the PHP directory

Open a new terminal in VSCode and enter the command
```bash
docker-compose up -d --build
```
then enter the command
```bash
docker exec -it php82-container bash
```
followed by
```bash
composer create-project symfony/skeleton .
```
then
```bash
composer require symfony/twig-bundle
```
finally, if required, install
```bash
composer require --dev phpunit/phpunit
```

Next, replace the routes.yml file with the one in the repositories config directory

Replace the public directory with the repository public directory

Replace the src directory with the repository src directory

finally, replace the templates directory with the repositories templates directory


If all is set up correctly, visit localhost:8080 to see the home page of the application.

## Docker Image

The php-8.2 container image can be found here.
https://hub.docker.com/r/mikrobinson/jaduengineercodeexercise

## License

[MIT](https://choosealicense.com/licenses/mit/)
