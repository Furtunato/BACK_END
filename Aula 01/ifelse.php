   <?php
    $nota1 = 8;
    $nota2 = 9;
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        echo "Aluno aprovado com media: $media e $presenca% de presença";
    } else {
        echo "Aluno reprovado com media: $media e $presenca% de presença";
    }
    ?>
  
  
  <?php
    $nota1 = 8;
    $nota2 = 9;
    $presenca = 59;
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7 && $presenca >= 75) {
        echo "Aluno aprovado com media: $media e $presenca% de presença";
    } else {
        echo "Aluno reprovado com media: $media e $presenca% de presença";
    }
    ?>

    <?php
    $nota1 = 8;
    $nota2 = 9;
    $nome = "Enzo Enrique";
    $presenca = 59;
    $media = ($nota1 + $nota2) / 2;
    

    if ($nome == "Enzo Enrique" || ($media >= 7 && $presenca >= 75)) {
    echo "Aluno aprovado com media: $media e $presenca% de presença";
} else {
    echo "Aluno reprovado com media: $media e $presenca% de presença";
}
    ?>

    