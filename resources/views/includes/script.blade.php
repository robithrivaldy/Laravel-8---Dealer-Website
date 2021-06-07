<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ url('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->

<script src="{{ url('js/dashboard.js') }}"></script>

<script type="text/javascript">
    function confirm_delete() {
        return confirm('are you sure delete this data?');
    }

</script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });

</script>
