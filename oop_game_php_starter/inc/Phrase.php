<?php


 class Phrase
 {

private $currentPhrase = 'Dream Big';

private $selected = array();

public function __construct($currentPhrase=null, $selected=null)
{

}
public function addPhraseToDisplay(){
$characters = str_split(strtolower($this->currentPhrase));
      $output = "";
      $output .= "<div id='phrase' class='section'>";
      $output .= "<ul>";
      foreach ($characters as $character) {
          if ($character == " ") {
              $output .= "<li class='space'>" . $character . "</li>";
          } else {
              if (in_array($character, $this->selected)) {
                  $output .= "<li class='show letter'>" . $character . "</li>";
              } else {
                  $output .= "<li class='hide letter'>" . $character . "</li>";
              }
          }
      }
      $output .= "</ul>";
      $output .= "</div>";
      return $output;
  }
 }
$phrase = new Phrase;
