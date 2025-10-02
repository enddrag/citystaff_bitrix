$(document).ready(function() {
    function filtertemplates() {
        const searchText = $('#search_templates').val().toLowerCase().trim();
        if(searchText==''){
            $('#templates .NB1_docs_item').css({'display':'flex'});
            $('#notemplates').hide();
            $('#templates').show();
        }
        else{
            $('#notemplates').hide();
            $('#templates').show();
            $('#templates .NB1_docs_item').each(function() {
                const docText = $(this).find('.Fa').text().toLowerCase();
                $(this).toggle(docText.includes(searchText));
                
            });
        }
        const allHidden = $('#templates .NB1_docs_item:visible').length === 0;
        if(allHidden){
            $('#notemplates').show();
            $('#templates').hide();
        }
        else{
            $('#notemplates').hide();
            $('#templates').show();
        }
    }

    // Событие при вводе текста
    $('#search_templates').on('input', filtertemplates);

    // Событие при нажатии Enter
    $('#search_templates').on('keydown', function(e) {
        if (e.key === 'Enter') {

            filtertemplates();
        }
    });

    // Событие при клике на иконку поиска
    $('#search_templates_ico').on('click', filtertemplates);

    //сразу запускаем проверку документов
    filtertemplates();

    function filterDocuments() {
        const searchText = $('#search_documents').val().toLowerCase().trim();
        if(searchText==''){
            $('#documents .NB1_docs_item').css({'display':'flex'});
            $('#nodocuments').hide();
            $('#documents').show();
        }
        else{
            $('#nodocuments').hide();
            $('#documents').show();
            $('#documents .NB1_docs_item').each(function() {
                const docText = $(this).find('.Fa').text().toLowerCase();
                $(this).toggle(docText.includes(searchText));

            });
        }
        const allHidden = $('#documents .NB1_docs_item:visible').length === 0;

        if(allHidden){
            $('#nodocuments').show();
            $('#documents').hide();
        }
        else{
            $('#nodocuments').hide();
            $('#documents').show();
        }
    }

    // Событие при вводе текста
    $('#search_documents').on('input', filterDocuments);

    // Событие при нажатии Enter
    $('#search_documents').on('keydown', function(e) {
        if (e.key === 'Enter') {

            filterDocuments();
        }
    });

    // Событие при клике на иконку поиска
    $('#search_documents_ico').on('click', filterDocuments);

    //сразу запускаем проверку документов
    filterDocuments();


    //получение данных с url
    const urlParams = new URLSearchParams(window.location.search);
    const item = urlParams.get('item');
    const type = urlParams.get('type');
    if (item && type){
        if(type == 'doc'){
            $('#search_documents').val(item);
            window.scrollTo(0, $('#documents_list').offset().top);
            filterDocuments();
        }
        else if(type == 'temp'){
            $('#search_templates').val(item);
            window.scrollTo(0, $('#templates_list').offset().top);
            filtertemplates();
        }
    }

});