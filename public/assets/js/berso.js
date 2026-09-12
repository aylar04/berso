// mahdi
 let question_common_onclick = document.querySelectorAll('.question_common_onclick')
        question_common_onclick.forEach((item) => {
            item.addEventListener('click', function () {
                if (item.parentElement.classList.contains('h-12')) {
                    question_common_onclick.forEach((element) => {
                        element.parentElement.classList.add('h-12')
                        element.parentElement.classList.remove('h-48')
                        element.children[1].classList.remove('-rotate-90')
                    })
                }
                item.parentElement.classList.toggle('h-12')
                item.parentElement.classList.toggle('h-48')
                item.children[1].classList.toggle('-rotate-90')
            })
        })

        const profileButton = document.getElementById('profileButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const chevronIcon = document.getElementById('chevronIcon');

        // profileButton.addEventListener('click', (e) => {
        function profile(){
            // e.stopPropagation();
            dropdownMenu.classList.toggle('hidden');

            if (!dropdownMenu.classList.contains('hidden')) {
                const rect = profileButton.getBoundingClientRect();
                const menuRect = dropdownMenu.getBoundingClientRect();
                const viewportWidth = window.innerWidth;

                if (rect.right + menuRect.width > viewportWidth) {
                    dropdownMenu.style.left = 'auto';
                    dropdownMenu.style.right = '0';
                } else {
                    dropdownMenu.style.left = '0';
                    dropdownMenu.style.right = 'auto';
                }

                if (chevronIcon) {
                    chevronIcon.style.transform = 'rotate(180deg)';
                }
            } else {
                if (chevronIcon) {
                    chevronIcon.style.transform = 'rotate(0deg)';
                }
            }
        }
        // });

        // document.addEventListener('click', (e) => {
        //     if (!profileButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        //         dropdownMenu.classList.add('hidden');
        //         if (chevronIcon) {
        //             chevronIcon.style.transform = 'rotate(0deg)';
        //         }
        //     }
        // });


        let phoneNumber = document.getElementById("phoneNumber");
        let password = document.getElementById("password");
        let code = document.getElementById("code");
        let signupForm = document.getElementById("signupForm");


        function sendCode(el) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            if (phoneNumber.value == "") {
                alert("پرکردن همه فیلد ها الزامیست");
            } else {
                $.ajax({
                    url: route.userSend_code,
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value },
                    success: function (response) {
                        if (!response) {
                            alert("این کاربر قبلا ثبت نام کرده است")
                            location.assign(link + 'login')
                        }
                    },
                    error: function () {
                        alert("error")
                    }
                });
            }
        }
 

        function signUp(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            e.preventDefault()
            if (phoneNumber.value == "" || password.value == "" || code.value == "") {
                alert("پرکردن همه ی فیلد ها الزامی است");
            } else {
                $.ajax({
                    url: route.CheckActivationCode,
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value, "password": password.value, "code": code.value },
                    success: function (response) {
                        if (response) {
                            signupForm.submit();
                        }
                        if (!response) {
                            alert("کد وارد شده اشتباه است");
                        }
                    }
                });
            }
        }


    let loginpupop=document.getElementById('loginpupop')
    function login(dor){       
        if(dor=="open"){
            loginpupop.classList.remove('invisible');
            loginpupop.classList.remove('opacity-0');
        }
        if(dor=="clos"){
            loginpupop.classList.add('invisible');
            loginpupop.classList.add('opacity-0');
        }
    }





    let phoneNumberlogin = document.getElementById("phoneNumberlogin");
    let passwordlogin = document.getElementById("passwordlogin");
    let codeBox = document.getElementById("codeBox");
    let codelogin = document.getElementById("codelogin");
    let logInForm = document.getElementById("logInForm");

    let submitBtn = document.getElementById("submitBtn");


    function loginWithPass(el) {
        submitBtn.setAttribute("onclick", "loginPass(event)");
        el.setAttribute("onclick", "loginWithCode(this)");
        el.innerText = "ورود با کد";
        codeBox.classList.remove("block");
        codeBox.classList.add("hidden");
        passwordlogin.classList.remove("hidden");
        passwordlogin.classList.add("block");
    }

    function loginWithCode(el) {
        el.setAttribute("onclick", "loginWithPass(this)");
        el.innerText = "ورود با پسورد";
        submitBtn.setAttribute("onclick", "loginCode(event)");
        passwordlogin.classList.remove("block");
        passwordlogin.classList.add("hidden");
        codeBox.classList.remove("hidden");
        codeBox.classList.add("block");
    }

    function loginCode(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
        e.preventDefault();
        if (phoneNumberlogin.value == "" || codelogin.value == "") {
            alert("پرکردن همه فیلد ها الزامیست");
        } else {
            $.ajax({
                url: route.userLogincode,
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value, "code": codelogin.value },
                success: function (persent) {
                    if (persent) {
                        logInForm.submit();
                    }
                    if (!persent) {
                        alert("کد وارد شده یکسان نیست")
                    }
                }
            });
        }
    }

    function loginPass(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
        e.preventDefault();
        if (phoneNumberlogin.value == "" || passwordlogin.value == "") {
            alert("همه فیلد ها الزامیست");
        } else {
            $.ajax({
                url: route.userLoginPass,
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value, "password": passwordlogin.value },
                success: function (persent) {
                    if (!persent.type) {
                        alert(message.alert);
                    }
                    if (persent.type) {
                        logInForm.submit();
                    }
                }
            });
        }
    }

    function sendCodelogin(el) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
        if (phoneNumberlogin.value == "") {
            alert("شماره موبایل الزامیست")
        } else {
            $.ajax({
                url: route.usersendLoginCode,
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value },
                success: function (response) {
                    if (!response) {
                        alert("این کاربر موجود نمیباشد لطفا ثبت نام کنید")
                    }
                }
            });
        }
    }
    function change(dor){
        if(dor=='signup'){
            logInForm.classList.add('invisible')
            logInForm.classList.add('opacity-0')
            logInForm.classList.add('absolute')
            signupForm.classList.remove('invisible')
            signupForm.classList.remove('opacity-0')
            signupForm.classList.remove('absolute')
        }
        if(dor=="login"){
            logInForm.classList.remove('invisible')
            logInForm.classList.remove('opacity-0')
            logInForm.classList.remove('absolute')
            signupForm.classList.add('invisible')
            signupForm.classList.add('opacity-0')
            signupForm.classList.add('absolute')
        }
    }

//mahdi