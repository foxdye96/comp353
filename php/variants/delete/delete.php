<?php
require_once("././deleter.php");

$bindings["BINDING_TYPES"] = "i";
$bindings["VALUES"] = array(
                                $_POST["ID"]
                        );
$result = deleteData("variants/delete/delete.txt", $bindings);

$data = [];

if($result["RESULT"] === 1) {
        $data = ["RESULT" => "1", "MESSAGE" => "Successfully Deleted Variant!"];
} else {
        $data = ["RESULT" => "2", "MESSAGE" => "Unable to delete Variant."];
}

// returnData is used in base.php
