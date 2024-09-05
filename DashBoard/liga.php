    <?php
     $servername = "localhost";
     $username = "root";
     $password = "usbw";
     $dbname = "tcc";
     

     $nome = $_POST['fullname'];
     $senha = $_POST['senha'];
     $email = $_POST['email'];


     // Cria a variável para conectar 
     $conn = new mysqli ($servername, $username, $password, $dbname);
     
     // Verifica se houve a conexão
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";

    //Verifica se possui caracteres que possam indicar uma possível injeção no código 
     if (preg_match('/[<>]/', $nome) || preg_match('/[<>]/', $senha) || preg_match('/[<>]/', $email)) {
      echo 'Erro: Dados inválidos. Possível tentativa de injeção de código.';
      exit;
  } else{
     $stmt = $conn->prepare("INSERT INTO login (nome, senha, email) VALUES (?,?,?)");
     
     $stmt->bind_param("sss", $nome, $senha, $email);
   
     $stmt->execute();
     
     
     // Fechar a conexão
     $conn->close();

     header("Location: index.html");
  }
    ?>