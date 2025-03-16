<?php
/**
 * Video & audio block patterns.
 *
 * @package twentig
 */

twentig_register_block_pattern(
	'twentig/hero-with-video',
	array(
		'title'      => __( 'Hero with video', 'twentig' ),
		'categories' => array( 'media', 'hero' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html_x( 'Hero', 'Block pattern category', 'twentig' ) . '"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1} --><h1 class="wp-block-heading has-text-align-center">' . esc_html_x( 'Write the page title', 'Block pattern content', 'twentig' ) . '</h1><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large","align":"center","style":{"typography":{"lineHeight":"1.35"}}} --><p class="has-text-align-center has-large-font-size" style="line-height:1.35">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed.</p><!-- /wp:paragraph --><!-- wp:video {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} --><figure class="wp-block-video alignwide" style="margin-top:var(--wp--preset--spacing--60)"><video controls poster="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" src="#"></video></figure><!-- /wp:video --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/Text and Video',
	array(
		'title'      => __( 'Text and video', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Video', 'twentig' ) . '"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} --><h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:video --><figure class="wp-block-video"><video controls poster="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" src="#"></video></figure><!-- /wp:video --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/video-with-text-on-right',
	array(
		'title'      => __( 'Video with text on right', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Video', 'twentig' ) . '"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|55"}}},"twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:video --><figure class="wp-block-video"><video controls poster="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" src="#"></video></figure><!-- /wp:video --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/video-with-text-on-left',
	array(
		'title'      => __( 'Video with text on left', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Video', 'twentig' ) . '"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|55"}}},"twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:video --><figure class="wp-block-video"><video controls poster="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" src="#"></video></figure><!-- /wp:video --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-columns-and-video',
	array(
		'title'      => __( 'Text columns and video', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Video', 'twentig' ) . '"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|55"},"margin":{"bottom":"var:preset|spacing|60"}}},"twStack":"md"} --><div class="wp-block-columns alignwide tw-cols-stack-md" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"layout":{"type":"constrained","justifyContent":"left"}} --><div class="wp-block-column"><!-- wp:heading --><h2 class="wp-block-heading">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"layout":{"type":"constrained","justifyContent":"left"}} --><div class="wp-block-column"><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:video {"align":"wide"} --><figure class="wp-block-video alignwide"><video controls poster="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" src="#"></video></figure><!-- /wp:video --></div><!-- /wp:group -->',
	)
);


twentig_register_block_pattern(
	'twentig/audio-list',
	array(
		'title'      => __( 'Audio list', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Audio', 'twentig' ) . '"},"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} --><h2 class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">' . esc_html_x( 'All episodes', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">01. Lorem ipsum dolor sit amet</h3><!-- /wp:heading --><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}},"fontSize":"small"} --><p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--15)">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --><!-- wp:audio {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} --><figure class="wp-block-audio" style="margin-top:var(--wp--preset--spacing--30)"><audio controls src="https://s.w.org/audio.mp3"></audio></figure><!-- /wp:audio --><!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --><hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/><!-- /wp:separator --><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">02. Integer enim risus suscipit eu iaculis sed</h3><!-- /wp:heading --><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}},"fontSize":"small"} --><p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--15)">Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --><!-- wp:audio {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} --><figure class="wp-block-audio" style="margin-top:var(--wp--preset--spacing--30)"><audio controls src="https://s.w.org/audio.mp3"></audio></figure><!-- /wp:audio --><!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --><hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/><!-- /wp:separator --><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">03. Aliquam tempus mi eu nulla porta luctus</h3><!-- /wp:heading --><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}},"fontSize":"small"} --><p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--15)">Mauris dui tellus mollis quis varius, sit amet ultrices in leo. Cras et purus sit amet velit congue convallis nec id diam. Sed gravida enim sed convallis porttitor.</p><!-- /wp:paragraph --><!-- wp:audio {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} --><figure class="wp-block-audio" style="margin-top:var(--wp--preset--spacing--30)"><audio controls src="https://s.w.org/audio.mp3"></audio></figure><!-- /wp:audio --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/media-list-with-image-and-button',
	array(
		'title'      => __( 'Media list with image and button', 'twentig' ),
		'categories' => array( 'media' ),
		'content'    => '<!-- wp:group {"metadata":{"name":"' . esc_html__( 'Audio', 'twentig' ) . '"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} --><h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">' . esc_html_x( 'All episodes', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|55"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">01. Lorem ipsum dolor sit amet</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} --><div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button">' . esc_html_x( 'Listen on Spotify', 'Block pattern content', 'twentig' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|55"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">02. Integer enim risus suscipit</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Fusce sed magna eu ligula commodo hendrerit fringilla ac purus. Integer sagittis efficitur rhoncus justo.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} --><div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button">' . esc_html_x( 'Listen on Spotify', 'Block pattern content', 'twentig' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|55"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">03. Aliquam tempus mi eu nulla</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Mauris dui tellus mollis quis varius, sit amet ultrices in leo. Cras et purus sit amet velit congue convallis nec id diam.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} --><div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button">' . esc_html_x( 'Listen on Spotify', 'Block pattern content', 'twentig' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);
