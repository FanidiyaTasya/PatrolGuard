// edit jadwal shift
$(document).ready(function () {
    $('.shiftModalEditLink').on('click', function () {
        var shiftId = $(this).data('shift-id');
        console.log('Id:', shiftId);
        
        $.ajax({
            url: '/schedules/shift/' + shiftId + '/edit',
            type: 'GET',
            success: function(data) {
                console.log('Data:', data);
                $('#shiftModalEdit #shift_name').val(data.shift_name);
                $('#shiftModalEdit #start_time').val(data.start_time);
                $('#shiftModalEdit #end_time').val(data.end_time);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
        $('#shift_id').val(shiftId);
        $('#formEdit').attr('action', '/schedules/shift/' + shiftId);
        $('#updateModal').modal('show');
    });
});