<?php

namespace Sprint\Migration;


class Version20250923162548 extends Version
{
    protected $author = "admin";

    protected $description = "Кат о нас";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'about_us',
            'CityStaffUIP'
        );

        $helper->Iblock()->saveSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'о нас пункты',
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
