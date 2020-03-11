<?
if (!isset($_REQUEST['v'])){
    echo "informe um parâmetro, impossível realizar a tabuada sem um valor correto";
    exit;
}else{
    $v = $_REQUEST['v'];
}


if($v < 0){
    echo "você informou um número menor que 0";
}
elseif($v > 50){
    echo "você informou um número maior que 50";
}else{
    $resultado['tabuada'] = $v;
    $mult = 1;
    while ($mult <= 10){
        $resultado[$v . 'x' . $mult] = $v * $mult;
        $mult++;

    }
    echo json_encode($resultado);
}
?>