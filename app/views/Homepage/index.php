<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Welkom</title>
</head>

<body>
    <h3><?= $data['title']; ?></h3>
    <a href="<?= URLROOT; ?>/Instructeur/overzichtinstructeur">Instructeurs in dienst</a>
    <a href="<?= URLROOT; ?>/Voertuig/overzichtVoertuigen">Alle voertuigen</a>
</body>

</html>