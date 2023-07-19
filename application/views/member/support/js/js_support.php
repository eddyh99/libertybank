
<script>
    $(function() {
        $('input[name="date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10), 
            dateFormat: 'yyyy-mm-dd'
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
        });
    });
</script>