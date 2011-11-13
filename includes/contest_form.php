<article class="contest_form">
	<h3>be a contestant</h3>
	<?php include 'includes/checker_deco.php'?>
	<div class="contest_form_container">
		<form>
			<input type="text" placeholder="your name" />
			<input type="email" placeholder="email address" />
			<input type="text" placeholder="team name" />
			<ul class="horizontal_select">
				<li>
					<select>
						<option value="">team color</option>
						<option value="">Red</option>
						<option value="">Blue</option>
						<option value="">Green</option>
					</select>
				</li>
				<li>
					<select>
						<option value="">gender</option>
						<option value="">Boys</option>
						<option value="">Girls</option>
						<option value="">Boys and Girls</option>
					</select>
				</li>
			</ul>
			<input type="text" placeholder="profile file url" />
			<button>submit entry</button>
		</form>
	</div>
	<div class="ticking_clock">
		<span class="countdown">60</span>
		<p>the clock is ticking</p>
	</div>
</article>