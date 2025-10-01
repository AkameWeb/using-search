<?php
    require("../OOPHP/block/header.php");
?>
<body>
    <form action="index.php" method="POST" class="search-form">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CroundZone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" name = "name" id = "name"placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</form>

    <?php
       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
       $mysql = new mysqli("localhost", "root","","shop"); 
       

       $name = $_POST['name'];

       $result = $mysql->query("SELECT * FROM `product` WHERE names LIKE '$name' ");

        if($mysql->connect_error){
            echo "Ошибка подключения";
        }

       while($row = $result->fetch_assoc()){
        if($row["names"] == $name){
            echo '<div class="product-result">' . $row["names"]," Цена ", $row["prise"] . '</div><br>'; 
        }
        
       }
      

        class Shoopping{
            private $resultName;
            public function naming(){
                $this -> resultName= $_POST['name'];
                if($this -> resultName == ""){
                    $text = "Поле поиска пустое";
                    echo '<div class="product-result">'.$text.'</div>';
                }
            }
           
            
        }


     

        $mysql -> close();
        $shoopping = new Shoopping();
    
        $shoopping->naming();


        //var_dump($shoopping); // информация об объекте класса 
        //var_dump($shoopping instanceof Shoopping); // проверка идёт ли обращение к определённому классу
        
    ?>
</body>
<?php
require("../OOPHP/block/footer.php");
?>