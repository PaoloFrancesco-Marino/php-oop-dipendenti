<?php
/**********
 * Include
 * ********/ 
include_once __DIR__ . '/partials/classes/PersonDetails.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipendenti</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <main>
        <h2>Dipendenti</h2>
        <ul>
            <?php foreach ($dipendenti as $dipendente) {?>
                
                <li>
                    <h4>Ruolo: <?php echo $dipendente->role; ?></h4>
                    <h4>Data Assunzione: <?php echo $dipendente->jobHiring;?></h4>
                    <h4>Salario<?php echo $dipendente->salary;?></h4>
                    <h4>Stato:
                        <?php
                        try {
                            echo $dipendente->status($dipendente->status);
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                
                    </h4>
                    <h4>Nome:<?php echo $dipendente->name;?></h4>
                    <h4>Cognome:<?php echo $dipendente->surname;?></h4>
                    <h4>Data di Nascita:<?php echo $dipendente->dateBirth;?></h4>
                    <h4>
                        Età:<?php
                        try {
                            echo $dipendente->ageControl($dipendente->age);
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                    </h4>
                    <h4>Numero di Telefono:<?php echo $dipendente->number;?></h4>
                    <h4>Indirizzo:<?php echo $dipendente->address;?></h4>
                    <h4>Stato Civile:<?php echo $dipendente->civilStatus;?></h4>
                    <h4>Codice Matricola:<?php echo $dipendente->getRandomCode();?></h4>
            </li>
            <?php } ?>
        <ul>
            
    </main>
    
</body>
</html>