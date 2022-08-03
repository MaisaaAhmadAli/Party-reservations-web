
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/607de92be1.js" crossorigin="anonymous"></script>
    <meta charset = "utf-8">
    <style>
        @charset "UTF-8";
.over
{
    font-family:monospace;
    font-size:140%
}
hr.up
{
    width: 100%;
    height:5px; 
    background-image:linear-gradient(to right,#1fd655,#0044ff);
}
div.menu 
{   
    font-family:monospace;
    height: 100%;
    width: 23%;
    z-index: 2;
    top: 15.8%;
    left: 0;
    background-color: white; 
    /* overflow-x: hidden; */
    overflow: hidden;
    padding-top: 20px;
    color: #696969;
    text-transform: capitalize;
    position:absolute;
    display: inline;
}
.menu hr
{
    color: darkgrey;
}
.menu :hover
{
    color: #50a33c;
}
.menu p:hover
{
    color:black;
}
.icones
{
    color: #696969;
}
.icones:hover
{
    color: #696969;
}
div.menu p
{
    text-align: center;
    font-size: 115%;
    display: inline-block; 
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    color: black;
    
}
div.menu h2 
{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 115%;
    color: black;
    display: inline-block; 
    
}

.firstLeve
{
    padding-left: 2%;
  
}

.secondLevel
{
   padding-left: 10%;
  
}


.backgroundColor
{
    background-color: white;
   border-width: 2px ;
   border-color: white;
}
.vido
{
    margin-top: -0.5%;
    margin-left: 23%;
    width:77%;
    display:"none" !important;

}
.body
{
    background-color: lightgray;
}
.continueButton
{
    background-color: #4093cb;
    margin-top: 2%;
    margin-left: 90%;
    margin-bottom: 2%;
    margin-right: 2%;
    height: 45px;
    width: 140px;
    border-radius: 15px;
    color: white;
    border-color:#4093cb ;
    font-family:monospace;
    font-size:20px;
    text-transform: capitalize; 
}
.quiz1
{
    margin-top: -0.5%;
    margin-left: 23%; 
    border-radius: 20px;
    background-color: lightblue;
    height: 3pc;
    width: 40pc;
    margin-top: -2%;
    margin-left: 30%;
    padding-left: 7%;
    padding-top: 2.3%;
    font-family: monospace;
    font-size:13pt;
    padding-bottom: 2.3%;
    padding-right: 2%;
    box-shadow: 5px 5px #f2f1f0;
}
.popupcorrect
{
    border-radius: 20px;
    background-color: gold;
    height: 3pc;
    width: 15pc;
    margin-top: -15%;
    margin-left: 40%;
    padding-left: 7%;
    padding-top: 2.3%;
    font-family: monospace;
    font-size:13pt;
    padding-bottom: 2.3%;
    padding-right: 2%;
    box-shadow: 5px 5px #f2f1f0;  
    z-index: 15;
    
}
.popupwrong
{
    border-radius: 20px;
    background-color: lightcoral;
    height: 3pc;
    width: 15pc;
    margin-top: -15%;
    margin-left: 40%;
    padding-left: 7%;
    padding-top: 2.3%;
    font-family: monospace;
    font-size:13pt;
    padding-bottom: 2.3%;
    padding-right: 2%;
    box-shadow: 5px 5px #f2f1f0;  
    z-index: 15;
}
.questionIcone
{
    z-index: 10;
    margin-top: 2%;
    margin-left: 28%;
    color: #75bb43;
}
.submitButton
{
    background-color: white;
    margin-top: 2%;
    margin-left: 31%;
    margin-bottom: 2%;
    margin-right: 2%;
    height: 40px;
    width: 130px;
    border-radius: 15px;
    color: darkgrey;
    border-color:white ;
    font-family:monospace;
    font-size:20px;
    text-transform:uppercase; 
    box-shadow: 0.3px 0.3px darkgrey ;
}
.diabledButton
{
    background-color: gray;
    margin-top: 2%;
    margin-left: 31%;
    margin-bottom: 2%;
    margin-right: 2%;
    height: 40px;
    width: 130px;
    border-radius: 15px;
    color: darkgrey;
    border-color:white ;
    font-family:monospace;
    font-size:20px;
    text-transform:uppercase; 
    box-shadow: 0.3px 0.3px darkgrey ;
}
.submitButton:hover
{
    background-color: #75bb43;
    color: white;

}
.ansowers
{
    margin-left:32%;
    margin-top: 4%;

}
.ansoLable::first-letter
{
    text-transform: uppercase;
}
.ansoLable
{
    font-size: 13pt;
    font-family:monospace ;
}
input[name="quiz1-qus1"]
{
    /* accent-color: green; */
    width:20px;
    height: 20px;
}
.move
{
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px; 
  background-color: white;
  color: gray;
  border-radius: 50%;
  border:none;
  font-size: 25px;
  font-weight: 800;
  box-shadow:3px 3px #e3e3e3 ;
}
.move:hover
{
    background-color: #75bb43;
    color: white;
}
.moveDisabled
{
    text-decoration: none;
  display: inline-block;
  padding: 8px 16px; 
  background-color: gray;
  color: black;
  border-radius: 50%;
  border:none;
  font-size: 25px;
  font-weight: 800;
  box-shadow:3px 3px #e3e3e3 ;
}
.buttonStyle1 {
    padding: 5px 21px 2px 21px;
    width: 150px;
    text-align: left;
    margin-bottom: 10px;
}
.buttonStyle1 {
    display: inline-block;
    padding: 11px 31px;
    margin-right: 10px;
    background: #fff;
    text-align: center;
    color: #888;
    -webkit-box-shadow: 2px 2px 0 0 rgb(0 0 0 / 10%);
    box-shadow: 2px 2px 0 0 rgb(0 0 0 / 10%);
    text-decoration: none;
    border-radius: 16px;
    cursor: pointer;
}
.instructionBox {
    width: 45%;
    margin-top: 20%;
    box-sizing: border-box;
    color: #009448;
    float: right;
    position: relative;
    max-width: 400px;
    width: 100%;
    right: 10px;
    margin-top: 50px;
}


.icon {
    top: 40px;
}
.icon {
    font-family: impact;
    background-color: #009448;
    border-radius: 100%;
    color: white;
    padding: 7px 15px;
    position: absolute;
    font-weight: bold;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
    left: -19px;
}
.text {
    background: rgba(255,255,255,0.8);
    padding: 30px 30px 30px 45px;
    border-radius: 16px;
    box-sizing: border-box;
    text-align: left;
}
question {
    display: inline-block;
    background: #fff;
    color: #60636A;
    -webkit-box-shadow: 4px 4px 1px 1px rgb(0 0 0 / 10%);
    box-shadow: 4px 4px 7px 2px rgb(0 0 0 / 10%);
    text-decoration: none;
    border-radius: 25px;
    box-sizing: border-box;
    font-size: 20px;
    line-height: 22px;
    margin-left: 70px;
    margin-top: 70px;
    position: relative;
    padding: 25px;
    padding-left: 60px;
    margin-bottom: 20px;
}
.qicon {
    background: url(C:\Users\cooc2\Downloads\question-mark.png) no-repeat;
    min-height: 60px;
    width: 60px;
    float: left;
    z-index: 10;
    height: 100%;
    padding-top: 70%;
    margin-left: 28%;
    color: #75bb43;
}

.st1 {
    fill: #75BB43;
}
.st0 {
    fill: #FFFFFF;
}
 
.vl 
{
    border-left: 20px solid black;
    height: 500px;
} 
.instructionBox
 {
    width: 45%;
    margin-top: 500px;
    box-sizing: border-box;
    color: #009448;
    float: right;
    position: relative;
    max-width: 400px;
    right: 10px;
    background-color: lightgray;
    border-radius: 25px;
    
 }
 
    </style>
<title> </title>
   <?php require_once("Dolf_task1_header.php") ?>
  <script>
//  function myFunction() 
//  {
//  var x = document.getElementById("FirstVideo");
//  if (x.style.display === "none")
//   {
//      x.style.display = "block";
//   } 
//   else 
//   {
//     x.style.display = "none";
//   }
// }

</script>
    </head>
<body >

<iframe   id = "story" class ="vido body"    height="600"  src="https://www.youtube.com/watch?v=ADi7F695d90"></iframe> 
<button class="continueButton" >continue</button>

</body>
</html>