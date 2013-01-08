<?php

function cookies_exists () {
  return (isset($_COOKIE['R1'])); // Si le premier cookie existe, ils existent tous.
}

function create_cookies () {
  setcookie('R1', 'false', time() + 365*24*3600);
  setcookie('R2', 'false', time() + 365*24*3600);
  setcookie('R3', 'false', time() + 365*24*3600);
  setcookie('R4', 'false', time() + 365*24*3600);
  setcookie('R5', 'false', time() + 365*24*3600);
}

function display_home () {
  $action = "home";
  include("page.php");
}

function question_already_answered ($q) {
  return $_COOKIE['R'.$q];
}

function find_next_unanswered_question($current) {
  $found = false;
  $res = 0;
  for ($i = 0; $i < 5 && !$found; $i++) {
    if (!question_already_answered($current)) {
      $found = true;
      $res = $current;
    }
    else {
      if ($current == 5)
        $current = 1;
  }

  return $res;
}

function display_end_message () {
  $action = "end";
  include ("page.php");
}

function display_next_question_info ($q) {
  $action = "q" . $q . "indice";
  include ("page.php");
}

function display_question ($q) {
  $action = "q" . $q;
  include ("page.php");
}

function display_answer_page ($q) {
  setcookie('R' . $q, 'true', time() + 365*24*3600);
  $action = "q" . $q . "rep";
  include ("page.php");
}

function display_error_page ($q) {
  $action = "mrep";
  $question = $q;
  include ("page.php");
}

function main () {
  if (!cookies_exists()) {
    create_cookies();
    display_home ();
  }

  if (isset($_GET['q'])) { // Cas d'une question.
    $current_question = $_GET['q'];
    if (question_already_answered($current_question)) {
      $next = find_next_unanswered_question ($current_question);
      if ($next == 0)
        display_end_message ();
      else {
        $from_already_answered = true;
        display_next_question_info ($next);
      }
    }
    display_question ($current_question);
  }

  if (isset($_GET['r'])) { // Cas d'une réponse.
    $current = $_GET['r'];

    if ($current == 1) {
      if (isset($_POST['case1']) && isset($_POST['case3']) && isset($_POST['case5'])
          && !isset($_POST['case2']) && !isset($_POST['case5']))
        display_answer_page ($current);
      else
        display_error_page ($current);
    }
    if ($current == 2) {
      if (isset($_POST['question2'])
          && ($_POST['question2'] == "science" || $_POST["question2"] == "Science"))
        display_answer_page ($current);
      else
        display_error_page ($current);
    }
    if ($current == 3) {
      if (isset($_POST['reponse3']) && $_POST['reponse3'] == "8")
        display_answer_page ($current);
      else
        display_error_page ($current);
    }
    if ($current == 4) {
      if (isset($_POST['question4'])
          && ($_POST['question4'] == "2SIC" || $_POST['question4'] == "2sic"
              || $_POST['question4'] == "2Sic"))
        display_answer_page ($current);
      else
        display_error_page ($current);
    }
    if ($current == 5) {
      if (isset($_POST['question5']) && $_POST['question5'] == 60)
        display_answer_page ($current);
      else
        display_error_page ($current);
    }
  }
}

main();
  
?>