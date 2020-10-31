<?php


namespace BPL;


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

class ExpressionParser
{
    protected $visitor;

    public function __construct(array $vars = [])
    {
        $this->visitor = new BPLExpressionVisitor();
        $this->visitor->setIdentifiers($vars);
    }

    public function parse(string $expression)
    {
        $lexer = new BPLLexer(InputStream::fromString($expression));
        $parser = new BPLParser(new CommonTokenStream($lexer));
        return $this->visitor->visit($parser->parse());
    }

}