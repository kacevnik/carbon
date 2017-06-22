	<footer>
	<div class="top_footer">
		<div class="container">
			<div class="row">
				<h5>Subscribe to News Letter</h5>
				<div class="col-md-3">
					<div class="footer_phone">
						+7 499 899 20 32
						<img src="<?php echo get_template_directory_uri(); ?>/img/wats_app_footer.jpg">
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer_subscribe">
						<form>
						<select>
							<option>Exemle</option>
							<option>Exemle 1</option>
							<option>Exemle 2</option>
						</select>
						<input type="email" name="" value="Write your e-mail">	
						<input type="submit" name="" value="Submit">	
						</form>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	<div class="bottom_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 footer_call_back_div">
					<a href="" class="footer_call_back">Заказать звонок</a>
				</div>
				<div class="col-md-6 footer_copy">
					2016 Porshe Cars North America, Inc <a href="">Legal notice</a>, <a href="">Privacy policy</a>
				</div>
				<div class="col-md-3">
							<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
							'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
							'container'=> false, // обертка списка, false - это ничего
							'menu_class' => 'bottom-menu', // класс для ul
					  		'menu_id' => 'bottom-nav', // id для ul
					  	);
						wp_nav_menu($args); // выводим нижние меню
						?>
				</div>
			</div>
		</div>
	</div>

	</footer>
<?php wp_footer(); ?>
</body>
</html>