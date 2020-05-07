<!DOCTYPE html>
  <html lang="fr">
    <head>
        <title>Adopte un VTC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="http://maps.googleapis.com/maps/api/js?language=fr"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </head>
        
    <body >

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Apparaitre/Disparaitre navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">   
                    <li>
                        <a href="home.php"><img id="accueil" src="img/acceuil.png" ></a>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VTC Paris</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">Notre societe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="services.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">Transfert aéroport</a></li>
                            <li class="dropdown-item"><a href="#">Transfert gare</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item "><a class="nav-link " href="reservation.php">Réservation</a></li>
                    <li class="nav-item "><a class="nav-link " href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>

        <form action="">
            <div class="form-group col-md-5">
                <input type="text" class="form-control" placeholder="Adresse de départ">
            </div>

            <div class="form-group col-md-5">
                <input type="text" class="form-control" placeholder="Adresse d'arrivée">
            </div>
            <div>
                <label for="">Nombre de passagers</label>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Passager
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">1</button>
                    <button class="dropdown-item" type="button">2</button>
                    <button class="dropdown-item" type="button">3</button>
                    <button class="dropdown-item" type="button">4</button>
                </div>
            </div>
            <br><br>
            <div>
                <label for="">Aller ou retour ou aller/retour</label>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Direction
                    </button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Aller</button>
                        <button class="dropdown-item" type="button">Retour</button>
                        <button class="dropdown-item" type="button">Aller/Retour</button>
                    </div>
                </div>
                <br><br>
                <div class="col-sm-5">
                    <label for="">Date et heures</label>
                    <input type="datetime-local" class="form-control">
                </div>

                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Estimation du tarif</button>
                </div>
            
        </form>