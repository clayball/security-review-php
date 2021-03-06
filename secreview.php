<?php

/**
 * secreview.php is a command-line only tools used for identifying potentially
 * vulnerable code.
 *
 */

//include("lib/secreview.php");
include ("lib/xss.php");
//include ("lib/sqli.php");

/**
 * [NOTES] (will be removed eventually) ..still developing..
 *
 * instantiate our classes and make sure things are good to go.
 *
 * Processes
 * =========
 *
 * Run checks against code looking at functions and flow to determine:
 * - is input tainted?
 *   - is it sanitize?
 * - does tainted input flow into output?
 *   - was is sanitized?
 *   - is it encoded?
 * - does tainted input flow into a database?
 *   - was is sanitized?
 * - does output from a database get encoded before output to user?
 *
 * Identify the following:
 * - entry points
 *   - tainted input
 *   - tainted database queries
 * - output points
 *   - input from user
 *   - database
 *
 * We need a request class that will generate requests
 *
 * Questions:
 * How are we going to know what to run our command-line tests against?
 *
 */

$codebase = $argv[1];
echo "[*] Performing security review on codebase: " . $codebase . "\n";

$secrev = new secrevphp\Xss();

/**
 * TESTING [begin]
 * code in this section is to be used purely for testing purposes
 *
 */

$secrev->identify_inputs();

/**
 * TESTING [end]
 */




?>
