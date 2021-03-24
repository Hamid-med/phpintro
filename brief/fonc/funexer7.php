<!doctype html>
<html>
<body>
<?php
function ex7(int $age, string $sexe) : string {
    $ageString = "vous êtes majeur";
    if ($age <= 18) {
        $ageString = "vous êtes mineur";
    }

    $sexeString = "homme";
    $accord = "";
    if ($sexe === "f") {
        $sexeString = "femme";
        $accord = "e";
    }

    return("Vous êtes un" . $accord . " " . $sexeString . " et " . $ageString . $accord);

}
echo ex7(24,"homme");
?>
</body>
</html>