<!-- cadastro.php-->
 <?php require 'conexao.php' ?>
 <?php 
 
    $matricula=$_GET["matricula"];
    $nome=$_GET["nome"];
    $curso=$_GET["curso"];
    $turno=$_GET["turno"];
    
    function insere($conexao,$matricula,$nome,$curso,$turno){
        $sql="insert into alunos(matricula,nome,curso,turno) 
        values('$matricula','$nome',' $curso',' $turno')";
        $resultado=mysqli_query($conexao,$sql);
        return $resultado;
    }//fim da função
    if(insere($conexao,$matricula,$nome,$curso,$turno)){
        echo "ADICIONADO COM SUCESSO";
    }else {
        echo "ERRO";
        echo mysqli_error($conexao);
    }
 
 ?>