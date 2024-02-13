<?php
    $password = '';
    if (isset($_GET['length'])) {
        $passLength = intval($_GET['length']);


        if ($passLength >= 3 && $passLength <= 15) {
            $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$%&()=?^_-[]';
            $min = 0;
            $max = strlen($validCharacters) - 1;
            
            for ($i = 0; $i < $passLength; $i++) {
                $randomCharacter = $validCharacters[mt_rand($min, $max)];
                $password .= $randomCharacter;

            }
        }
    }

    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                       PHP Strong Password Generator  
                    </h1>                      
                </div>
            </div>
        </div>
             
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="" method="GET">
                        <div class="mb-3">
                            <label for="length" class="form-label">
                                Lunghezza della password
                            </label>
                            <input type="number" id="length" name="length" class="form-control" required min="3" max="15" placeholder="Inserisci lunghezza">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-3">
                                Generazione password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>
                        La nuova password generata è: 
                        <?php 
                            echo $password;
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>