    <?php
     $servername = "localhost";
     $username = "root";
     $password = "usbw";
     $dbname = "tcc";
     

     $email = $_POST['email'];
     $senha = $_POST['senha'];


     // Cria a variável para conectar 
     $conn = new mysqli ($servername, $username, $password, $dbname);
     
     // Verifica se houve a conexão
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";

     //Verifica se possui caracteres que possam indicar uma possível injeção no código 
     if (preg_match('/[<>]/', $email) || preg_match('/[<>]/', $senha)) {
      echo 'Erro: Dados inválidos. Possível tentativa de injeção de código.';
      exit;
  } else{
     
     $sql = "SELECT * FROM login WHERE email = ? and senha = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("ss", $email, $senha);
     $stmt->execute();
     $result = $stmt->get_result();
 
     // If the data exists, redirect to the "index" page
     if ($result->num_rows > 0) {
         header('Location: index.html');
         exit;
     } else {
      ECHO'ERRO';
      // function  createConfirmationmbox() {  
      //   echo '<script type ="text/JavaScript">';
      //   echo ' let r = confirm("JavaScript Alert Box by PHP")';
      //   echo 'if (r == true) {
      //      window.location = "login.html";
      //    }'; 
      //   echo '</script>';
      //   echo '<button onclick="createConfirmationmbox()">Clique aqui</button>';  
         //If the data does not exist, display an error message
       }
  
       //If the data does not exist, display an error message
         //'<a href="login.html"><input type="submit" value="Voltar"></a>';
     
 
     // Close the prepared statement and the connection
     $stmt->close();
     $conn->close();
}
    ?>