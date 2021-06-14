
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Refresh" content="5" />
<link href="style.css" rel="stylesheet">
</head>
<body>
<button class="accordion">Accordion 1</button>
<div class="txt">
  <p>Задача организации, в особенности же реализация намеченных плановых заданий играет важную роль в формировании направлений прогрессивного развития. Таким образом новая модель организационной деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
</div>

<button class="accordion">Accordion 2</button>
<div class="txt">
  <p>Не следует, однако забывать, что начало повседневной работы по формированию позиции в значительной степени обуславливает создание систем массового участия. Товарищи! новая модель организационной деятельности влечет за собой процесс внедрения и модернизации систем массового участия. Идейные соображения высшего порядка, а также консультация с широким активом позволяет выполнять важные задания по разработке модели развития.</p>
</div>

<button class="accordion">Accordion 3</button>
<div class="txt">
  <p>Равным образом укрепление и развитие структуры способствует подготовки и реализации форм развития. Задача организации, в особенности же начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации форм развития.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var txt = this.nextElementSibling;
    if (txt.style.maxHeight){
      txt.style.maxHeight = null;
    } else {
      txt.style.maxHeight = txt.scrollHeight + "px";
    } 
  });
}
</script> 

<?php
  function change($rst){
  while(preg_match('#\{([^{}]*)\}#',$rst) ){
    $rst = preg_replace_callback('#\{([^{}]*)\}#iUs','rst',$rst);
  }
  return $rst;
}
function rst($r){
  $r = explode('|',$r[1]);
  return $r[rand(0,sizeof($r)-1)];
}
echo change("{Пожалуйста|Просто} сделайте так, чтобы это {удивительное|крутое|
простое} тестовое предложение {изменялось {быстро|мгновенно} случайным 
образом|менялось каждый раз}.");
?>
</body>
</html>



