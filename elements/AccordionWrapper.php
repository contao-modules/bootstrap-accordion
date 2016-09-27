<?php 
/**
* @file AccordionWrapper.php
* @author Katrin Beutler
* @version 3.5.6
* @package kb.contao.extensions.ce
* @copyright Katrin Beutler
*/

namespace zBootstrapAccordion;
use \Contao\ContentElement as ContentElement;

class AccordionWrapper extends ContentElement {
	protected $strTemplate = 'ce_accordion_wrapper_start';
	
		/**
		 * @return string
		 */
		public function generate()
		{
			return parent::generate();
		}
	
	
		/**
		 * Generate content element
		 */
		protected function compile() {
			//backend
			if (TL_MODE == 'BE') {
				$this->strTemplate = 'be_wildcard';

				/** @var \BackendTemplate|object $objTemplate */
				$objTemplate = new \BackendTemplate($this->strTemplate);

				$this->Template = $objTemplate;
				$this->Template->title = $this->mooHeadline;
			}


			//do things based on type
			if ($this->type === 'accordion_wrapper_start') {
				$GLOBALS['bootstrapAccordionId'] = 'accordion_' . $this->id;

				$this->Template->accordion_attributes = array(
					'class' => 'panel-group',
					'id' => 'accordion_' . $this->id,
					'role' => 'tablist',
					"aria-multiselectable" => 'true',
				);
			} elseif ($this->type === 'accordion_wrapper_stop') {
				$objTemplate = new \FrontendTemplate('ce_accordion_wrapper_stop');
				$this->Template = $objTemplate;
				$this->Template->setData($this->arrData);
			}
		}
}
