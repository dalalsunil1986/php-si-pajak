<?php

function generateForm($schema, $showFields, $values = false) {    
    $form = "";        
    foreach($schema as $field => $rule) {
        $form .= generateFormComponent($field, $rule, $showFields[$field], $values);        
    }    
    echo $form;
}

function generateFormComponent($field, $rule, $showField, $values) {
    $input = "";
    if(stringContains($rule, "text")) {        
        $arr_rule = explode(":", $rule);
        $input_value = $values ? $values[$field] : "";
        $required = $arr_rule[0] === "required" ? "required" : "";
        $maxlength = $arr_rule[2];
        $input .= "<div class='form-group'>";
        $input .= "<label>$showField</label>";
        $input .= "<input name='$field' class='form-control' value='$input_value' maxlength='$maxlength' />";
        $input .= "</div>";        
    } else if(stringContains($rule, 'auto') && $values[$field]) {
        
    }
    return $input;
}

?>