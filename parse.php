<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PyroCMS Parse Tags Plugin
 *
 * Simple plugin to parse PyroCMS tags for a string.
 *
 * @author		Adam Fairholm
 * @package		PyroCMS\Addon\Plugins
 * @copyright	Copyright (c) 2012, Adam Fairholm
 * @link 		https://github.com/adamfairholm/PyroCMS-Parse-Tags-Plugin
 * @license 	MIT
 */
class Plugin_Parse extends Plugin
{
	/**
	 * Parse Tags
	 *
	 * Usage:
	 * {{ parse:tags }}Content to parse.{{ /parse:tags }}
	 *
	 * @return string
	 */
	public function tags()
	{
		// We will either take the tag pair content as the
		// parameter or we can take a "string" parameter
		$content = ( ! $this->attribute('string')) ? $this->content() : $this->attribute('string');

		$parser = new Lex_Parser();
		$parser->scope_glue(':');

		return $parser->parse($content, array(), array($this->parser, 'parser_callback'));
	}
}

/* End of file parse.php */