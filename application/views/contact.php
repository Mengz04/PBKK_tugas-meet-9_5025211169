<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <a class="navbar-brand" href="./">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./about">About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="d-flex vh-100 justify-content-center align-items-center bg-dark">
  <div class="d-flex">
    <div class="d-flex flex-row p-5 rounded bg-light justify-content-center align-items-center">
      <form class="w-100" name="contact-form">
        <h4>Give us your suggestion!</h4>
        <div class="form-group my-2">
          <label>name</label>
          <input type="text" class="form-control" id="nama" name="nama"></input>
        </div>
        <div class="form-group my-2">
          <label>email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com">
        </div>
        <div class="form-group my-2">
          <label>phone</label>
          <input type="text" class="form-control" id="phone" name="phone"></input>
        </div>

        <div class="form-group my-2">
          <label>suggestion</label>
          <textarea class="form-control" id="suggestion" name="suggestion"></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-3 mx-auto">Submit</button> <br>
        <a href="./" class="my-3">return</a>
      </form>
    </div>
  </div>
  </div>
</body>
</html>