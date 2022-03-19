<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <title>Checks</title>
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./img/coffee-place.jpg" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../allproducts/">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../allusers/">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Manaul Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Checks</a>
            </li>
          </ul>
          <div class="d-flex">
            <img src="./img/ss.jpg" class="admin_img" />
            <h4 class="admin_name">Kelany</h4>
          </div>
        </div>
      </div>
    </nav>
    <!-- -->
    <div class="the_container">
      <div class="container col-sm-8">
        <table class="table accordion" id="accordionSection">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">total Amount</th>
            </tr>
          </thead>
          <tbody>



          <?php

              $dsn = 'mysql:dbname=user_base;host=127.0.0.1;port=3306;';
              $user = 'kelany';
              $password = 'root';

              try {
                  $db = new PDO($dsn, $user, $password);
                  $query = "select * from user";
                  $stmt = $db->prepare($query);
                  $stmt->execute();
                  $stds=$stmt->fetchAll(PDO::FETCH_OBJ);
                  

                  // while ($std = $stmt->fetchObject()) {
                  foreach($stds as $std){
                   
                      echo "
                      
                      <div class='accordion-item'>
                      <tr class='main_tr'>
                        <td class='accord_class'>
                          <h2 class='accordion-header lessss'>
                            <button
                              type='button'
                              class='accordion-button collapsed'
                              data-bs-toggle='collapse'
                              data-bs-target='#collapse".$std->id."'
                            >".  $std->fname ." ".$std->lname ."
                             
                            </button>
                          </h2>
                        </td>
                        <td class='tex_center'>". $std->id . "</td>
                      </tr>
                      <tr>
                        <td colspan='2'>
                          <div
                            class='accordion-collapse collapse'
                            id='collapse".$std->id."'
                            data-bs-parent='#accordionSection'
                          >
                            <div class='accordion-body'>
                              <table
                                class='table accordion order_table'
                                id='accordionSection".$std->id."'
                              >
                                <thead>
                                  <tr>
                                    <th scope='col'>OrderName</th>
                                    <th scope='col'>total Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                             " ;  
                             foreach($stds as $std){
                              echo "
                              <div class='accordion-item'>
                              <tr class='main_tr'>
                                <td class='accord_class'>
                                  <h2 class='accordion-header lessss'>
                                    <button
                                      type='button'
                                      class='accordion-button collapsed'
                                      data-bs-toggle='collapse'
                                      data-bs-target='#collapseO".$std->id."'
                                    >
                                      Tea
                                    </button>
                                    <!-- <span>110</span> -->
                                  </h2>
                                </td>
                                <td class='tex_center'>20</td>
                              </tr>
                              <tr>
                                <td colspan='2'>
                                  <div
                                    class='accordion-collapse collapse'
                                    id='collapseO".$std->id."'
                                    data-bs-parent='#accordionSection".$std->id."'
                                  >
                                    <div class='accordion-body'>
                                      <div class='order_box'>
                                        <img src='./img/ss.jpg' />
                                        <img src='./img/ss.jpg' />
                                        <img src='./img/ss.jpg' />
                                        <img src='./img/ss.jpg' />
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </div>
                              ";}; 
                             echo"
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </div>
                  ";
                  }

                  //close query
                  $stmt->closeCursor();

                  //close connection
                  $db=null;
                  
              } catch (PDOException $e) {
                  echo 'Connection failed: ' . $e->getMessage();
              }
              ?>

          </tbody>
        </table>
      </div>

      <div class="imag"></div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
