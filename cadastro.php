
<?php 

include_once("conexão.php");

$nome = ($_POST ['nome']);
$idade = ($_POST ['idade']);
$sala = ($_POST ['sala']);
$folha = ($_POST ['folha']);






$result_alunos = "INSERT INTO Alunos (Nome, Idade, Sala, texto_Redacao, Data) VALUES ('$nome','$idade','$sala','$folha', NOW())";

$resultado_alunos = mysqli_query($mysqli, $result_alunos);

if(mysqli_insert_id($mysqli)){
    header("Location:index.php");
}else{
    header("Location:index.php");
}

?>

