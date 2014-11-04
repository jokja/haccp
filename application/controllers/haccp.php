<?php if (!defined('BASEPATH')) exit('No direct access script allowed');
/* 
 * @Author Joko Jainul Arif
 * @Since 3 Nov 2014
 * 
 */

class Haccp extends CI_Controller {

    const index = '';

    function __construct() {
        parent::__construct();
//        $a = '';
    }
    public function index() {
        $this->load->view('home');
    }

}