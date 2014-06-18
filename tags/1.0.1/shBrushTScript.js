/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/SyntaxHighlighter
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/SyntaxHighlighter/donate.html
 *
 * @version
 * 1.0.0 (Wed, 31 May 2014)
 *
 * @copyright
 * TypeScript brush Copyright (C) 2014 Knarf P. Lingus.
 *
 * @license
 * Dual licensed under the MIT and GPL licenses.
 */
 
SyntaxHighlighter.brushes.TypeScript = function()
{
		var keywords =	'any abstract boolean break case catch class const constructor continue ' +
				'debugger default delete do else enum export extends false  ' +
				'finally for foreach function if implements import in instanceof ' +
				'interface let module new null number package private protected ' +
				'public require return static string super switch ' +
				'this throw true try typeof var void while with yield';

		var r = SyntaxHighlighter.regexLib;
		
		this.regexList = [
			{ regex: r.multiLineDoubleQuotedString,					css: 'string' },			// double quoted strings
			{ regex: r.multiLineSingleQuotedString,					css: 'string' },			// single quoted strings
			{ regex: r.singleLineCComments,							css: 'comments' },			// one line comments
			{ regex: r.multiLineCComments,							css: 'comments' },			// multiline comments
			{ regex: /\s*#.*/gm,									css: 'preprocessor' },		// preprocessor tags like #region and #endregion
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),	css: 'keyword' }			// keywords
			];
	
		//this.forHtmlScript(r.scriptScriptTags);
};
 
SyntaxHighlighter.brushes.TypeScript.prototype = new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.TypeScript.aliases	= ['ts', 'tscript', 'typescript'];

