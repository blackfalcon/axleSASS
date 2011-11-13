<?php include '../shared/head.php'?>
	<header class="axle_header"><h1>| Axle | '756 grid' | 10 col</h1></header>
	<div class="grid_system">
		<?php include '../shared/nav.php'?>
	</div>
	<article class="axle_body">
		<div class="axle_instructions">
			<p>Axle's grid system is based off of the <a href="http://960.gs/">960 grid system</a> developed by <a href="http://sonspring.com/about">Nathan Smith</a>. You and others led the way ... thanks for all the hard work.  As as base, Axle's grid is using a standard pixel based solution.</p>
			<p>See code instructions and examples below.	</p>
		</div>
		<header class="axle_header">
			<p>1. 756 Site grid</p>
			<article>
				<p>756 grid layout for UI placement (iPad portrait)</p>
			</article>
		</header>
		<div class="grid_760 col_12_ipad">
			<ul>
				<li class="grid-ipad-12-1">.grid_12_ipad(1)</li>
				<li class="grid-ipad-12-11">.grid_12_ipad(11)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-2">.grid_12_ipad(2)</li>
				<li class="grid-ipad-12-10">.grid_12_ipad(10)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-3">.grid_12_ipad(3)</li>
				<li class="grid-ipad-12-9">.grid_12_ipad(9)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-4">.grid_12_ipad(4)</li>
				<li class="grid-ipad-12-8">.grid_12_ipad(8)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-5">.grid_12_ipad(5)</li>
				<li class="grid-ipad-12-7">.grid_12_ipad(7)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-6">.grid_12_ipad(6)</li>
				<li class="grid-ipad-12-6">.grid_12_ipad(6)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-7">.grid_12_ipad(7)</li>
				<li class="grid-ipad-12-5">.grid_12_ipad(5)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-8">.grid_12_ipad(8)</li>
				<li class="grid-ipad-12-4">.grid_12_ipad(4)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-9">.grid_12_ipad(9)</li>
				<li class="grid-ipad-12-3">.grid_12_ipad(3)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-10">.grid_12_ipad(10)</li>
				<li class="grid-ipad-12-2">.grid_12_ipad(2)</li>
			</ul>
			<ul>
				<li class="grid-ipad-12-11">.grid_12_ipad(11)</li>
				<li class="grid-ipad-12-1">.grid_12_ipad(1)</li>
			</ul>
		</div>
		<article>
			<p><b>Instructions:</b></p>
			<p>Axle's mixins support Grid width, prefix, suffix, pull and push. In your semantic css, use the mixin of <code>@include grid_12_ipad()</code> or extend <code>@extend grid_12_ipad_x</code> depending on the layout you want to use.</p>
			<p>The same syntax will be used for <code>grid_12_ipad(), grid_12_ipad(), grid_12_ipad() and grid_12_ipad()</code></p>
			<p>In the <code>()</code> you will enter the column values and Axle takes care of the rest.</p>
			<p>Axle's solution is completely mathematical, fluid and based on percentages.  Axle's grid solution will allow you to move a fraction of a grid if needed.</p>
			<p>An example is <code>@include grid_12_ipad(.5)</code> will push the block element 1/2 a grid (or 21.5px per this example).</p>
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
  @extend .grid_12_ipad_7;
  @include grid_12_ipad(.25);
}			
			</pre>
		</article>		
	</article>
<?php include '../shared/footer.php'?>