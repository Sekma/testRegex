<h2>Test 1</h2>
<?php 
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "Une correspondance a été trouvée."."<br>";
} else {
    echo "Aucune correspondance trouvée."."<br>";
}
?>
<h2>Test 2</h2>
<?php 
$texte = "La programmation en PHP est amusante php.";
preg_match_all("/php/i", $texte, $resultats);
print_r($resultats)."<br>";
?>
<h2>Test 3</h2>
<?php
 $texte = "Visitez Microsoft!";
$texte = preg_replace("/microsoft/i", "PHP", $texte);
echo $texte."<br>"; // Affiche "Visitez PHP!" 
?>
<h2>Test 4</h2>
<?php 
$texte = "one,two,three,four";
$mots = preg_split("/,/", $texte);
print_r($mots);
?>
<h2>Test 5</h2>
<?php 
$telNum="123-222-22-4565";
if(preg_match("/^\d{3}-\d{3}-\d{2}-\d{4}$/",$telNum)){
    echo "true";
}else{
    echo "false";
}
?>