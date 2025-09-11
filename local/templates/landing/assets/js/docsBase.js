$(document).ready(function() {
    function filterDocuments() {
        const searchText = $('#search_documents').val().toLowerCase().trim();
        if(searchText==''){
            $('.NB1_docs_item').css({'display':'flex'});
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
});