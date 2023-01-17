<?php
session_start();
 const DBNAME = 'story';
 const DBUSER= 'root';
 const DBPASS= '';
 $connect = new PDO('mysql:host=localhost;dbname='.DBNAME,DBUSER,DBPASS);
