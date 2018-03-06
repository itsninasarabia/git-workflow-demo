<?php
/**
 *  A basic database class
 *
 */

class DB {

    # @var     MySQL Hostname
	private $hostname = '127.0.0.1';

	# @var     MySQL Database
	private $database;

	# @var     MySQL Username
	private $username;

	# @var     MySQL Password
	private $password;

    /**
     *  Default constructor
     */
    public function __construct($hostname, $database, $username, $password) {
        $this->connect($hostname, $database, $username, $password);
    }

    public function connect($hostname, $database, $username, $password){

        $mysqli = new mysqli($hostname, $username, $password, $database);
        if ($mysqli->connect_errno) {
            echo "Sorry, this website is experiencing problems.";
            echo "Error: Failed to make a MySQL connection, here is why: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            die();
        }
        return $mysqli;
    }

	// !! TODO - NEED TO REMOVE THIS ¡¡
	// $servername = "localhost";
	// $username = "username";
	// $password = "password";
    //
	//
	// $conn = new mysqli($servername, $username, $password);
	//
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
    //
	//
	// $sql = "CREATE DATABASE myDB";
	// if ($conn->query($sql) === TRUE) {
	//     echo "Database created successfully";
	// } else {
	//     echo "Error creating database: " . $conn->error;
	// }
    //
	// $conn->close();

}
