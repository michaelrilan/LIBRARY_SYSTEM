<?php
include('connection.php');
?>


<?php
if (isset($_POST['led_find'])) {
    $get_book_id_query="SELECT * FROM find_book";
    $get_book_id_prompt = mysqli_query($conn, $get_book_id_query);
    $get_book_id_getData = mysqli_fetch_array($get_book_id_prompt);
    $cnt = mysqli_num_rows($get_book_id_prompt);
    if ($cnt >0) {
        $fetch_book =  $get_book_id_getData['category'];
    
    if ($fetch_book == "PHILOSOPHY") {
        echo "1";
    }
    elseif ($fetch_book == "HISTORY") {
        echo  "2";
    }
    elseif ($fetch_book  == "SOCIAL_SCIENCE") {
        echo  "3";
    }
    elseif ($fetch_book  == "ARTS_LITERATURE") {
        echo  "4";
    }
    elseif ($fetch_book  == "ARTS_LITERATURE") {
        echo  "4";
    }
    elseif ($fetch_book  == "SCIENCE") {
        echo  "5";
    }
    elseif ($fetch_book  == "TECHNOLOGY") {
        echo  "6";
    }
    else{
        echo  "0";

    }
    }
    else {
        echo "0";
    }
    
}
if (isset($_POST['barcode_find'])) {
    $get_book_id_query="SELECT book_title FROM bcode_find";
    $get_book_id_prompt = mysqli_query($conn, $get_book_id_query);
    $get_book_id_getData = mysqli_fetch_array($get_book_id_prompt);
    $cnt = mysqli_num_rows($get_book_id_prompt);
    if ($cnt>0) {
        echo $get_book_id_getData['book_title'];    
    }
    
}

if (isset($_POST['reset_find_book'])) {
    $conn->query("DELETE FROM find_book;") or die($conn->error);
}   
if (isset($_POST['reset_bcode_find'])) {
    $conn->query("DELETE FROM bcode_find;") or die($conn->error);
}
?>