<?php 
/**
* @file tl_content.php
* @author Katrin Beutler
* @version 3.5.6
* @package kb.contao.extensions.ce
* @copyright Katrin Beutler
*/

//PALETTES
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordion_wrapper_start'] = '{type_legend},type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordion_wrapper_stop'] = '{type_legend},type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart'] = str_replace(',mooHeadline,',',mooHeadline,mooImage,', $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionSingle'] = str_replace(',mooHeadline,',',mooHeadline,mooImage,', $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionSingle']);




$GLOBALS['TL_DCA']['tl_content']['fields']['mooImage'] = array (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>false, 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);