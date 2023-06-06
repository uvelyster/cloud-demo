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
        <h1 class="display-4"> 제목과 설명란에 데이터를 입력해보세요 </h1>
      </div>
  </div>
  <div class="container">
    <form action="process_create.php" method ="POST">

    <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control" placeholder="제목을 입력하시오">
    </div>
  <div class="form-group">
    <label >description</label>
    <input type="text" name="description" class="form-control"  placeholder="설명을 입력하시오">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>  
  </body>
</html>
