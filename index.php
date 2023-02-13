<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Doodle</title>

    <meta name="description" content="Search the web for sites and images.">
    <meta name="keywords" content="Search engine, doodle, websites">
    <meta name="author" content="Sufiyan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper indexPage">
        <div class="mainSection">
            <div class="logoContainer">
                <img src="assets/images/doodleLogo.png" alt="logo">
                <!-- https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png -->
            </div>

            <div class="searchContainer">

                <form action="search.php" method="get">

                    <input type="text" name="term" class="searchBox" placeholder="Search here!">
                    <input type="submit" value="Search" class="searchButton">

                </form>

            </div>
        </div>
    </div>
</body>
</html>