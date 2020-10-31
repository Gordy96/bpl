<?php


namespace BPL;


use BPL\Context\AddSubExpressionContext;
use BPL\Context\ArrContext;
use BPL\Context\ArrExpressionContext;
use BPL\Context\BinaryExpressionContext;
use BPL\Context\BoolExpressionContext;
use BPL\Context\ComparatorExpressionContext;
use BPL\Context\DecimalExpressionContext;
use BPL\Context\ExistsExpressionContext;
use BPL\Context\ExpressionContext;
use BPL\Context\IdentifierExpressionContext;
use BPL\Context\MulDivExpressionContext;
use BPL\Context\NotExpressionContext;
use BPL\Context\ParenExpressionContext;
use BPL\Context\ParseContext;
use BPL\Context\StringExpressionContext;

class BPLExpressionVisitor extends BPLBaseVisitor {

    private $identifiers = [];

    public function __construct(array $identifiers = [])
    {
        $this->setIdentifiers($identifiers);
    }

    public function setIdentifiers(array $identifiers)
    {
        $this->identifiers = $identifiers;
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitParse(ParseContext $context)
    {
        return $this->visit($context->expression());
    }

    protected function asBoolean(ExpressionContext $context): bool
    {
        return (bool)$this->visit($context);
    }

    protected function asFloat(ExpressionContext $context): float
    {
        return (float)$this->visit($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBinaryExpression(BinaryExpressionContext $context)
    {
        if ($context->op->AND() != null) {
            return $this->asBoolean($context->left) && $this->asBoolean($context->right);
        } else if ($context->op->OR() !== null) {
            return $this->asBoolean($context->left) || $this->asBoolean($context->right);
        }
        throw new \Exception("unknown operation " . $context->getText());
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDecimalExpression(DecimalExpressionContext $context)
    {
        return (float)$context->DECIMAL()->getText();
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStringExpression(StringExpressionContext $context)
    {
        $temp = $context->STRING()->getText();
        return substr($temp, 1, strlen($temp) - 2);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMulDivExpression(MulDivExpressionContext $context)
    {
        if ($context->op->MUL()) {
            return $this->asFloat($context->left) * $this->asFloat($context->right);
        } else if ($context->op->DIV()) {
            return $this->asFloat($context->left) / $this->asFloat($context->right);
        }
        throw new \Exception("unknown operation " . $context->getText());
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBoolExpression(BoolExpressionContext $context)
    {
        return $context->bool()->TRUE() !== null;
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExistsExpression(ExistsExpressionContext $context)
    {
        $res = in_array($this->visit($context->left), $this->visit($context->right));
        return (bool)($context->op->NIN() !== null ? !$res : $res);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAddSubExpression(AddSubExpressionContext $context)
    {
        if ($context->op->ADD()) {
            return $this->asFloat($context->left) + $this->asFloat($context->right);
        } else if ($context->op->SUB()) {
            return $this->asFloat($context->left) - $this->asFloat($context->right);
        }
        throw new \Exception("unknown operation " . $context->getText());
    }
    public function getIdentifiers()
    {
        return $this->identifiers;
    }

    public function getIdentifier($identifiers, $name)
    {
        $parts = explode('.', $name);
        $num = count($parts);
        try {
            $identifier = $identifiers[$parts[0]];
        } catch (\Exception $exception) {
            throw new \Exception("no variable ${$name} found");
        }
        if ($num > 1) {
            array_shift($parts);
            $rest = implode('.', $parts);
            $identifier = $this->getIdentifier($identifier, $rest);
        }
        return $identifier;
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIdentifierExpression(IdentifierExpressionContext $context)
    {
        $name = $context->IDENTIFIER()->getText();
        $var = $this->getIdentifier($this->getIdentifiers(), $name);
        return $var;
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNotExpression(NotExpressionContext $context)
    {
        return !$this->asBoolean($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitParenExpression(ParenExpressionContext $context)
    {
        return $this->visit($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitComparatorExpression(ComparatorExpressionContext $context)
    {
        if ($context->op->GT()) {
            return $this->asFloat($context->left) > $this->asFloat($context->right);
        } else if ($context->op->GE()) {
            return $this->asFloat($context->left) >= $this->asFloat($context->right);
        } else if ($context->op->LT()) {
            return $this->asFloat($context->left) < $this->asFloat($context->right);
        } else if ($context->op->LE()) {
            return $this->asFloat($context->left) < $this->asFloat($context->right);
        } else if ($context->op->EQ()) {
            return $this->visit($context->left) == $this->visit($context->right);
        } else if ($context->op->NE()) {
            return $this->asFloat($context->left) == $this->asFloat($context->right);
        }
        throw new \Exception("unknown operation " . $context->getText());
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitArrExpression(ArrExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    public function visitArr(ArrContext $context)
    {
        $arr = [];
        foreach ($context->children as $child) {
            if ($child == $context->LBRACKET() || $child == $context->RBRACKET() || $child->getText() === ',') {
                continue;
            }
            $res = $this->visit($child);
            $arr[] = $res;
        }
        return $arr;
    }
}