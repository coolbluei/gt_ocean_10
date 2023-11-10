<?php

namespace Drupal\gt_ocean\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Hero Banner Home Block.
 *
 * @Block(
 *   id = "gt_ocean_home_hero_block",
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
