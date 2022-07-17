<?php

$username = "omarlamin01";
$password = "karati1985";
$cluster = "cluster0";

if (extension_loaded("mongodb")) {

    try {
        /*//create the manager with the default server adress
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

        //the query that will get all the documents
        $query = new MongoDB\Driver\Query([]);

        //execute the query
        $cursor = $manager->executeQuery("myportfolio.admin", $query);

        echo "connection succeed." . "<br>";
        //show each returned document
        foreach ($cursor as $doc) {
            echo "connection succeed." . "<br>";
            var_dump($doc);
        }*/
        $client = new MongoDB\Client(
        'mongodb+srv://' . $username . ':' . $password . '@' . $cluster . '.ryfgcqu.mongodb.net/?retryWrites=true&w=majority'
              );

        $db = $client->test;
        echo "connection succeed." . "<br>";
    } catch (MongoConnectionException $e) {
        echo "connection failed!" . "<br>";
    }

    /**
     *
     *
     *
     */

}
    
