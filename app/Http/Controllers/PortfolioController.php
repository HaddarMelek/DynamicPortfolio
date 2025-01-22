<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Competence;
use App\Models\Models\Contact;
use App\Models\Models\Contacts;
use App\Models\Models\ProjetAcademique;
use App\Models\Models\Formation;
use App\Models\Models\LangueEtudiee;


class PortfolioController extends Controller
{
    public function index()
    {
        $competences=Competence::all();
        $contact=Contact::all();
        $contacts=Contacts::all();
        $projetsAcademiques = ProjetAcademique::all();
        $formations = Formation::all();
        $languesEtudiees = LangueEtudiee::all();

        return view('index', compact('competences','contact','contacts', 'projetsAcademiques', 'formations', 'languesEtudiees'));
    }
    /*public function afficherCompetences()
    {
        $competences = Competence::all();
              
              foreach ($competences as $competence) {
                echo '<br>'; 
                echo '<strong >' . $competence->nom . ':' . '</strong>';
                echo '<br>'; 
                echo $competence->description;
                echo '<br>'; 
              }
        /*return view('competences');*/
      /*  $competences = Competence::all();
       
   echo"Compétences";
    foreach($competences as $competence){
    echo $competence->nom;
    echo $competence->description;
        */
    }


       
    