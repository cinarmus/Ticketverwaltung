<?php
$title=Core::import("title");

$menu=Core::import("menu");
$class=Core::import("class");
$menuItems=Core::import("menuItems");
$menuLeadingItems=Core::import("menuLeadingItems");
$image=Core::import("image");

if($menu["heading"] == ""){
    $menu["heading"] = "Willkommen bei ".$title."!";
}
?>


<div class="dashboardwrapper">
<?=$image?>
<div class="hometitle">
  <span class="hometitle-span"><?=$menu["heading"];?></span>
  <hr class="hr-text" data-content="<?=$menu["text"];?>">
</div>

<ol class="articles lI">
<?php
if(array_key_exists(0, $menuLeadingItems)){
  foreach($menuLeadingItems as $key => $item){
    Menu::showMenuItem($item,$key, "dashboardMenu");
  }  
}
?>
</ol>

<ol class="articles fI" style="grid-template-columns:repeat(2,1fr)">    
<?php
if(isset($menuItems)){
  foreach($menuItems as $key => $item){
    Menu::showMenuItem($item,$key, "dashboardMenu");
  }  
}
?>
</ol>
</div>


<form action="?task=ticket_neu">
    <input type="submit" value="Erstelle ein neues Ticket" />
</form>
<br>
<form action="?task=dashboard&menu=ticketübersicht">
    <input type="submit" value="Gehe zur Ticketübersicht" />
</form>
<br>
<form action="?task=dashboard&menu=ticketliste">
    <input type="submit" value="Gehe zur Ticketliste" />
</form>