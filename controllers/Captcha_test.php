<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 *
 * Important note: This feature requires Session library/driver to be loaded.
 */

class Captcha_test extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->helper('url');
    }

    public function index() {

        $this->load->library('kcaptcha', null, 'captcha');
        $this->load->library('form_validation');

        $validation_rules = array(
            array(
                'field' => 'captcha',
                'label' => 'Captcha',
                'rules' => 'strip_tags|trim|required|callback__captcha'
            ),
        );

        $error_message = '';

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run()) {

            $this->session->set_flashdata('confirmation_meassage', 'You have just entered a valid captcha string. Thank you.');
            redirect('captcha_test/ok');

        } elseif (validation_errors()) {

            $error_message = validation_errors('<p>', '</p>');
        }

        $this->captcha->clear();

        $data = compact(
            'error_message'
        );

        $this->load->view('captcha_test', $data);
    }

    public function ok() {

        $confirmation_message = $this->session->flashdata('confirmation_meassage');

        if ($confirmation_message == '') {
            redirect('captcha_test');
        }

        $data = compact(
            'confirmation_message'
        );

        $this->load->view('captcha_test_ok', $data);
    }

    public function _captcha($string) {

        if (!$this->captcha->valid($string)) {

            if ((int) CI_VERSION >= 3) { 
                $this->form_validation->set_message('_captcha', 'The field {field} was not entered correctly. Please try again.');
            } else {
                $this->form_validation->set_message('_captcha', 'The field %s was not entered correctly. Please try again.');
            }

            return false;
        }

        return true;
    }

}
