<?php
 
// manifest file for information regarding application of new code
$manifest = array(

    // only install on the following sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
        ),
        'regex_matches' => array (
            0 => '6\.5'
        ),
    ),

    // Version for which this langpack can work
    'acceptable_sugar_flavors' => array (
        0 => 'CE',
    ),

    // Name of the Pack
    'name' => 'PBKIK - HU fordítás',

    'id'=> 'PBKIK_HU',

    'lang_file_suffix' => 'hu_HU',

    // Description of new code
    'description' => 'Kezdő fordítás a 6.5.x SugarCRM CE-hez',

    // Author of new code
    'author' => 'pbkik.hu',

    // Date published
    'published_date' => '2015/02/23',

    // Version of code
    'version' => '1',

    // Type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // Icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed 
    'is_uninstallable' => true,
);
