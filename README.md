# Basic PHP and Laravel interview

Dear candidate, please follow this readme and solve all questions.

> Before you can start, you should prepare your development environment.

**Using Laravel with Homestead/Vagrant**

In order to develop a Symfony application, you might want to use a virtual development environment instead of the built-in server or WAMP/LAMP. Homestead is an easy-to-use Vagrant box to get a virtual environment up and running quickly.

Before you can use Homestead, you need to install and configure Vagrant and Homestead as explained in the Homestead documentation.

Resources:
- [Using Laravel with Homestead/Vagrant](https://laravel.com/docs/5.7/homestead)
- [Homestead documentation](http://laravel.com/docs/homestead#installation-and-setup)

**This test requires:**
- access to the internet
- an php capable IDE (we suggest PhpStorm with symfony, yaml, twig and php annotations plugin)
- working setup of PHP 7.1.3+ *(https://laravel.com/docs/5.7/installation#server-requirements)*
- composer *(https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)*
- mongoDB *(https://docs.mongodb.com/manual/installation/)*
- nginx or alternative simple web server

**Good luck!**


--------


## Test tasks:

1. Change the text on laravel homepage from "Laravel" to "This is a test"

1. Run the PhpUnit test. Check if there are any errors, if so fix them.

1. Create a method hello under App\Controllers\InterviewController
  * for route `/hello`
  * with a proper json return `{"hello":"world!"}`

1. Create a "Bios" collection and load the example data into your MongoDB server
  * copy the json string from mongodb website ([link](https://docs.mongodb.com/manual/reference/bios-example-collection/))

1. Define "Bios" model under namespace App\Models

1. Define "Bios" repository under namespace App\Repositories

1. Implement following repository methods
  * findByFirstName($firstName)
  * findByContribution($contributionName)
  * findByDeadBefore($year)

1. Define and create a service "BiosService" under namespace App/Services and implement following methods
  * getAllAwards()
  * Use the logger to log operations (error, warning, debug)

1. Create ContributionsController under namespace App\Controllers\ContributionsController

1. Add a contributionsAction method to your ContributionsController
  * for route `/contributions`
  * make a use of your BiosService
  * avoid logic under controller
  * method should list all contributions
  * with a proper json return `["contrib", ...]`

1. Add a biosByContributionAction method to your ContributionsController
  * for route `/contributions/{contributionName}`
  * make a use of your BiosService
  * avoid logic under controller
  * method should list all bios documents with provided contribution
  * with a proper json return `[{...}]`

1. make a unit test for the controller
  * check if route `/hello` has response code 200
  * check if route `/hello` response is a json
  * check if route `/contributions` has response code 200
  * check if route `/contributions/fake` has response code 404
  * check if route `/contributions/OOP` has response code 200
  
1. make a unit test for the BiosService
  * at least 1 method of your choice

1. write a command called `test:command` that should accept 1 argument called id under namespace App\Console\Commands
  * The command should check if a Bios document with an id of the argument exists
  * if document exists, return info "document exists"
  * if document doesnt exist, return error "document doesnt exist"


## Bonus tasks

1. Check the laravel application for errors and fix them if any.

1. write a prompt for the command `test:command`
  * Prompt text is "This is a test. Do you want to continue (y/N) ?"
  * If you decline, return error "Nothing done. Exiting..."
  * If you accept, run the command

3. Create a single page Vuejs application
  * for route '/vuejs'
  * show contribution list
  * show contribution detail

# That's it!
## Thank you for your participation! Good luck submitting your results!
