(function(){//登录
    var user_name_c = document.getElementById("user_name"),
        password_c = document.getElementById("password"),
        phone_d = document.getElementById("phone_d"),
        qq_d = document.getElementById("qq_d"),
        b_d = document.getElementById("behavior_d"),
        div01 = document.getElementById("user_name_d"),
        div02 = document.getElementById("password_d"),
        sub = document.getElementById("login_sub"),
        big = document.getElementById("login_page_father"),
        notice = document.getElementById("warming"),
        logo = document.getElementById("login_logo"),
        skip = document.getElementById("skip"),
        yes = document.getElementById("yes"),
        close = document.getElementById("close"),
        wap = document.getElementById("wap"),
        login1 = document.getElementById("login1"),
        login2 = document.getElementById("login2"),
        xhr = ajaxObject.createXhr(),
        send,
        b_arr = [false,false],
        userTest = /[0-9]+/,
        passwordTest = /\s+/,
        b_c = true,
        timer;
    eventHandler.addEvent(window,"resize",function(){
        if(big.style.display == "none") return;
        clearTimeout(timer);
        timer = setTimeout(function(){
            big.style.top = (document.documentElement.clientHeight - 280)/2 + "px";
        },300)
    })
    eventHandler.addEvent(user_name_c,"blur",function(){
        if(this.value.match(userTest)!=null&&this.value.match(userTest)[0].length != 8 || this.value.length != 8){
            if(this.value != ""){
                this.style.border = "2px solid #FF3030";
            }else{
                this.style.border = "none";
            }
            b_arr[0] = false;
        }else{
            this.style.border = "2px solid #50930c";
            b_arr[0] = true;
        }
    })
    eventHandler.addEvent(password_c,"blur",function(){
        if(this.value.length == 0||this.value.length < 6||passwordTest.test(this.value)){
            if(this.value != ""){
                this.style.border = "2px solid #FF3030";
            }else{
                this.style.border = "none";
            }
            b_arr[1] = false;
        }else{
            this.style.border = "2px solid #50930c";
            b_arr[1] = true;
        }
    })
    eventHandler.addEvent(sub,"click",function(){
        if(b_arr[0] && b_arr[1]){
            send = ajaxObject.encode({"user_name":user_name_c.value,"password":password_c.value});
            ajaxObject.POST(xhr,send,"UserController.class.php");
            logo.src = "../../../public/home/image/finish.png";
            animation.move(big,{"height":"460","top":(document.documentElement.clientHeight - 460)/2 + ""},500);
            animation.move(div01,{"left":"-100","opacity":"0"},500);
            setTimeout(function(){
                animation.move(div02,{"left":"-100","opacity":"0"},500);
            },150)
            setTimeout(function(){
                animation.move(sub,{"left":"-100","opacity":"0"},500);
            },300);
            animation.move(phone_d,{"top":"72","opacity":"1.0"},1000);
            animation.move(qq_d,{"top":"132","opacity":"1.0"},1000);
            animation.move(skip,{"top":"380","opacity":"1.0"},1000);
            animation.move(yes,{"top":"380","opacity":"1.0"},1000);
            animation.move(b_d,{"top":"192","opacity":"1.0"},1000,function(){
                div01.style.display = "none";
                div02.style.display = "none";
                sub.style.display = "none";
            });

        }else{
            if(!b_c){
                return;
            }
            notice.style.display = "block";
            b_c = false;
            animation.move(notice,{"top":"110","opacity":"1.0"},1000,
                function(){
                    animation.move(notice,{"top":"80","opacity":"0"},1000,function(){
                        notice.style.top = "140px";
                        notice.style.display = "none";
                        b_c = true;
                    })
                }
            );
        }
    })

    eventHandler.addEvent(sub,"click",function(){
        wap.style.display = "block";
        big.style.display = "block";
        animation.move(big,{"top":"300","opacity":"1.0"},500,function(){
            if (parseFloat(getStyle(big,"top")) > 280) {
                animation.move(big,{"top":"200"},300,function(){
                    animation.move(big,{"top":"280"},300);
                });
            };
        });
    })
    eventHandler.addEvent(skip,"click",function(){
        wap.style.display = "block";
        big.style.display = "block";
        animation.move(big,{"top":"300","opacity":"1.0"},500,function(){
            if (parseFloat(getStyle(big,"top")) > 280) {
                animation.move(big,{"top":"200"},300,function(){
                    animation.move(big,{"top":"280"},300);
                });
            };
        });
    })
    eventHandler.addEvent(close,"click",function(){
        wap.style.display = "none";
        animation.move(big,{"top":"-280","opacity":"0"},1000,function(){
            big.style.display = "none";
        })
    })
})("login","aw");