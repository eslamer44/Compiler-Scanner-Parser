<?php
include ("Stack.php");

$parsingTable  = array (
    "program" => array( "SIow"=>"declaration-list" , "Iow"=>"declaration-list" , "Iowf"=>"declaration-list" , "SIowf"=>"declaration-list" , "Chain"=>"declaration-list" , "Chlo"=>"declaration-list" , "Worthless"=>"declaration-list" , "Include"=>"include_command" , "/$"=>"comment" , "$$$"=>"comment" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "declaration-list" => array( "SIow"=>"declaration declaration-list_1" , "Ïow"=>"declaration declaration-list_1" , "Iowf"=>"declaration declaration-list_1" , "SIowf"=>"declaration declaration-list_1" , "Chain"=>"declaration declaration-list_1" , "Chlo"=>"declaration declaration-list_1" , "Worthless"=>"declaration declaration-list_1" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "declaration-list_1" => array( "SIow"=>"declaration declaration-list_1" , "Ïow"=>"declaration declaration-list_1" , "Iowf"=>"declaration declaration-list_1" , "SIowf"=>"declaration declaration-list_1" , "Chain"=>"declaration declaration-list_1" , "Chlo"=>"declaration declaration-list_1" , "Worthless"=>"declaration declaration-list_1" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),                    
    "declaration" => array( "SIow"=>"fun-declaration" , "Iow"=>"fun-declaration" , "Iowf"=>"fun-declaration" , "SIowf"=>"fun-declaration" , "Chain"=>"fun-declaration" , "Chlo"=>"fun-declaration" , "Worthless"=>"fun-declaration" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "var-declaration" => array( "SIow"=>"type-specifier identifier ;" , "Ïow"=>"type-specifier identifier ;" , "Iowf"=>"type-specifier identifier ;" , "SIowf"=>"type-specifier identifier ;" , "Chain"=>"type-specifier identifier ;" , "Chlo"=>"type-specifier identifier ;" , "Worthless"=>"type-specifier identifier;" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "type-specifier" => array( "SIow"=>"SIow" , "Iow"=>"Iow" , "Iowf"=>"Iowf" , "SIowf"=>"SIowf" , "Chain"=>"Chain" , "Chlo"=>"Chlo" , "Worthless"=>"Worthless" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "fun-declaration" => array( "SIow"=>"type-specifier identifier ( params ) compound-stmt" , "Ïow"=>"ype-specifier identifier ( params ) compound-stmt" , "Iowf"=>"ype-specifier identifier ( params ) compound-stmt" , "SIowf"=>"ype-specifier identifier ( params ) compound-stmt" , "Chain"=>"ype-specifier identifier ( params ) compound-stmt" , "Chlo"=>"ype-specifier identifier ( params ) compound-stmt" , "Worthless"=>"ype-specifier identifier ( params ) compound-stmt" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "params" => array( "SIow"=>"param-list" , "Ïow"=>"param-list" , "Iowf"=>"param-list" , "SIowf"=>"param-list" , "Chain"=>"param-list" , "Chlo"=>"param-list" , "Worthless"=>"Worthless" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),
    "param-list" => array( "SIow"=>"param param-list_1" , "Iow"=>"param param-list_1" , "Iowf"=>"param param-list_1" , "SIowf"=>"param param-list_1" , "Chain"=>"param param-list_1" , "Chlo"=>"param param-list_1" , "Worthless"=>"param param-list_1" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "param-list_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => ", param paramlist_1" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),
    "param" => array( "SIow"=>"type-specifier identifier" , "Ïow"=>"type-specifier identifier" , "Iowf"=>"type-specifier identifier" , "SIowf"=>"type-specifier identifier" , "Chain"=>"type-specifier identifier" , "Chlo"=>"type-specifier identifier" , "Worthless"=>"type-specifier identifier" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "compound-stmt" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"compound-stmt_1" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "compound-stmt_1" => array( "SIow"=>"local-declarations statement-list" , "Ïow"=>"local-declarations statement-list" , "Iowf"=>"local-declarations statement-list" , "SIowf"=>"local-declarations statement-list" , "Chain"=>"local-declarations statement-list" , "Chlo"=>"local-declarations statement-list" , "Worthless"=>"local-declarations statement-list" , "Include"=>"" , "/$"=>"comment local-declarations statement-list" , "$$$"=>"comment local-declarations statement-list" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"compound-stmt_1" , "identifier"=> "" , "&&" => "" , "$" => ""),                     
    "local-declarations" => array( "SIow"=>"local-declarations_1" , "Ïow"=>"local-declarations_1" , "Iowf"=>"local-declarations_1" , "SIowf"=>"local-declarations_1" , "Chain"=>"local-declarations_1" , "Chlo"=>"local-declarations_1" , "Worthless"=>"local-declarations_1" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "local-declarations_1" => array( "SIow"=>"var-declaration local-declarations_1" , "Ïow"=>"var-declaration local-declarations_1" , "Iowf"=>"var-declaration local-declarations_1" , "SIowf"=>"var-declaration local-declarations_1" , "Chain"=>"var-declaration local-declarations_1" , "Chlo"=>"var-declaration local-declarations_1" , "Worthless"=>"var-declaration local-declarations_1" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),
    "statement-list" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"statement-list_1" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"statement-list_1" , "Iteratewhen"=>"statement-list_1" , "Stop"=>"statement-list_1" , "Turnback"=>"statement-list_1" , "If"=>"statement-list_1" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"statement-list_1" , "identifier"=> "statement-list_1" , "&&" => "" , "$" => ""),
    "statement-list_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"statement statement-list_1" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"statement statement-list_1" , "Iteratewhen"=>"statement statement-list_1" , "Stop"=>"statement statement-list_1" , "Turnback"=>"statement statement-list_1" , "If"=>"statement statement-list_1" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"statement statement-list_1" , "identifier"=> "statement statement-list_1" , "&&" => "" , "$" => "0"),
    "statement" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"expression-stmt" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"iteration-stmt" , "Iteratewhen"=>"iteration-stmt" , "Stop"=>"jump-stmt" , "Turnback"=>"jump-stmt" , "If"=>"selection-stmt" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"compound-stmt" , "identifier"=> "expression-stmt" , "&&" => "" , "$" => ""),
    "expression-stmt" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>";" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "expression ;" , "&&" => "" , "$" => ""),
    "selection-stmt" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"If ( expression ) statement selection-stmt_1" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "selection-stmt_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0" , "else" => "else statement"),
    "iteration-stmt" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"Loop-statement" , "Iteratewhen"=>"Iterate-statement" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "" , "else" => "" ),
    "Loop-statement" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"Loopwhen (expression) statement" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "", "else" => "" ),                    
    "Iterate-statement" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"Iteratewhen (expression ; expression ; expression )" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "" , "else" => ""),
    "jump-statement" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"Stop ;" , "Turnback"=>"Turnback expression ;" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "expression" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"simple-expression" , "-"=>"simple-expression" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>"simple-expression"  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "simple-expression" , "Float_NUM"=>"simple-expression" , "{"=>"" , "identifier"=> "id-assign expression_1" , "&&" => "" , "$" => ""),
    "expression_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0" , "else"=>"" , "=" => "= expression"),
    "id-assign" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "identifier" , "&&" => "" , "$" => ""),
    "simple-expression" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"additive-expression simple-expression_1" , "-"=>"additive-expression simple-expression_1" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>"additive-expression simple-expression_1"  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "additive-expression simple-expression_1" , "Float_NUM"=>"additive-expression simple-expression_1" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "simple-expression_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>"relop additive-expression"  , "!="=>"relop additive-expression" , "<"=>"relop additive-expression" , ">"=>"relop additive-expression" , "<="=>"relop additive-expression" , ">="=>"relop additive-expression" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"relop additive-expression" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "relop additive-expression" , "$" => "0"),
    "relop" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>"=="  , "!="=>"!=" , "<"=>"<" , ">"=>">" , "<="=>"<=" , ">="=>">=" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"||" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "&&" , "$" => ""),
    "additive-expression" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"term additive-expression_1" , "-"=>"term additive-expression_1" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "term additive-expression_1" , "&&" => "" , "$" => ""),
    "additive-expression_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"addop term additive-expression_1" , "-"=>"addop term additive-expression_1" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),                    
    "addop" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"+" , "-"=>"-" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "term" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"factor term_1" , "-"=>"factor term_1" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "factor term_1" , "Float_NUM"=>"factor term_1" , "{"=>"" , "identifier"=> "factor term_1" , "&&" => "" , "$" => ""),
    "term_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"mulop factor term_1" , "/"=>"mulop factor term_1" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "factor" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"num" , "-"=>"num" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "num" , "Float_NUM"=>"num" , "{"=>"" , "identifier"=> "id-assign" , "&&" => "" , "$" => ""),
    "mulop" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"*" , "/"=>"/" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "args" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"arg-list" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "arg-list" , "&&" => "" , "$" => "0"),
    "arg-list" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "expression arg-list_1" , "&&" => "" , "$" => ""),
    "arg-list_1" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => ", expression arg-list_1" , ")"=>", expression arg-list_1" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => "0"),
    "num" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"signednum" , "-"=>"signednum" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "unsignednum" , "Float_NUM"=>"unsignednum" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "signednum" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"pos-num" , "-"=>"neg-num" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "unsignednum" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "value" , "Float_NUM"=>"value" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "pos-num" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"+ value" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "neg-num" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"- value" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "INT_NUM" , "Float_NUM"=>"Float_NUM" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "value" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "comment" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=> "/$ str $/" , "$$$"=>"$$$ STR" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "include_command" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"include ( F_name.txt ) ;" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "F_name" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"str" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
    "program" => array( "SIow"=>"" , "Ïow"=>"" , "Iowf"=>"" , "SIowf"=>"" , "Chain"=>"" , "Chlo"=>"" , "Worthless"=>"" , "Include"=>"" , "/$"=>"" , "$$$"=>"" , "*"=>"" , "/"=>"" , "+"=>"" , "-"=>"" , "str"=>"" , "=="=>""  , "!="=>"" , "<"=>"" , ">"=>"" , "<="=>"" , ">="=>"" , ";"=>"" , "," => "" , ")"=>"" , "("=>""  , "Loopwhen"=>"" , "Iteratewhen"=>"" , "Stop"=>"" , "Turnback"=>"" , "If"=>"" , "||" =>"" , "Int_NUM"=> "" , "Float_NUM"=>"" , "{"=>"" , "identifier"=> "" , "&&" => "" , "$" => ""),
                                                      

);

echo $parsingTable["program"]["Worthless"]
?>






