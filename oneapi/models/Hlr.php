<?php namespace infobip\models;

use infobip\Models;

class Hlr extends AbstractObject {

    public $clientCorrelator;
    public $address;
    public $notifyURL;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}    
Models::register('infobip\models\Hlr');

?>
