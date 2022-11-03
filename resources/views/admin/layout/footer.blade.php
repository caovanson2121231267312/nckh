<script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.js')}}"></script>
<script src="{{asset('assets/js/pcoded.js')}}"></script>
<script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/menu-setting.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard-main.js')}}"></script>
<script src="{{asset('assets/js/plugins/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/js/pages/ac-alert.js')}}"></script>
<script src="{{asset('assets/js/ajax.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

<script>
    a = document.getElementById('toastPlacement');
    a && document.getElementById('selectToastPlacement').addEventListener('change', function () {
        a.dataset.originalClass || (a.dataset.originalClass = a.className),
            a.className = a.dataset.originalClass + ' ' + this.value
    });


    d = document.getElementById('liveToastBtn'),
        f = document.getElementById('liveToast'),
        d && d.addEventListener('click', function () {
            var a = new bootstrap.Toast(f);
            a.show()
        });

fetch("http://127.0.0.1:8000/admin/order/count_data", {
        method: "get",
        headers: {
            Accept: "application/json, text/plain, */*",
            "Content-Type": "application/json",

        },
        // body: JSON.stringify({
        //     delivery_time :  document.getElementById('delivery_time').value,
        // }),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
document.querySelector('.count_data').innerHTML =data + "+";
        })
        .catch((err) => {
            console.log(err);
        });

</script>

