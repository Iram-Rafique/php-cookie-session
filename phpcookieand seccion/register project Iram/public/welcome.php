<?php
    session_start();
    include '../includes/header.php';

   
    
    // Check if the name is set in the session
    $fname = isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
    $lastname = isset($_SESSION["lastname"]) ? $_SESSION["lastname"] : "";
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
    $favourite_color = isset($_SESSION["favourite_color"]) ? $_SESSION["favourite_color"] : "";
    $favourite_film = isset($_SESSION["favourite_film"]) ? $_SESSION["favourite_film"] : "";
    $favourite_ice_cream = isset($_SESSION["favourite_ice_cream"]) ? $_SESSION["favourite_ice_cream"] : "";
    $favourite_popcorn = isset($_SESSION["favourite_popcorn"]) ? $_SESSION["favourite_popcorn"] : "";
?>  
<main>
    <?php if ($_SESSION): ?>
            <p>Welcome back, <?php echo htmlspecialchars($fname . " " .$lastname); ?>!</p>
            <p>Your email is:   <?php echo htmlspecialchars(" "  .$email); ?></p>
            <p>Your favourite color is:   <?php echo htmlspecialchars(" "  .$favourite_color); ?></p>
            <p>Your favourite movie is:   <?php echo htmlspecialchars(" "  .$favourite_film); ?></p>
            <p>Your favourite Ice Cream is:   <?php echo htmlspecialchars(" "  .$favourite_ice_cream); ?></p>
            <p>Your favourite Popcorn is:   <?php echo htmlspecialchars(" "  .$favourite_popcorn); ?></p>

           
        <?php else: ?>
            <p>No name found in session. Please go back and enter your name.</p>
        <?php endif; ?>
       
</main>

<?php 
    include '../includes/footer.php';

?>