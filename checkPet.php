<html>
<body>

<?php
session_start();
?>

<?php
$servername = "198.71.225.57";
$username = "granescala";
$password = "Granescala.123";
$dbname = "GE";

$user = $_SESSION["id"];
$animaltype=$_POST["animaltype"];
$animalname=$_POST["animalname"];
$breed=$_POST["breed"];
$edad=$_POST["edad"];
$edadtipo=$_POST["edadtipo"];
$size=$_POST["size"];
$description=$_POST["description"];
$cuidado=$_POST["cuidado"];
$sexo=$_POST["sexo"];
$vacunado=$_POST["vacunado"];
$estado=$_POST["estado"];
$filename="None";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "<script>window.alert('" . $usern . $cuidado . $vacunado . $sexo . "');</script>";

//echo "<script>window.alert('" . $pass . "');</script>";

$val1 = "0";
$val2 = "0";
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

//echo $usercheck;
// Check if the form was submitted

if($_SERVER["REQUEST_METHOD"] == "POST" && $val1=="1"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                //echo "<script>window.alert('Ya existe el archivo. Cambia su nombre');";
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "imgupload/" . $filename);
                //echo "<script>window.alert('Hubo un exito');";
                //echo "Your file was uploaded successfully.";
                echo "<script>window.alert('Se creó con éxito la mascota');location.replace('registroMascota.html');</script>";
            } 
        } else{
            //echo "<script>window.alert('Hubo un error');";
            echo "Error2: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error3: " . $_FILES["photo"]["error"];
    }
}
//$usercheck2 = mysqli_query($conn,"SELECT Id_User FROM `Users` WHERE UserName = '".$."'");


$sql = "INSERT INTO Pets (Id_User,Id_Breed,Tipo,Animal,Edad,Tamanio,Descripcion,CuidadosEsp,Foto,Vacunado,Sexo,Estado) VALUES ('$user','$breed','$animaltype','$animalname','$edad','$size','$description','$cuidado','$filename','$vacunado','$sexo','$estado')";
echo "<script>window.alert('Se creó con éxito la mascota');";
    /*$sql1 = "SELECT ID FROM Pets ORDER BY ID DESC LIMIT 1";
    //echo "<script>window.alert('" . $sql1 . $usern . "');</script>";*/
if ($conn->query($sql) === TRUE){
// Check connection
        //$idPet = mysqli_query($conn,$sql1);
    session_destroy();
    header("location:registroMascota.php");
}

$conn->close();
?>


</body>
</html>