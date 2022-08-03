<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="CSS/styless.css" type="text/css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/607de92be1.js" crossorigin="anonymous"></script>
    <meta charset = "utf-8">
    <style>
    .SEC
{
    height: 800px;
    background: #DCDDDE;
    width: 1160px;
    margin-left: 345px;
    margin-top: 2px;
}
.press
{
    border: 2px solid white;
    font-size: 18px;
    display: inline-block;
    padding: 17px 25px;
    margin-right: 10px;
    background: #fff;
    text-align: center;
    color: #888;
    text-decoration: none;
    border-radius: 16px;
    cursor: pointer;
    height: max-content;
    width: 17%;
    position:relative;
}
.three
{
    border: 2px solid white;
    font-size: 18px;
    display:flexbox;
    padding: 17px 25px;
    background: #fff;
    text-align: center;
    color: #888;
    text-decoration: none;
    border-radius: 16px;
    cursor: pointer;
    height: max-content;
    width: 17%;
    margin-left: -500px;
}

.press:hover , .three:hover
{
    border-color: green;
}

.popup
{
    border: 2px solid green;
    font-size: 18px;
    display:block;
    padding-top: 25px;
    background: #fff;
    text-align: center;
    color: #888;
    text-decoration: none;
    border-radius: 16px;
    height:50px;
    width: 23%;  
    margin-left: 400px ;
    /* margin-top: -600px;  */
    visibility: hidden;
    
    z-index: 1000;
    
}
.popuptext
{
    padding-right: 20px;
}
.grayout 
{
   height: 800px;
   width: 1160px;
   background-color: black;
   opacity: 0.2;
   z-index: 99;
   margin-left: 0px;
   margin-top: 2px;
  
}
.close 
{
  font-size: 25px;
  font-weight: 600;
  cursor: pointer;
}
.mid
{
margin-left: 450px;
margin-top: 10px;
}
.line
{
    margin-top: 0px;
    border-left: 2.5px solid white;
    height: 100px;
  
}
.firstline
{
    margin-left:500px ;
    /* padding-right: 500px; */
}
.line1 {
    border: 1px solid grey;
    width: 20px;
    height: 0px;
    position: absolute;
    width: 70px;
    pointer-events: none;
    margin-top: 210px;
    margin-left:930px;
}
.circle1 {
    width: 7px;
    height: 7px;
    background: grey;
    border-radius: 50%;
    float: right;
    margin-right: -3px;
    margin-top: -4px;
}
label
{
    position: absolute;
    font-size: 18px;
    color: #444;
    pointer-events: none;
    font-family:monospace;
}
.lableone
{
    margin-top: -35px;
    margin-left: 80px;
}
    </style>
    <script>
       function popUp()
           {
            document.getElementById("popup").style.visibility="visible";
            document.getElementById("graph").classList.toggle("grayout");

            document.getElementById("two").disabled=true;
            document.getElementById("three").disabled=true;
            document.getElementById("four").disabled=true;
            document.getElementById("five").disabled=true;
           }
           function cclose()
           {
            document.getElementById("graph").classList.toggle("grayout");
            document.getElementById("popup").style.visibility="hidden";
            document.getElementById("two").disabled=false;
            document.getElementById("three").disabled=false;
            document.getElementById("four").disabled=false;
            document.getElementById("five").disabled=false;
           }  
           function changecolor()
{
    document.getElementById("mindicon").style.color="#50a33c";
    document.getElementById("mind").style.color="#50a33c";
}
    </script>
        <?php require_once("Dolf_task1_header.php") ?>
       
  </head>
<body onload="changecolor()">
    <div  class="SEC">
        <div id="graph" id="graph">
            <button class="press mid"  onclick="popUp()" >one</button>
           <div id="firstline" class="line firstline"></div>
           <div id="secondline" class="line" style="margin-left: 545px; margin-top:-100px;"></div>
           <div id="theredline" class="line" style="margin-left: 590px; margin-top:-100px;"></div>
           <div class="line1" style="top: 28px;left: 12px;" id="linooo">
           <div class="circle1">
           </div>
           <label class="lableone" >this is the first number </label>
        </div>
     


            <button id= "two"class="press mid"  style="margin-top: 00px;"onclick="" >two</button>
            <button id="three"class="three "  onclick="" >three</button>
         <button id="four"class="press mid"  onclick="" >four</button>
            <button id="five"class="press mid" style="margin-top: 100px;" onclick="" >five</button>
           
        </div>

        <div id="popup"class="popup">
        <span class="popuptext" id="myPopup1" onclick="cclose()"> Popup One!</span>
        <span class="close" onclick="cclose()" id="close">&times;</span> 
        </div>
        <button class="continueButton" onclick="window.location.href='index.php'" >continue</button>

    </div>
   
</body>
    </html>