<?php
    $name_page = "selling";
    include '../core.php';
?>
<h1>Создание лота</h1>
<form class="create_lot" action="">
  <div class="add_items">
    <div class="add_item add_item1">
        <div>
            <p>Название</p>
            <p>Не более 50 символов</p>
        </div>
        <input type="text">
    </div>
    <div class="add_item add_item2">
      <p>Категория</p>
      <br>
      <button class="select">fddsfsdsd</button>
    </div>
    <div class="add_item add_item3">
      <p>Фотографии &nbsp;
        <span>0/4 не более 25Мб</span>
      </p>
      <br>
      <label>
        Выберите файл
        <input type="file" name="" id="">
      </label>
    </div>
    <div class="add_item add_item4">
      <p>Состояние</p>
      <br>
      <select name="" id="">
        <option value="">Б/у</option>
        <option value="">Отличное</option>
      </select>
    </div>

    <div class="add_item type_sale_pay_delivery">
        <div>
          <div class="name_type">Тип продажи</div>
          <br>
          <div class="type_auction">
            <p>Тип аукциона</p>
            <select name="" id="">
              <option value="">bgfbfbg</option>
              <option value="">bgfbfbg</option>
            </select>
            <div class="des_aution">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, explicabo.
            </div>
          </div>
          <br>
          <div>
            <p>Цена</p>
            <input type="text">
          </div>
          <br>
          <div>
            <p>Блиц-цена</p>
            <input type="text">
          </div>
          <br>
          <div>
            <p>Колличество</p>
            <input type="text">
          </div>
          <br>
          <div>
            <p>Время до окончания аукциона</p>
            <input type="datetime" name="" id="">
          </div>
        </div>
        <div>
          <div class="name_type">Тип оплаты</div>
          <br>
          <ul>
            <li><label class="li_checkbox"><input type="checkbox" name="" id=""><span></span>&nbsp;Банковская карта</label></li>
            <li><label class="li_checkbox"><input type="checkbox" name="" id=""><span></span>&nbsp;Банковская карта</label></li>
            <li><label class="li_checkbox"><input type="checkbox" name="" id=""><span></span>&nbsp;Банковская карта</label></li>
            <li><label class="li_checkbox"><input type="checkbox" name="" id=""><span></span>&nbsp;Банковская карта</label></li>
            <li><label class="li_checkbox"><input type="checkbox" name="" id=""><span></span>&nbsp;Банковская карта</label></li>
          </ul>
        </div>
        <div class="delivery">
          <div class="name_type">Способ доставки</div>
          <br>
          <p>Местоположение</p>
          <select name="" id="">
            <option value="">fdfdfgfdgd</option>
            <option value="">Lorem ipsum dolor sit amet.</option>
            <option value="">Lorem, ipsum dolor.</option>
          </select>
          <p>Доставка по городу</p>
          <select name="" id="">
            <option value="">fdfdfgfdgd</option>
            <option value="">Lorem ipsum dolor sit amet.</option>
            <option value="">Lorem, ipsum dolor.</option>
          </select>
          <p>Доставка по стране</p>
          <select name="" id="">
            <option value="">fdfdfgfdgd</option>
            <option value="">Lorem ipsum dolor sit amet.</option>
            <option value="">Lorem, ipsum dolor.</option>
          </select>
          <p>Доставка по миру</p>
          <select name="" id="">
            <option value="">fdfdfgfdgd</option>
            <option value="">Lorem ipsum dolor sit amet.</option>
            <option value="">Lorem, ipsum dolor.</option>
          </select>
        </div>
    </div>
    <div class="add_item access_lot">
        <p>Тип доступа аукциона</p>
        <div class="type_access">
          <label><input type="radio" name="" id=""><span>Открытый доступ</span></label> 
          <label><input type="radio" name="" id=""><span>Закрытый доступ</span></label> 
          <label class="code_access">Код для закрытого типа <input type="text"></label>
        </div>
    </div>
    <div class="add_item description">
      <h2>Описание</h2>
      <textarea id="mytextarea">Hello, World!</textarea>
    </div>
    
  </div>
</form>
<?php
 include '../footer.php';
?>