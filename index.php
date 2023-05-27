<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="./calculate.php" method="GET">
    <input name="num1" type="number" placeholder="Number 1">
    <select name="operation">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="divide">/</option>
      <option value="multiply">*</option>
      <option value="power">power</option>
    </select>
    <input name="num2" type="number" placeholder="Number 2">
    </form>
  </div>
</body>
</html>