<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="posts.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Internet Post Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Welcome Page</a></li>
                <li><a href="posts.php">Posts List</a></li>
                <!-- <li><a href="addpost.php">Add a new joke</a></li> -->
                <li><a href="User/login/Login.html">User Login</a></li>
                
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
      <footer>&copy; IJDB 2023</footer>
    </body>
</html>

