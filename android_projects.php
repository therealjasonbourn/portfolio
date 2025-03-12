<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Bourn's Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/javascript.js"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <h1>Android Application Projects</h1>
        </div>
    </header>
    <a href="index.php" class="home-button">Home</a>
    <nav>
        <ul class="nav-links">
            <li><a href="#tap-me">TapMe</a></li>
            <li><a href="#where-in-the-world">Where in the World</a></li>
        </ul>
    </nav>
    <main>
        <section id="tap-me">
            <h2>TapMe (in development)</h2>
            <h3>Description:</h3>
            <p>
                TapMe is an application that was originally created to help teachers keep time with classes 
                without having to look at their watch or smartphone. When a teacher looks at their watch 
                or smartphone to determine how much time is left in the class, it's sometimes seen as rude 
                or disengaging for students, therefore I wanted to develop an app to help teachers keep 
                track of their lesson time without disengaging from the students.
            </p>
            <p>
                With TapMe, the user can set an interval of time that they wish to be discreetly alerted. 
                Lets use 10 minutes for example. The user inputs 10 in the interval input, then presses 
                start. Every 10 minutes, the phone will gently vibrate alerting the user that 10 minutes 
                have passed.
            </p>
            <br>
            <?php
            $images = ["tap_me_1.png", "tap_me_2.png", "tap_me_3.png"];

            echo '<div class="android-project-image-row">';
            foreach ($images as $image) {
                echo '<img src="images/'.$image.'" alt="Image" class="android-project-image">';
            }
            echo '</div>';
            ?>
            <br>
            <p>
                After creating the app for teachers, I realized that it had many more applications 
                than just for teaching. Anyone that needs to know when an interval of time 
                has passed can use TapMe to track the passage of time.
            </p>
        </section>

        <section id="where-in-the-world">
            <h2>Where in the World (in development)</h2>
            <h3>Description:</h3>
            <p>
                Where in the world is a simple timezone converter application. It allows the user 
                to select two timezones, enter a time, and the app will convert the time. This 
                is useful for professionals working for international companies that need to 
                communicate with others across different time zones.
            </p>
            <br>
            <?php
            $images = ["where_in_the_world_1.png"];

            echo '<div class="android-project-image-row">';
            foreach ($images as $image) {
                echo '<img src="images/'.$image.'" alt="Image" class="android-project-image">';
            }
            echo '</div>';
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Jason Bourn. All rights reserved.</p>
    </footer>
</body>
</html>