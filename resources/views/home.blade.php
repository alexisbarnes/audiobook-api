<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>AudioBook API</title>

      <!-- FONTS-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

      <!--BOOTSTRAP-->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



      <!--STYLES-->
      <style>
        html, body {
          font-family: 'Open Sans', sans-serif;
          background-color: #f7f7f7;
        }

        a {
          color: #A64474;
          text-decoration: none;
        }

        a:hover {
          color: #D9C7A8;
          text-decoration: none;
        }

        .all-content {
          margin-top: 20%;
        }

        /*LOGO*/
        .logo {
          background-image: url('logo-blk.png');
          background-repeat: no-repeat;
          background-position: center center;
          height: 198px;
          width: 100%;
          text-align: center;
          margin-bottom: 20px;
          top: 50%;
          left: 50%;
        }

        .logo:hover {
          background-image: url('logo-red.png');
        }

        /*LINKS*/
        .page-links {
          text-align: center;
        }

        .link {
          margin: 24px;
        }
      </style>

      <body>

        <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 all-content">
            <a href="#"><div class="logo"></div></a>
            <div class="page-links">
              <a href="#" class="link">Documentation</a>
              <a href="http://www.alexisbarnes.com" target="_blank" class="link">Alexis Barnes's Portfolio</a>
              <a href="www.github.com/alexisbarnes" target="_blank" class="link">GitHub</a>
              <a href="#" target="_blank" class="link">Credits</a>
            </div>
          </div>
        </div>

      <!--JQUERY-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </body>
  </head>
