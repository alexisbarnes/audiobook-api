## AudioBook API

AudioBook is a music, podcast and sound effects library. Here you will be able to upload your own audio and access what other people's. The framework for this API is based on PHP and Laravel.

You will be able to create, read, update and delete within your database using AJAX.

## Installation

1. Clone this repo.
2. Download [MAMP](https://www.mamp.info/en/downloads/).
3. Download [Composer](https://getcomposer.org/download/).

4. MAMP:
  - Go to "Preferences..."
  - Go to the Ports tab and make the following changes:
    - Apache Port: 8888
    - Nginx Port: 8888
    - MySQL Port: 8889
  - Go to the Web Server tab and next to "Document Root" click on the folder. Then go to your project directory. In within the project folder select the "public" folder then hit "select".
  - Click "OK" and click "Start Servers."

5. Go to http://localhost:8888 and create a new database called "mejo".
6. In your terminal, run 'php:artisan migrate'.
7. The project will then be running on http://localhost:8888


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

[Alexis Barnes](http://www.alexisbarnes.com)
