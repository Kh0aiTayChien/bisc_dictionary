$(document).ready(function() {
    $('form#delete-word').submit(function(e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            var url = $(this).attr('action');
            var token = $(this).find('input[name="_token"]').val();
            var row = $(this).closest('.word-row');
            // console.log(row);
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: token
                },
                success: function() {
                    // Xử lý khi xóa thành công
                    console.log(row);
                    row.fadeOut();
                },
                error: function(xhr, status, error) {
                    // Xử lý khi xóa thất bại
                }
            });
        }
    });
});
