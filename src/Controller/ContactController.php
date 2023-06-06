<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends AbstractController {
    
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $req): Response {
        $emailTo = "lioma.chakhguereev.sio@gmail.com";
        $emailText = "";

        $iprenom_erreur = $inom_erreur = $imail_erreur = $itel_erreur = $imess_erreur = "";
        $prenom = $nom = $mail = $tel = $mess = "";
        //verifier si le controleur a été soumis ou pas
        if ($req->isXmlHttpRequest() && $req->isMethod('post')) {
            $prenom = $this->test_input($req->get('prenom'));
            $nom = $this->test_input($req->get("nom"));
            $mail = $this->test_input($req->get("mail"));
            $tel = $this->test_input($req->get("tel"));
            $mess = $this->test_input($req->get("message"));
            $succes = true;

            //validation des donnees   
            if (empty($nom)) {
                $inom_erreur = "Veuillez saisir votre nom";
                $succes = false;
            } else {
                $emailText .= "Nouveau mail de : " . $nom;
            }
            if (empty($prenom)) {
                $iprenom_erreur = "Veuillez saisir votre prénom";
                $succes = false;
            } else {
                $emailText .= " " . $prenom;
            }

            if (empty($mail)) {
                $imail_erreur = "Veuillez saisir votre adresse email";
                $succes = false;
            } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $imail_erreur = "Format adresse email invalide";
                $succes = false;
            } else {
                $emailText .= "<br>Son adresse email est : " . $mail;
            }

            if (empty($tel)) {
                $itel_erreur = "Veuillez saisir votre numéro de téléphone";
                $succes = false;
            } elseif (!preg_match("/^[0-9 ]*$/", $tel)) {
                $itel_erreur = "Format de numéro de téléphone invalide";
                $succes = false;
            } else {
                $emailText .= " et le téléphone : " . $tel;
            }

            if (empty($mess)) {
                $imess_erreur = "Veuillez saisir votre message";
                $succes = false;
            } else {
                $emailText .= "<br>Contenu du message :<br>" . $mess;
            }

            if ($succes) {
                $headers = "From: $prenom $nom <$mail>\r\nReply-To: $mail";
                //mail($emailTo, "Un message de votre site", $emailText, $headers);                
            }
        } else {
            
        }

        if ($req->isXmlHttpRequest()) {
            $response = new JsonResponse();
            $response->setData([
                'iprenom' => $prenom,
                'inom' => $nom,
                'imail' => $mail,
                'itel' => $tel,
                'imessage' => $mess,
                'iprenom_erreur' => $iprenom_erreur,
                'inom_erreur' => $inom_erreur,
                'imail_erreur' => $imail_erreur,
                'itel_erreur' => $itel_erreur,
                'imess_erreur' => $imess_erreur,
                'isSuccess' => $succes,
            ]);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else {
            return $this->render('contact/index.html.twig');
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
