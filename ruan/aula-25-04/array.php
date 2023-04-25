<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays  Ordenadas</h1>

    <?php
        $listaordenada = array('carro', 'bike', 'moto');
        echo '<pre>';
        print_r ($listaordenada);
        echo '</pre>';

        $listaordenada[] = 'aviao';
        echo '<pre>';
        print_r ($listaordenada);
        echo '</pre>';

        $listaordenada[] = 'charrete';
        $listaordenada[] = 'rolima';
        $listaordenada[] = 'velotrol';
        $listaordenada[] = 'aviador';
        echo '<pre>';
        print_r ($listaordenada);
        echo '<pre>';

        echo '<h1>Alterar Array</h1>';
        $listaordenada[1] = 'chuveiro';
        echo '<pre>';
        print_r ($listaordenada);
        echo '</pre>';

        echo '<h1>Array Associativo</h1>';

        $arrayAssociativo = [
            0 => 'camisa',
            1 => 'calca',
            2 => 'sapato',
            3 => 'blusa de frio',
            4 => 'moletom'
        ];

        echo '<h1>Imprimir Array</h1>';

        echo '<pre>';
            print_r($arrayAssociativo[2]);
        echo '</pre>';    

        echo '<h1>Alterar Array</h1>';
        $arrayAssociativo[2] = 'sapato grande';
        echo '<pre>';
        print_r ($arrayAssociativo);
        echo '</pre>';

        echo '<h2> arrays multidimensional - com muitiplos arrays';

        $multidimensional = [
            'alunos' => [
                'id' => '1',
                'nome'=> 'yna',
                'endereco'=>'rua x'
            ],
            [
            'id' => '2',
                'nome'=> 'tayna',
                'endereco'=>'rua x'
            ]
            [
                'id' => '3',
                    'nome'=> 'thayna',
                    'endereco'=>'rua x'
                ]
            ];


            echo '<pre>';
            print_r($multidimensional);
            echo '</pre>';


    ?>
</body>
</html>