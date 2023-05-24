<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="./../../css/student/settings.css"/>
<script src="./../../js/tabs.js"></script>
<!--     <script> -->
<!-- window.addEventListener('DOMContentLoaded', function() { -->
<!--   var hash = window.location.hash; -->
<!--   if (hash) { -->
<!--     var sectionId = hash.substring(1); // Remove the leading '#' -->
<!--     openTab(event, sectionId); -->
<!--   } -->
<!-- }); -->
<!--     </script> -->
<script>
window.addEventListener('load', function() {
  // Read the query parameter from the URL
  const urlParams = new URLSearchParams(window.location.search);
  const tab = urlParams.get('tab');
  if (tab){
    openTab(event, tab);
  }
});
</script>
<script>
window.addEventListener('load', function() {
  const th = localStorage.getItem('theme');
  if (th){
    if (th === 'theme-light'){
      document.getElementById('theme-select').value = 'light';
    } else if(th === 'theme-dark'){
      document.getElementById('theme-select').value = 'dark';
    } else if(th === 'theme-custom') {
      document.getElementById('theme-select').value = 'custom';
    }
  }
});
</script>
<script>
window.addEventListener('load', function() {
  const mainCheckbox = document.querySelector('.main-option input');
  const subOptions = document.querySelector('.sub-options');

  mainCheckbox.addEventListener('change', () => {
    subOptions.classList.toggle('visible', mainCheckbox.checked);
    subOptions.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox){checkbox.disabled = !checkbox.disabled});
  });
});
</script>
</head>
<body>
<?php
include "./../../includes/student/header.php"
?>
<main>
  <div class="personal-info">
    <div class="image-settings">
      <img src="./../../images/profile-pic.jpg">
      <div>
        <button><span class="fa fa-pen-to-square"></span> Редактиране</button>
        <button><span class="fa fa-trash"></span> Премахване</button>
        <button><span class="fa fa-key"></span> Смяна на парола</button>
      </div>
    </div>
    <table>
      <tbody>
        <tr>
          <td>Име</td>
          <td>Иван Петров Иванов</td>
        </tr>
        <tr>
          <td>Факултет</td>
          <td>ФМИ</td>
        </tr>
        <tr>
          <td>Специалност</td>
          <td>Софтуерно инженерство</td>
        </tr>
        <tr>
          <td>Факултетен номер</td>
          <td>62547</td>
        </tr>
        <tr>
          <td>Курс</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Група</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Имейл</td>
          <td>somerandomemail@fmi.uni-sofia.bg <span class="fa fa-pen-to-square"></span></td>
        </tr>
        <tr>
          <td>Телефон</td>
          <td>0888888888 <span class="fa fa-pen-to-square"></td>
        </tr>
        <tr>
          <td>Адрес</td>
          <td>гр. Плевен, ул. "Гренадерска" 21 <span class="fa fa-pen-to-square"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tabs">
    <div class="tabline">
      <button class="neutral tablinks" onclick="openTab(event, 'credits')">Кредити</button>
      <button class="neutral tablinks" onclick="openTab(event, 'taxes')">Такси</button>
      <button class="neutral tablinks" onclick="openTab(event, 'health-insurance')">Здравно осигуряване</button>
      <button class="neutral tablinks" onclick="openTab(event, 'logins')">Логвания</button>
      <button class="neutral tablinks" onclick="openTab(event, 'card-settings')">Настройки на началната страница</button>
      <button class="neutral tablinks" onclick="openTab(event, 'email-settings')">Настройки на известията</button>
      <button class="neutral tablinks" onclick="openTab(event, 'theme-settings')">Tема</button>
    </div> 
    <div id="credits" class="tabcontent">
    <table>
  <tr>
    <th>Група избираеми дисциплини</th>
    <th>Минимален брой</th>
    <th>Сегашен брой</th>
    <th>Кредити досега</th>
  </tr>
  <tr>
    <td>Основи на Компютърните науки</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Ядро на Компютърните науки</td>
    <td>1</td>
    <td>1</td>
    <td>5</td>
  </tr>
  <tr>
    <td>Основи на Компютърните науки и Ядро на Компютърните науки</td>
    <td>4</td>
    <td>2</td>
    <td>10</td>
  </tr>
  <tr>
    <td>Практическо усвояване на компютърните науки</td>
    <td>2</td>
    <td>1</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Математика и Приложна математика</td>
    <td>2</td>
    <td>1</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Математика</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Избираема дисциплина от списък 1</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Други</td>
    <td>1</td>
    <td>1</td>
    <td>4</td>
  </tr>
  <tr>
    <th>ОБЩО</th>
    <th>13</th>
    <th>6</th>
    <th>32/62</th>
  </tr>
</table>

    </div>
    <div id="taxes" class="tabcontent">
      <h2>Такси</h2>
      <table>
        <thead>
          <tr>
            <th>Такса</th>
            <th>Сума (лв.)</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Семестриална такса</td>
            <td>450.00</td>
            <td class="payment-status"><a class="neutral">Платена</a></td>
          </tr>
          <tr id="hidden-tax" style="display: none;">
            <td>Дискретни структури 1</td>
            <td>50.00</td>
            <td class="payment-status"><a href="#" class="positive">Плати</a></td>
          </tr>
        </tbody>
      </table>
      <br/>
      <hr/>
      <br/>
      <div>
        <select>
          <option selected disabled>Изберете предмет</option>
          <option>Дискретни структури 1</option>
        </select>
        <button class="neutral" onclick="document.getElementById('hidden-tax').style.display='table-row';">Генериране на такса</button>
      </div>

    </div>
    <div id="health-insurance" class="tabcontent">
      <h2>Здравно осигуряване</h2>
      <table>
        <thead>
          <tr>
            <th>Година</th>
            <th>Януари</th>
            <th>Февруари</th>
            <th>Март</th>
            <th>Април</th>
            <th>Май</th>
            <th>Юни</th>
            <th>Юли</th>
            <th>Август</th>
            <th>Септември</th>
            <th>Октомври</th>
            <th>Ноември</th>
            <th>Декември</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>2020</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
          </tr>
          <tr>
            <th>2021</th>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
          </tr>
          <tr>
            <th>2022</th>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
          </tr>
          <tr>
            <th>2023</th>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td><span class="fa fa-check"></span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="logins" class="tabcontent">
      <h2>Логвания</h2>
      <table>
        <thead>
          <tr>
            <th>Дата и час</th>
            <th>Устройство</th>
            <th>IP адрес</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>27/01/2023 14:05:23</td>
            <td>Windows 10 / Chrome 97.0.4692.99</td>
            <td>192.168.1.1</td>
          </tr>
          <tr>
            <td>25/01/2023 08:47:19</td>
            <td>Mac OS X / Safari 15.1</td>
            <td>172.16.0.2</td>
          </tr>
          <tr>
            <td>23/01/2023 17:31:11</td>
            <td>Windows 11 / Firefox 95.0</td>
            <td>10.0.0.1</td>
          </tr>
          <tr>
            <td>21/01/2023 22:09:45</td>
            <td>iOS 15 / Safari 15.1</td>
            <td>192.168.0.10</td>
          </tr>
          <tr>
            <td>19/01/2023 11:15:33</td>
            <td>Android 12 / Chrome 96.0.4664.93</td>
            <td>192.168.1.100</td>
          </tr>
          <tr>
            <td>17/01/2023 16:22:01</td>
            <td>Windows 10 / Edge 98.0.1108.56</td>
            <td>192.168.1.50</td>
          </tr>
          <tr>
            <td>15/01/2023 09:43:10</td>
            <td>Linux / Firefox 95.0.1</td>
            <td>172.16.0.100</td>
          </tr>
          <tr>
            <td>13/01/2023 14:58:21</td>
            <td>Mac OS X / Chrome 97.0.4692.99</td>
            <td>192.168.1.2</td>
          </tr>
          <tr>
            <td>11/01/2023 18:30:05</td>
            <td>iOS 14 / Safari 14.1</td>
            <td>10.0.0.2</td>
          </tr>
          <tr>
            <td>09/01/2023 21:05:57</td>
            <td>Windows 11 / Edge 98.0.1108.56</td>
            <td>192.168.1.20</td>
          </tr>
          <tr>
            <td>07/01/2023 12:18:13</td>
            <td>Android 11 / Chrome 96.0.4664.93</td>
            <td>192.168.0.2</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="card-settings" class="tabcontent">
      <h2>Настройки на началната страница</h2>
      <label class="main-option"><input type="checkbox" checked />Статични карти</label>
      <div class="sub-options visible">
        <label><input type="checkbox" checked/>Седмично разписание</label> 
        <label><input type="checkbox" checked/>Такси</label> 
        <label><input type="checkbox" checked/>Маркирани дисциплини</label>
        <label><input type="checkbox" checked/>Записани избираеми дисциплини</label>
        <label><input type="checkbox" checked/>Съобщения</label>
        <label><input type="checkbox" checked/>Оценки от последната активна сесия</label>
      </div>
    </div>
    <div id="email-settings" class="tabcontent">
      <h2>Настройки на известията</h2> 
      <p>Получаване на имейл при:</p>
      <label><input type="checkbox" checked/>промяна в графика</label> 
      <label><input type="checkbox" checked/>нова такса</label> 
      <label><input type="checkbox" checked/>промяна на позиция в опашката на избираема дисциплина</label> 
    </div>
    <div id="theme-settings" class="tabcontent">
      <h2>Тема</h2>

      <label>Тема:
      <select id="theme-select" onchange="changeTheme()">
      <option value="light">Светла</option>
      <option value="dark">Тъмна</option>
      <option value="device">От устройството</option>
      <option value="custom">По избор</option>
      </select>
      </label>
      
<!--       <div id="custom-theme" style="display: none;"> -->
<!--   <label> -->
<!--     Основен цвят: -->
<!--     <input type="color" id="primary-color-picker" onchange="setCustomTheme('--primary-color')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Акцентен цвят: -->
<!--     <input type="color" id="secondary-color-picker" onchange="setCustomTheme('--secondary-color')" value="#C99818"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Фонов цвят: -->
<!--     <input type="color" id="back-color-picker" onchange="setCustomTheme('--back-color')" value="#eef2c1"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на повърхнината: -->
<!--     <input type="color" id="surface-color-picker" onchange="setCustomTheme('--surface-color')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на грешка: -->
<!--     <input type="color" id="error-color-picker" onchange="setCustomTheme('--error-color')" value="#be0000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при основен цвят): -->
<!--     <input type="color" id="on-primary-picker" onchange="setCustomTheme('--on-primary')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при акцентен цвят): -->
<!--     <input type="color" id="on-secondary-picker" onchange="setCustomTheme('--on-secondary')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при фонов цвят): -->
<!--     <input type="color" id="on-background-picker" onchange="setCustomTheme('--on-background')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при цвят на повърхнината): -->
<!--     <input type="color" id="on-surface-picker" onchange="setCustomTheme('--on-surface')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при цвят на грешка): -->
<!--     <input type="color" id="on-error-picker" onchange="setCustomTheme('--on-error')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Положителен цвят: -->
<!--     <input type="color" id="positive-picker" onchange="setCustomTheme('--positive')" value="#005d2f"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Положителен цвят (при навлизане на мишката): -->
<!--     <input type="color" id="positive-hover-picker" onchange="setCustomTheme('--positive-hover')" value="#007d46"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Отрицателен цвят: -->
<!--     <input type="color" id="negative-picker" onchange="setCustomTheme('--negative')" value="#be0000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Отрицателен цвят (при навлизане на мишката): -->
<!--     <input type="color" id="negative-hover-picker" onchange="setCustomTheme('--negative-hover')" value="#d9231a"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Неутрален цвят: -->
<!--     <input type="color" id="neutral-picker" onchange="setCustomTheme('--neutral')" value="#dedede"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Неутрален цвят (при навлизане на мишката): -->
<!--     <input type="color" id="neutral-hover-picker" onchange="setCustomTheme('--neutral-hover')" value="#f0f0f0"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при положителен цвят): -->
<!--     <input type="color" id="on-positive-picker" onchange="setCustomTheme('--on-positive')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при отрицателен цвят): -->
<!--     <input type="color" id="on-negative-picker" onchange="setCustomTheme('--on-negative')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при неутрален цвят): -->
<!--     <input type="color" id="on-neutral-picker" onchange="setCustomTheme('--on-neutral')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на заглавията на таблицата: -->
<!--     <input type="color" id="th-color-picker" onchange="setCustomTheme('--th-color')" value="#eee"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на полетата в таблицата: -->
<!--     <input type="color" id="td-color-picker" onchange="setCustomTheme('--td-color')" value="#ffffff"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при заглавията на таблицата): -->
<!--     <input type="color" id="on-th-picker" onchange="setCustomTheme('--on-th')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на текста (при полетата в таблицата): -->
<!--     <input type="color" id="on-td-picker" onchange="setCustomTheme('--on-td')" value="#000000"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Цвят на границите: -->
<!--     <input type="color" id="border-color-picker" onchange="setCustomTheme('--border-color')" value="#ccc"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Начален цвят на градиента на менюто: -->
<!--     <input type="color" id="menu-gradient-start-picker" onchange="setCustomTheme('--menu-gradient-start')" value="#eee"> -->
<!--   </label> -->
<!---->
<!--   <label> -->
<!--     Краен цвят на градиента на менюто: -->
<!--     <input type="color" id="menu-gradient-end-picker" onchange="setCustomTheme('--menu-gradient-end')" value="#fff"> -->
<!--   </label> -->
<!-- </div> -->

      <div id="custom-theme" style="display: none;">
  <table>
    <tr>
      <td><label for="primary-color-picker">Основен цвят:</label></td>
      <td><input type="color" id="primary-color-picker" onchange="setCustomTheme('--primary-color')" value="#ffffff"></td>
    </tr>
    <tr>
      <td><label for="secondary-color-picker">Акцентен цвят:</label></td>
      <td><input type="color" id="secondary-color-picker" onchange="setCustomTheme('--secondary-color')" value="#C99818"></td>
    </tr>
    <tr>
      <td><label for="back-color-picker">Фонов цвят:</label></td>
      <td><input type="color" id="back-color-picker" onchange="setCustomTheme('--back-color')" value="#eef2c1"></td>
    </tr>
    <tr>
      <td><label for="surface-color-picker">Цвят на компонентите:</label></td>
      <td><input type="color" id="surface-color-picker" onchange="setCustomTheme('--surface-color')" value="#ffffff"></td>
    </tr>
    <tr>
      <td><label for="error-color-picker">Цвят за грешка:</label></td>
      <td><input type="color" id="error-color-picker" onchange="setCustomTheme('--error-color')" value="#be0000"></td>
    </tr>
    <tr>
      <td><label for="on-primary-picker">Цвят на текста (върху основен цвят):</label></td>
      <td><input type="color" id="on-primary-picker" onchange="setCustomTheme('--on-primary')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="on-secondary-picker">Цвят на текста (върху акцентен цвят):</label></td>
      <td><input type="color" id="on-secondary-picker" onchange="setCustomTheme('--on-secondary')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="on-background-picker">Цвят на текста (върху фона):</label></td>
      <td><input type="color" id="on-background-picker" onchange="setCustomTheme('--on-background')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="on-surface-picker">Цвят на текста (в компонентите):</label></td>
      <td><input type="color" id="on-surface-picker" onchange="setCustomTheme('--on-surface')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="on-error-picker">Цвят на текста (при цвят на грешка):</label></td>
      <td><input type="color" id="on-error-picker" onchange="setCustomTheme('--on-error')" value="#ffffff"></td>
    </tr>
    <tr>
      <td><label for="neutral-picker">Неутрален цвят:</label></td>
      <td><input type="color" id="neutral-picker" onchange="setCustomTheme('--neutral')" value="#dedede"></td>
    </tr>
    <tr>
      <td><label for="neutral-hover-picker">Неутрален цвят (при навлизане на мишката):</label></td>
      <td><input type="color" id="neutral-hover-picker" onchange="setCustomTheme('--neutral-hover')" value="#f0f0f0"></td>
    </tr>
    <tr>
      <td><label for="on-neutral-picker">Цвят на текста (при неутрален цвят):</label></td>
      <td><input type="color" id="on-neutral-picker" onchange="setCustomTheme('--on-neutral')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="th-color-picker">Цвят на заглавията на таблицата:</label></td>
      <td><input type="color" id="th-color-picker" onchange="setCustomTheme('--th-color')" value="#eee"></td>
    </tr>
    <tr>
      <td><label for="td-color-picker">Цвят на полетата в таблицата:</label></td>
      <td><input type="color" id="td-color-picker" onchange="setCustomTheme('--td-color')" value="#ffffff"></td>
    </tr>
    <tr>
      <td><label for="on-th-picker">Цвят на текста (в заглавията на таблицата):</label></td>
      <td><input type="color" id="on-th-picker" onchange="setCustomTheme('--on-th')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="on-td-picker">Цвят на текста (в полетата в таблицата):</label></td>
      <td><input type="color" id="on-td-picker" onchange="setCustomTheme('--on-td')" value="#000000"></td>
    </tr>
    <tr>
      <td><label for="border-color-picker">Цвят на границите:</label></td>
      <td><input type="color" id="border-color-picker" onchange="setCustomTheme('--border-color')" value="#ccc"></td>
    </tr>
  </table>
</div>

    </div>
  </div>
</main>
<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
