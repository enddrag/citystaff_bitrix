<?php

namespace Sprint\Migration;


class CityStaffUIP_Cat20250930192808 extends Version
{
    protected $author = "pmv05";

    protected $description = "Кат общая информация";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'docsInfo',
            'CityStaffUIP'
        );

        $helper->Iblock()->saveSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'документы инфо',
    'CODE' => 'docs_info',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'PICTURE' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'DETAIL_PICTURE' => NULL,
  ),
  1 => 
  array (
    'NAME' => 'бонус инфо',
    'CODE' => 'bonus_info',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'PICTURE' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'DETAIL_PICTURE' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'белые элементы',
        'CODE' => 'bonus_white',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'PICTURE' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'DETAIL_PICTURE' => NULL,
      ),
    ),
  ),
)        );
    }
}
