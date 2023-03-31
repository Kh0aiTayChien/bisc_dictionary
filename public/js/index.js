$(function() {
    var autocomplete = $('#search').autoComplete({
        minChars: 1,
        limit: 15, // giới hạn số lượng gợi ý hiển thị là 15
        source: function(term, suggest){
            $.getJSON('/search', { term: term }, function(data){
                var suggestions = [];
                $.each(data, function(index, word){
                    suggestions.push(word.name);
                });
                suggest(suggestions);
            });
        }
    });

    $('#search').on('focus', function() {
        autocomplete.show();
    });
});

$('#search-form').submit(function(event) {
    // Ngăn chặn hành động mặc định của form
    event.preventDefault();

    // Lấy từ khóa tìm kiếm từ input
    let keyword = $('#search').val();
    let result = $('.result');
    // Gửi yêu cầu Ajax tới controller
    $.ajax({
        url: '/result',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { keyword: keyword },
        success: function(response) {
            console.log(response);
            console.log(response.name);
            if($.isEmptyObject(response)){
                result.empty();
                result.append
                (
                    '<div>'+'<p>'+'<strong>'+'Không có kết quả, vui lòng thử lại'+'</strong>'+'</p>'+'</div>'
                );
            }else{
                result.empty();
                result.append
                (
                    '<div>' + '<p>' + '<strong>' + response.name+ '&ensp;/'+ response.pronunciation + '</strong>' + '</p>' + '</div>' +
                    '<hr>' +
                    '<div>' + '<p>' + '<strong>' + 'Loại Từ:&ensp;' + '</strong>' + response.classes + '</p>' + '</div>' +
                    '<div>' + '<p>' + '<strong>' + 'Định Nghĩa:&ensp;' + '</strong>' + response.definition + '</p>' + '</div>'+
                    '<div>' + '<p>' + '<strong>' + 'Ví dụ :&ensp;' + '</strong>' + response.example + '</p>' + '</div>'
                );
                if(response.example != null){

                }
                else{
                    result.find('div:last-child').remove();
                }
            }
        },
    });
});