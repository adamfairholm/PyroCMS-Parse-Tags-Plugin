# PyroCMS Parse Tags Plugin

This is a simple plugin that allows you to parse PyroCMS tags in a variable or block of content that might have unparsed PyroCMS tags.

## Installation

Copy the parse.php file to your addons/shared\_addons/plugins or addons/site\_ref/plugins folder. It is not ready to use!

## Usage

You can either parse content in a tag pair or as a parameter called "string". The parameter will be used in case both are present.

Parsing tag pair content:

	{{ parse:tags }}Content with unparsed tags to parse.{{ /parse:tags }}

Parsing parameter content:

	{{ parse:tags string=var_to_parse }}