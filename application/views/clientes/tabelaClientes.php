<?php
echo '<table class="responsive-table bordered highlight">';
echo '<tr><th>Id</th><th>Nome</th><th>Telefone</th><th>Rua</th><th>Bairro</th><th>Número</th><th>Modo</th></tr>';

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "aaapp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("set names utf8");
  $stmt = $conn->prepare("SELECT id_cliente, nome, telefone, rua, bairro, num_casa, modo FROM cliente ORDER BY modo desc");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo '</table>';
?>
