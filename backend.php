<?php

// FTP server details
$ftpHost   = "TU DOMINIO FTP";
$ftpUsername = "tiratinta_ftp";
$ftpPassword = "nortesys_";
$ftpPort=21;

// open an FTP connection
$connId = ftp_connect($ftpHost, $ftpPort, 90) or die("Couldn't connect to $ftpHost");
// login to FTP server
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);
ftp_pasv($connId, true) or die("Cannot switch to passive mode");





// Obtener los archivos contenidos en el directorio actual
$contents = ftp_nlist($connId, ".");
// output $contents
foreach ($contents as $key => $value) {
    echo $value ."<br>";
}






/* // local & server file path
// Bajando archivo 
$localFilePath  = "xmlprueba.xml";
$remoteFilePath = "xmlprueba.xml";
if(ftp_get($connId, $localFilePath, $remoteFilePath, FTP_BINARY)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "error descargando... $localFilePath";
} 
//para bajar varios:
//foreach ($contents as &$value) { $result = ftp_fget($conn_id, $local,&$value, FTP_BINARY); }


// try to upload file
//subir archivo.
if(ftp_put($connId, $remoteFilePath, $localFilePath, FTP_ASCII)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while uploading $localFilePath";
} 



// server file path
$file = 'public_html/index_old.php';
// eliminar archivo.
if(ftp_delete($connId, $file)){
    echo "$file deleted successful";
}else{
    echo "There was an error while deleting $file";
}

*/




// close the connection
ftp_close($connId);

?>


