<table border="1">
<?
	test('1 <pre> foo </pre> 2');
	test('1 <pre> <b>foo</b> </pre> 2');
	test('1 <pre> <pre> foo </pre> </pre> 2');
	test('1 <pre> <pre> foo </pre> 2');
	test('1 <pre> foo </pre> </pre> 2');

	function test($text){

		$out = process($text);

		echo "<tr><td>".HtmlSpecialChars($text)."</td><td>".HtmlSpecialChars($out)."</td></tr>";
	}

	#######################################################################
	#
	# this function escapes html inside <pre> tags, inclduing nested <pre> tags
	#

	function process($text){

		$blocks = array();

		while(preg_match('!</pre>!i', $text)){
			$text = preg_replace_callback('!^(.*?)</pre>!i', function ($m) use (&$blocks){
				return process_block($m[1], $blocks);
			}, $text);
		}

		$text = preg_replace_callback('!{CODE-BLOCK-(\d+)}!', function ($m) use (&$blocks){
			return "<pre>".HtmlSpecialChars(unwind_block($m[1], $blocks))."</pre>";
		}, $text);

		return $text;
	}

	function process_block($text, &$blocks){

		return preg_replace_callback('!(.*)<pre>(.*?)$!i', function ($m) use (&$blocks){
			return $m[1].process_block_2($m[2], $blocks);
		}, $text);
	}

	function process_block_2($text, &$blocks){

		$key = count($blocks)+1;
		$blocks["block_$key"] = $text;

		return "{CODE-BLOCK-$key}";
	}

	function unwind_block($id, &$blocks){
		return unwind_block_2($blocks["block_$id"], $blocks);
	}

	function unwind_block_2($text, &$blocks){

		while (preg_match('!{CODE-BLOCK-(\d+)}!', $text)){

			$text = preg_replace_callback('!{CODE-BLOCK-(\d+)}!', function ($m) use (&$blocks){
				return "<pre>".unwind_block_2($blocks["block_".$m[1]], $blocks)."</pre>";
			}, $text);
		}

		return $text;
	}

	#######################################################################
?>
</table>
