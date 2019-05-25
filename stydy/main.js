$(document).ready(function () {
	$("#tegi1").hover(
function(){
$("#tegi1 ").html('    <h2> <span class="red">  < html> </span> </h2> <p> <span style="color:#000099">&lt;!DOCTYPE&gt;</span><br><span style="color:#000099">&lt;html lang=<span style="color:#0000FF">&quot;ua&quot;</span>&gt;</span><br><span style="color:#000099">&lt;head&gt;</span><br><span style="color:#000099">&lt;meta charset=<span style="color:#0000FF">&quot;UTF-8&quot;</span>&gt;</span><br><span style="color:#000099">&lt;/head&gt;</span><br><span style="color:#000099">&lt;body&gt;</span><br><span style="color:#000099">&lt;p&gt;</span> Привіт , світе! <span style="color:#000099">&lt;/p&gt;</span><br><span style="color:#000099">&lt;/body&gt;</span><br><span style="color:#000099">&lt;/html&gt;</span><br> </p>');

},
function(){
$("#tegi1 ").html('    <h2> <span class="red">  < html> </span> </h2>  <p>   текстекстекстекстекстекст  </p>');

}
),500;
});