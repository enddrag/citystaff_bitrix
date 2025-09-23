<?php

namespace Sprint\Migration;


class Version20250916104622 extends Version
{

    protected $author = "admin";

    protected $description = "";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->MedialibElementsImport()
             ->setLimit(20)
             ->execute(
                 function ($item) {
                     $this->getHelperManager()
                          ->Medialib()
                          ->saveElement($item);
                 }
             );
    }
}
