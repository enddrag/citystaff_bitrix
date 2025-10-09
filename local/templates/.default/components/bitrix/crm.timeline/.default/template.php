<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;

/**
 * @var array $arParams
 * @var array $arResult
 */

$coreTemplatePath = '/bitrix/components/bitrix/crm.timeline/templates/.default/';
$this->__folder = $coreTemplatePath;
$this->addExternalJs($coreTemplatePath . 'script.js');
$this->addExternalCss($coreTemplatePath . 'style.css');

require Application::getDocumentRoot() . $coreTemplatePath . 'template.php';
?>

<script>
    /** 111052 Интеграция Yandex SpeechSense */
    BX.ready(() => {
        const observer = new MutationObserver(() => {
            document.querySelectorAll('.crm-timeline__editable-text_text').forEach(node => {
                if (node.dataset.htmlDecoded) return;

                const text = node.innerHTML;

                if (text.includes('&lt;') && text.includes('&gt;')) {
                    node.innerHTML = text
                        .replace(/&lt;/g, '<')
                        .replace(/&gt;/g, '>')
                        .replace(/&quot;/g, '"')
                        .replace(/&#039;/g, "'")
                        .replace(/&amp;/g, '&');
                    node.dataset.htmlDecoded = "1";
                }
            });
        });

        observer.observe(document.body, { childList: true, subtree: true });
    });
</script>
