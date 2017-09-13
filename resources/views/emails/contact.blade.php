<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>You Have a New email from the contact form</h1>

    <div class="container">
      {{ $bodyMessage}}

    </div>

    <p>Sent by {{ $email }}</p>
  </body>
</html>
