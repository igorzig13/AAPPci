
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <div class="valign-wrapper">
        <a href="pagPrincipal.php">Página inicial</a> <i class="material-icons">arrow_forward</i> Lista de Clientes
      </div>
      <div class="divider"></div>
       <div class="row"><br>
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

      </div>
      <a href="editaCliente.php" class="btn right waves-effect waves-light"><i class="material-icons left">mode_edit</i>Editar informações</a>
      <br><br>
    </div>
  </div>

  <div class="section"></div>

  
