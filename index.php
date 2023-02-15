<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Submition form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    
  <div class="main">
    <div class="register">
        <h2>Submit Your Report Here</h2>
        <form id="register" method="post" action="connect.php">
            <label>First Name:</label>
            <br>
            <input type="text" name="fname" id="name" placeholder="Enter Your Name">
            <br><br>

            <label>Last Name:</label>
            <br>
            <input type="text" name="lname" id="name" placeholder="Enter Your Surname">
            <br><br>

            <label>Email:</label>
            <br>
            <input type="email" name="email" id="name" placeholder="Enter Your Email">
            <br><br>

            <label>Project ID:</label>
            <br>
            <input type="text" name="project_id" id="name" placeholder="Enter Project ID here">
            <br><br>

            <label>Project Title:</label>
            <br>
            <input type="text" name="tname" id="name" placeholder="Title of your project">
            <br><br>

            <label>Report:</label>
            <br> 
            <input type="textarea" name="report" id="name" placeholder="Report of your project" style="width:100%">

            <br><br>
            <input type="submit" value="submit" name="submit" id="submit"   > 

        </form>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>