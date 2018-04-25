<?php
include '../../vendor/autoload.php';
include "../../init.php";
use App\Auto\Mems\Session;
use App\Auto\Mems\Redirect;
use App\Auto\Question;
if (!Session::exists('login')){
    Redirect::to('../../student/student.php');
}
$questions = Question::where('course', 'python')->get();
?>
<html>
<head>
<script src="jquery.min.js">
</script>
<script src="jquery-ui.min.js">
</script>
<link rel="stylesheet" type="text/css" href="custom.css"/>
<!-- hyperlink effects on sample program list -->
<script >
var ch=0;
$(document).ready(function(){
  
  $("h3").hover(function(){
 $(this).css("cursor","hand");
  
 $(this).css("color","blue");
   },
   function(){
 $(this).css("color","black");
 $(this).css("cursor","pointer");
 });
 
  $("#flip").hover(function(){
 $(this).css("cursor","hand");
  
 $(this).css("color","blue");
   },
   function(){
 $(this).css("color","black");
 $(this).css("cursor","pointer");
 });   $("#flip").click(function(){
  
   $('html, body').animate({ scrollTop:0 }, 'slow');
   
    if(ch%2==0){
      $("#sample").delay(100);
      $("#sample").slideToggle("900").effect("bounce",{ times:3 }, 250);
      ch++;
      }
      else
      { 
            $("#sample").effect("bounce", { times:3 }, 250).slideToggle("900");
      ch++;
      $("#sample").delay(100);
      $('html, body').animate({ scrollTop:0 }, 'slow');
      }
  });
});
</script>
<!-- COMPILING THE PROGRAM THROUGH AJAX -->
<script>


function funcp(){
document.getElementById('out').value='HHHHHHHH';
}
function func(x){
editor.setValue("//Type a "+x.value+" program");
editor.getSession().setMode("ace/mode/"+x.value);
}
function initialize()
{
var code = editor.getSession().getValue();
document.getElementById('code1').value = code;

}
function getVal()
{
                       // "editor" is the id of the editor div
 //alert("efew");    
  var code = editor.getSession().getValue();
 var ext1= $('#ext').val();
  document.getElementById('code1').value = code;
var input123 = $('#input').val();
//alert(input123);
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        
	document.getElementById("codeTextarea").innerHTML=xmlhttp.responseText;
    }
  }
  var data = 'code='+ encodeURIComponent(code)  + '&ext='+ encodeURIComponent(ext1) + '&input='+ encodeURIComponent(input123);
  //var  the_data = 'code1='+document.getElementById('code1').innerHTML;
xmlhttp.open("POST","compilerz.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(data);
                    

}
</script>
<!-- HANDLING THE SAMPLE PROGRAM -->
<script>  
  function samplefunc($s)
{  // ajax stuff 
   var xmlhttp;
  xmlhttp=new XMLHttpRequest();
  var prog_name=$s;
   var ext1= $('#ext').val();
   var data = 'program='+ encodeURIComponent(prog_name) +'&ext='+ encodeURIComponent(ext1);
   xmlhttp.open("POST","sample_prog.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(data);

//handling the response
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
    var sample_code=xmlhttp.responseText;
	  editor.setValue(sample_code);
    }
  }
   
}
  </script>
  </head>
  <body style='background-image:url("img11.png")'>
    <header>
      <ul>
        <li>Python Class</li>
          <li><a href="../../student/logout.php">Log out</a> </li>
      </ul>
    </header>

    <table>
      <tr>
        <td>Student Name</td>
        <td><?= Session::get('student')->name ?></td>
      </tr>
      <tr>
        <td>Registration Number</td>
        <td><?= Session::get('student')->matric_number ?></td>
      </tr>
    </table>

    <div class ="heading-main">
      <h4 class ="source">Text code Editor:</h4>
      <h4 class ="output">Output:</h4>
      <div class ="clearfix"></div>
    </div>

    <article>
      <div id ="flip1"><button id = 'flip' name ="flip">show/hide question</button></div>

      <p class ="but3">
        <button class ="showTime"><time datetime ="">HH:MM</time></button>
      </p>

      <p class ="but2">
        <button name ="save" value ='Run' onClick ="getVal()">Run your code</button>
      </p>

      <form onSubmit ="initialize();" method ="post" action ="save.php">
        <!--<div class ="form-element">-->
          <input type ="hidden" name ="code1" id = "code1" value ="">
          <input type ="hidden" name ="ext" id ="ext" value ="java">
        <!--</div>-->
        <div id ="sample" name ="sample";><!-- open php code -->
          <?php
            $dh = opendir("sample/java");

            while($filename = readdir($dh))
            {
              if($filename != '.')
                if($filename != '..')
                {
                  $temp_filename = str_replace(' ', '#@#!', $filename);
                  echo "<center><h3 onClick = samplefunc('$temp_filename');>". $filename ."</h3></center></br> ";
                }
            }
          ?>
        </div><!-- close php code -->
        <div id = "editor"></div>

        <script src = 'src-min-noconflict/ace.js' type ='text/javascript' charset ='utf-8'></script>
        <script>
          editor = ace.edit("editor");
          editor.setTheme("ace/theme/monokai");
          editor.getSession().setMode("ace/mode/java");
          // editor.setVal''st2;
          editor.setValue('');

          //editor.insert('hhhhhhhh\"hhhh\'hhhhhhhhh\nskbgadxbkjtdj');
        </script>

        <?php
          echo "<script>";
          if(isset($_POST['code_block']))
          {

          }
          else $txt ='//Type a java program \n//Use main-class name as code\n class Test\n{\npublic static void main(String args[])\n{\n\n\nSystem.out.println("You are good");\n}\n}';
          echo "var code1 = editor.getSession().getValue();";
          echo "</script>";
          //echo $txt;
          //$txt = str_replace("<br />", "\n", $txt);
          echo "<script>  ";
          echo "editor.insert('$txt');";
          echo "</script>";
        ?>

        <br>
        <br>
        <br>
        <br><!-- these are much than this -->

        <p class ="but1">
          <button type ="submit" name = "save" value ='save'>Submit your code for grading</button>
        </p>
      </form>

      <br>
      <br>

      <form>
        <textarea id ="codeTextarea" readonly style ="resize: none">
            HOW IT WORKS 

Write your code/program in the your source code section (i.e the right box)

Give your input stream to the program in the input section(i.e the bottom section)

Click on the "Run your program" button to compile and execute your program

The output to your program will come here (i.e the output section)
        </textarea>
      </form>
 
    </article>
    <section>
      <h4 id ="inputheading"> type here your input stream:</h4>

      <form>
        <textarea id ="input" rows ='7' cols ='25'></textarea>
      </form>
    </section>

  <!--</br></br>
  </div>
    <span>
     <textarea id="codeTextarea" readonly style ="resize:none;">
  	 
       
   
          </textarea>
	 </span> 
     <h4 id="inputheading" >TYPE HERE YOUR INPUT STREAM </h4>     
<textarea id="input" rows='7' cols='25'>
</textarea>-->  
  
  </body>
  </html>