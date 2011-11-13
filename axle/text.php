<?php include 'shared/head.php'?>
	<header class="axle_header"><h1>| Axle | 'text'</h1></header>
	<article class="axle_body">
		<?php include 'shared/nav.php'?>
		<header class="axle_header">
			<p>1. Heading Text</p>
			<p>Font styles are not exclusive to heading tags. SCSS mixins are applied to the illustrated tags by default.  Please apply the appropriate extend to redefine the heading tag to accommodate style and SEO.</p>
		</header>
		<article class="axle_representation">
			<h1><code>&lt;h1&gt;</code> @extend .headings_1; Lorem ipsum dolor sit amet malesuada adipiscing.</h1>
			<h2><code>&lt;h2&gt;</code> @extend .headings_2; Lorem ipsum dolor sit amet malesuada adipiscing.</h2>
			<h3><code>&lt;h3&gt;</code> @extend .headings_3; Lorem ipsum dolor sit amet malesuada adipiscing.</h3>
		</article>
		<article class="axle_instructions">
			<p><b>Semantic SCSS Example:</b></p>
			<pre class="prettyprint">
h1 {
  @extend .headings_1;
}
h2 {
  @extend .headings_2;
}
h3 {
  @extend .headings_3;
}			
			</pre>
		</article>
	</article>
	
	<article class="axle_body">
		<header class="axle_header">
			<p>2. body text</p>
			<article>
				<p>Font styles are based on <code>em</code> scales, see <a href="http://www.alistapart.com/articles/howtosizetextincss/">How to Size Text in CSS</a>.  Setting the 'medium' or base font size for the application on the <code>body</code> tag sets the app precedence.</p> 
				<p>At the appropriate block level apply the SCSS extend to the semantically named class in your design SCSS.  </p>
				<p><b>!important: </b>The layout grid system is also using <code>em</code> scales.  The SCSS calculations are based off of the base <code>em</code> of the app.  <b>NO NOT CHANGE THE <code>em</code> SCALE OF A BLOCK ELEMENT WITH SPECIFIED WIDTH.</b></p>
			</article>
		</header>
		<article class="body_text">
			<p class="xx_small">@extend: .xx_small; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="x_small">@extend .x_small; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="small">@extend .small; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="medium">@extend .medium; (default site style)</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="large">@extend .large; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="x_large">@extend .x_large; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xx_large">@extend .xx_large; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xxx_large">@extend .xxx_large; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xxxx_large">@extend .xxxx_large; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<article class="axle_instructions">
			<p><b>Semantic SCSS Example:</b></p>
			<pre class="prettyprint">
.semantic_block_element {
    @extend .x_large;  // this will adjust the text size and not alter the overall width of the parent block
  }
}
			</pre>
		</article>
		<footer></footer>
		
		
		<header class="axle_header">
			<p>3. Available font families</p>
		</header>
		<article class="axle_representation">
			<p><u>Semantic applications:</u></p>
			<p class="primary_font_family">@extend .primary_font_family</p>
			<p class="heading_font_family">@extend .heading_font_family</p>
			<p><u>OOCSS applications:</u></p>
			<p class="web_font_alpha">@extend .web_font_alpha</p>
			<p class="web_font_bravo">@extend .web_font_bravo</p>
			<p class="web_font_charlie">@extend .web_font_charlie</p>
			<p class="web_font_delta">@extend .web_font_delta</p>
		</article>
		<article class="axle_instructions">
			<p><b>Semantic SCSS Example:</b></p>
			<pre class="prettyprint">
.parent_block_class {
  @extend .web_font_bravo;
}
			</pre>
		</article>
		
		
	</article>
<?php include 'shared/footer.php'?>



