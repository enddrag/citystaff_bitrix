<?php

namespace Sprint\Migration;

class CitystaffUIP_ITEM_SUGS20251007093637 extends Version
{
    protected $author = "pmv05";

    protected $description   = "ЭЛ Подсказки";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->IblockElementsImport()
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Iblock()
                      ->addElement(
                          $item['iblock_id'],
                          $item['fields'],
                          $item['properties']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @return bool|void
     */
    public function down()
    {
    }
}
