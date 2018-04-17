<?php
include 'WebcompileMaker.php';
include 'Program/ProgramFactory.php';
include 'Program/ProgramInterface.php';
include 'Program/Program.php';
include 'Program/JavaProgram.php';

$compile = "Manthan\Webcompile\\WebcompileMaker";
$compiler = new $compile();
$code = $_POST['code'];

print_r ($compiler->type('Java')
        ->with($code,['eff'], 'Test.java')
        ->executeProgram());

?>