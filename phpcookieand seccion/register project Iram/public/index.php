<?php
    session_start();
    $cookie_expiration = time() + (60 * 120);
    include '../includes/header.php';

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store the name in the session
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["favourite_color"] = $_POST["favourite_color"];
        $_SESSION["favourite_film"] = $_POST["favourite_film"];
        $_SESSION["favourite_ice_cream"] = $_POST["favourite_ice_cream"];
        $_SESSION["favourite_popcorn"] = $_POST["favourite_popcorn"];
        setcookie("firstname", $_POST["firstname"], $cookie_expiration, "/");
        header("Location: welcome.php");
  
    }
    
    // Check if the name is set in the session
    $fname = isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
    $lastname = isset($_SESSION["lastname"]) ? $_SESSION["lastname"] : "";
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";

        // Check if the session name is set
    if (isset($_SESSION["firstname"])) {
        $fname = $_SESSION["firstname"];
    } elseif (isset($_COOKIE["firstname"])) {
        // If session is not set but the cookie exists, restore the session
        $fname = $_COOKIE["firstname"];
        $_SESSION["firstname"] = $fname; // Reinitialize the session with the cookie value
    } else {
        $fname = "";
}
?>


<main>
    <h1>Registration Form</h1>
    <form method="POST" action="">
        <!-- firstname -->
        <div class="form-element half">
            <div>
            <label for="firstname">Enter your first name:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div>
            <label for="lastname">Enter your last name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
    </div>
        <!-- email -->
        <div class="form-element full">
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>
        </div>
         <!-- password -->
         <div class="form-element full">
            <label for="password">Enter your password:</label>
            <input type="password" id="password" name="password" required>
        </div>

         <!-- favourite color -->
         <div class="form-element full">
            <label for="favourite_color">What is your favourite color:</label>
            <input type="favourite_color" id="favourite_color" name="favourite_color" required>
        </div>

         <!-- favourite-film -->
         <div class="form-element full">
            <label for="favourite_film">What is your favourite film:</label>
            <input type="favourite_film" id="favourite_film" name="favourite_film" required>
        </div>
        

         <!-- favourite-ice cream -->
         <div class="form-element full">
            <label for="favourite_ice_cream">What is your favourite ice cream?</label>
            <input type="favourite_ice_cream" id="favourite_ice_cream" name="favourite_ice_cream" required>
        </div>

         <!-- favourite-ice cream -->
         <div class="form-element full">
            <label for="favourite_popcorn">What is your favourite popcorn (e.g)  sweet or salty popcorn?</label>
            <input type="favourite_popcorn" id="favourite_popcorn" name="favourite_popcorn" required>
        </div>

        <button type="submit" class="submit">Submit</button>
    </form>
    <p class="hightlight">Don't have an account? Sign Up</p>  
</main>

<?php
    include '../includes/footer.php';
?>