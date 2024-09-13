{{-- ================== Inoicon ===================== --}}
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


{{-- =============== Script pour Form QR =============== --}}

<script>

    let imgBox = document.getElementById("imgBox");
    let qrImage = document.getElementById("qrImage");
    let qrText = document.getElementById("qrText");

    function genererQR(){
        if(qrText.value.length > 0){
            qrImage.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;
            imgBox.classList.add("show-img");
        }else{
            qrText.classList.add('error');
            setTimeout(()=>{
                qrText.classList.remove('error');
            },1000);
        }
    }

</script>


<script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSideMenu.forEach(i=> {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});


document.getElementById('content').style.overflow = 'scroll';



// ======= TOBLE SIDE BARE =======

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})


const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
    if(window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if(searchForm.classList.contains('show')){
            searchButtonIcon.classList.replace('bx-search', 'bx-x');
        }else{
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
        }
    }
})


if(window.innerWidth < 768) {
    sidebar.classList.add('hide');
}else if(window.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
    if(this.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
})

</script>


{{-- ////////////////////////// CHANGE THEME ///////////////////////////// --}}

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const themeToggler = document.querySelector(".theme-toggler");
        const body = document.body;

        // Load theme from localStorage
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-theme-variables');
        } else {
            body.classList.remove('dark-theme-variables');
        }

        // Toggle theme on button click
        themeToggler.addEventListener('click', () => {
            body.classList.toggle('dark-theme-variables');

            // Save theme preference to localStorage
            if (body.classList.contains('dark-theme-variables')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    });
</script>
