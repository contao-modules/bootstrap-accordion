<?php
/**
 * @file ContentAccordion.php
 * @brief extend class ContentAccordion
 * @author Katrin Beutler
 * @version 3.5.6
 * @package kb.contao.extensions.ce
 * @copyright Katrin Beutler
 */

namespace zBootstrapAccordion;

use Contao\ContentAccordion as BaseContentAccordion;

class ContentAccordion extends BaseContentAccordion {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_accordion';


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
