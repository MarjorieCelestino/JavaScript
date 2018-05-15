		<?php

			$photoGallery = array (
				
				'img/prato_1.jpg',
				'img/prato_2.jpg',
				'img/prato_3.jpg',
				'img/prato_4.jpg'

			);

		?>
		
		<div class="gallery-001">

			<?php foreach ($photoGallery as $photo) { ?>

				<img src="<?php echo $photo; ?>" alt="galeria-fotos">

			<?php } ?>

		</div>