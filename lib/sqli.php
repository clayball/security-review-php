<?php

namespace secrevphp;

/**
 * To start with: this class should run against all input forms and return
 * a the function and its test result, e.g. function_name(), safe
 *
 */

include_once ("lib/secreview.php");

// Handle SQLi checks
class Sqli {

    protected $sqli_results = ["func_name" => "pass|fail"];
    
    // Constructor
    public function __construct() {
        echo "[*] ..instantiating Sqli checks.. \n";

    }

    public function test_sqli() {
        echo "[*] ..running test_sqli().. \n";
        $this->xss_results = [];

    }

}


?>
