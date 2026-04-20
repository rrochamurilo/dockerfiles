<?php
echo "<h1>Marketplace de Guinchos - Rodando no Docker</h1>";
echo "<p>Status do Sistema: Operacional</p>";
$prestadores = ["João Pimenta", "Ernesto Papo Reto", "José Pereira", "Autocar Pronto Socorro", "Guincho esperança"]; 
echo "<table border='1'>"
foreach ($prestadores as $nome) {
    echo "<tr><td>" . $nome . "</td></tr>";
}
echo "</table>";
$servicos = [
    "João Silva" => "Guincho Prancha",
    "Ricardo Oliveira" => "Guincho Pesado",
    "Tiago Mecânico" => "Mecânico Móvel Diesel"
];

echo "<h2>Prestadores Disponíveis no Raio:</h2>";
echo "<ul>";
foreach ($servicos as $nome => $especialidade) {
    echo "<li><strong>$nome</strong> - Especialidade: $especialidade</li>";
}
echo "</ul>";
$polos = ["Paraná", "São Paulo", "Minas Gerais", "Santa Catarina", "Rio de Janeiro", "Bahia", "Mato Grosso"];

foreach ($polos as $estado) {
    echo "Polo ativo: " . $estado . "<br>"; 
}
echo "<ul>
        <li>Polo PR: Ativo</li>
        <li>Polo SP: Ativo</li>
        <li>polo MG: Inativo</li>
        <li>Polo SC: Ativo</li>
        <li>Polo RJ: Ativo</li>
        <li>Polo BA: Ativo</li>
        <li>Polo MT: Ativo</li>
      </ul>";
echo "<hr>";
echo "Data atual: " . date('d/m/Y H:i:s');

?>