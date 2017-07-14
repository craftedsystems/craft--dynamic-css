<?php

namespace Craft;

class DynamicCSSPlugin extends BasePlugin
{

	/**
   * Returns the plugin’s name
   *
	 * @return string
	 */
	public function getName()
	{
		return 'Dynamic CSS';
	}

	/**
	 * Returns the plugin’s version number.
	 *
	 * @return string The plugin’s version number.
	 */
	public function getVersion()
	{
		return '0.1.0';
	}

	/**
	 * Returns the plugin developer’s name.
	 *
	 * @return string The plugin developer’s name.
	 */
	public function getDeveloper()
	{
		return 'www.crafted.systems';
	}

	/**
	 * Returns the plugin developer’s URL.
	 *
	 * @return string The plugin developer’s URL.
	 */
	public function getDeveloperUrl()
	{
		return 'https://www.crafted.systems';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'https://github.com/craftedsystems/craft--dynamic-css';
	}

	/**
	 * Release feed
	 *	- must be valid JSON
	 *	- must begin with https://
	 * https://craftcms.com/support/updating-plugins-for-craft-2.5#plugin-update-notifications
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/craftedsystems/craft--dynamic-css/master/releases.json';
	}

}
