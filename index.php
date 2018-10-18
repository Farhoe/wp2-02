<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>zkouším pracovat hahaha!!</h1>

    <form action="submit.php" method="post">
      <label for="age">Věk</label>
       <input id="age" type="number" name="age" value="age">
        <br />

      <label for="gender">Pohlaví</label>

      <div>

        <input type="radio" name="gender" value="male" id="male" />
        <label for="male">Muž</label>

      </div>

      <div>

        <input type="radio" name="gender" value="female" id="female" />
        <label for="female">Žena</label>

      </div>

     <br />

     <input type="submit" name="submit" value="submit">

    </form>
  </body>
</html>
