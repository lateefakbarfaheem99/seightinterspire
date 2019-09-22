<?php
error_reporting(7);
class ISC_SITEMAP_ROOT extends ISC_SITEMAP_NODE implements iISC_SITEMAP_NODE {

	/**
	*
	* @return string
	*/
	public function generateNodeHtml(ISC_SITEMAP_NODE_GENERATEHTMLOPTIONS $options = null)
	{
		$html = '';

		if ($this->countChildren()) {
			$html .= '<ul class="' . $options->rootClassName . '">';

			/*foreach ($this->getChildren() as $child) {
				$html .= $child->generateNodeHtml();
			}*/
            $children = $this->getChildren();
            for($i=0; $i<$this->countChildren(); $i++) {
                $html .= $children[$i]->generateNodeHtml();
            }

			$html .= '</ul>';
		}

		return $html;
	}
}
