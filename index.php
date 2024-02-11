<!DOCTYPE html>
<html>
<head>
<title>Ajax teszt</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
<script src="main.js"></script>
</head>
<body>
<div class="d-flex justify-content-center">
  <div class="col-sm-6">
    <form action="controll.php" method="POST">
      <div id="name-group" class="form-group mt-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"/>
      </div>
      <div id="email-group" class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com"/>
      </div>
      <div class="form-group">
        <label for="typeselect">Típus</label>
        <select name="typeselect" class="form-control" id="typeselect" multiple>
          <option value="news">Hír</option>
          <option value="alert">Figyelmeztetés</option>
          <option value="messsage">Üzenet</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success mt-3" id="btn-submit"> Submit </button>
    </form>
  </div>
</div>
</body>
</html>