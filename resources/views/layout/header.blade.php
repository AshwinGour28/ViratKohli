<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navigation Bar</title>
  <style>
    /* Basic CSS Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: Arial, sans-serif;
}

nav {
  background-color: #333;

}
.head{
    position: sticky;
    top:0;
}
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  padding: 10px 15px;
  display: block;
}

nav ul li a:hover {
  background-color: #555;
}

  </style>
</head>
<body>

<header class="head">
    <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/history">History</a></li>
          <li><a href="/achievements">Achievements</a></li>
          <li><a href="/socialmedia">Social Media</a></li>
        </ul>
      </nav>

</header>
</body>
</html>
