<?php


use Gettext\Loader\PoLoader;
use Gettext\Translation;
use Gettext\Generator\MoGenerator;
use Gettext\Translations;

//import from a .po file:
$loader = new PoLoader();
$translations = $loader->loadFile('locale\textdomain\ar_EG\LC_MESSAGES\messages.po');

//edit some translations:
$translation = $translations->find(NULL, 'Updated Families');
// print

if ($translation) {

    echo $translation->getTranslation(); // Un comentario
   
   //print_r( $translation->translate('Updated Families'));
//    $translation->translate('Un comentario');
//    echo $translation->getTranslation(); // Un comentario
   exit;
    // $translation->translate('Mazá');
}


?>