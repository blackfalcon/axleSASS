<?php include '../shared/head.php'?>
	<header class="axle_header"><h1>| Axle | 'Widgets'</h1></header>
	
	<?php include '../shared/nav.php'?>
	
	<section class="axle_body">
		<header class="axle_header">
			<p>1. Example</p>
		</header>
		<article class="grid_12_col_background_shift">
			<?php include '../../UI_templates/_example.php'?>
		</article>
		
		<article>
			<p></p>
			<p>HTML Example:</p>
			<pre class="prettyprint">
<?php include '../../UI_templates/_example_code.php'?>

			</pre>
		</article>
		
		<article>
			<p>SASS object:</p>
			<pre class="prettyprint">
/public/styles/sass/imports/widgets/_example.scss			
			</pre>
		</article>
		
		<article>
			<p>Example SASS extend (use for this example):</p>
			<pre class="prettyprint">
.your_block_selector_class {
  @extend .primary_hgroup;
}
			</pre>
		</article>		
	</section>


<?php include '../shared/footer.php'?>