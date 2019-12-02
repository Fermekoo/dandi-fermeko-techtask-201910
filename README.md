# dandi-fermeko-techtask-201910

# Installation
    - run "git clone https://github.com/Fermekoo/dandi-fermeko-techtask-201910.git"
    - run "composer install" to install dependencies
# Routes
    - "{base_url}/v1/recipe" to get all Recipe
    - "{base_url}/v1/ingredient" to get all Ingredients
    - "{base_url}/v1/lunch" to get all Recipe with available Ingredients, you can use "exp_date" query string to set the              comaprison date for use-by of ingredients
    
 # Test
    - run "vendor/bin/phpunit"
