<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>


</head>
<body>

<div style="text-align:center;">
			<img src="image/Logo.png" alt="Logo" style="width:256px;height:256px;">
		</div>
		<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
			<h1>WELCOME	</h1>
		</div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Biography')" id="defaultOpen">Biography</button>
  <button class="tablinks" onclick="openCity(event, 'Resume')">Resume</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="Biography" class="tabcontent">
  <h3>Biography</h3>
  <p>My name is Imran Naufal Bin M Syukrazmar. I am 20 years old. 
			   I live in Taman Kajang Perdana. I'm studying in KPPIM, UiTM Shah Alam majoring Netcentric Computing. 
		       My hobby is learning and doing something that can improve myself. 
		       From now on, I want to get dean list every semester and being a Great Commander in Kesatria Negara. 
		       In another 10 years, I'll find myself as a kind and healthy lecturer.</p>
</div>

<div id="Resume" class="tabcontent">
  <h3>Resume</h3>
  <p><table style="width:100%">
  <tr>
    <th>Education</th>
    <td>
    <ul>
  
  <li>Sijil Pelajaran Malaysia
    <ul>
      <li>4A, 3B, 2C</li>
    </ul>
  </li>
  <li>Matrikulasi
    <ul>
      <li>3.46</li>
    </ul>
  </li>
  <li>Mute
    <ul>
      <li>Band 4</li>
    </ul>
  </li>
  <li>Bachelor of Netcentric Computing 
    <ul>
      <li>3.80</li>
    </ul>
  </li>
</ul>

    </td>
  </tr>
  <tr>
    <th>Skill</th>
    <td>
    <ul>
  
  <li>Programming Language
    <ul>
      <li>C++</li>
      <li>Java</li>
      <li>HTML</li>
      <li>CSS</li>
    </ul>
  </li>
  <li>Language
    <ul>
      <li>English</li>
      <li>Bahasa Malaysia</li>
    </ul>
  </li>
  <li>Computer
    <ul>
      <li>Web Designer</li>
      <li>Problem Solving</li>
      <li>Word</li>
      <li>Excel</li>
      <li>Access</li>
      <li>Network Designer</li>
    </ul>
  </li>
</ul>

    </td>
  </tr>
  
  
</table>
</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
   
</body>
</html> 
