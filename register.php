Введите свои данные для регистрирации.
<br /><br />
<form method="POST" action='/master/api.php?action=insert'>
  <input name="name" type="text" size=50 placeholder="Фамилия Имя"/><br />
  <input name="age" type="text" size=50 placeholder="Возраст"/><br />
  <input name="email" type="text" size=50 placeholder="e-mail"/><br />
  <input name="city" type="text" size=50 placeholder="Ваш город"/><br />
  <input name="address" type="text" size=50 placeholder="Улица, дом"/><br />
  <input name="worktype" type="text" size=50 placeholder="Вы работаете в салоне или на дому"/><br />
  <input name="athome" type="text" size=50 placeholder="Выезд на дом"/><br />
  <input name="examplelink" type="text" size=50 placeholder="Ссылка на Ваш сайт"/>
  <input name="insert" type="submit" value="Сохранить"/>
 </form>
<style>
	td {
		border: 3px solid blue; 
	}
</style>
