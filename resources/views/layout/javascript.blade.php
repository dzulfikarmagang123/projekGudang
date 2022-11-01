<script>
    $(() => {
        getMenu()
    })

    getMenu = () => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "{{route('getPage')}}",
            method : 'post',
            success: function(data){
                // data = JSON.parse(data);
                // console.log(data); return;
                $('.navbar-menu').html(data.navbar)
                $('.sidebar-menu').html(data.sidebar)
            }
        })
    }
</script>