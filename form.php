<link rel="stylesheet" href="style.css" type="text/css"/>
<div class = "body">
<form action="" method="POST">
  <div class = "main">
 <div class = "name"><label>Введите фио</label>
  <input name="fio" /></div>
  <div class = "email"><label>Введите электронную почту</label>
  <input name="email"/></div>
  <div class = "year"><label>Введите год</label>
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select></div>
  <div class = "gender"><label>Укажите пол:</label>
  <label>Мужской</label><input type="radio" checked="checked" name="gender" value="0" />
  <label>Женский</label><input type="radio" name="gender" value="1" />
  </div>
  
  <div class = "limbs"><label>Количество конечностей?</label>
  <label>4 рук</label>
  <input type="radio" checked="checked" name="limbs" value="4" />
  <label>8 ног</label>
  <input type="radio" name="limbs" value="8" />   
  <label>16 голов</label>       
  <input type="radio" name="limbs" value="16" /> 
  </div>

  <div class = "ability">
  <select name="abilities" multiple="multiple">
    <option select="selected" value="immrotality">Бессмертие</option>
    <option value="noclipping">Режим призрака</option>
    <option value="levitation">левитация</option>
  </select>
  </div>

  <div class = "biography"><label> Ваша биография:</label>
        <textarea name="biography"></textarea>
  </div>

  <p>
    <input type="checkbox" name="check1" /> С контрактом ознакомлен(а)
 </p>
  <input type="submit" value="отправить" />
  </div>
</form>
  </div>

