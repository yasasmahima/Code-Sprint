<?php
    $msg = "My-Blog";
    include("header.php");
?>

    <div class="w3-container"> 
        <h2>London</h2>
        <div class="w3-left-align"><p>2020/04/07</p></div>
        <p>London is the most populous city in the United Kingdom,
        with a metropolitan area of over 9 million inhabitants.</p>
    </div>

    <div class="w3-panel w3-leftbar w3-ight-green">
        <p class="w3-xlarge w3-serif"><i>"Make it as simple as possible, but not simpler."</i></p>
        <p>Albert Einstein</p>
      </div>
    </div>
    <div class="w3-panel w3-leftbar w3-ight-green">
        <p class="w3-xlarge w3-serif"><i>"Make it as simple as possible, but not simpler."</i></p>
        <p>Albert Einstein</p>
      </div>
    </div>
    <div class="w3-panel w3-leftbar w3-ight-green">
        <p class="w3-xlarge w3-serif"><i>"Make it as simple as possible, but not simpler."</i></p>
        <p>Albert Einstein</p>
      </div>
    </div>
    <div class="w3-container w3-green">
        <h2>Comment Form</h2>
      </div>
      <form class="w3-container">
        <p>
        <label>Name</label>
        <input class="w3-input" type="text"></p>
        <p>
        <label>Comment</label>
        <textarea class="w3-input"></textarea></p>
        <p><button class="w3-button w3-light-green">Submit</button></p>
      </form>

<?php
    include("footer.php");
?>