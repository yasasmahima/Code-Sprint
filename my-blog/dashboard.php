<?php
    $msg = "My-Blog";
    include("header.php");
?>

    <div class="w3-container w3-green">
        <h2>Dashboard</h2>
    </div>
    <form class="w3-container">
            <p>
            <label>News Title</label>
            <input class="w3-input" type="text"></p>
            <p>
            <label>News Content</label>
            <textarea class="w3-input"></textarea></p>
            <p><button class="w3-button w3-light-green">Submit</button></p>
    </form>

<?php
    include("footer.php");
?>