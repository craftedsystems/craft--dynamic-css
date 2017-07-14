<?php

namespace Craft;

class DynamicCSSVariable {

  private $css = '';


	/**
	 * Get CSS
	 */
  public function get()
  {
    return $this->css;
  }


	/**
	 * Set CSS
	 */
  public function set($styles)
  {
    $this->css = $this->css . "\n" . $styles;
  }

}
