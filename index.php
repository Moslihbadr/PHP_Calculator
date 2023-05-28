<!DOCTYPE html>
<html lang="en">
<head>
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
    <input type="submit" value="calculate">
    </form>
  </div>
</body>
</html>
