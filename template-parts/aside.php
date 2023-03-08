<aside class="site__aside">

<h3>menu secondaire</h3>

<?php
$lemenu = "note-wp";
if(in_category('cours'))
if (isset($category))
{
 $lemenu = "cours";
}
 wp_nav_menu(array(
 "menu" => $lemenu,
 "container" => "nav"

))?>
 </aside>
 