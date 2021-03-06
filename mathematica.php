<?php
/*************************************************************************************
 * mathematica.php
 * -----------
 * Author: Meng Lu <lumeng.dev@gmail.com>
 * Copyright: (c) 2013 Meng Lu <lumeng.dev@gmail.com>
 * Release Version: 1.0.0
 * Date Started: 2013/07/20
 *
 * Mathematica M-file language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2013/07/20 (1.0.0)
 *   - first attempt based on GeSHi's LISP language file lisp.php 
 *
 *
 *************************************************************************************
 *
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Mathematica',
    'COMMENT_SINGLE' => array('(*' => '*)'),
    'COMMENT_MULTI' => array('(*' => '*)'),
    //Matlab Strings
	/*
	'COMMENT_REGEXP' => array(
        2 => "/(?<![\\w\\)\\]\\}\\.])('[^\\n']*?')/"
        ),
	*/
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
		  	 'Cos', 'Sin', 'Tan', 'Cot'
            ),
        2 => array(
		  	 'Plot', 'List'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '!', '%', '^', '&',
        ' + ',' - ',' * ',' / ',
        '=','<','>',
        '.',':',',',';',
        '|',
		'->'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #555;',
            1 => 'color: #555;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #33f;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://www.mathworks.com/access/helpdesk/help/techdoc/ref/{FNAMEL}.html'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Complex numbers
        0 => '(?<![\\w\\/])[+-]?[\\d]*([\\d]\\.|\\.[\\d])?[\\d]*[ij](?![\\w]|\<DOT>html)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>