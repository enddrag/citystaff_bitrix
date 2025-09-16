<?php

namespace Sprint\Migration;


class Version20250915211605 extends Version
{
    protected $author = "admin";

    protected $description = "";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'buttons',
            'content'
        );

        $helper->Iblock()->saveSectionsFromTree(
            $iblockId,
            array (
)        );
    }
}
