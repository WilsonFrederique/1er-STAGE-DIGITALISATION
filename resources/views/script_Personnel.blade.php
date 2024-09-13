{{-- ================== Inoicon ===================== --}}
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

{{-- =============== Scrip pour générer im QR des frm ================ --}}
<script>

    let imgBoxAffiche = document.getElementById("imgBoxAffiche");
    let qrImageSurLien = document.getElementById("qrImageSurLien");
    let qrTextInput = document.getElementById("qrTextInput");

    function gnrQR(){
        if(qrTextInput.value.length > 0){
            qrImageSurLien.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrTextInput.value;
            imgBoxAffiche.classList.add("show-img");
        }else{
            qrTextInput.classList.add('error');
            setTimeout(()=>{
                qrTextInput.classList.remove('error');
            },1000);
        }
    }

</script>

{{-- =============== Scrip pour validation des formlr ================ --}}
<script>

    function genererQR() {
        let vid1 = document.getElementById("vid1");
        let vid2 = document.getElementById("vid2");
        let vid3 = document.getElementById("vid3");
        let vid4 = document.getElementById("vid4");
        let vid5 = document.getElementById("vid5");

        if (vid1.value.trim() === "") {
            vid1.classList.add('error');
            setTimeout(() => {
                vid1.classList.remove('error');
            }, 1000);
        } else {
            vid1.classList.remove('error');
        }

        if (vid2.value.trim() === "") {
            vid2.classList.add('error');
            setTimeout(() => {
                vid2.classList.remove('error');
            }, 1000);
        } else {
            vid2.classList.remove('error');
        }

        if (vid3.value.trim() === "") {
            vid3.classList.add('error');
            setTimeout(() => {
                vid3.classList.remove('error');
            }, 1000);
        } else {
            vid3.classList.remove('error');
        }

        if (vid4.value.trim() === "") {
            vid4.classList.add('error');
            setTimeout(() => {
                vid4.classList.remove('error');
            }, 1000);
        } else {
            vid4.classList.remove('error');
        }
    }

</script>

{{-- ============== Scrip pour sideBar et aussi Thoble =============== --}}
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


{{-- ========================== CHANGE THEME ========================= --}}
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
