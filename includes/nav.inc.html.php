<?php define ("BASE_URL", "aith/") ?>
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
    <a href="javascript:void(0);" class="icon" onclick="myFunction(x)">
    <i class="fa fa-bars"></i>
    </a>
</nav>
<script>

function myFunction(x){

  var inactiveLinks = document.getElementById("burger");

  if (x.matches) {
    if (inactiveLinks.style.display === "block") {
      inactiveLinks.style.display = "none";
    } else {
      inactiveLinks.style.display = "block";
    }
  }
}

var x = window.matchMedia("(max-width: 900px)")

</script>