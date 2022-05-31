<canvas id="split" height="70"></canvas>
    
    <section>
    
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
    
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="media white z-depth-1 rounded">
            <i class="fas fa-city fa-lg teal z-depth-1 p-4 rounded-left text-white mr-3"></i>
            <div class="media-body p-1">
              <p class="text-uppercase text-muted mb-1"><small>Nom du magasin</small></p>
              <h5 class="font-weight-bold mb-0">Carrefour</h5>
            </div>
          </div>
    
        </div>
    
        <div class="col-lg-3 col-md-6 mb-4">
    
          <div class="media white z-depth-1 rounded">
            <i class="fas fa-equals blue z-depth-1 p-4 rounded-left text-white mr-3"></i>
            <div class="media-body p-1">
              <p class="text-uppercase text-muted mb-1"><small>Superficie du magasin</small></p>
              <h5 class="font-weight-bold mb-0"><?php $superficie = 2000; 
              echo($superficie); ?> m²</h5>
            </div>
          </div>
    </div>
    
        <div class="col-lg-3 col-md-6 mb-4">
    
          <div class="media white z-depth-1 rounded">
            <i class="fas fa-chart-bar fa-lg deep-purple z-depth-1 p-4 rounded-left text-white mr-3"></i>
            <div class="media-body p-1">
              <p class="text-uppercase text-muted mb-1"><small>Clients max du magasin</small></p>
              <h5 class="font-weight-bold mb-0"><?php $clients_max = $superficie /4; echo($clients_max); ?></h5>
            </div>
          </div>
    
    
        </div>
        <!--Grid column-->
    
      </div>
      <!--Grid row-->
    
    </section>