<?php

/*
Plugin Name: SyntaxHighlighter Evolved: TypeScript Brush
Description: Adds support for the TypeScript language to the SyntaxHighlighter Evolved plugin.
Version: 1.5.0
Author: KnarfaLingus
Author URI: https://www.knarfalingus.com/
License: GPL3 or MIT
*/
 
/* GPL License follows */
/*  Copyright 2014-2015 Knarfalingus  (email : knarfalingus@gmail.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* MIT license follows */
/*
	Copyright (c) 2015 Knarfalingus  (email : knarfalingus@gmail.com )

	Permission is hereby granted, free of charge, to any person obtaining a 
	copy of this software and associated documentation files (the "Software"), 
	to deal in the Software without restriction, including without limitation the 
	rights to use, copy, modify, merge, publish, distribute, sublicense, and/or 
	sell copies of the Software, and to permit persons to whom the Software is 
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all 
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS 
	FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR 
	COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER 
	IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION 
	WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/


// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_typescript_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_typescript_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_typescript_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-typescript', plugins_url( 'shBrushTScript.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.4' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_typescript_addlang( $brushes ) {
    $brushes['tscript'] = 'typescript';
    $brushes['typescript'] = 'typescript';
    $brushes['ts'] = 'typescript';
 
    return $brushes;
}
 
?>