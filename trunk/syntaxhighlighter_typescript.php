<?php

/*
Plugin Name: SyntaxHighlighter Evolved: TypeScript Brush
Description: Adds support for the TypeScript language to the SyntaxHighlighter Evolved plugin.
Version: 1.0.0
Author: KnarfaLingus
Author URI: https://www.knarfalingus.com/
License: GPL2
*/
 
/*  Copyright 2014 Knarfalingus  (email : knarfalingus@gmail.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
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