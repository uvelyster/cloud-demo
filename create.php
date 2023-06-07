<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"> Input the title and description </h1>
      </div>
  </div>
  <div class="container">
    <form action="process_create.php" method ="POST">

    <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control" placeholder="Input Title">
    </div>
  <div class="form-group">
    <label >description</label>
    <input type="text" name="description" class="form-control"  placeholder="Input Description">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>  
  </body>
</html>
