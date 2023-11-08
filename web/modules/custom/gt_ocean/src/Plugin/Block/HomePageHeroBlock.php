<?php

namespace Drupal\gt_ocean\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "home_page_hero_block",
 *   admin_label = @Translation("Home Page Hero Block"),
 *   category = @Translation("Custom"),
 * )
 */
class HomePageHeroBlock extends BlockBase
{
	/**
	 * {@inheritdoc}
	 */
	public function build()
	{
		return [
			'#theme' => 'home_page_hero_block',
			'#attached' => [
				'library' => [
					'gt_ocean/home_hero_styles',
				]
			]
		];
	}
}
