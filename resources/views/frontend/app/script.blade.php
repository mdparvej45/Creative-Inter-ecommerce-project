{{-- javaScript file start --}}

<!-- jQuery -->
<script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
{{-- @stack('script') --}}
<!-- Bootstrap Core JS -->
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Slick JS -->
<script src="{{ asset('frontend/assets/plugins/slick/slick.js') }}"></script>

<!-- Wow JS -->
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('frontend/assets/plugins/select2/select2.min.js') }}"></script>

<!-- Scrollup JS -->
<script src="{{ asset('frontend/assets/js/scrollup.js') }}"></script>

<!-- Sidebar JS -->
<script src="{{ asset('frontend/assets/plugins/theia-sticky-sidebar/jquery.theia.sticky.js') }}"></script>

<!-- Elevatezoom JS -->
<script src="{{ asset('frontend/assets/js/jquery.elevatezoom.js') }}"></script>

<!-- Scrollbar JS -->
<script src="{{ asset('frontend/assets/plugins/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<!-- Waypoints JS -->
<script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>

<!-- Shop JS -->
<script src="{{ asset('frontend/assets/js/shop.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>

{{-- Instant photo change --}}
<script src="{{ asset('frontend/assets/js/instantPhoto.js') }}"></script>

{{-- Product comment reply  --}}
<script src="{{ asset('frontend/assets/js/commentReply.js') }}"></script>

{{-- fontawesome --}}
<script src="https://kit.fontawesome.com/622cc589c6.js" crossorigin="anonymous"></script>

{{-- javaScript file end --}}


{{-- search options --}}
<script>
    var search = $('.search')
    search.on('keyup', function() {
        var searchResult = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `{{ route('search-product') }}`,
            method: 'post',
            data: {
                searchResult: searchResult,
            },
            success: function(data) {
                if (data.length > 0) {
                    console.log(data)
                  var lists=[];
                  data.map((element)=>{
                    var list = `<li class="form-control d-block" style="padding:12px 0 0 16px; margin: 4px 0;background:white;z-index:1"><a href="/product/details/${element.slug_unique}">${element.title}</a> </li>`;
                    lists.push(list)
                  })
                  $('.searchData').html()
                  $('.searchData').html(lists)
                }

            },
            error: function(error) {
                console.log(error);
            }
        })
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

@stack('script')




