<?php
//load the database configuration file
include 'dbConfig.php';
set_time_limit(2000);
if(isset($_POST['importSubmit'])){

    //validate whether uploaded file is a csv file
    $csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){

            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            //skip first line
            fgetcsv($csvFile);

            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile, 1000, ";",'"')) !== FALSE){
              //var_dump($line);
              //echo "<br/>";

              $db->query("INSERT INTO books (book_id, book_colorcat, book_title, book_author_id, book_author_name)
              VALUES (
                '".addslashes($line[0])."',
                '".addslashes($line[1])."',
                '".addslashes($line[2])."',
                '".addslashes($line[3])."',
                '".addslashes($line[4])."'
       )
   ");
            }


            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: import.php".$qstring);
