<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 *
 * Important note: This feature requires Session library/driver to be loaded.
 */

class Captcha extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->library('kcaptcha', null, 'captcha');
    }

    function index() {

        $this->captcha->create();
    }

}
