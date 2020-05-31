# "Make your own Friend" 
  ## API integration Using Guzzle in PHP
   An individual project, where we were asked to creatively integrate API’s into a meaningful page or a service, or an app.  This is a web application that allows user to select pretend virtual person by selecting country of origin and gender. The selected options are then passed as a parameter to external API, and returns a random user based on the selection. That API sends back additional information such as name, address, email, etc. I was able to only choose the information I like and display it appropriately.
  
  When “friend” is generated and rendered on the page, user can click buttons to get randomly generated jokes or a random smart quote. I specifically set-up an API call to exclude inappropriate content, by passing additional parameters in my request.

While working on this project I expanded my knowledge of PHP programming language, by using classes, modules, and Guzzle library to fetch data from public API’s. I also learned how to extract specific data to be able to render it on the page. Another important lesson I have learned is to be able to get new data from API, without re-loading the page, making user experience better, and run application faster. 

### How to use this Application
  1. Since this is a PHP based application, you need to have PHP installed (https://www.php.net/manual/en/install.php)
  2. Get Composer and install it globally (https://getcomposer.org/)
  3. Create a new directory , and in the command line run **composer require guzzlehttp/guzzle:~6.0**
  4. This will create the composer.json it will load the composer repositories and update the dependancies
      it will also generate autoload files.
  5. Clone repository, do not replace existing files(created by Composer)
  6. To run the application open index.php
  
  Or visit live version at [VitaliyBulyma.com/friend](http://vitaliybulyma.com/friend)
  
