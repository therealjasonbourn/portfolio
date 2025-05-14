<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>
    <header id="header">
        <div class="container">
            <h1>Bird of a Feather Game</h1>
        </div>
    </header>
    <a href="index.php" class="home-button">Home</a>
    <nav>
        <ul class="nav-links">
            <li><a href="#intro">Introduction/Concept</a></li>
            <li><a href="#where-in-the-world">Where in the World</a></li>
        </ul>
    </nav>
    <main>
        <section id="intro">
            <h2>Introduction/Concept</h2>
            <p>
                The concept for birds of a feather is that you are a robot pigeon that was created by 
                the government as a spy. As a spy pigeon, you have to maintain your cover while keeping 
                an eye on the people.
            </p>
            <br>
            <?php
            $images = ['pigeon_1.png'];
            $videos = ['pigeon_anim_1.mp4'];

            echo '<div class="android-project-image-row">';
            foreach ($images as $image) {
                echo '<img src="images/'.$image.'" alt="Image" class="android-project-image">';
            }
            echo '</div>';

            echo '<div class="android-project-image-row">';
            foreach ($videos as $video) {
                echo '<video width="300" height="300" autoplay muted loop style="border-radius: 20px;">';
                echo '<source src="images/'.$video.'" type="video/mp4">';
                echo '</video>';
            }
            echo '</div>';
            ?>
        </section>

        <section id="mechanics">
            <h2>Mechanics</h2>
            <p>
                Eating – as a pigeon, you need to eat food you find on the ground to recharge your power system. 
                This includes eating bread, popcorn, and anything you find lying around. 
                <br>Flying – you have the ability to flap your wings to gain elevation, or glide from your current elevation. 
                <br>Making friends – as you start living your life as a pigeon, you will make friends along the way and even 
                form a gang.
                <br>Smartphone – as a pigeon, you have a smartphone that you can use for things such as navigation and 
                communication. This will most likely serve as the player’s tracker for objectives, inventory, things 
                like this. 
                <br>Pooping – you are able to poop on various things such as people and game objects. You will need to eat 
                to recharge your poop. 
                <br>Predators – cats are a threat and can hurt or kill you if you aren’t careful. Keep your eyes out for 
                cats and call on your gang if you need help scaring away a cat.

                <br>Day/Night cycle (considering) – the game has a day/night cycle where you will be vulnerable to attack 
                from Owls.

                <br>Gang – as a gang member, you can call on your fellow birds when you need backup. You will have a “favor” 
                level with the gang which can be increased by calling in the gang when you find food or assisting when the gang calls on you. There will be rival gangs of other pigeons and even other birds that your gang can help you with. Your gang can also help you scare away cats. 
            </p>
            <br>
            <?php
            $images = [];

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