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
                    <form class="row">
                        <div class="mb-3">
                            <label for="length" class="visually-hidden">Lunghezza psswrd</label>
                            <input type="number" class="form-control" id="inputPassword2" placeholder="Inserisci la lunghezza">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-3">
                                Generazione password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>