<?php 
require_once(__DIR__."/../Modules/Module_home.php");
$current_page = basename($_SERVER["PHP_SELF"]);
?>

<nav>
  <div class="logo-section">
    <img src="../Assets/images/Logo_without_name.png" class="logo-img">
    <h3>Daily Advice</h3>
  </div>
  <ul class="links-list">
    <li class="<?= $current_page === 'home.php' ? 'active' : '' ?>"><a href="home.php">Home</a></li>
    <li class="<?= $current_page === 'saved.php' ? 'active' : '' ?>"><a href="saved.php">Saved</a></li>
    <li class="<?= $current_page === 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
    <li><div class="menu" id="menu"><img src="<?= checkImgProfile(); ?>"></div></li>
  </ul>
</nav>

<dialog id="popup" class="popup">
  <ul class="dialog-links">
    <li><a href="profile.php">Profile</a></li>
    <li><a href="setting.php">Settings</a></li>
    <li><button>Log out</button></li>
  </ul>
</dialog>

<style>
  nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    width: 100%;
    max-height: 70px;
  }
  .logo-section{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }
  .logo-section h3{
    font-size: 1.2rem;
    font-weight: bold;
  }
  .logo-section .logo-img{
    width: 40px;
    height: auto;
  }
  ul{
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 25px;
  }
  ul li a{
    border-radius: 5px;
    background-color: transparent;
    text-decoration: none;
  }
  ul li{
    border-radius: 5px;
  }
  ul li.active{
    padding: 7px 20px;
    background-color: #1b1b1b;
    color: whitesmoke;
  }
  .menu{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
  }
  dialog{
    justify-self: flex-end;
    top: 70px;
    right: 10px;
    padding: 20px;
    border-radius: 10px;
    background-color: #1b1b1b;
    color: whitesmoke;
    width: 100%;
    max-width: 200px;
  }
  .dialog-links{
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
  }
  .dialog-links li{
    width: 100%;
    padding: 5px 12px;
  }
  .dialog-links li a{
    width: 100%;
  }
  .dialog-links li:hover{
    background-color: whitesmoke;
    color: #1b1b1b;
  }
</style>
<script>
  const pop = document.getElementById("popup");
  const menu = document.getElementById("menu");
  menu.addEventListener("click", ()=>{
    pop.showModal();
  })
  pop.addEventListener('click', (e) => {
  const dialogRect = pop.getBoundingClientRect();
  const isClickOutside = (
    e.clientX < dialogRect.left ||
    e.clientX > dialogRect.right ||
    e.clientY < dialogRect.top ||
    e.clientY > dialogRect.bottom
  );

  if (isClickOutside) {
    pop.close();
  }
});
</script>