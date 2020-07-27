<?php
if (isset($_GET['uuid_version']) && $_GET['uuid_version']  ) 
{
    include 'Uuid.php';
    switch ($_GET['uuid_version']) {
        case 1:
            echo json_encode(array('success' => true, 'uuid' => Uuid::generate(1)->string)); break;
        case 2:
            throw new Exception('Version 2 is unsupported.'); break;
        case 3:
            // The algorithms ending in ",3" are the standard Tiger algorithm; their output for the empty string matches the empty string's hash in the testtiger code from the Tiger website.
            // The name is required for version 5, so i generate the current datetime with tiger192,3 hashing algorithm.
            echo json_encode(array('success' => true, 'uuid' => Uuid::generate(3,hash('tiger192,3',date('Y-m-d H:i:s')), Uuid::NS_DNS)->string)); break;
        case 4:
            echo json_encode(array('success' => true, 'uuid' => Uuid::generate(4)->string)); break;
        case 5:
            // The algorithms ending in ",4" are non-standard, and should perform 33% slower because there's 33% more work being done.
            // The name is required for version 5, so i generate the current datetime with tiger192,4 hashing algorithm.
            echo json_encode(array('success' => true, 'uuid' => Uuid::generate(5,hash('tiger192,4',date('Y-m-d H:i:s')), Uuid::NS_DNS)->string)); break;
        default:
            throw new Exception('Selected version is invalid or unsupported.');
    }
   
} else {
    echo json_encode(array('success' => false));
}