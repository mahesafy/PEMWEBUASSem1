<?php 
function lastupdate(){
    date_default_timezone_set('Asia/Jakarta');
    $myfile = fopen("lastupdate.txt", "w") or die("Unable to open file!");
    $txt = date("d/M/Y H:i:s");
    fwrite($myfile, $txt);
    fclose($myfile);
}
function getlastUpdate(){
$myfile = fopen("lastupdate.txt", "r") or die("Unable to open file!");
$lastupdate =  fread($myfile,filesize("lastupdate.txt"));
fclose($myfile);
return $lastupdate;
}

function table($data, $admin, $no){
    if($admin==true){
        $action='<td><a href="edit.php?id='.$data['id'].'"><button class="edit">Edit</button></a>
        <button class="delete" id="delete" onclick="deleteData('.$data['id'].',\''.addslashes($data['model']).'\')">Delete</button>';
    }else{
        $copy='';
        $action = '';
    }

    return "
    <tr>
    <td>".$no++."</td>
    <td><img src='uploads/".htmlspecialchars($data['image'])."' height='200' width='230'</td>
    <td>".htmlspecialchars($data['brand'])."</td>
    <td>".htmlspecialchars($data['model'])."</td>
    <td>".htmlspecialchars($data['memory'])." GB</td>
    <td>".htmlspecialchars($data['storage'])."</td>
    <td>".htmlspecialchars($data['graphics'])."</td>
    <td>".htmlspecialchars($data['processor'])."</td>
    <td>$".htmlspecialchars($data['price'])."</td>
    <td>".htmlspecialchars($data['date'])."</td>
    ".$action."
    </tr>
";
}