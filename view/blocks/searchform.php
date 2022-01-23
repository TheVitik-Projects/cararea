<section class="bg-gray">
    <div class="container search-block">
        <form class="search-form" id="search_short" method="post" action="cars.php">
                                <div class="row m-side-5">
                                    <div class="col-md p-side-5">
                                        <div class="form-name">Підібрати авто в прокат</div><br>
                                        <a class="text-primary mb" style="cursor:pointer" data-toggle="modal" data-target="#searchModal"><i style="margin-right:5px" class="fas fa-filter"></i>Розширений пошук</a>
                                    </div>
                                
                                    <div class="col p-side-5">
                                        <label for="time-1">Дата и час видачі</label><br>
                                        <input type="datetime-local" name="first_date" id="time-1" style="padding:10px" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" placeholder="dd.mm.yy --:--" value="2021-11-24T21:32" min="2021-11-24T19:32">
                                    </div>
                                    <div class="col p-side-5">
                                        <label for="time-2">Дата и час повернення</label><br>
                                        <input type="datetime-local" name="second_date" id="time-2" style="padding:10px" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" placeholder="dd.mm.yy --:--" value="2021-11-27T21:32" min="2021-11-24T19:32">
                                    </div>
                                    <div class="col-lg p-side-5 flex-end order-6 order-lg-5">
                                        <button type="submit" class="form-button">Пошук</button>
                                    </div>
                                </div>
                            </form>
                        </div>

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form method="POST" action="cars.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Розширений пошук</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Назва</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" name="name">
          </div>
          <hr>
        <p>Ціна</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Від" name="priceFrom" pattern="^[ 0-9]+$">
            <div class="input-group-append">
                <span class="input-group-text">$</span>
              </div>
            <input type="text" class="form-control" placeholder="До" name="priceTo" pattern="^[ 0-9]+$">
            <div class="input-group-append">
              <span class="input-group-text">$</span>
            </div>
          </div>
        <hr>
        <p>Тип пального</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fuelType[]" value="Бензин" id="petrol">
            <label class="form-check-label" style="margin-left:25px" for="petrol">Бензин</label>
            <input class="form-check-input" type="checkbox" name="fuelType[]" value="Дизель" id="diesel">
            <label class="form-check-label" style="margin-left:25px" for="diesel">Дизель</label>
            <input class="form-check-input" type="checkbox" name="fuelType[]" value="Електрика" id="electric">
            <label class="form-check-label" style="margin-left:25px" for="electric">Електрика</label>
          </div>
          <hr>
        <p>Витрата пального</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Від" name="fuelFrom" pattern="^[ 0-9]+$">
            <div class="input-group-append">
                <span class="input-group-text">л/100км</span>
              </div>
            <input type="text" class="form-control" placeholder="До" name="fuelTo" pattern="^[ 0-9]+$">
            <div class="input-group-append">
              <span class="input-group-text">л/100км</span>
            </div>
          </div>
          <hr>
          <p>Коробка передач</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="transmission" value="Усі" id="all">
            <label class="form-check-label" style="margin-left:25px" for="all">Усі</label>
            <input class="form-check-input" type="radio" name="transmission" value="Механіка" id="mechanic">
            <label class="form-check-label" style="margin-left:25px" for="mechanic">Механіка</label>
            <input class="form-check-input" type="radio" name="transmission" value="Автомат" id="automatic">
            <label class="form-check-label" style="margin-left:25px" for="automatic">Автомат</label>
          </div>
          <hr>
          <p>Об'єм двигуна</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Від" name="engineFrom" pattern="\d+(\.\d{1})?">
            <div class="input-group-append">
                <span class="input-group-text">л</span>
              </div>
            <input type="text" class="form-control" placeholder="До" name="engineTo" pattern="\d+(\.\d{1})?">
            <div class="input-group-append">
              <span class="input-group-text">л</span>
            </div>
          </div>
          <hr>
          <p>Тип приводу</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="driveType[]" value="Задній" id="back">
            <label class="form-check-label" style="margin-left:25px" for="back">Задній</label>
            <input class="form-check-input" type="checkbox" name="driveType[]" value="Передній" id="front">
            <label class="form-check-label" style="margin-left:25px" for="front">Передній</label>
            <input class="form-check-input" type="checkbox" name="driveType[]" value="Повний" id="full">
            <label class="form-check-label" style="margin-left:25px" for="full">Повний</label>
          </div>
          <hr>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="margin:auto">Пошук</button>
      </div>
    </div>
</form>
  </div>
</div>
</section>
