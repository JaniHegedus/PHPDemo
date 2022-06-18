<html>
<head>
    <meta charset="UTF-8">
    <tittle></tittle>
</head>
<body>
    <?php
        echo("<h1>Hello World!</h1><br>");
    ?>
    <form action="main.php" method="get">
        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <?php
        echo("<h2>Login:</h2>");
        include "site.php"
    ?>
    <form action="main.php" method="post">
        Username: <input type="text" name="name">
        Password: <input type="password" name="pass">
        <br><br>
        <input type="submit">
    </form>
    <?php
        include "login.hphp"
    ?>
    <h3>Classes:</h3>
    <?php
        include "classes.php"
    ?>
</body>
</html>
