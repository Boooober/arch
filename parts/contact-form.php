<div class="form">
	<p class="desc">Оставьте заявку на встречу с дизайнером и проведение необходимых замеров</p>
	<form class="contact-form" action="">
		<div class="row">
			<div class="col">
				<lable for="fname" class="lable"><?php pll_e('Your Name'); ?></lable>
				<input class="form-input" name="fname" type="text" placeholder="<?php pll_e('Your Name'); ?>"/>
			</div>
			<div class="col">
				<lable for="name" class="lable"><?php pll_e('Your Email'); ?></lable>
				<input class="form-input" name="femail" type="text" placeholder="<?php pll_e('Your Email'); ?>"/>
			</div>
			<div class="col">
				<lable for="name" class="lable"><?php pll_e('Your Phone'); ?></lable>
				<input class="form-input" name="fphone" type="text" placeholder="<?php pll_e('Your Phone'); ?>"/>
			</div>
			<div class="col">
				<input type="submit" value="<?php pll_e('SEND'); ?>"/>
			</div>
		</div>
	</form>
	<div class="form-response"></div>
</div>