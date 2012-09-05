<!DOCTYPE html>
<html>
<head>
   <style>
         
	 h1 { text-align: center; font-family: 'Droid Sans', sans-serif; font-size: 50px; }
	 #container { width: 975px; margin: 0 auto; }
         #bullshit { display: none; width: 900px; margin: 50px auto; }
         #message { font-family: 'Droid Sans', sans-serif; font-size: 45px; text-align: center; margin-top: 90px; }
         #button-div { text-align: center; }
         .button {
	 display: inline-block;
	 outline: none;
	 cursor: pointer;
	 text-align: center;
	 text-decoration: none;
	 font: 20px 'Droid Sans', sans-serif;
	 padding: .5em 2em .55em;
	 text-shadow: 0 1px 1px rgba(0,0,0,.3);
	 -webkit-border-radius: .5em; 
	 -moz-border-radius: .5em;
	 border-radius: .5em;
	 -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	 -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	 box-shadow: 0 1px 2px rgba(0,0,0,.2);
         margin-top: 50px;
         }
         .button:hover {
	 text-decoration: none;
         }
         .button:active {
	 position: relative;
	 top: 1px;
         }
         .black {
         color: #D7D7D7;
         border: solid 1px #333;
         background: #333;
         background: -webkit-gradient(linear, left top, left bottom, from(#666), to(black));
         background: -moz-linear-gradient(top, #666, black);
         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#666666', endColorstr='#000000');
         }
         .black:hover {
	 background: #000;
	 background: -webkit-gradient(linear, left top, left bottom, from(#444), to(#000));
	 background: -moz-linear-gradient(top,  #444,  #000);
	 filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#444444', endColorstr='#000000');
         }
         .black:active {
	 color: #666;
	 background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#444));
	 background: -moz-linear-gradient(top,  #000,  #444);
	 filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#666666');
         }
   </style>
<body>
   <div id="container"> 
      <div id="header">
         <h1>Cloud Bullshit Generator</h1>
      </div>
      <div id="button-div">
            <INPUT class="black button" value="Show me the bullshit!"  TYPE="submit" onclick="output()"/>
      </div>
      <div id="message">
         <div class="class" id="bullshit">
         </div>
      </div>
   </div>
</body>