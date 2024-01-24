<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>

<body>
    <?php
    if (isset($_GET['Update']) && $_GET['Update'] == true) {
        $this->updateVoertuigen($_GET['CarId'], $data['personData']->Id);
        header(URLROOT . "/instructeur/overzichtVoertuigen/");
    }
    ?>
    <u><?= $data['title']; ?></u>
    <a href="<?= URLROOT . "/instructeur/overzichtVoertuigen/" . $data['personData']->Id ?>">Back</a>
    <p>
        Naam: <?= $data['personData']->Voornaam . " " . $data['personData']->Tussenvoegsel . " " . $data['personData']->Achternaam ?> <br>
        Datum in dienst: <?= $data['personData']->DatumInDienst; ?> <br>
        Aantal sterren: <?= $data['personData']->AantalSterren ?>
    </p>

    <table>
        <thead>
            <th>Voertuig Type</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijs</th>
            <th>Toevoegen</th>
        </thead>
        <tbody>
            <?= $data['tableRows'] ?>
        </tbody>
    </table>
</body>

</html>