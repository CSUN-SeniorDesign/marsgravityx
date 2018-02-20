<?php
session_start();
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = mgxdb";
   $user 		= "user = postgres"; 
   $password 	=  "password = ";


 

   $dbcon = pg_connect("$host $port $dbname $user") or die ("Cannot connect");
   if(!$dbcon) {
      echo "Error : Unable to open database\n";
   } /*else {
      echo "Opened database successfully\n";
   }*/
   
   $sql = "
      CREATE TABLE IF NOT EXISTS Users (
      ID 			SERIAL PRIMARY KEY,
      first_name		 varchar(64) NOT NULL,
      last_name		 varchar(64) NOT NULL,
      email 		 varchar(64) NOT NULL,
      username       varchar(64)   NOT NULL,
      password       varchar(128)    NOT NULL,
      phonenumber   varchar(64) NOT NULL,
      bday         date NOT NULL
  	  );
   ";

   $ret = pg_query($dbcon, $sql);
   if(!$ret) {
      echo pg_last_error($dbcon);
   } /*else {
      echo "Table created successfully\n";
   }*/
