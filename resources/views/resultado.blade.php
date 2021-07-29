<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1596495577886-d920f1fb7238?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=754&q=80);
        }
        form {
            height: 150px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #bbb;
            border-radius: 10px;
        }
    </style>
</head>
<body>
  <h1>Resultado <br></h1>
  <h2>{{ $result }}</h2>
</body>
</html>