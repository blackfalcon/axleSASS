<?php include 'shared/head.php'?>
	
	<header class="axle_header"><h1>| Axle | '960 grid' | 12 col </h1></header>
	
	<?php include 'shared/nav.php'?>
	
	<article class="axle_body">
		<div class="axle_instructions">
			<p>Axle's grid system is based off of the <a href="http://960.gs/">960 grid system</a> developed by <a href="http://sonspring.com/about">Nathan Smith</a>. You and others led the way ... thanks for all the hard work.  As as base, Axle's grid is using a standard pixel based solution.</p>
			<p>See code instructions and examples below.	</p>
		</div>
		<header class="axle_header">
			<p>1. 960 Site grid</p>
			<article>
				<p>960 grid layout for UI placement</p>
			</article>
		</header>
		<div class="grid_960">
			<ul>
				<li class="grid-1">.grid_12(1)</li>
				<li class="grid-11">.grid_12(11)</li>
			</ul>
			<ul>
				<li class="grid-2">.grid_12(2)</li>
				<li class="grid-10">.grid_12(10)</li>
			</ul>
			<ul>
				<li class="grid-3">.grid_12(3)</li>
				<li class="grid-9">.grid_12(9)</li>
			</ul>
			<ul>
				<li class="grid-4">.grid_12(4)</li>
				<li class="grid-8">.grid_12(8)</li>
			</ul>
			<ul>
				<li class="grid-5">.grid_12(5)</li>
				<li class="grid-7">.grid_12(7)</li>
			</ul>
			<ul>
				<li class="grid-6">.grid_12(6)</li>
				<li class="grid-6">.grid_12(6)</li>
			</ul>
			<ul>
				<li class="grid-7">.grid_12(7)</li>
				<li class="grid-5">.grid_12(5)</li>
			</ul>
			<ul>
				<li class="grid-8">.grid_12(8)</li>
				<li class="grid-4">.grid_12(4)</li>
			</ul>
			<ul>
				<li class="grid-9">.grid_12(9)</li>
				<li class="grid-3">.grid_12(3)</li>
			</ul>
			<ul>
				<li class="grid-10">.grid_12(10)</li>
				<li class="grid-2">.grid_12(2)</li>
			</ul>
			<ul>
				<li class="grid-11">.grid_12(11)</li>
				<li class="grid-1">.grid_12(1)</li>
			</ul>
			<ul>
				<li class="grid-4">.grid_12(4)</li>
				<li class="grid-4">.grid_12(4)</li>
				<li class="grid-4">.grid_12(4)</li>
			</ul>
		</div>
		<article>
			<p><b>Instructions:</b></p>
			<p>Axle's mixins support Grid width, prefix, suffix, pull and push. In your semantic css, use the mixin of <code>@include grid_12()</code> or extend <code>@extend grid_12_x</code> depending on the layout you want to use.</p>
			<p>The same syntax will be used for <code>prefix_12(), suffix_12(), pull_12() and push_12()</code></p>
			<p>In the <code>()</code> you will enter the column values and Axle takes care of the rest.</p>
			<p>Axle's solution is completely mathematical, fluid and based on percentages.  Axle's grid solution will allow you to move a fraction of a grid if needed.</p>
			<p>An example is <code>@include push_12(.5)</code> will push the block element 1/2 a grid (or 40px per this example).</p>
			<p><b>Building a semantic block element class using mixins.</b></p>
			<p><b>HTML Example:</b></p>
			<pre class="prettyprint">
&lt;article class=&quot;example_block&quot;&gt;
  &lt;p&gt;If you like OOCSS and crave real semantic markup, you will LOVE AXLE!&lt;/p&gt;
  &lt;blockquote&gt;BTW - Axle is freaking awesome&lt;/blockquote&gt;
  &lt;p&gt;&lt;cite&gt;-- &lt;a href=&quot;http://twitter.com/#!/whazzmaster&quot;&gt;whazzmaster&lt;/a&gt;&lt;/cite&gt;&lt;/p&gt;
&lt;/article&gt;
			</pre>
			
			<p><b>SCSS Example:</b></p>
			<pre class="prettyprint">
.example_block {
  @extend .grid_12_7;
  @include push_12(.25);
}			
			</pre>
		</article>		
	</article>
<?php include 'shared/footer.php'?>