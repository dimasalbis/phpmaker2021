<?php
require_once("defuse-crypto.phar");

// Encrypt with password
function encryptWithPassword($plaintext, $password)
{
	return \Defuse\Crypto\Crypto::encryptWithPassword($plaintext, $password);
}

// Decrypt with password
function decryptWithPassword($plaintext, $password)
{
	return \Defuse\Crypto\Crypto::decryptWithPassword($plaintext, $password);
}

/**
 * Run
 * 
 * Example: php.exe phpencrypt.php encrypt <value> <password>
 * 
 * $argv array(4) arguments {
 *  [0] => string Script name: "phpencrypt.php"
 *  [1] => string Command: "encrypt" or "decrypt"
 *  [2] => string Value being encrypted/decrypted
 *  [3] => string Password for encryption/decryption
 * }
 * @return string Encrypted/Decrypted value
 */
function run() {
	global $argv;
	$cnt = count($argv);
	if ($cnt > 3) {
		if ($argv[1] == "encrypt") {
			echo encryptWithPassword($argv[2], $argv[3]);
		} elseif ($argv[1] == "decrypt") {
			echo decryptWithPassword($argv[2], $argv[3]);
		} else {
			die("Error! Unknown command: " . $argv[1]);
		}
	} else {
		var_dump($argv);
		die("Error! Wrong number of arguments.");
	}
}

// Run
run();