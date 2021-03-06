<?php

require "header.php";

?>
    <head>
        
        
    </head>  

    <body>
        
        <form id="resa" action="post">
            <div class="form-group col-md-5">
                <input type="text" id="dep" class="form-control AutocompleteService" name="depart" placeholder="Adresse de départ">
            </div>

            <div class="form-group col-md-5">
                <input type="text" id="arr" class="form-control" name="arriver" placeholder="Adresse d'arrivée">
            </div>
            <div>
                <label id="p1" for="">Nombre de passagers</label>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Passager
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">1</button>
                    <button class="dropdown-item" type="button">2</button>
                    <button class="dropdown-item" type="button">3</button>
                </div>
            </div>
            <br><br>
            <div>
                <label class="pl" for="">Aller ou retour ou aller/retour</label>
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
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            
        </form>

        <div id="map"></div>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAudGwwSrGEEUYms1DenjXyxjP8375rYbg&libraries=places"></script>
        <script type="text/javascript" src="js/map.js"></script>
        
        
        

        