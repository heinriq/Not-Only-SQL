<?php
require_once("NotOnlyConn.php");
$conn = new Conexao();
$collection = $conn->connect();
$cursor = $collection->find();
//var_dump($cursor);
foreach($cursor as $doc)
{
    echo $doc['_id']."<br/>";
    echo $doc['dados_pessoais']['nome']." ".$doc['dados_pessoais']['sobrenome']."<br/>";
    echo $doc['dados_cred']['core'].'<br/>';
    echo $doc['dados_cred']['funcao']."<br/>";
?>
    ------------------------------------------------------------<br/>
<?php
    //var_dump($doc);
}  
?>