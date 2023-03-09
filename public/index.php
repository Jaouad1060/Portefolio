<?php
// affichage de la variable GET 
//var_dump($_GET);

// si il existe une variable get nommée p
if(isset($_GET['p'])){
    // on va vérifier la valeur de p avec un switch
    switch($_GET['p']){
            case "travaux":
                include "../view/travaux.php";
                break;
                case "lien":
                    include "../view/lien.php";
                    break;
                    case "tuto":
                        include "../view/tuto.php";
                        break;
                        case "form":
                            include "../view/formulaire.php";
                            break;
                              
                        default:
                        include "../view/homepage.php";
                               
    }

// sinon    
}else{
    include "../view/homepage.php";
}

?>