<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
var subjectObject = {
  "NEET": {
    "PHYSICS": ["Links", "Images", "Tables", "Lists"],
    "CHEMISTRY": ["Borders", "Margins", "Backgrounds", "Float"],
    "BIOLOGY": ["Variables", "Operators", "Functions", "Conditions"]    
  },
  "JEE": {
    "PHYSICS": ["Variables", "Strings", "Arrays"],
    "CHEMISTRY": ["SELECT", "UPDATE", "DELETE"],
    "MATHEMATICS": ["1", "2", "3"]
  },

  "MHT-CET": {
    "PHYSICS": ["Variables", "Strings", "Arrays"],
    "CHEMISTRY": ["SELECT", "UPDATE", "DELETE"],
    "MATHEMATICS": ["1", "2", "3"],
    "BIOLOGY": ["Variables", "Operators", "Functions", "Conditions"]    
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("exam");
  var topicSel = document.getElementById("subject");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
</head>   
<body>

<h1>Cascading Dropdown Example</h1>

<form name="form1" id="form1" action="/action_page.php">
Exam: <select name="exam" id="exam">
    <option value="" selected="selected" disabled>Select Exam</option>
  </select>
  <br><br>
Subject: <select name="subject" id="subject">
    <option value="" selected="selected" disabled>Please select exam first</option>
  </select>
  <br><br>
Chapters: <select name="chapter" id="chapter">
    <option value="" selected="selected" disabled>Please select topic first</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">  
</form>

</body>
</html>
