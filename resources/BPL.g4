grammar BPL;
//java -jar antlr4.jar -visitor -Dlanguage=PHP -o php BPL.g4
parse
 : expression EOF
 ;

expression
 : LPAREN expression RPAREN                       #parenExpression
 | NOT expression                                 #notExpression
 | left=expression op=exists right=arr            #existsExpression
 | left=expression op=comparator right=expression #comparatorExpression
 | left=expression op=binary right=expression     #binaryExpression
 | left=expression op=md right=expression         #mulDivExpression
 | left=expression op=addsub right=expression     #addSubExpression
 | bool                                           #boolExpression
 | IDENTIFIER                                     #identifierExpression
 | DECIMAL                                        #decimalExpression
 | STRING                                         #stringExpression
 | arr                                            #arrExpression
 ;

exists
 : IN | NIN
 ;

md
 : MUL | DIV
 ;

addsub
 : ADD | SUB
 ;

arr
 : LBRACKET expression (COMMA expression)* RBRACKET
 ;

comparator
 : GT | GE | LT | LE | EQ | NE
 ;

binary
 : AND | OR
 ;

bool
 : TRUE | FALSE
 ;

ADD        : '+' ;
SUB        : '-' ;
MUL        : '*' ;
DIV        : '/' ;

GT         : '>' ;
GE         : '>=' ;
LT         : '<' ;
LE         : '<=' ;
EQ         : '==' ;
NE         : '!=' ;
AND        : '&&' | 'AND' ;
OR         : '||' | 'OR' ;
NOT        : '!' | 'NOT';
TRUE       : 'TRUE' ;
FALSE      : 'FALSE' ;
IN         : 'IN' ;
NIN        : NOT ' IN' ;
COMMA      : ',' ;
LBRACKET   : '[' ;
RBRACKET   : ']' ;
LPAREN     : '(' ;
RPAREN     : ')' ;
DECIMAL    : '-'? [0-9]+ ( '.' [0-9]+ )? ;
IDENTIFIER : [a-zA-Z_] [a-zA-Z_0-9.]* ;
STRING     : '"' .*? '"';
WS         : [ \r\t\u000C\n]+ -> skip;