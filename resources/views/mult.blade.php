<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplicação</title>
</head>
<body>
    <h1>Multiplicação</h1>
    <form action="/mult" method="post">
        @csrf 
      <input type="number" name="num1">
      *
      <input type="number" name="num2">
      <button type="submit">Enviar</button>
    </form>
</body>
</html>