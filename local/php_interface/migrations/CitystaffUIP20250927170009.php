<?php

namespace Sprint\Migration;


class CitystaffUIP20250927170009 extends Version
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
    'CODE' => '',
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
    'CODE' => '',
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
        'CODE' => '',
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
  2 => 
  array (
    'NAME' => 'заработок монеток',
    'CODE' => '',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'PICTURE' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'DETAIL_PICTURE' => NULL,
  ),
)        );
    }
}
