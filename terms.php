<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
if(isset($_SESSION['user'])){
    $user=unserialize($_SESSION['user']);
    if($user->getType()!=0){
        header("Location: manager.php");
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitcourses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/b2700bfb4b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
    <?php include("view/blocks/header.php"); ?>
    <section style="padding-top:100px">
        <div class="container">
            <h1 class="section-title">Умови оренди</h1>
<div id="content" class="col-sm-12">            
      <p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l2 level1 lfo2;tab-stops:49.65pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">I.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Преамбула</span></b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></p><p class="MsoNormal" style="margin: 0cm 0cm 0.0001pt; line-height: normal; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span style="font-family: &quot;Times New Roman&quot;;"><span lang="UK" style="font-size: 9pt;">Ці Правила прокату транспортного засобу, разом із Договором прокату автомобіля (далі за текстом – Договір прокату), а також Актом приймання-передачі автомобіля в прокат, актом повернення автомобіля після прокату, описами технічного стану автомобіля до і після прокату, прейскурантом цін, являють собою угоду між Сторонами (Наймодавець і Наймач) щодо передання автомобіля Наймачеві у володіння і користування за плату на певний строк. Договір прокату є договором приєднання. Договір укладається на умовах, визначених у типових формах, встановлених Наймодавцем, шляхом приєднання Наймача до запропонованого договору в цілому (мається на увазі дані Правила прокату,&nbsp;</span><span lang="UK" style="font-size: 9pt;">Договір прокату, акти, описи технічного стану автомобіля до та після прокату).<o:p></o:p></span></span></p><p class="MsoNormal" style="margin: 0cm 0cm 0.0001pt; line-height: normal; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt; font-family: &quot;Times New Roman&quot;;"><o:p>&nbsp;</o:p></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l2 level1 lfo2;tab-stops:49.65pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">II.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">У цих Правилах нижченаведені терміни вживаються в такому значенні:</span></b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">договір прокату автомобіля&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це письмова домовленість між Наймодавцем, який здійснює підприємницьку діяльність з передання речей у найм та Наймачем (фізична особа,&nbsp;<span style="letter-spacing: -0.15pt;">фізична особа-підприємець, юридична особа</span>), за умовами якої Наймодавець передає або зобов’язується передати легковий автомобіль у користування Наймачу за плату на певний строк, і який використовується для задоволення побутових невиробничих потреб. Договір прокату є публічним. Договір<span style="letter-spacing: 0.1pt;">прокату&nbsp;</span>є договором приєднання;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">додаткова угода до договору прокату&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це угода, яка продовжує строк дії основного договору, передбачає право Наймача на виїзд за кордон на орендованому транспортному засобі та умови оренди за умов перебування за межами України;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">наймодавець&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це особа, яка здійснює підприємницьку діяльність, що пов’язана із передання речей у найм;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">наймач&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це громадяни України, іноземці (особи, які не перебувають у громадянстві України і є громадянами (підданими) іншої держави або держав) та особи без громадянства, які в установленому законодавством чи міжнародним договором України порядку в’їхали в Україну та постійно або тимчасово проживають на&nbsp;<span style="letter-spacing: -0.15pt;">її&nbsp;</span>території, або тимчасово перебувають в Україні, а також фізичні особи-підприємці чи юридичні особи, зареєстровані у встановленому законом порядку та здійснюють свою підприємницьку діяльність на території України;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">акт приймання-передачі автомобіля в прокат&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це письмовий документ, підписаний Наймодавцем і Наймачем,&nbsp;<span style="letter-spacing: -0.15pt;">якій</span>підтверджує факт передачі автомобіля Наймачу в прокат (далі за текстом – акт приймання-передачі).&nbsp;<span style="letter-spacing: -0.15pt;">Акт приймання-передачі&nbsp;</span>містить інформацію про реєстраційні дані автомобіля, що передається в користування, строк прокату, розмір оплати, розмір депозиту (застави), місце та час передання автомобіля, опис технічного стану до прокату.<span style="letter-spacing: -0.15pt;">Акт приймання-передачі&nbsp;</span>є невід’ємною частиною договору прокату;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">акт повернення автомобіля після прокату&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– письмовий документ, підписаний Наймодавцем і Наймачем,&nbsp;<span style="letter-spacing: -0.15pt;">який&nbsp;</span>підтверджує факт повернення автомобіля Наймодавцю&nbsp;<span style="letter-spacing: -0.15pt;">після</span>прокату (далі за текстом – акт повернення).&nbsp;<span style="letter-spacing: -0.15pt;">Акт повернення&nbsp;</span>містить інформацію про місце і час повернення автомобіля, перелік пошкоджень (за наявності), опис технічного стану після прокату.&nbsp;<span style="letter-spacing: -0.15pt;">Акт повернення&nbsp;</span>є невід’ємною частиною договору прокату;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">депозит (застава)&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це спосіб забезпечення зобов’язань за договором прокату транспортного засобу,&nbsp;<span style="color: black; background-color: white; background-position: initial initial; background-repeat: initial initial;">є грошовою сумою, що видається Наймодавцю Наймачем у рахунок належних з нього за договором платежів, на підтвердження зобов’язання і на забезпечення його виконання;</span><b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">договір приєднання&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це договір, умови якого встановлені однією із сторін у формулярах або інших стандартних формах, який може бути укладений лише шляхом приєднання другої сторони до запропонованого договору в цілому. Друга сторона не може запропонувати свої умови договору;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">договір публічний&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це договір, в якому одна сторона-підприємець взяла на себе обов’язок здійснювати надання послуг кожному, хто до неї звернеться;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">доба</span></i></b><span lang="UK" style="font-size: 9pt;">– це проміжок часу, що дорівнює 24 (двадцяти чотирьом) годинам. За договором прокату відлік доби (двадцяти чотирьох годин) розпочинається з часу складання сторонами акту приймання-передачі;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">мінімальний</span></i></b><span lang="UK" style="font-size: 9pt;">строк прокату – найменший проміжок часу, на який Наймодавець може передати у платне користування легковий автомобіль Наймачу. Мінімальний строк прокату становить одну добу;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">тариф&nbsp;</span></i></b><span lang="UK" style="font-size: 9pt;">– це вартість послуги користування транспортним засобом певної марки (моделі) за певний строк. Тариф включає в себе страхування, комплектацію автомобіля шинами відповідно до сезону, кілометри пробігу та витрати по утриманню автомобіля у належному технічному стані. Пальне не включається до вартості послуги користування автомобілем. Тарифи на послуги прокату встановлюються у відповідному прейскуранті, затвердженому Наймодавцем. Ціни на прокат можуть переглядатися Наймодавцем в залежності від зміни факторів, які впливають на процес формування ціни на даний вид послуг;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">транспортний засіб</span></i></b><span lang="UK" style="font-size: 9pt;">(далі за текстом – автомобіль, транспортний засіб або предмет прокату) – автомобіль, який за своєю конструкцією та обладнанням призначений для перевезення пасажирів з кількістю місць для сидіння не більше ніж дев’ять з місцем водія включно;<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l1 level1 lfo1;tab-stops:42.55pt"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt;"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><b><i><span lang="UK" style="font-size: 9pt;">сайт</span></i></b><span lang="UK" style="font-size: 9pt;">– це відкритий для вільного візуального ознайомлення, публічно доступний веб-сайт, який належить Наймодавцю, розташований в мережі Інтернет за адресою: prokat.in.ua.<b><o:p></o:p></b></span></p><p class="MsoListParagraph" style="margin: 0cm 0cm 0.0001pt; text-align: justify; text-indent: 35.45pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none;"><b><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></b></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l2 level1 lfo2;tab-stops:42.55pt 2.0cm"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">III.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Предмет Договору прокату<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">3.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У порядку та на умовах, визначених цими Правилами, Договором прокату автомобіля, Наймодавець передає або зобов’язується передати, а Наймач приймає у строкове платне користування транспортний засіб (далі за текстом – транспортний засіб, автомобіль, предмет прокату). Предметом прокату є обраний Наймачем з наявного у Наймодавця автомобільного парку транспортний засіб марки (моделі), який в повній мірі відповідає вимогам Наймача. Цільове призначення предмета прокату: автомобіль повинен використовуватися Наймачем для задоволення побутових невиробничих потреб. Територія поїздок визначається адміністративно-територіальними межами України (якщо інше не погоджене додатковою угодою), окрім території Луганської і Донецької областей,&nbsp;<span style="letter-spacing: -0.15pt;">АР&nbsp;</span>Крим та Чорнобильської зони відчуження</span><span lang="UK" style="font-size: 9pt;">.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">IV.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Порядок передання та повернення предмету прокату. Умови прокату<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Право користування предметом прокату у Наймача настає після ознайомлення з цими Правилами прокату транспортних засобів, прейскурантом&nbsp;<span style="letter-spacing: -0.15pt;">цін,&nbsp;</span>підписання Договору та акту приймання-передачі, що є невід’ємною частиною Договору прокату, а також внесення оплати за весь період прокату і депозиту (застави) як забезпечення виконання зобов’язань по такому договору.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Строк прокату, розмір та умови оплати за користування предметом прокату, реєстраційні дані автомобіля, адреса передачі та повернення предмета прокату, розмір депозиту (застави) погоджуються сторонами в акті приймання-передачі. Автомобіль передається Наймачу одразу після підписання договору, акту, здійснення оплати та внесення депозиту (застави) або у інший строк, встановлений сторонами в акті.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">Місце&nbsp;</span><span lang="UK" style="font-size: 9pt;">передання та повернення автомобіля: місто Хмельницький, вул. Зарічанська, буд. 9/1. За попередньою усною домовленістю сторін, автомобіль може бути переданий в прокат або прийнятий&nbsp;<span style="letter-spacing: -0.15pt;">після</span>прокату в іншому, погодженому Сторонами, місці. В такому випадку, витрати по доставці транспортного засобу до визначеного місця або його повернення, оплачуються Наймачем окремо, що також зазначається в акті. Наймодавець перед укладанням договору прокату погоджує з Наймачем вартість послуги трансферу та вказує&nbsp;<span style="letter-spacing: -0.15pt;">її&nbsp;</span>в акті приймання-передачі автомобіля.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">При&nbsp;</span><span lang="UK" style="font-size: 9pt;">переданні автомобіля в прокат Наймодавцем проводиться опис технічного стану автомобіля, наявності комплектуючих, пошкоджень, показників приладів обліку. Справність автомобіля, зовнішній вигляд кузова, комплектація, кількість пального, інші параметри автомобіля, що передається у прокат, повинні бути перевірені Наймачем в присутності Наймодавця та зафіксовані в акті приймання-передачі. Підписанням акту Наймач підтверджує, що отримав у користування автомобіль в належному технічному стані, повністю укомплектованим, з чистим кузовом та салоном, без ознак пошкоджень, окрім тих, що вказані в описі. Після отримання транспортного засобу в&nbsp;<span style="letter-spacing: 0.1pt;">прокат&nbsp;</span>претензії з боку Наймача щодо наявних помітних дефектів не приймаються.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.5.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Автомобіль передається в прокат в чистому вигляді. Наймач зобов’язаний повернути автомобіль по закінченні строку прокату також в чистому вигляді. В іншому випадку, Наймодавець утримає вартість мийки автомобіля&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>суми депозиту (застави), а акт повернення автомобіля буде підписаний Наймодавцем&nbsp;<span style="letter-spacing: -0.15pt;">після&nbsp;</span>здійснення мийки автомобіля та огляду на предмет можливої наявності дрібних пошкоджень та/або подряпин. Кількість пального у баку при поверненні повинна співпадати&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>кількістю при прийманні автомобіля в прокат&nbsp;</span><span lang="UK" style="font-size: 9pt;">(допустима похибка в межах<span style="letter-spacing: -0.15pt;">5%).</span></span><b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.6.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Документи, які необхідні для укладання договору прокату: посвідчення водія, документ, що посвідчує особу, довідка з реєстраційним номером облікової картки платника податків (ідентифікаційний код),&nbsp;<span>&nbsp;</span>у випадку, якщо такий присвоювався.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">4.6.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><i><span lang="UK" style="font-size: 9pt;">для громадян України:<o:p></o:p></span></i></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">- паспорт громадянина України;<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">- довідка з реєстраційним номером облікової картки платника податків (ідентифікаційний код). У випадку, якщо особа через свої релігійні чи інші переконання відмовилась&nbsp;<span style="letter-spacing: -0.15pt;">від</span>прийняття реєстраційного номера облікової картки платника податків, такими особами подається паспорт з відповідною відміткою.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.6.2.&nbsp;<i>для іноземців та осіб без громадянства</i><b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><b><span lang="UK" style="font-size: 9pt;">-&nbsp;</span></b><span lang="UK" style="font-size: 9pt;">документ,&nbsp;<span style="letter-spacing: -0.15pt;">що&nbsp;</span>посвідчує особу (один&nbsp;<span style="letter-spacing: 0.8pt;">з&nbsp;</span>документів): паспортний документ іноземця – документ, виданий уповноваженим органом іноземної держави або статутною організацією ООН, що підтверджує громадянство іноземця, посвідчує особу іноземця або особу без громадянства, надає право на в’їзд або виїзд з держави і визнається Україною.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.6.3.&nbsp;<i>для наймачів-юридичних осіб чи фізичних осіб-підприємців:<o:p></o:p></i></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">- наказ про призначення керівником юридичної особи або належно засвідчена копія виписки з&nbsp;</span><span lang="UK" style="font-size: 9pt;">Єдиного державного реєстру юридичних осіб, фізичних осіб-підприємців та громадських формувань;<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">- довіреність для представника, видана уповноваженим органом юридичної особи.</span><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.6.4.&nbsp;<i>Пред’явлення посвідчення водія&nbsp;</i>є обов’язковим для всіх Наймачів.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.7.Наймодавець залишає за собою право відмовити особі, яка звернулась за послугою прокату, у випадку не надання документу з вищевказаного переліку, або якщо у наданих документах виявлені ознаки&nbsp;<span style="letter-spacing: -0.15pt;">їх</span>підробки. Також Наймодавець відмовляє Наймачу в укладенні договору, якщо Наймач вчинив правопорушення, за яке передбачено накладення адміністративного стягнення у вигляді позбавлення права керування транспортним засобом.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.8. Наймачем може бути особа, що досягла 23-річного віку, має дійсне посвідчення на право керування транспортним засобом відповідної категорії і стаж водіння не менше 2-х&nbsp;<span style="letter-spacing: -0.15pt;">років</span>.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 9pt;">4.9. Повернення автомобіля Наймодавцю здійснюється після закінчення строку прокату у місці, вказаному в акті. У випадку затримання Наймачем повернення предмету прокату більше, ніж на 2 години без поважних причин, наступна доба враховується повністю і оплачується Наймачем відповідно до тарифу, вказаного в акті приймання-передачі транспортного засобу.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:49.65pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">V.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Депозит (застава). Умови забезпечення виконання зобов’язань за договором прокату<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">5.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">В силу&nbsp;<span style="letter-spacing: -0.6pt;">депозиту (</span>застави) Наймодавець має право у разі невиконання Наймачем зобов’язання, забезпеченого депозитом (заставою), одержати компенсацію за рахунок внесених Наймачем в якості застави грошових коштів.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">5.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Предмет депозиту (застави): грошові кошти Наймача. Строком депозиту (застави) є строк фактичного користування автомобілем, визначений в акті приймання-передачі до договору прокату, за умови врахування особливостей роботи банківських установ (в разі оплати безготівковим розрахунком), клієнтами яких є Сторони, та стану предмета прокату.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">5.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Депозитом (заставою) забезпечується зобов’язання Наймача перед Наймодавцем по договору прокату, а саме:<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l0 level1 lfo3;tab-stops:42.25pt"><!--[if !supportLists]--><span lang="UK" style="font-size:12.0pt;letter-spacing:-1.5pt;mso-font-width:99%"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;"></span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">по оплаті послуг користування автомобілем (у випадку прострочення повернення автомобіля або продовження строку користування автомобілем за умови повідомлення Наймодавця і за його згодою, плата за користування автомобілем утримується&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>суми застави, але не більше, ніж за 1 (одну) добу; наступний період користування автомобілем оплачується в загальному порядку, при цьому Наймач здійснює доплату депозиту (застави) з метою відновлення її в первісному розмірі);<o:p></o:p></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l0 level1 lfo3;tab-stops:42.25pt"><!--[if !supportLists]--><span lang="UK" style="font-size:12.0pt;letter-spacing:-1.5pt;mso-font-width:99%"><span style="mso-list:Ignore">-<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;"></span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">по поверненню автомобіля після прокату в стані, в якому автомобіль був переданий в користування з урахуванням нормального зносу&nbsp;<span style="letter-spacing: 0.15pt;">(у</span>випадку повернення Наймачем автомобіля&nbsp;<span style="letter-spacing: -0.25pt;">із</span>пошкодженнями, або при втраті комплектуючих, додаткового обладнання або документації на автомобіль, вартість відновлення стану автомобіля чи відновлення (отримання) документів, утримується&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>суми&nbsp;<span style="letter-spacing: -0.8pt;">депозиту (</span>застави). Якщо вартість відновлення стану транспортного засобу до такого, в якому він передавався Наймачу, буде вищою, ніж розмір депозиту (застави), то Наймач доплачує суму, якої недостає).<o:p></o:p></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">5.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Депозит (застава) вноситься Наймачем Наймодавцю&nbsp;<span style="letter-spacing: -0.2pt;">під&nbsp;</span>час укладання договору прокату в грошовому вигляді у формі, погодженій Сторонами (готівкова або безготівкова форма). Депозит (застава) являє собою фіксовану грошову суму, розмір якої залежить&nbsp;<span style="letter-spacing: -0.15pt;">від&nbsp;</span>марки обраного автомобіля. Безготівкова форма застави передбачає блокування визначеної грошової суми&nbsp;<span style="letter-spacing: 0.1pt;">на&nbsp;</span>банківській картці Наймача за його згодою на строк фактичного користування автомобілем (преавторизація). Після повернення автомобіля та виконання всіх обов’язків по договору прокату з боку Наймача, Наймодавець здійснює розблокування грошових коштів на суму преавторизації у відповідності до правил, встановлених банком Наймодавця. Депозит (застава) також може&nbsp;<span style="letter-spacing: -0.2pt;">бути&nbsp;</span>внесений в готівковій формі безпосередньо Наймодавцю. Юридичні особи суму застави перераховують на поточний рахунок Наймодавця. Після закінчення строку прокату і повернення автомобіля, а також виконання Наймачем всіх умов договору сума&nbsp;<span style="letter-spacing: 0.55pt;">депозиту (</span>застави) повертається останньому в день повернення автомобіля у&nbsp;</span><span lang="UK" style="font-size: 9pt;">спосіб, яким такий депозит (застава) були внесені.</span><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">5.5.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Депозит (застава) не повертається (або повертається частково) у наступних випадках: відмови Наймача компенсувати завдані внаслідок користування автомобілем збитки (в т.ч. втрата комплектуючих, документів на автомобіль); у випадку неповідомлення про втрату чи пошкодження предмету прокату; у випадку передання автомобіля третім особам без згоди Наймодавця; у випадку, якщо сума страхової виплати менша,&nbsp;<span style="letter-spacing: -0.2pt;">ніж&nbsp;</span>розмір заподіяних збитків; за затримку внесення плати за користування автомобілем; у випадку зміни Наймачем зовнішнього вигляду транспортного засобу, зняття розпізнавальних позначок Наймодавця, додавання власних декоративних елементів на кузові чи в салоні транспортного засобу, а також з інших підстав, вказаних у договорі прокату чи таких, що випливають із звичаїв ділового обороту.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 6.8pt 0.0001pt 0cm; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">VI.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Оплата. Порядок розрахунків<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size: 9pt; background-color: yellow;">6.1.<span style="font-style: normal; font-variant-caps: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Вартість послуг прокату визначається, виходячи&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>тарифів, затверджених Наймодавцем на момент укладення Договору згідно&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>Прейскурантом&nbsp;<span style="letter-spacing: -0.15pt;">цін.&nbsp;</span>Тарифи є доступними для загального ознайомлення, зокрема, на сайті Наймодавця. Тарифи на прокат автомобіля включають в себе страхування, комплектацію автомобіля шинами відповідно до сезону, кілометри пробігу&nbsp;<span style="letter-spacing: 0.1pt;">та&nbsp;</span>витрати по утриманню автомобіля у належному технічному стані. Загальна вартість послуг визначається в акті приймання-передачі автомобіля. Наймачу за додаткову оплату може передаватися в користування GPS-навігатор, дитяче сидіння.</span><b><span lang="UK" style="font-size: 9pt; background-color: yellow; background-position: initial initial; background-repeat: initial initial;"><o:p></o:p></span></b></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">6.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">При передачі автомобіля Наймачу останній вносить повну передоплату послуг прокату автомобіля за погоджений строк, а також депозит (заставу) в розмірі, передбаченому в акті приймання-передачі.</span><b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></b></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">6.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Оплата може відбуватися в готівковій або безготівковій формі.</span><b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></b></p><p class="TableParagraph" style="margin: 0cm 6.8pt 0.0001pt 0cm; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><b><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></b></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">VII.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Права та обов’язки Наймача<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><i><span lang="UK" style="font-size: 9pt;">Права Наймача:</span></i><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.1.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач має право використовувати автомобіль цілодобово, тільки на території України, якщо інше не вказано у додатковій угоді (право перетину кордону) у відповідності до умов, викладених у Договорі прокату. Пробіг автомобіля на добу обмежується 250 км.;</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.1.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач не має права передавати автомобіль в піднайом, передавати автомобіль третім особам, без письмової згоди Наймодавця;</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.1.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач має право відмовитись від договору прокату і повернути автомобіль Наймодавцеві у будь-який час (в межах робочого часу наймодавця), попередивши при цьому Наймодавця не менше,&nbsp;<span style="letter-spacing: -0.2pt;">ніж&nbsp;</span>за 24 (двадцяти чотири) години до фактичного повернення предмету прокату.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.1.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач має право на отримання від Наймодавця повної інформації стосовно умов прокату та технічної експлуатації автомобіля.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><i><span lang="UK" style="font-size: 9pt;">Обов’язки Наймача:</span></i><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний прийняти автомобіль по акту приймання-передачі в термін, обумовлений сторонами Договору прокату, перевірити загальний стан предмета прокату і попередити Наймодавця про виявлені дефекти, повернути предмет прокату по закінченню строку, вказаному в акті&nbsp;<span style="letter-spacing: 0.1pt;">приймання-</span>передачі, в стані та комплектності, в якому автомобіль був прийнятий (із врахуванням нормального зносу). Якщо Наймач у момент передання автомобіля у його володіння не перевірить його справність, предмет прокату вважається таким, що переданий у належному стані.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний оплатити користування предметом прокату своєчасно та у&nbsp;<span style="letter-spacing: 0.1pt;">повному&nbsp;</span>обсязі, а також внести&nbsp;<span style="letter-spacing: -0.15pt;">депозит (</span>заставу).</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний використовувати предмет прокату за цільовим призначенням, тобто виключно для задоволення&nbsp;</span><span lang="UK" style="font-size: 9pt;">побутових невиробничих цілей:</span><span lang="UK" style="font-size: 9pt;">не використовувати у спортивних змаганнях, для буксирування будь-яких інших автомобілів чи пересування з причепом, в якості таксі, для тест-драйву, а також для навчання, не використовувати&nbsp;<span style="letter-spacing: 0.1pt;">на&nbsp;</span>дорогах, які не мають твердого покриття.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний не допускати управління автомобілем в стані алкогольного, наркотичного, токсичного сп’яніння, або у хворобливому стані, при перевтомі, а також під впливом лікарських препаратів, що знижують швидкість реакції та уваги. Куріння в салоні автомобіля категорично заборонено.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.5.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач несе витрати, пов’язані з експлуатацією автомобіля та щоденним підтриманням його в робочому стані (мийка автомобіля, заправка паливом, заправка рідиною для омивання скла, підкачка шин, балансування коліс, стоянка та інше). Наймач зобов’язаний використовувати пальне належного виду та високої якості.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.6.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний забезпечити збереження автомобіля з моменту його отримання і до моменту його повернення Наймодавцю.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.7.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний негайно повідомити Наймодавця (не пізніше однієї години з моменту виявлення факту) про втрату чи пошкодження предмета прокату, і діяти в таких випадках у відповідності з діючим законодавством України, Договором прокату та вказівками, отриманими від Наймодавця. У випадку виявлення технічних несправностей&nbsp;<span style="letter-spacing: -0.2pt;">під&nbsp;</span>час користування – також повідомити про це Наймодавця. У випадку пошкодження предмета прокату Наймачу забороняється без згоди Наймодавця проводити розбирання та/або ремонт автомобіля, також змінювати конструкцію автомобіля та параметри виробника,&nbsp;<span style="letter-spacing: -0.15pt;">крім&nbsp;</span>робіт пов’язаних з необхідністю для його транспортування. Наймачу забороняється робити тюнінг (внутрішній, зовнішній, технічний) автомобіля. У випадку порушення цієї умови, Наймач компенсує завдані Наймодавцю збитки (неякісний ремонт, зняття елементів тюнінгу).</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.8.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний у випадку продовження користування автомобілем повідомити про це Наймодавця не пізніше однієї доби до закінчення діючого Договору, узгодити новий строк користування предметом прокату та поновити відповідні документи, а також своєчасно оплатити користування предметом прокату на новий строк. У випадку несвоєчасного повідомлення Наймач не має переважного права на подальший прокат автомобіля. Наймодавець в такому випадку має право надати в прокат інший автомобіль або відмовити в продовженні послуги прокату автомобіля.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.9.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язаний повідомити про дострокове повернення предмета прокату та розірвання Договору у робочий час Наймодавця, в строк, визначений п. 7.1.3.&nbsp;<span style="color: rgb(17, 17, 17);">Плата за прокат автомобіля, що сплачена Наймачем за весь строк&nbsp;<span style="letter-spacing: -0.15pt;">договору,&nbsp;</span>перераховується<span>&nbsp;&nbsp;</span>і повертається в сумі відповідно до тривалості фактичного користування автомобілем з утриманням 30 (тридцяти) відсотків&nbsp;<span style="letter-spacing: -0.15pt;">від&nbsp;</span>суми повернення&nbsp;<span style="letter-spacing: -0.15pt;">або&nbsp;</span></span>перерахунок здійснюється, виходячи з ціни добового прокату, яка встановлена Наймодавцем для періоду, впродовж якого Наймач фактично користувався автомобілем, з урахуванням діючого курсу долара США до гривні на дату перерахунку. Оплачена та невикористана сума за дні прокату при достроковому поверненні автомобіля повертається Наймачу з утриманням відповідної суми перерахунку з суми повернення.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.10.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач зобов’язується неухильно дотримуватись правил дорожнього руху України, а&nbsp;<span style="letter-spacing: -0.2pt;">також&nbsp;</span>передбаченого швидкісного режиму.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.11.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">По&nbsp;</span><span lang="UK" style="font-size: 9pt;">закінченню дії Договору Наймач зобов’язаний повернути автомобіль у чистому вигляді з кількістю палива в паливному баку, рівною кількості при прийманні автомобіля&nbsp;</span><span lang="UK" style="font-size: 9pt;">(допустима похибка в межах&nbsp;<span style="letter-spacing: -0.2pt;">5 %).&nbsp;</span></span><span lang="UK" style="font-size: 9pt;">Автомобіль повертається в справному технічному стані з врахуванням нормального зносу, який виник в період експлуатації. Під нормальним зносом автомобіля розуміється зменшення вартості автомобіля, природний знос окремих вузлів та агрегатів, за період знаходження автомобіля у користуванні Наймача, при умові належної експлуатації автомобіля, що виключає випадки, які спричинили незапланований ремонт чи відновлення автомобіля.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">7.2.12.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймачу забороняється використовувати автомобіль на тимчасово окупованій території України: сухопутна територія Автономної Республіки Крим та міста Севастополя, а також території проведення ООС (Луганська і Донецька області), та Чорнобильській зоні відчуження – далі за текстом території.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin: 0cm 6.8pt 0.0001pt 0cm; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><i><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">VIII.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Права та обов’язки Наймодавця</span></b><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><i><span lang="UK" style="font-size: 9pt;">Права Наймодавця:</span></i><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.1.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймодавець має право на відшкодування збитків від Наймача у випадку повернення автомобіля в неповній комплектності, при пошкодженні компонентів (складових частин) автомобіля, також втрати документації (а саме: свідоцтва про реєстрацію транспортного засобу, оригіналу полісу обов’язкового страхування цивільно-правової відповідальності власників транспортних засобів (ОСЦПВВТЗ), ін. документів) на автомобіль, або повернення автомобіля з пошкодженим обладнанням, в розмірі суми, необхідної для відновлення комплектності, стану автомобіля. Перелік пошкоджень (втрат) зазначається акті приймання-передачі автомобіля. Наймач зобов’язаний відшкодувати&nbsp;<span style="letter-spacing: -0.15pt;">їх</span>при поверненні автомобіля, в іншому випадку, сума компенсації утримується&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>суми&nbsp;<span style="letter-spacing: 0.8pt;">депозиту(</span>застави).<span>&nbsp;&nbsp;</span>Наймодавець має право розірвати Договір прокату в односторонньому порядку та вимагати повернення автомобіля у випадку, якщо Наймач порушує правила експлуатації автомобіля, не оплатив користування автомобілем, не дотримується умов Договору, перебуває за межами дозволеної території, у випадку повідомлення недостовірних даних про себе при укладанні Договору прокату, а також з інших підстав, що є істотними і можуть спричинити в майбутньому збиток для&nbsp;</span><span lang="UK" style="font-size: 9pt;">Наймодавця. В такому випадку Наймодавець або уповноважені ним особи в односторонньому порядку без будь-якого попереднього повідомлення, має право вилучити предмет прокату незалежно від його місця знаходження. Депозит (застава) та сума за невикористані дні прокату в даному випадку Наймачу не повертаються.<i><o:p></o:p></i></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.1.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймодавець має право відмовити Наймачу в продовженні Договору.<i><o:p></o:p></i></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><i><span lang="UK" style="font-size: 9pt;">Обов’язки Наймодавця:<o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймодавець зобов’язується передати Наймачу автомобіль в технічно справному стані, з відповідними документами на право користування ним. Факт передачі і стан автомобіля зазначається в акті приймання-передачі. Наймодавець зобов’язується надавати Наймачу повну та достовірну інформацію щодо умов прокату, стану автомобіля, а також іншу інформацію, що стосується предмета прокату, його технічної експлуатації.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймодавець зобов’язаний проводити технічне обслуговування, необхідні ремонтні роботи, регулярні технічні огляди предмета прокату за свій рахунок, якщо не доведе, що пошкодження предмета прокату сталося з вини Наймача.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">При виявленні непридатності предмета прокату до експлуатації не з вини Наймача, Наймодавець зобов’язується здійснити його заміну на інший автомобіль по класу та вартості, не нижче,&nbsp;<span style="letter-spacing: -0.2pt;">ніж&nbsp;</span>предмет прокату.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймодавець зобов’язаний&nbsp;<span style="letter-spacing: -0.2pt;">до&nbsp;</span>передачі предмета прокату Наймачеві застрахувати цивільно-правову відповідальності власників транспортних засобів в порядку, встановленому чинним законодавством України. Автомобілі, що передаються в прокат, застраховані<span style="letter-spacing: 0.5pt;">.</span></span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level3 lfo2;tab-stops:42.25pt 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">8.2.5.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">Після&nbsp;</span><span lang="UK" style="font-size: 9pt;">повернення автомобіля та належного виконання Наймачем всіх умов договору прокату, Наймодавець зобов’язується повернути депозит (заставу) Наймачу у спосіб, яким депозит (застава)&nbsp;<span style="letter-spacing: -0.2pt;">була&nbsp;</span>внесена.</span><i><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></i></p><p class="TableParagraph" style="margin: 0cm 6.8pt 0.0001pt 0cm; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></p><p class="TableParagraph" style="margin-top:0cm;margin-right:6.8pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph;
text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:42.25pt 2.0cm"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">IX.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Відповідальність Сторін</span></b><span lang="UK" style="font-size: 9pt;"><o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач за власний рахунок і в повному обсязі несе витрати, пов’язані&nbsp;<span style="letter-spacing: 0.1pt;">зі&nbsp;</span>шкодою, заподіяною його життю і здоров’ю, а також життю і здоров’ю пасажирів, що знаходилися в автомобілі в період&nbsp;<span style="letter-spacing: 0.1pt;">дії&nbsp;</span>Договору прокату, а також за збиток, нанесений&nbsp;<span style="letter-spacing: -0.15pt;">їх&nbsp;</span>багажу.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку прострочення внесення плати за користування предметом прокату Наймач зобов’язаний сплатити Наймодавцю пеню в розмірі 10 (десяти) % вартості добового прокату транспортного засобу за кожний день прострочення. Пеня нараховується з наступної неоплаченої доби.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач несе повну матеріальну відповідальність перед Наймодавцем за будь-який збиток, заподіяний предмету прокату у випадках, встановлених цими Правилами і договором прокату.&nbsp;<span style="letter-spacing: -0.2pt;">Під&nbsp;</span>збитками розуміються втрати, яких Наймодавець зазнав у зв’язку&nbsp;<span style="letter-spacing: 0.1pt;">зі&nbsp;</span>знищенням, викраденням або пошкодженням предмету прокату або його окремих частин (деталей, комплектуючих), а також витрати, які Наймодавець мусить зробити для відновлення свого порушеного права. До збитків також відносяться доходи, які Наймодавець&nbsp;<span style="letter-spacing: -0.15pt;">міг&nbsp;</span>би реально одержати за звичайних обставин, якби його право не було порушено. Протиправність поведінки Наймача (винні дії) полягає в порушенні обов’язків, передбачених цими Правилами прокату транспортних засобів Договором прокату, порушенні Правил дорожнього&nbsp;<span style="letter-spacing: -0.15pt;">руху,&nbsp;</span>що призвели&nbsp;<span style="letter-spacing: -0.2pt;">до дорожньо-транспортної пригоди,&nbsp;</span>та умов договору страхування транспортного засобу. Порушенням зобов’язання є його невиконання або виконання з порушенням умов, визначених змістом зобов’язання (неналежне виконання). Якщо внаслідок дій Наймача, що призвели до збитків (у вигляді пошкодження автомобіля внаслідок ДТП, дій третіх осіб, викрадення, пожежі тощо), і при обов’язковій умові дотримання і виконання всіх умов договору прокату,&nbsp;<o:p></o:p></span><b style="text-indent: 35.45pt; font-size: 12px;"><span style="font-size: 9pt; line-height: 13.8px;">Наймач</span></b><span style="text-indent: 35.45pt; font-size: 9pt; line-height: 13.8px;">&nbsp;несе повну матеріальну відповідальність за будь-який збиток, заподіяний Автомобілю Наймодавця, у таких розмірах</span><span lang="UK" style="text-indent: 35.45pt; font-size: 9pt;">&nbsp;-</span><span lang="UK" style="text-indent: 35.45pt; font-size: 9pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;</span></span><i style="font-size: 11pt; text-indent: 35.45pt;"><u><span lang="UK" style="font-size: 9pt;">якщо збиток заподіяний з вини Наймача</span></u></i><span lang="UK" style="text-indent: 35.45pt; font-size: 9pt;">:</span></p><p class="MsoListParagraphCxSpFirst" style="margin: 0cm; text-align: justify; text-indent: 35.45pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;;"><span lang="UK" style="font-size: 9pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;</span></span><span lang="UK" style="font-size: 9pt;">при втраті Транспортного засобу чи пошкодженнях, після яких автомобіль не підлягає відновленню, –&nbsp;<b>Наймач</b>&nbsp;відшкодовує Наймодавцю 5 (<span style="font-style: italic;">п'ять</span>) відсотків від дійсної вартості транспортного засобу та усю суму депозиту (застави);<b><o:p></o:p></b></span></span></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm; text-align: justify; text-indent: 35.45pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;;"><span lang="UK" style="font-size: 9pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;</span></span><span lang="UK" style="font-size: 9pt;">за всіма іншими страховими випадками –&nbsp;<b>Наймач</b>&nbsp;несе відповідальність перед Наймодавцем на усю суму депозиту (застави).<b><o:p></o:p></b></span></span></p><p class="MsoListParagraphCxSpLast" style="margin: 0cm; text-align: justify; text-indent: 35.45pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;;"><span lang="UK" style=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">-</span><span style="font-size: 7pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;</span></span><i><u><span lang="UK" style="font-size: 9pt;">якщо збиток заподіяний не з вини Наймача</span></u></i><b><span lang="UK" style="font-size: 9pt;">&nbsp;</span></b><span lang="UK" style="font-size: 9pt;">(за умови фіксування цього працівниками поліції у відповідних документах),&nbsp;<b>Наймач</b>&nbsp;відшкодовує Наймодавцю франшизу в розмірі 6000 гривень.&nbsp;</span></span></p><p class="MsoListParagraphCxSpLast" style="margin: 0cm; text-align: justify; text-indent: 35.45pt; line-height: normal;"><span style="font-family: &quot;Times New Roman&quot;;"><span lang="UK" style="font-size: 9pt;">Якщо Наймач, після настання страхового випадку ,не звернувся в поліцію і страхову компанію , він несе повну матеріальну відповідальність в розмірі :- суми депозиту, відновлення автомобіля на СТО Наймодавця та штраф розміром 30 % від вартості транспортного засобу.</span></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У разі завдання шкоди предмету прокату внаслідок порушення правил його експлуатації чи інших умисних або ненавмисних&nbsp;<span style="letter-spacing: -0.15pt;">дій</span>Наймача, втрати комплектуючих чи додаткового устаткування, ушкодження, що викликані неякісними паливо-мастильними матеріалами і рідинами, ушкодження покришок і колісних дисків, та інших вузлів і агрегатів предмета прокату, Наймач відшкодовує Наймодавцю заподіяну цими діями шкоду в повному обсязі. Розмір компенсацій&nbsp;<span style="letter-spacing: 0.1pt;">за&nbsp;</span>втрату (пошкодження) комплектуючих елементів автомобіля зазначається в акті приймання-передачі і підлягає оплаті в день повернення автомобіля. Вказана сума або оплачується Наймачем окремо, або вираховується&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>суми депозиту (застави),&nbsp;<span style="letter-spacing: -0.15pt;">якщо розмір&nbsp;</span>збитків не перевищує таку суму.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.5.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку, якщо Наймач не повідомив Наймодавця у встановлений строк про подію ДТП або інший страховий випадок (викрадення,&nbsp;<span style="letter-spacing: -0.15pt;">дії&nbsp;</span>третіх осіб, інше), що стало наслідком отримання відмови страхової компанії здійснити виплату, або у випадках керування автомобілем в стані алкогольного, наркотичного чи токсичного сп’яніння, керування особою, що не визначена договором і не має посвідчення водія, при грубому порушенні Наймачем Правил дорожнього руху чи використання автомобіля не за цільовим призначенням, що також стало причиною відмови страхової компанії здійснити виплату, такий Наймач несе повну матеріальну відповідальність у розмірі заподіяних збитків.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.6.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач, з вини якого, предмет прокату знаходиться в ремонті, зобов’язується за вимогою Наймодавця відшкодувати останньому упущену вигоду, яка визначається сумою плати&nbsp;<span style="letter-spacing: 0.1pt;">за&nbsp;</span>користування автомобілем за кожну добу знаходження предмета прокату в ремонті. Витрати Наймодавця на транспортування автомобіля до СТО або в інше, вказане Наймодавцем місце, несе Наймач.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.7.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку настання ДТП, крадіжки та/або протиправних дій третіх осіб щодо автомобіля, Наймач повинен негайно протягом 1 (однієї) години повідомити про це Наймодавця, та у строк не пізніше 36 (тридцяти шести) годин з моменту настання такої події надати Наймодавцю оригінали отриманих у відповідних державних органах документів, що підтверджують настання такої події, а саме: первинну довідку про подію ДТП, або довідку підрозділу поліції про крадіжку автомобіля, або довідку від правоохоронних органів про&nbsp;<span style="letter-spacing: -0.2pt;">інші&nbsp;</span>протиправні дії щодо автомобіля,&nbsp;<span style="letter-spacing: 0.1pt;">які&nbsp;</span>є необхідними для отримання Наймодавцем страхового відшкодування, та заповнити заяву з вказівками обставин, що відбулися.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.8.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Р<span style="letter-spacing: -0.15pt;">озмір&nbsp;</span>збитку, нанесений предмету прокату оцінюється на СТО Наймодавця за розцінками спеціалізованих станцій. У випадку незгоди Наймача з сумою нанесених збитків, він звертається до експертної установи для визначення розміру збитків за власний рахунок. У випадку поломки автомобіля внаслідок ДТП, інших подій, що спричинили неможливість керування транспортним засобом, Наймач в обов’язковому порядку повідомляє Наймодавця про цей факт та отримує від останнього інструкції щодо плану дій, які є обов’язковими до виконання.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.9.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Наймач несе відповідальність за порушення Правил дорожнього руху та сплачує відповідні штрафи. Порушення Наймачем правил дорожнього руху, які зафіксовані в автоматичному режимі протягом строку, який припадає на період дії договору прокату з таким Наймачем, підлягає&nbsp;<span style="letter-spacing: 0.2pt;">оплаті</span>порушником разом з&nbsp;<span style="letter-spacing: -0.15pt;">усіма&nbsp;</span>нарахованими штрафними санкціями. Наймодавець у випадку отримання постанови про адміністративне правопорушення передає відповідні дані Наймача разом&nbsp;<span style="letter-spacing: -0.25pt;">із&nbsp;</span>договором прокату для вирішення питання про накладення штрафу на порушника, а також проводить всі необхідні дії по&nbsp;<span style="color: rgb(26, 26, 26);">доведенню факту, що в момент правопорушення автомобілем керував Наймач. У випадку о</span>формлення поліцейськими матеріалів про адміністративні правопорушення у&nbsp;<span style="letter-spacing: 0.1pt;">сфері&nbsp;</span>забезпечення безпеки дорожнього руху, зафіксовані не в автоматичному режимі, Наймач зобов’язаний передати в день повернення автомобіля відповідні протоколи Наймодавцю та сплатити штраф. Наймач зобов’язаний не перевищувати швидкісний режим руху понад встановлену ПДР межу.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.10.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Якщо Наймач своєчасно не виконує обов’язки щодо повернення предмета прокату після закінчення строку дії Договору або його дострокового розірвання, більше,&nbsp;<span style="letter-spacing: -0.2pt;">ніж&nbsp;</span>1(одну) добу, він зобов’язаний сплатити Наймодавцю неустойку у розмірі подвійної плати за користування предметом прокату за весь час прострочення.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.11.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку закінчення строку прокату та неповідомлення Наймачем про місцезнаходження автомобіля Наймодавець має право заявити про викрадення автомобіля до компетентних органів.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.12.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Для захисту від незаконного заволодіння та несанкціонованого виїзду за межі дозволеної території, автомобіль обладнано системою GPS моніторингу.<o:p></o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:2.0cm 63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">9.13.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку порушення Наймачем умови щодо перебування предмету прокату на територіях, визначених п.п. 3.1., 7.2.13 цих Правил, Наймодавець без будь-яких попереджень має право достроково в односторонньому порядку розірвати договір прокату та негайно повернути автомобіль. При цьому, Наймачу не повертаються суми за невикористані дні прокату та сума депозиту (застави). Наймач також зобов’язується відшкодувати всі інші збитки, які виникли у Наймодавця в зв’язку із порушенням Наймачем умови щодо перебування предмету прокату на вказаній території.<o:p></o:p></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify; text-indent: 35.45pt;"><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:49.65pt"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">X.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Інші умови<o:p></o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">10.1.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Усі суперечки, які виникають між Сторонами в ході виконання Договору, вирішуються шляхом переговорів. У випадку недосягнення згоди&nbsp;<span style="letter-spacing: -0.15pt;">спір&nbsp;</span>вирішується відповідно до діючого законодавства України в&nbsp;<span style="letter-spacing: -0.15pt;">суді.</span><b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">10.2.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">Зміни&nbsp;</span><span lang="UK" style="font-size: 9pt;">та доповнення, додаткові угоди та додатки до Договору прокату є його невід’ємними частинами і мають юридичну силу в разі, якщо вони викладені в письмовій формі та підписані уповноваженими на те представниками сторін.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">10.3.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">У випадку, якщо внаслідок форс-мажорних обставин сторона договору не може виконувати або&nbsp;</span><span lang="UK" style="font-size: 9pt;">затримує виконання будь-яких своїх зобов’язань, вона негайно інформує про це іншу сторону та по можливості надає відповідні докази. Сторона повідомляє про приблизний строк, протягом якого виконання своїх зобов’язань договору такою стороною буде неможливе або відстрочене. Сторона,&nbsp;</span><span lang="UK" style="font-size: 9pt;">яка зазнала впливу таких форс-мажорних обставин, звільняється від відповідальності перед іншою стороною за невиконання або відстрочення у виконанні своїх зобов’язань по договору.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level2 lfo2;tab-stops:63.8pt"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt"><span style="mso-list:Ignore">10.4.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><!--[endif]--><span lang="UK" style="font-size: 9pt;">Сторони підписанням договору прокату підтверджують, що між ними досягнута згода щодо всіх істотних умов договору прокату автомобіля. Сторони, а також уповноважені представники сторін, повністю усвідомлюють зміст цих Правил і договору прокату, поняття, умови, погоджуються із ними та повністю усвідомлюють значення та наслідки своїх дій.<b><o:p></o:p></b></span></p><p class="TableParagraph" style="margin: 0cm 0cm 0.0001pt; font-size: 11pt; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; text-align: justify;"><b><span lang="UK" style="font-size: 3pt;"><o:p>&nbsp;</o:p></span></b></p><p class="TableParagraph" style="margin-left:0cm;text-align:justify;text-justify:
inter-ideograph;text-indent:35.45pt;mso-list:l2 level1 lfo2;tab-stops:2.0cm"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="UK" style="font-size:9.0pt;
mso-bidi-font-size:12.0pt"><span style="mso-list:Ignore">XI.<span style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></b><!--[endif]--><b><span lang="UK" style="font-size: 9pt;">Згода суб’єкта персональних даних<o:p></o:p></span></b></p><p class="MsoListParagraph" style="margin:0cm;margin-bottom:.0001pt;text-indent:
35.45pt;mso-list:l2 level1 lfo2;tab-stops:49.65pt"><style class="WebKit-mso-list-quirks-style">
<!--
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:UK;
	mso-fareast-language:UK;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:4.1pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:27.2pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-21.4pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:RU;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:11.0pt;
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:UK;
	mso-fareast-language:UK;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:2.0cm 42.5pt 2.0cm 3.0cm;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
@list l0
	{mso-list-id:1096293498;
	mso-list-type:hybrid;
	mso-list-template-ids:1345596554 228748828 -1148579480 726425518 437125720 1365261284 -460935998 782924560 -1628291170 -119609564;}
@list l0:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:29.95pt;
	text-indent:-9.15pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	letter-spacing:-1.5pt;
	mso-font-width:99%;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:83.7pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:137.4pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:191.1pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:244.8pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:298.55pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:352.25pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:405.95pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:459.65pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l1
	{mso-list-id:1270895318;
	mso-list-type:hybrid;
	mso-list-template-ids:-213633318 -1284868604 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Calibri;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2
	{mso-list-id:1847864928;
	mso-list-template-ids:-176107574;}
@list l2:level1
	{mso-level-number-format:roman-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:bold;
	mso-ansi-font-style:normal;}
@list l2:level2
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.75pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l2:level3
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l2:level4
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;}
@list l2:level5
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.45pt;
	text-indent:-54.0pt;}
@list l2:level6
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.45pt;
	text-indent:-54.0pt;}
@list l2:level7
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:107.45pt;
	text-indent:-72.0pt;}
@list l2:level8
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:107.45pt;
	text-indent:-72.0pt;}
@list l2:level9
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:125.45pt;
	text-indent:-90.0pt;}

-->
</style></p><p class="TableParagraph" style="margin-top: 1.8pt; margin-right: 6.65pt; text-align: justify; text-indent: 35.45pt;"><!--[if !supportLists]--><span lang="UK" style="font-size:9.0pt;mso-bidi-font-size:11.0pt">11.1.<span style="font-stretch: normal; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><!--[endif]--><span lang="UK" style="font-size: 9pt; letter-spacing: -0.15pt;">Своїм&nbsp;</span><span lang="UK" style="font-size: 9pt;">підписом у договорі Наймач дає свою згоду на обробку своїх персональних даних (мета обробки: договірні відносини). Обробка включає, але не обмежується: одержання, систематизацію, накопичення, зберігання, уточнення (оновлення, зміна), використання, знищення, знеособлення, передача, поширення, блокування а також будь-які інші дії, пов’язані з обробкою персональних даних відповідно до мети. Наймач дає свою згоду на обробку наступних персональних даних: прізвище,&nbsp;<span style="letter-spacing: -0.15pt;">ім’я,</span>по батькові, рік, місяць,&nbsp;<span style="letter-spacing: 0.15pt;">дата&nbsp;</span>і місце народження, адреса, громадянство, контактна інформація (домашня(і) адреса(и), номери домашнього і мобільного телефонів, адреса електронної пошти та інше, фотографії; відомості, що містяться в документах, що посвідчують особу, в тому числі паспортні дані, податковий номер, фотокопії паспортів, водійських посвідчень, службових посвідчень, інших особистих документів, будь-які інші персональні дані та відомості, які добровільно надаються Наймачем при заповненні анкет, а також дані, які можуть знадобитися Наймодавцю у зв’язку із реалізацією мети обробки персональних даних.<o:p></o:p></span></p><style class="WebKit-mso-list-quirks-style"><!--/* Style Definitions */p.MsoNormal, li.MsoNormal, div.MsoNormal	{mso-style-unhide:no;	mso-style-qformat:yes;	mso-style-parent:"";	margin-top:0cm;	margin-right:0cm;	margin-bottom:10.0pt;	margin-left:0cm;	line-height:115%;	mso-pagination:widow-orphan;	font-size:11.0pt;	font-family:Calibri;	mso-ascii-font-family:Calibri;	mso-ascii-theme-font:minor-latin;	mso-fareast-font-family:"Times New Roman";	mso-fareast-theme-font:minor-fareast;	mso-hansi-font-family:Calibri;	mso-hansi-theme-font:minor-latin;	mso-bidi-font-family:"Times New Roman";	mso-bidi-theme-font:minor-bidi;	mso-ansi-language:UK;	mso-fareast-language:UK;}p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph	{mso-style-priority:1;	mso-style-unhide:no;	mso-style-qformat:yes;	margin-top:4.1pt;	margin-right:0cm;	margin-bottom:0cm;	margin-left:27.2pt;	margin-bottom:.0001pt;	text-align:justify;	text-justify:inter-ideograph;	text-indent:-21.4pt;	mso-pagination:none;	text-autospace:none;	font-size:11.0pt;	font-family:"Times New Roman";	mso-fareast-font-family:"Times New Roman";	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:RU;}p.TableParagraph, li.TableParagraph, div.TableParagraph	{mso-style-name:"Table Paragraph";	mso-style-priority:1;	mso-style-unhide:no;	mso-style-qformat:yes;	margin:0cm;	margin-bottom:.0001pt;	mso-pagination:none;	text-autospace:none;	font-size:11.0pt;	font-family:"Times New Roman";	mso-fareast-font-family:"Times New Roman";	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}.MsoChpDefault	{mso-style-type:export-only;	mso-default-props:yes;	font-size:11.0pt;	mso-ansi-font-size:11.0pt;	mso-bidi-font-size:11.0pt;	font-family:Calibri;	mso-ascii-font-family:Calibri;	mso-ascii-theme-font:minor-latin;	mso-fareast-font-family:"Times New Roman";	mso-fareast-theme-font:minor-fareast;	mso-hansi-font-family:Calibri;	mso-hansi-theme-font:minor-latin;	mso-bidi-font-family:"Times New Roman";	mso-bidi-theme-font:minor-bidi;	mso-ansi-language:UK;	mso-fareast-language:UK;}.MsoPapDefault	{mso-style-type:export-only;	margin-bottom:10.0pt;	line-height:115%;}@page WordSection1	{size:595.0pt 842.0pt;	margin:36.0pt 36.0pt 36.0pt 36.0pt;	mso-header-margin:0cm;	mso-footer-margin:0cm;	mso-paper-source:0;}div.WordSection1	{page:WordSection1;} /* List Definitions */@list l0	{mso-list-id:1096293498;	mso-list-type:hybrid;	mso-list-template-ids:1345596554 228748828 -1148579480 726425518 437125720 1365261284 -460935998 782924560 -1628291170 -119609564;}@list l0:level1	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:-;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:29.95pt;	text-indent:-9.15pt;	mso-ansi-font-size:12.0pt;	mso-bidi-font-size:12.0pt;	font-family:"Times New Roman";	mso-fareast-font-family:"Times New Roman";	letter-spacing:-1.5pt;	mso-font-width:99%;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level2	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:83.7pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level3	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:137.4pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level4	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:191.1pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level5	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:244.8pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level6	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:298.55pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level7	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:352.25pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level8	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:405.95pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l0:level9	{mso-level-start-at:0;	mso-level-number-format:bullet;	mso-level-text:•;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:459.65pt;	text-indent:-9.15pt;	mso-ansi-language:UK;	mso-fareast-language:UK;	mso-bidi-language:UK;}@list l1	{mso-list-id:1270895318;	mso-list-type:hybrid;	mso-list-template-ids:-213633318 -1284868604 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}@list l1:level1	{mso-level-number-format:bullet;	mso-level-text:-;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Calibri;	mso-fareast-font-family:"Times New Roman";	mso-fareast-theme-font:minor-fareast;	mso-bidi-font-family:"Times New Roman";	mso-bidi-theme-font:minor-bidi;}@list l1:level2	{mso-level-number-format:bullet;	mso-level-text:o;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:"Courier New";}@list l1:level3	{mso-level-number-format:bullet;	mso-level-text:;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Wingdings;}@list l1:level4	{mso-level-number-format:bullet;	mso-level-text:;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Symbol;}@list l1:level5	{mso-level-number-format:bullet;	mso-level-text:o;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:"Courier New";}@list l1:level6	{mso-level-number-format:bullet;	mso-level-text:;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Wingdings;}@list l1:level7	{mso-level-number-format:bullet;	mso-level-text:;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Symbol;}@list l1:level8	{mso-level-number-format:bullet;	mso-level-text:o;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:"Courier New";}@list l1:level9	{mso-level-number-format:bullet;	mso-level-text:;	mso-level-tab-stop:none;	mso-level-number-position:left;	text-indent:-18.0pt;	font-family:Wingdings;}@list l2	{mso-list-id:1847864928;	mso-list-template-ids:-176107574;}@list l2:level1	{mso-level-number-format:roman-upper;	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:71.45pt;	text-indent:-36.0pt;	mso-ansi-font-weight:bold;	mso-ansi-font-style:normal;}@list l2:level2	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:74.75pt;	text-indent:-18.0pt;	mso-ansi-font-weight:normal;	mso-ansi-font-style:normal;}@list l2:level3	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:71.45pt;	text-indent:-36.0pt;	mso-ansi-font-weight:normal;	mso-ansi-font-style:normal;}@list l2:level4	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:71.45pt;	text-indent:-36.0pt;}@list l2:level5	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:89.45pt;	text-indent:-54.0pt;}@list l2:level6	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:89.45pt;	text-indent:-54.0pt;}@list l2:level7	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:107.45pt;	text-indent:-72.0pt;}@list l2:level8	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:107.45pt;	text-indent:-72.0pt;}@list l2:level9	{mso-level-legal-format:yes;	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";	mso-level-tab-stop:none;	mso-level-number-position:left;	margin-left:125.45pt;	text-indent:-90.0pt;}--></style><style class="WebKit-mso-list-quirks-style">
<!--
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:UK;
	mso-fareast-language:UK;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:4.1pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:27.2pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-21.4pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:RU;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:11.0pt;
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:UK;
	mso-fareast-language:UK;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.0pt 842.0pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;
	mso-header-margin:0cm;
	mso-footer-margin:0cm;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
@list l0
	{mso-list-id:1096293498;
	mso-list-type:hybrid;
	mso-list-template-ids:1345596554 228748828 -1148579480 726425518 437125720 1365261284 -460935998 782924560 -1628291170 -119609564;}
@list l0:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:29.95pt;
	text-indent:-9.15pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	letter-spacing:-1.5pt;
	mso-font-width:99%;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:83.7pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:137.4pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:191.1pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:244.8pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:298.55pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:352.25pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:405.95pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l0:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:459.65pt;
	text-indent:-9.15pt;
	mso-ansi-language:UK;
	mso-fareast-language:UK;
	mso-bidi-language:UK;}
@list l1
	{mso-list-id:1270895318;
	mso-list-type:hybrid;
	mso-list-template-ids:-213633318 -1284868604 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Calibri;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2
	{mso-list-id:1847864928;
	mso-list-template-ids:-176107574;}
@list l2:level1
	{mso-level-number-format:roman-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:bold;
	mso-ansi-font-style:normal;}
@list l2:level2
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.75pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l2:level3
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l2:level4
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:71.45pt;
	text-indent:-36.0pt;}
@list l2:level5
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.45pt;
	text-indent:-54.0pt;}
@list l2:level6
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.45pt;
	text-indent:-54.0pt;}
@list l2:level7
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:107.45pt;
	text-indent:-72.0pt;}
@list l2:level8
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:107.45pt;
	text-indent:-72.0pt;}
@list l2:level9
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:125.45pt;
	text-indent:-90.0pt;}

-->
</style>      <div id="links0" style="position: relative; height: 0px;" class="masonry">
  </div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
      <!-- The container for the modal slides -->
      <div class="slides"></div>
      <!-- Controls for the borderless lightbox -->
      <h3 class="title"></h3>
      <a class="prev">‹</a>
      <a class="next">›</a>
      <a class="close" style="-webkit-transform: scale(2); -moz-transform: scale(2); -ms-transform: scale(2); -o-transform: scale(2); transform: scale(2);">×</a>
      <a class="play-pause" style="-webkit-transform: scale(2); -moz-transform: scale(2); -ms-transform: scale(2); -o-transform: scale(2); transform: scale(2);"></a>
      <ol class="indicator"></ol>
      <!-- The modal dialog, which will be used to wrap the lightbox content -->
      <div class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" aria-hidden="true">×</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body next"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left prev">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                    Previous
                  </button>
                  <button type="button" class="btn btn-primary next">
                    Next
                    <i class="glyphicon glyphicon-chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
        </div>
      </div>
            <br>
                        </div>
        </div>
    </section>
    <?php include("view/blocks/footer.php"); ?>
    <script>
        document.getElementById('text').onkeyup = function () {
            document.getElementById('symbols').innerHTML = (256 - this.value.length)+"/256 символів залишилось";
        };
    </script>
</body>
</html>