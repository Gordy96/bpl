<?php

/*
 * Generated from resources/BPL.g4 by ANTLR 4.8
 */

namespace BPL;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see BPLParser}.
 */
interface BPLListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see BPLParser::parse()}.
	 * @param $context The parse tree.
	 */
	public function enterParse(Context\ParseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::parse()}.
	 * @param $context The parse tree.
	 */
	public function exitParse(Context\ParseContext $context) : void;
	/**
	 * Enter a parse tree produced by the `binaryExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryExpression(Context\BinaryExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `binaryExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryExpression(Context\BinaryExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `decimalExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterDecimalExpression(Context\DecimalExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `decimalExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitDecimalExpression(Context\DecimalExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `stringExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterStringExpression(Context\StringExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `stringExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitStringExpression(Context\StringExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `mulDivExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMulDivExpression(Context\MulDivExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `mulDivExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMulDivExpression(Context\MulDivExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `boolExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolExpression(Context\BoolExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `boolExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolExpression(Context\BoolExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `addSubExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAddSubExpression(Context\AddSubExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `addSubExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAddSubExpression(Context\AddSubExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `existsExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExistsExpression(Context\ExistsExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `existsExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExistsExpression(Context\ExistsExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `identifierExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierExpression(Context\IdentifierExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `identifierExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierExpression(Context\IdentifierExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `notExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNotExpression(Context\NotExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `notExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNotExpression(Context\NotExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `parenExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterParenExpression(Context\ParenExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `parenExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitParenExpression(Context\ParenExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `comparatorExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterComparatorExpression(Context\ComparatorExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `comparatorExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitComparatorExpression(Context\ComparatorExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `arrExpression`
	 * labeled alternative in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterArrExpression(Context\ArrExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `arrExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitArrExpression(Context\ArrExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::exists()}.
	 * @param $context The parse tree.
	 */
	public function enterExists(Context\ExistsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::exists()}.
	 * @param $context The parse tree.
	 */
	public function exitExists(Context\ExistsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::md()}.
	 * @param $context The parse tree.
	 */
	public function enterMd(Context\MdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::md()}.
	 * @param $context The parse tree.
	 */
	public function exitMd(Context\MdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::addsub()}.
	 * @param $context The parse tree.
	 */
	public function enterAddsub(Context\AddsubContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::addsub()}.
	 * @param $context The parse tree.
	 */
	public function exitAddsub(Context\AddsubContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::arr()}.
	 * @param $context The parse tree.
	 */
	public function enterArr(Context\ArrContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::arr()}.
	 * @param $context The parse tree.
	 */
	public function exitArr(Context\ArrContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::comparator()}.
	 * @param $context The parse tree.
	 */
	public function enterComparator(Context\ComparatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::comparator()}.
	 * @param $context The parse tree.
	 */
	public function exitComparator(Context\ComparatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::binary()}.
	 * @param $context The parse tree.
	 */
	public function enterBinary(Context\BinaryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::binary()}.
	 * @param $context The parse tree.
	 */
	public function exitBinary(Context\BinaryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see BPLParser::bool()}.
	 * @param $context The parse tree.
	 */
	public function enterBool(Context\BoolContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see BPLParser::bool()}.
	 * @param $context The parse tree.
	 */
	public function exitBool(Context\BoolContext $context) : void;
}