$(document).ready(function () {
    $('.js-user-autocomplete').each(function () {
        var autocompleUrl=$(this).data('autocomplete-url');
        $(this).autocomplete({hint: false}, [
            {
                source: function (query, cb) {
                    $.ajax({
                        url:autocompleUrl+'?query='+query
                    }).then(function (data){
                        cb(data.users)
                    })
                },
                displayKey: 'email',
                debounce: 500
            }
        ])
    });
});