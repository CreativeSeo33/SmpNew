<?php $title = 'Контакты - СМП 245'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php"); 
?>

<article>
<div class="container">
   <div class="row">
<h1 class="h1">Контакты</h1>

 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cont">

      <div class="cont2"><i class="fa fa-home fa-2x"></i> 600000, Владимир, ул. Коммунальный спуск, д.1, 2 этаж</div>
      <div class="cont2"><i class="fa fa-clock-o fa-2x"></i> пн-пт: 8:00-18:00, сб., вс.-выходной</div>
      <div class="cont2">
        <table>
          <tr>
            <td><i class="fa fa-phone fa-2x"></i> Телефоны:</td>
            <td class="cont-tel"></td>
          </tr>
          <tr>
            <td>Аренда спецтехники:</td>
            <td class="cont-tel">8(4922) 49-34-27, 8(910)778-41-05</td>
          </tr>
          <tr>
            <td>Строительные работы:</td>
            <td class="cont-tel">8(4922) 32-32-04, 8(910)771-80-96</td>
          </tr>
          <tr>
            <td>Проектные работы:</td>
            <td class="cont-tel">8(4922) 32-32-04</td>
          </tr>
          <tr>
            <td><i class="fa fa-envelope-o fa-2x"></i> E-mail:</td>
            <td class="cont-mail"><a href="mailto:smp245@bk.ru  ">smp245@bk.ru  </a></td>
          </tr>
        </table>
      </div>
      <div class="cont2">
        <table>
          <tr>
            <td>Реквизиты:</td>
            <td class="rekv">Закрытое Акционерное Общество «СМП-245-ТРАНССТРОЙ»</td>
          </tr>
          <tr>
            <td rowspan="4"></td>
            <td class="rekv">ОГРН: 1033303411932</td>
          </tr>
          <tr>
            <td class="rekv">ИНН: 3329030445</td>
          </tr>
          <tr>
            <td class="rekv">ОКПО: 54614968</td>
          </tr>
          <tr>
            <td class="rekv">Юр.адрес: 600000, Владимир, ул. Коммунальный спуск, д.1</td>
          </tr>
          
        </table>
      </div>
  </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="min-height:450px;">
       <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=8-1nOclqtjabOMrZqjfhbntiEt-ZlgqB&width=auto&height=450"></script>
    </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  


  <div id="svyaz" class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div class="h2 tc">
<div class="tcboard"></div>

<span class="besplcons">Форма обратной связи</span>
</div>
<div class="contact-form">
      <form class="jotform-form center-block" accept-charset="utf-8">
        <input type="hidden"  />
        <div class="form-all">
          <ul class="form-section">
            <li class="form-line">
              <label class="form-label-top"> ФИО<span class="form-required">*</span> </label>
              <div class="form-input-wide">
                <input type="text" class="form-textbox" size="40" id="name3" placeholder="Ваше имя">
              </div>
            </li>
            <li class="form-line">
              <label class="form-label-top"> E-mail<span class="form-required">*</span> </label>
              <div class="form-input-wide">
                <input type="email" class="form-textbox" size="40" id="mail3" placeholder="Ваш E-mail">
              </div>
            </li>
            <li class="form-line">
              <label class="form-label-top"> Телефон </label>
              <div class="form-input-wide">
                <input type="text" class="form-textbox" placeholder="+7 (___) ___-___" data-type="input-textbox" size="40" id="tel3">
              </div>
            </li>
            <li class="form-line form-line-column">
              <label class="form-label-top"> Сообщение<span class="form-required">*</span> </label>
              <div class="form-input-wide">
                <textarea class="form-textarea" cols="32" rows="7" id="message" placeholder="Ваше сообщение"></textarea>
              </div>
            </li>

            <li class="form-line">
              <div class="form-input-wide">
                <div style="text-align: center;" class="form-buttons-wrapper">
                  <button type="submit" class="form-submit-button form-submit-button-simple_blue" id="send_btn3"> Отправить </button>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </form>
    </div>
    <!--contact-form-->

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
   <div class="h2">Наш офис</div>
   <script src="//panoramas.api-maps.yandex.ru/embed/1.x/?lang=ru&ll=40.41615449%2C56.13152503&ost=dir%3A91.34095238095296%2C5.892432359307395~span%3A130.00000000000003%2C73.43452380952382&size=540%2C495&l=stv"></script>
</div>

</div><!-- row -->
</div><!-- container -->


    </div>
   </div><!-- row -->
</div><!-- container -->
</article>
<?php include("../blocks/footer.php"); ?>