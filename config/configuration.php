<?php

// Accès base de données
const DEV = TRUE;

const BD_HOST = !DEV?'emiliengzsbeel.mysql.db' : 'localhost';
const BD_DBNAME = !DEV?'emiliengzsbeel' : 'diminuo';
const BD_USER = !DEV?'emiliengzsbeel' : 'root';
const BD_PWD = !DEV?'Beeleat01' : '';
const LINK = !DEV?'https://lucien-brd.com/' : 'http://localhost/';

// Langue du site
const LANG ='FR-fr';



//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMG', PATH_ASSETS.'images/');
define('PATH_JS', PATH_ASSETS.'js/');
