<?php
include 'db.php';
//add user
if(isset($_POST['addUser'])){
	$sql = "INSERT INTO gebruikers (voornaam, achternaam, leeftijd, adres) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['lnumber']."', '".$_POST['ladres']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}

function vraag1(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '1'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
        }
        
        

}

function vraag2(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '2'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
		}

}

function vraag3(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '3'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
		}

}
function vraag4(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '4'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
		}

}

function vraag5(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '5'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
		}

}
function vraag6(){
    include 'db.php';
    $sql = "SELECT vraag FROM vragen where idvraag = '6'" ;
		$result = $conn->query($sql);
		    if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['vraag'];
		}
		}

}

if(isset($_POST['addAntwoord'])){
    include 'db.php';
	$sql = "INSERT INTO antwoorden (antwoord) VALUES ('".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}


    


if(isset($_POST['addAntwoorden'])){
	$sql = "INSERT INTO antwoorden_gebruikers (userid, vraagid, antwoordid) VALUES ('1', '2', '".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}
if(isset($_POST['addAntwoorden2'])){
	$sql = "INSERT INTO antwoorden_gebruikers (userid, vraagid, antwoordid) VALUES ('1', '3', '".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}
if(isset($_POST['addAntwoorden3'])){
	$sql = "INSERT INTO antwoorden_gebruikers (userid, vraagid, antwoordid) VALUES ('1', '4', '".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}
if(isset($_POST['addAntwoorden4'])){
	$sql = "INSERT INTO antwoorden_gebruikers (userid, vraagid, antwoordid) VALUES ('1', '5', '".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}
if(isset($_POST['addAntwoorden5'])){
	$sql = "INSERT INTO antwoorden_gebruikers (userid, vraagid, antwoordid) VALUES ('1', '6', '".$_POST['antwoord']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}


function vervolgvraag(){
    include 'db.php';
   // $sql = "SELECT vraag FROM vragen where idvraag = '1'" ;
    $sql= "SELECT vraagid, antwoordid,
    CASE
        WHEN antwoordid > 5 THEN volgendesectieid ='3'
        ELSE volgendesectieid  = '4'
    END AS vraag
    FROM vragen_antwoorden";
		$result = $conn->query($sql);
		    {
			echo $row['vraagid'];
		}
}

function vervolgsectie(){
    $sql = "SELECT  * 
FROM    antwoorden_gebruiker.idantwoorden_vragen i 
    JOIN vragen_antwoorden.volgendesectieid p 
        ON i.userid = p.sectieid  
    JOIN sys.allocation_units a 
        ON CASE 
           WHEN a.type IN (1, 3) AND a.container_id = p.hobt_id THEN 1
           WHEN a.type IN (2) AND a.container_id = p.partition_id THEN 1
           ELSE 0
           END = 1";
}
