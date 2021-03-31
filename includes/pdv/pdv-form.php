<div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=TITLE?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=BRAND?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">

<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-6">
            <!-- small box -->
            <div class="small-box bg-dark" >
              <div class="inner">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">

                <div class="input-group mb-1">
                  <input type="text" class="form-control" placeholder="Digite...">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Pesquisar</button>
                  </div>

                </div>

                </h3>
                <div class="card-tools" >
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Adicionar</a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content p-0 direct-chat-messages" style="height: 400px;">

                   <!-- TABLE -->
                   <form id="form1" action="receber-insert.php" method="post">

                   <table class="table table-hover table-dark" >
                            <thead>
                              <tr>
                                <th>
                                <div class="icheck-warning d-inline">
                                <input type="checkbox" id="select-all" >
                                <label for="select-all">
                                </label>
                                </div>

                                </th>
                                <th>IMAGEM</th>
                                <th>PRODUTO</th>
                                <th>CODIGO</th>
                                <th>VALOR</th>
                                <th>AÇÃO</th>

                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>   
                                
                                <div class="icheck-danger d-inline">
                                <input type="checkbox" id="03">
                                <label for="03">
                                </label>
                                </div>
                                
                                </td>
                                <td>
                                  <div class="product-img">
                                  <img src="/imgs/sem.jpg" class="img-size-50">
                                  </div>
                                </td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td><i class="fas fa-plus-circle" 
                                       style="font-size: 35px; color:chartreuse"></i></td>
                              </tr>
                              <tr>

                              <td>   
                                
                                <div class="icheck-danger d-inline">
                                <input type="checkbox" id="02">
                                <label for="02">
                                </label>
                                </div>
                                
                                </td>

                                <td>

                                <div class="product-img">
                                  <img src="assets/dist/img/avatar4.png" class="img-size-50">
                                  </div>
                                </td>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td><i class="fas fa-plus-circle" 
                                       style="font-size: 35px; color:chartreuse"></i></td>
                              </tr>
                              <tr>
                              <td>   
                                
                                <div class="icheck-danger d-inline">
                                <input type="checkbox" id="01">
                                <label for="01">
                                </label>
                                </div>
                                
                                </td>

                                <td>

                                <div class="product-img">
                                  <img src="assets/dist/img/avatar5.png" class="img-size-50">
                                  </div>
                                </td>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td><i class="fas fa-plus-circle" 
                                       style="font-size: 35px; color:chartreuse"></i></td>
                              </tr>


                            </tbody>
                  </table>
                   </form>
                </div>
              </div>
            </div>

              </div>
              <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
         
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>R$ 2.582,23</h3>

                <p>Total de compras</p>
                <hr>

                <!-- TABLE -->

                <div class="tab-content p-0 direct-chat-messages" style="height: 250px;">

                  <table class="table table-hover table-dark" >
                  <thead>
                  <tr>
                  <th>Produto</th>
                  <th>QTD</th>
                  <th>Valor</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  </tr>
                  <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                  </tbody>
                  </table>

            </div>

                <!-- FIM -->

                <!-- FORMULÁRIO -->
        
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                    
                      <div class="form-group">
                        <label>Cliente</label>
                        <select class="form-control form-control-lg" required>
                          <option value="">Selecione</option>
                          <option value="1">Jose de Achienta</option>
                          <option value="2">Karianna</option>
                          <option value="3">Felipe Almeida</option>
                          <option value="4">Jozirema julia</option>
                        </select>
                      </div>


                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mecânico</label>
                        <select class="form-control form-control-lg" required>
                          <option value="">Selecione</option>
                          <option value="1">Moreida da silva</option>
                          <option value="2">Alinne Souza</option>
                          <option value="3">Madalenna Correia</option>
                          <option value="4">Firmino João</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-sm-12">

                    <div class="form-group">
                        <label>Observeção</label>
                        <textarea class="form-control" rows="2" placeholder="Nota..."></textarea>
                      </div>

                    </div>
                  </div>
                </form>

                <!-- FIM -->
                

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <button type="button" class="btn btn-success btn-lg btn-block">FINALIZAR COMPRA</button>
            </div>
          </div>

        </div>
      </div>