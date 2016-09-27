<?php
/**
 * @file ContentAccordionStart.php
 * @brief Extend class ContentAccordionStart
 * @author Katrin Beutler
 * @version 3.5.6
 * @package kb.contao.extensions.ce
 * @copyright Katrin Beutler
 */

namespace zBootstrapAccordion;

use \Contao\ContentAccordionStart as BaseContentAccordion;

class ContentAccordionStart extends BaseContentAccordion {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_accordion_start';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        parent::compile();

        if ($this->mooImage){
            $this->Template->mooImage = \FilesModel::findByPk($this->mooImage)->path;
        }
    }
}
