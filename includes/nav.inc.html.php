<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
<nav>
    <a href="<?php echo BASE_URL; ?>" class="active ">AITH</a>
    <div id="burger">
        <a href="<?php echo BASE_URL; ?>event" class="inactive">Event</a>
        <a href="<?php echo BASE_URL; ?>showcase" class="inactive">Showcase</a>
        <a href="<?php echo BASE_URL; ?>registration" class="inactive">Registration</a>
        <a href="<?php echo BASE_URL; ?>faq" class="inactive">FAQ</a>
        <a href="<?php echo BASE_URL; ?>contact" class="inactive">Contact</a>
    </div>
<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</nav>
<script>

function myFunction(){

  var inactiveLinks = document.getElementById("burger");

  if (inactiveLinks.style.display === "block") {
    inactiveLinks.style.display = "none";
  } else {
    inactiveLinks.style.display = "block";
  }
}

</script>