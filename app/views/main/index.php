<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="public/assets/img/1.jpg" alt="Chese Cake" width="1200" height="700">
      <div class="carousel-caption">
        <h3>Chese Cake</h3>
        <p>Lorem ipsum dolor sit, </p>
      </div>
    </div>

    <div class="item">
      <img src="public/assets/img/2.jpg" alt="Soup" width="1200" height="700">
      <div class="carousel-caption">
        <h3>Soup</h3>
        <p>Lorem ipsum dolor sit, Lorem ipsum dolor sit,</p>
      </div>
    </div>

    <div class="item">
      <img src="public/assets/img/3.jpg" alt="Los Angeles" width="1200" height="700">
      <div class="carousel-caption">
        <h3>Pizza</h3>
        <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
      </div>
    </div>
  </div>
</div>


<div id="band" class="container text-center">
  <h3>THE FOOD</h3>
  <p><em>We love food!</em></p>
  <p>We have created a fictional food website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc
    itation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non p
    roident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex
    ercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
</div>

<!-- fdg -->

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">FOODS</h3>
    <p class="text-center">Lorem ipsum we'll play you some dutry.<br> fityrew hooju</p>
    <ul class="list-group">
      <li class="list-group-item">Yesterday</li>
      <li class="list-group-item">Today</li>
      <li class="list-group-item">Tomorrow</li>
    </ul>

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="" alt="A" width="400" height="300">
          <p><strong>AA</strong></p>
          <p> 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Roll</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="" alt="B" width="400" height="300">
          <p><strong>AB</strong></p>
          <p>2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Pizza</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="" alt="C" width="400" height="300">
          <p><strong>AC</strong></p>
          <p> 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Burger</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Orders</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Pizza, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-block">Pay
              <span class="glyphicon glyphicon-ok"></span>
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Image of location/map -->
<img src="public/assets/img/3.jpg" class="img-responsive" style="width:100%">

<style>
  .carousel-inner img {
    /* -webkit-filter: grayscale(90%);
      filter: grayscale(90%); */
    width: 100%;
    margin: auto;
  }

  .carousel-caption h3 {
    color: #fff !important;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
      /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }

  .modal-header,
  h4,
  .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }

  .modal-header,
  .modal-body {
    padding: 40px 50px;
  }

  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }

  .bg-1 h3 {
    color: #fff;
  }

  .bg-1 p {
    font-style: italic;
  }
</style>