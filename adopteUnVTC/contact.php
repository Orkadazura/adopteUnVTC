<?php

require "header.php";

?>
        
    <body >
    
        <h2 class="titre">Formulaire de contact</h2>

        <form class="form-row" action="">
            <div class="form-group col-md-5">
                <label for="">Votre nom et prénom</label>
                <input type="text" class="form-control">
            </div>
                        
            <div class="form-group col-md-5">
                <label for="">Votre email</label>
                <input type="text" class="form-control">
            </div>
            
            <div class="form-group col-md-5">
                <label for="">Votre téléphone</label>
                <input type="text" class="form-control">
            </div>
                        
            <div class="form-group col-md-5">
                <label for="">Objet de la demande</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="">Votre message</label>
                <textarea class="form-control"></textarea>
            </div>
                       
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div> 
        </form>
        
    </body>


    