$(document).ready(function(){

    /*--------------------------Поиск---------------------------*/

    const $searchInput = $('#search_input');
        const $searchIco = $('#search_ico');
    const $searchHelp = $('#search_help');
    let currentHighlightedIndex = -1;

    // Возвращает массив совпадающих ссылок (без маркировки)
    function getFilteredLinks(term) {
    if (!term) return [];
    const t = term.toLowerCase();
    return links.filter(link => link.title.toLowerCase().includes(t));
    }

    // Отрисовка подсказок
    function renderSuggestions() {
    const term = $searchInput.val().trim();
    $searchHelp.empty();

    if (!term) {
        $searchHelp.hide().css('border', '0');
        currentHighlightedIndex = -1;
        return;
    }

    const filtered = getFilteredLinks(term);

    if (filtered.length === 0) {
        $searchHelp
        .html('<div class="NB_search_help_item d-flex flex-row align-items-center Fmenu">Ничего не найдено</div>')
        .show()
        .css('border', '1px solid white');
        currentHighlightedIndex = -1;
        return;
    }

    // Создаем фрагмент для минимизации перерисовок
    const fragment = document.createDocumentFragment();
    filtered.forEach(link => {
        const a = document.createElement('a');
        a.className = 'NB_search_help_item NB_grenable Fmenu';
        a.href = link.url;
        a.textContent = link.title; // без маркировки
        a.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = link.url;
        });
        fragment.appendChild(a);
    });

    $searchHelp[0].appendChild(fragment);
    $searchHelp.show().css('border', '1px solid white');
    currentHighlightedIndex = -1;
    }

    // Навигация на выбранную подсказку
    function navigateToSelectedLink() {
    const $suggestions = $searchHelp.find('a');
    if ($suggestions.length === 0) return;
    const index = currentHighlightedIndex >= 0 ? currentHighlightedIndex : 0;
    const el = $suggestions.get(index);
    if (el) el.click();
    }

    // Подсветка одной подсказки (CSS-класс 'highlighted')
    function highlightSuggestion(index) {
    const $suggestions = $searchHelp.find('a');
    $suggestions.removeClass('highlighted');

    if (index >= 0 && index < $suggestions.length) {
        const $s = $suggestions.eq(index);
        $s.addClass('highlighted');
        $s[0].scrollIntoView({ block: 'nearest' });
        currentHighlightedIndex = index;
    } else {
        currentHighlightedIndex = -1;
    }
    }

    // События
    $searchInput.on('input', renderSuggestions);

    $searchInput.on('keydown', function(e) {
    const $suggestions = $searchHelp.find('a');
    if (!$suggestions.length && (e.key === 'ArrowDown' || e.key === 'ArrowUp')) {
        return;
    }

    if (e.key === 'Enter') {
        e.preventDefault();
        navigateToSelectedLink();
        return;
    }

    if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = (currentHighlightedIndex + 1) % $suggestions.length;
        highlightSuggestion(next);
        return;
    }

    if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = (currentHighlightedIndex - 1 + $suggestions.length) % $suggestions.length;
        highlightSuggestion(prev);
        return;
    }

    if (e.key === 'Escape') {
        $searchInput.val('');
        renderSuggestions();
    }
    });

    $searchIco.on('click', navigateToSelectedLink);

    // Клик вне области — очищаем
    $(document).on('click', function(e) {
    if (!$(e.target).closest('.NB_search').length) {
        $searchInput.val('');
        renderSuggestions();
    }
    });

    $searchInput.on('focus', function() {
    if ($searchInput.val().trim() !== '') renderSuggestions();
    });

    /*----------------------------------------------------------*/
});