<?php

session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=adopteunvtc','root', '');
require "header.php";

if(isset($_POST['formContact']))
{
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);
    exit;
}




?>
        
    <body >
    
        <h2 class="titre">Formulaire de contact</h2>

        <form class="form-row" action="post">
            <div class="form-group col-md-5">
                <label for="">Votre nom et prénom</label>
                <input type="text" class="form-control" name="nom">
            </div>
                        
            <div class="form-group col-md-5">
                <label for="">Votre email</label>
                <input type="text" class="form-control" name="email">
            </div>
            
            <div class="form-group col-md-5">
                <label for="">Votre téléphone</label>
                <input type="text" class="form-control" name="tel">
            </div>
                        
            <div class="form-group col-md-5">
                <label for="">Objet de la demande</label>
                <input type="text" class="form-control" name="sujet">
            </div>

            <div class="form-group col-md-6">
                <label for="">Votre message</label>
                <textarea class="form-control" name="message"></textarea>
            </div>
                       
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div> 
        </form>
        
    </body>


    