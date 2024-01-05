<?php
include_once 'autor.php';
$p = new Autor();
$pro_bd = $p->listar();

?>
<!DOCTYPE html>
<html lang="pt-br" title="Tabela">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/1485287.png" type="image/x-icon">
    <title>Tabela Autor</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        text-decoration: none;
    }
    
    body {
        min-height: 100vh;
        background: url(../img/orion-nebula.jpg) center / cover;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(45deg,  #466c8c,  #153a59);
    }

    h1 {
        color:  #153a59;
        font-size: 1.5rem;
        background-color: #153a59;
    }
    
    main.table {
        width: 82vw;
        height: 90vh;
        background-color: #fff5;
        backdrop-filter: blur(7px);
        box-shadow: 0 .4rem .8rem #0005;
        border-radius: .8rem;
        overflow: hidden;
    }
    
    .table__header {
        width: 100%;
        height: 10%;
        background-color: #fff4;
        padding: .8rem 1rem;
        display: flex;
        align-items: center;
    }
    
    .table__header h1 {
        background-image: url(../img/orion-nebula.jpg);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        margin-left: auto;
        margin-right: auto;
    }
    
    .table__body {
        width: 95%;
        max-height: calc(89% - 1.6rem);
        background-color: #fffb;
        margin: .8rem auto;
        border-radius: .6rem;
        overflow: auto;
        overflow: overlay;
    }
    
    .table__body::-webkit-scrollbar {
        width: 0.5rem;
        height: 0.5rem;
    }
    
    .table__body::-webkit-scrollbar-thumb {
        border-radius: .5rem;
        background-color: #0004;
        visibility: hidden;
    }
    
    .table__body:hover::-webkit-scrollbar-thumb {
        visibility: visible;
    }
    
    table {
        width: 100%;
    }
    
    table,
    th,
    td {
        border-collapse: collapse;
        padding: 1rem;
        text-align: left;
    }
    
    thead th {
        position: sticky;
        top: 0;
        left: 0;
        background-color: #d5d1defe;
        cursor: pointer;
        text-transform: capitalize;
    }
    
    tbody tr:nth-child(even) {
        background-color: #0000000b;
    }
    
    tbody tr {
        --delay: .1s;
        transition: .5s ease-in-out var(--delay), background-color 0s;
    }
    
    tbody tr.hide {
        opacity: 0;
        transform: translateX(100%);
    }
    
    tbody tr:hover {
        background-color: #fff6 !important;
    }
    
    tbody tr td,
    tbody tr td p,
    tbody tr td {
        transition: .2s ease-in-out;
    }
    
    tbody tr.hide td,
    tbody tr.hide td p {
        padding: 0;
        font: 0 / 0 sans-serif;
        transition: .2s ease-in-out .5s;
    }
    
    tbody tr.hide td {
        width: 0;
        height: 0;
        transition: .2s ease-in-out .5s;
    }
    
    thead th span.icon-arrow {
        display: inline-block;
        width: 1.3rem;
        height: 1.3rem;
        border-radius: 50%;
        border: 1.4px solid transparent;
        text-align: center;
        font-size: 1rem;
        margin-left: .5rem;
        transition: .2s ease-in-out;
    }
    
    thead th:hover span.icon-arrow {
        border: 1.4px solid #13548a;
    }
    
    thead th:hover {
        color: #13548a;
    }
    
    thead th.active span.icon-arrow {
        background-color: #13548a;
        color: #fff;
    }
    
    thead th.asc span.icon-arrow {
        transform: rotate(180deg);
    }
    
    thead th.active,
    tbody td.active {
        color: #13548a;
    }
    .button {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        background-color: #466c8c;
        color: #fff;
        column-gap: .5rem;
        font-weight: 500;
        padding: .75rem 1.4rem;
        border-radius: .25rem;
        position: relative;
        z-index: 1;
    }
    
    .button::after {
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #517fa4;
        transform-origin: center;
        z-index: -1;
        transform: scale(0);
        border-radius: .25rem;
        transition: .4s;
    }
    
    .button:hover::after {
        transform: scale(1);
    }

    section .color {
        position: absolute;
        filter: blur(150px);
    }

    section .color:nth-child(1) {
        bottom: 0px;
        width: 500px;
        height: 500px;
        background: #13548a;
    }

    section .color:nth-child(2) {
        bottom: 0px;
        left: 400px;
        width: 500px;
        height: 500px;
        background:  #466c8c;
    }

    section .color:nth-child(3) {
        bottom: 50px;
        right: 400px;
        width: 300;
        height: 300;
        background:  #13548a;
    }

    
    @media (max-width: 1000px) {
        td:not(:first-of-type) {
            min-width: 12.1rem;
        }
    }
</style>
<body>
    <section>
    <main class="table">
        <section class="table__header">
            <h1>Tabela Autor</h1>
            <a href="../paginas/autor.html" class="button"> Voltar <span class="icon-arrow">&#8592;</span></a>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Cod_Autor <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nome <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Sobrenome <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nasc <span class="icon-arrow">&UpArrow;</span></th>
                    </tr> 
                </thead>
                <tbody>
                    <?php 
                    if (is_array($pro_bd)) {
                        foreach ($pro_bd as $pro_mostrar) {
                            echo "<tr>";
                            echo "<td>" . $pro_mostrar[0] . "</td>";
                            echo "<td>" . $pro_mostrar[1] . "</td>";
                            echo "<td>" . $pro_mostrar[2] . "</td>";
                            echo "<td>" . $pro_mostrar[3] . "</td>";
                            echo "<td>" . $pro_mostrar[4] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    </section>
</body>
</html>

