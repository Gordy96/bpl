<?php

/*
 * Generated from resources/BPL.g4 by ANTLR 4.8
 */

namespace BPL;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see BPLParser}.
 */
interface BPLVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see BPLParser::parse()}.
	 *
	 * @param Context\ParseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParse(Context\ParseContext $context);

	/**
	 * Visit a parse tree produced by the `binaryExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\BinaryExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBinaryExpression(Context\BinaryExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `decimalExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\DecimalExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecimalExpression(Context\DecimalExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `stringExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\StringExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStringExpression(Context\StringExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `mulDivExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\MulDivExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDivExpression(Context\MulDivExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `boolExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\BoolExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoolExpression(Context\BoolExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `addSubExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\AddSubExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddSubExpression(Context\AddSubExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `existsExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\ExistsExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExistsExpression(Context\ExistsExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `identifierExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\IdentifierExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierExpression(Context\IdentifierExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `notExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\NotExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNotExpression(Context\NotExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `parenExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\ParenExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenExpression(Context\ParenExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `comparatorExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\ComparatorExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComparatorExpression(Context\ComparatorExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `arrExpression` labeled alternative
	 * in {@see BPLParser::expression()}.
	 *
	 * @param Context\ArrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrExpression(Context\ArrExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::exists()}.
	 *
	 * @param Context\ExistsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExists(Context\ExistsContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::md()}.
	 *
	 * @param Context\MdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMd(Context\MdContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::addsub()}.
	 *
	 * @param Context\AddsubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddsub(Context\AddsubContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::arr()}.
	 *
	 * @param Context\ArrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArr(Context\ArrContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::comparator()}.
	 *
	 * @param Context\ComparatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComparator(Context\ComparatorContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::binary()}.
	 *
	 * @param Context\BinaryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBinary(Context\BinaryContext $context);

	/**
	 * Visit a parse tree produced by {@see BPLParser::bool()}.
	 *
	 * @param Context\BoolContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBool(Context\BoolContext $context);
}