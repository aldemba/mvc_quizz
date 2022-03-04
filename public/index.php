<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // inclusion des constantes
    require_once dirname(dirname(__FILE__))."/config/constantes.php";

    // inclusion de l'orm
    require_once dirname(dirname(__FILE__))."/config/orm.php";

    // inclusion des roles
    require_once dirname(dirname(__FILE__))."/config/role.php";

    // inclusion du validator
    require_once dirname(dirname(__FILE__))."/config/validator.php";

    // inclusion du routeur 
    require_once dirname(dirname(__FILE__))."/config/router.php";

    