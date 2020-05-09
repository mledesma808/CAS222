<?php define ("BASE_URL", "aith/") ?>
<nav>
    <a href="<?php echo BASE_URL; ?>" class="active ">AITH</a>
    <a href="<?php echo BASE_URL; ?>event" class="navLinks">Event</a>
    <a href="<?php echo BASE_URL; ?>showcase" class="navLinks">Showcase</a>
    <a href="<?php echo BASE_URL; ?>registration" class="navLinks">Registration</a>
    <a href="<?php echo BASE_URL; ?>faq" class="navLinks">FAQ</a>
    <a href="<?php echo BASE_URL; ?>contact" class="navLinks">Contact</a>
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