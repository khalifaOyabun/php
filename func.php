<?php
function nav_item(string $lien, string $titre, string $linkClass = ""): string
{
    $classe = "";
        
    if ($_SERVER["SCRIPT_NAME"] === $lien) {
        $classe .= "active";
    }

    return <<<HTML
    <li class="nav-item">
        <a class="$classe $linkClass" aria-current="page" href="$lien">$titre</a>
    </li>
HTML;
};
function nav_menu(string $navClass) {
    echo nav_item("/index.php", "Home", $navClass);
    echo nav_item("/contact.php", "Contact", $navClass);
}
function crenaux_html(array $creneaux) {
    foreach ($creneaux as $creneau) {
        $phrases[] = "de {$creneaux[0]}h a {$creneaux[1]}h";
    }
    dump($phrases);
}