<?php
$title = 'Home';
require_once '../crm-system/partials/header.php';
?>
<div class="pt-24 max-w-screen-xl mx-auto">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <p class="uppercase tracking-loose w-full">Welcome!</p>
      <h1 class="my-4 text-5xl font-bold leading-tight">
        Please sign up or log in if you have an account.
      </h1>
    </div>
    <div class="w-full md:w-3/5 py-6 text-center">
      <img class="w-full md:w-4/5 z-50" src="style/image/hero.png" />
    </div>
  </div>
</div>
<?php
require_once '../crm-system/partials/footer.php';
?>