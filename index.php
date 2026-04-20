<?php
echo "<h1>Marketplace de Guinchos - Rodando no Docker</h1>";
echo "<p>Status do Sistema: Operacional</p>";
$prestadores = ["João Pimenta, Ernesto Papo Reto, José Pereira, Autocar Pronto Socorro"]; 
echo "<table border='1'>"
foreach ($prestadores as $nome) {
    echo "<tr><td>" . $nome . "</td></tr>";
}
echo "</table>";
$polos = ["Paraná", "São Paulo", "Minas Gerais", "Santa Catarina", "Rio de Janeiro"];

foreach ($polos as $estado) {
    echo "Polo ativo: " . $estado . "<br>"; 
}
echo "<ul>
        <li>Polo PR: Ativo</li>
        <li>Polo SP: Ativo</li>
      </ul>";
echo "<hr>";
echo "Data atual: " . date('d/m/Y H:i:s');

?>