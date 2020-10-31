<?php

/*
 * Generated from resources/BPL.g4 by ANTLR 4.8
 */

namespace BPL {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class BPLParser extends Parser
	{
		public const ADD = 1, SUB = 2, MUL = 3, DIV = 4, GT = 5, GE = 6, LT = 7, 
               LE = 8, EQ = 9, NE = 10, AND = 11, OR = 12, NOT = 13, TRUE = 14, 
               FALSE = 15, IN = 16, NIN = 17, COMMA = 18, LBRACKET = 19, 
               RBRACKET = 20, LPAREN = 21, RPAREN = 22, DECIMAL = 23, IDENTIFIER = 24, 
               STRING = 25, WS = 26;

		public const RULE_parse = 0, RULE_expression = 1, RULE_exists = 2, RULE_md = 3, 
               RULE_addsub = 4, RULE_arr = 5, RULE_comparator = 6, RULE_binary = 7, 
               RULE_bool = 8;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'parse', 'expression', 'exists', 'md', 'addsub', 'arr', 'comparator', 
			'binary', 'bool'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'+'", "'-'", "'*'", "'/'", "'>'", "'>='", "'<'", "'<='", "'=='", 
		    "'!='", null, null, null, "'TRUE'", "'FALSE'", "'IN'", null, "','", 
		    "'['", "']'", "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "ADD", "SUB", "MUL", "DIV", "GT", "GE", "LT", "LE", "EQ", "NE", 
		    "AND", "OR", "NOT", "TRUE", "FALSE", "IN", "NIN", "COMMA", "LBRACKET", 
		    "RBRACKET", "LPAREN", "RPAREN", "DECIMAL", "IDENTIFIER", "STRING", 
		    "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{1C}\u{56}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{5}\u{3}\u{24}\u{A}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{7}\u{3}\u{3A}" .
		    "\u{A}\u{3}\u{C}\u{3}\u{E}\u{3}\u{3D}\u{B}\u{3}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{7}\u{7}\u{49}\u{A}\u{7}\u{C}\u{7}\u{E}\u{7}\u{4C}" .
		    "\u{B}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}" .
		    "\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{2}\u{3}\u{4}\u{B}\u{2}\u{4}" .
		    "\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{2}\u{8}\u{3}\u{2}\u{12}\u{13}" .
		    "\u{3}\u{2}\u{5}\u{6}\u{3}\u{2}\u{3}\u{4}\u{3}\u{2}\u{7}\u{C}\u{3}" .
		    "\u{2}\u{D}\u{E}\u{3}\u{2}\u{10}\u{11}\u{2}\u{58}\u{2}\u{14}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{4}\u{23}\u{3}\u{2}\u{2}\u{2}\u{6}\u{3E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8}\u{40}\u{3}\u{2}\u{2}\u{2}\u{A}\u{42}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C}\u{44}\u{3}\u{2}\u{2}\u{2}\u{E}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{10}" .
		    "\u{51}\u{3}\u{2}\u{2}\u{2}\u{12}\u{53}\u{3}\u{2}\u{2}\u{2}\u{14}\u{15}" .
		    "\u{5}\u{4}\u{3}\u{2}\u{15}\u{16}\u{7}\u{2}\u{2}\u{3}\u{16}\u{3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{17}\u{18}\u{8}\u{3}\u{1}\u{2}\u{18}\u{19}\u{7}\u{17}" .
		    "\u{2}\u{2}\u{19}\u{1A}\u{5}\u{4}\u{3}\u{2}\u{1A}\u{1B}\u{7}\u{18}" .
		    "\u{2}\u{2}\u{1B}\u{24}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{1D}\u{7}\u{F}\u{2}" .
		    "\u{2}\u{1D}\u{24}\u{5}\u{4}\u{3}\u{D}\u{1E}\u{24}\u{5}\u{12}\u{A}" .
		    "\u{2}\u{1F}\u{24}\u{7}\u{1A}\u{2}\u{2}\u{20}\u{24}\u{7}\u{19}\u{2}" .
		    "\u{2}\u{21}\u{24}\u{7}\u{1B}\u{2}\u{2}\u{22}\u{24}\u{5}\u{C}\u{7}" .
		    "\u{2}\u{23}\u{17}\u{3}\u{2}\u{2}\u{2}\u{23}\u{1C}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{23}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{23}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{23}" .
		    "\u{20}\u{3}\u{2}\u{2}\u{2}\u{23}\u{21}\u{3}\u{2}\u{2}\u{2}\u{23}\u{22}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{24}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{25}\u{26}\u{C}" .
		    "\u{B}\u{2}\u{2}\u{26}\u{27}\u{5}\u{E}\u{8}\u{2}\u{27}\u{28}\u{5}\u{4}" .
		    "\u{3}\u{C}\u{28}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{29}\u{2A}\u{C}\u{A}\u{2}" .
		    "\u{2}\u{2A}\u{2B}\u{5}\u{10}\u{9}\u{2}\u{2B}\u{2C}\u{5}\u{4}\u{3}" .
		    "\u{B}\u{2C}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{2D}\u{2E}\u{C}\u{9}\u{2}\u{2}" .
		    "\u{2E}\u{2F}\u{5}\u{8}\u{5}\u{2}\u{2F}\u{30}\u{5}\u{4}\u{3}\u{A}\u{30}" .
		    "\u{3A}\u{3}\u{2}\u{2}\u{2}\u{31}\u{32}\u{C}\u{8}\u{2}\u{2}\u{32}\u{33}" .
		    "\u{5}\u{A}\u{6}\u{2}\u{33}\u{34}\u{5}\u{4}\u{3}\u{9}\u{34}\u{3A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{35}\u{36}\u{C}\u{C}\u{2}\u{2}\u{36}\u{37}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{37}\u{38}\u{5}\u{C}\u{7}\u{2}\u{38}\u{3A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{39}\u{25}\u{3}\u{2}\u{2}\u{2}\u{39}\u{29}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{39}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{39}\u{31}\u{3}\u{2}\u{2}\u{2}\u{39}" .
		    "\u{35}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{3B}\u{39}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3B}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{5}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3D}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{3E}\u{3F}\u{9}\u{2}" .
		    "\u{2}\u{2}\u{3F}\u{7}\u{3}\u{2}\u{2}\u{2}\u{40}\u{41}\u{9}\u{3}\u{2}" .
		    "\u{2}\u{41}\u{9}\u{3}\u{2}\u{2}\u{2}\u{42}\u{43}\u{9}\u{4}\u{2}\u{2}" .
		    "\u{43}\u{B}\u{3}\u{2}\u{2}\u{2}\u{44}\u{45}\u{7}\u{15}\u{2}\u{2}\u{45}" .
		    "\u{4A}\u{5}\u{4}\u{3}\u{2}\u{46}\u{47}\u{7}\u{14}\u{2}\u{2}\u{47}" .
		    "\u{49}\u{5}\u{4}\u{3}\u{2}\u{48}\u{46}\u{3}\u{2}\u{2}\u{2}\u{49}\u{4C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4A}\u{48}\u{3}\u{2}\u{2}\u{2}\u{4A}\u{4B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{4B}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{4D}\u{4E}\u{7}\u{16}\u{2}\u{2}\u{4E}\u{D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4F}\u{50}\u{9}\u{5}\u{2}\u{2}\u{50}\u{F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{51}\u{52}\u{9}\u{6}\u{2}\u{2}\u{52}\u{11}\u{3}\u{2}\u{2}\u{2}\u{53}" .
		    "\u{54}\u{9}\u{7}\u{2}\u{2}\u{54}\u{13}\u{3}\u{2}\u{2}\u{2}\u{6}\u{23}" .
		    "\u{39}\u{3B}\u{4A}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.8', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "BPL.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function parse() : Context\ParseContext
		{
		    $localContext = new Context\ParseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_parse);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(18);
		        $this->recursiveExpression(0);
		        $this->setState(19);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence) : Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(33);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::LPAREN:
				    	$localContext = new Context\ParenExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(22);
				    	$this->match(self::LPAREN);
				    	$this->setState(23);
				    	$this->recursiveExpression(0);
				    	$this->setState(24);
				    	$this->match(self::RPAREN);
				    	break;

				    case self::NOT:
				    	$localContext = new Context\NotExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(26);
				    	$this->match(self::NOT);
				    	$this->setState(27);
				    	$this->recursiveExpression(11);
				    	break;

				    case self::TRUE:
				    case self::FALSE:
				    	$localContext = new Context\BoolExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(28);
				    	$this->bool();
				    	break;

				    case self::IDENTIFIER:
				    	$localContext = new Context\IdentifierExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(29);
				    	$this->match(self::IDENTIFIER);
				    	break;

				    case self::DECIMAL:
				    	$localContext = new Context\DecimalExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(30);
				    	$this->match(self::DECIMAL);
				    	break;

				    case self::STRING:
				    	$localContext = new Context\StringExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(31);
				    	$this->match(self::STRING);
				    	break;

				    case self::LBRACKET:
				    	$localContext = new Context\ArrExpressionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(32);
				    	$this->arr();
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(57);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(55);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
							case 1:
							    $localContext = new Context\ComparatorExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(35);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(36);
							    $localContext->op = $this->comparator();
							    $this->setState(37);
							    $localContext->right = $this->recursiveExpression(10);
							break;

							case 2:
							    $localContext = new Context\BinaryExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(39);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(40);
							    $localContext->op = $this->binary();
							    $this->setState(41);
							    $localContext->right = $this->recursiveExpression(9);
							break;

							case 3:
							    $localContext = new Context\MulDivExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(43);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(44);
							    $localContext->op = $this->md();
							    $this->setState(45);
							    $localContext->right = $this->recursiveExpression(8);
							break;

							case 4:
							    $localContext = new Context\AddSubExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(47);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(48);
							    $localContext->op = $this->addsub();
							    $this->setState(49);
							    $localContext->right = $this->recursiveExpression(7);
							break;

							case 5:
							    $localContext = new Context\ExistsExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(51);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(52);
							    $localContext->op = $this->exists();
							    $this->setState(53);
							    $localContext->right = $this->arr();
							break;
						} 
					}

					$this->setState(59);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exists() : Context\ExistsContext
		{
		    $localContext = new Context\ExistsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_exists);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(60);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::IN || $_la === self::NIN)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function md() : Context\MdContext
		{
		    $localContext = new Context\MdContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_md);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(62);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::MUL || $_la === self::DIV)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function addsub() : Context\AddsubContext
		{
		    $localContext = new Context\AddsubContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_addsub);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(64);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::ADD || $_la === self::SUB)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arr() : Context\ArrContext
		{
		    $localContext = new Context\ArrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_arr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(66);
		        $this->match(self::LBRACKET);
		        $this->setState(67);
		        $this->recursiveExpression(0);
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(68);
		        	$this->match(self::COMMA);
		        	$this->setState(69);
		        	$this->recursiveExpression(0);
		        	$this->setState(74);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(75);
		        $this->match(self::RBRACKET);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function comparator() : Context\ComparatorContext
		{
		    $localContext = new Context\ComparatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_comparator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(77);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::GT) | (1 << self::GE) | (1 << self::LT) | (1 << self::LE) | (1 << self::EQ) | (1 << self::NE))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function binary() : Context\BinaryContext
		{
		    $localContext = new Context\BinaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_binary);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(79);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::AND || $_la === self::OR)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bool() : Context\BoolContext
		{
		    $localContext = new Context\BoolContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_bool);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::TRUE || $_la === self::FALSE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 1:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 9);

			    case 1:
			        return $this->precpred($this->ctx, 8);

			    case 2:
			        return $this->precpred($this->ctx, 7);

			    case 3:
			        return $this->precpred($this->ctx, 6);

			    case 4:
			        return $this->precpred($this->ctx, 10);
			}

			return true;
		}
	}
}

namespace BPL\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use BPL\BPLParser;
	use BPL\BPLVisitor;
	use BPL\BPLListener;

	class ParseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_parse;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterParse($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitParse($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitParse($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class BinaryExpressionContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var BinaryContext|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function binary() : ?BinaryContext
	    {
	    	return $this->getTypedRuleContext(BinaryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterBinaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitBinaryExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitBinaryExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DecimalExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DECIMAL() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::DECIMAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterDecimalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitDecimalExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitDecimalExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StringExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterStringExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitStringExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitStringExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MulDivExpressionContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var MdContext|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function md() : ?MdContext
	    {
	    	return $this->getTypedRuleContext(MdContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterMulDivExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitMulDivExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitMulDivExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BoolExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function bool() : ?BoolContext
	    {
	    	return $this->getTypedRuleContext(BoolContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterBoolExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitBoolExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitBoolExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AddSubExpressionContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var AddsubContext|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function addsub() : ?AddsubContext
	    {
	    	return $this->getTypedRuleContext(AddsubContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterAddSubExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitAddSubExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitAddSubExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExistsExpressionContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ExistsContext|null $op
		 */
		public $op;

		/**
		 * @var ArrContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function exists() : ?ExistsContext
	    {
	    	return $this->getTypedRuleContext(ExistsContext::class, 0);
	    }

	    public function arr() : ?ArrContext
	    {
	    	return $this->getTypedRuleContext(ArrContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterExistsExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitExistsExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitExistsExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdentifierExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterIdentifierExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitIdentifierExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitIdentifierExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NotExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOT() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::NOT, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterNotExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitNotExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitNotExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParenExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::LPAREN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterParenExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitParenExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitParenExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ComparatorExpressionContext extends ExpressionContext
	{
		/**
		 * @var ExpressionContext|null $left
		 */
		public $left;

		/**
		 * @var ComparatorContext|null $op
		 */
		public $op;

		/**
		 * @var ExpressionContext|null $right
		 */
		public $right;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function comparator() : ?ComparatorContext
	    {
	    	return $this->getTypedRuleContext(ComparatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterComparatorExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitComparatorExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitComparatorExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arr() : ?ArrContext
	    {
	    	return $this->getTypedRuleContext(ArrContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterArrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitArrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitArrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExistsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_exists;
	    }

	    public function IN() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::IN, 0);
	    }

	    public function NIN() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::NIN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterExists($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitExists($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitExists($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_md;
	    }

	    public function MUL() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::MUL, 0);
	    }

	    public function DIV() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::DIV, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterMd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitMd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitMd($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AddsubContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_addsub;
	    }

	    public function ADD() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::ADD, 0);
	    }

	    public function SUB() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::SUB, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterAddsub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitAddsub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitAddsub($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_arr;
	    }

	    public function LBRACKET() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::LBRACKET, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function RBRACKET() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::RBRACKET, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(BPLParser::COMMA);
	    	}

	        return $this->getToken(BPLParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterArr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitArr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitArr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ComparatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_comparator;
	    }

	    public function GT() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::GT, 0);
	    }

	    public function GE() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::GE, 0);
	    }

	    public function LT() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::LT, 0);
	    }

	    public function LE() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::LE, 0);
	    }

	    public function EQ() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::EQ, 0);
	    }

	    public function NE() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::NE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterComparator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitComparator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitComparator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BinaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_binary;
	    }

	    public function AND() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::AND, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterBinary($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitBinary($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitBinary($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BoolContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return BPLParser::RULE_bool;
	    }

	    public function TRUE() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::TRUE, 0);
	    }

	    public function FALSE() : ?TerminalNode
	    {
	        return $this->getToken(BPLParser::FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->enterBool($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof BPLListener) {
			    $listener->exitBool($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof BPLVisitor) {
			    return $visitor->visitBool($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}