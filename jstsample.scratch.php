<html>
<head>

<div id="myDIV">
</div>

<script>
function pageLoaded() {
  var para = document.createElement("P");
  para.innerText = "This is a paragraph.";
  document.getElementById("myDIV").appendChild(para);
}
</script>
<body onload="pageLoaded();">
	<p id="para">Just showing that we loaded something...</p>

</body>
</html>
