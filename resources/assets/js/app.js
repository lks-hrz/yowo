$('.hero-log').click(function (e) {
    $('.logreg_pop').fadeIn(500)
})

$('.close').click(function (e) {
    $('.logreg_pop').fadeOut(500)
    $('.login').fadeOut(500)
    $('.register').fadeOut(500)
    $('.add').fadeOut(500)
    $('.add_flight').fadeOut(500)
})

$('.login_btn').click(function (e) {
    $('.login').fadeIn(500)
    $('.logreg_pop').fadeOut(200)
})

$('.side-log').click(function (e) {
    $('.logreg_pop').fadeIn(500)
    $('#menuToggle input').trigger('click')

})

$('.register_btn').click(function (e) {
    $('.register').fadeIn(500)
    $('.logreg_pop').fadeOut(500)
    $('.login').fadeOut(500)
})

$('.login_btn_nav').click(function (e) {
    $('.login').fadeIn(500)
    $('.logreg_pop').fadeOut(200)
    $('#menuToggle input').trigger('click')

})

$('.register_btn_nav').click(function (e) {
    $('.register').fadeIn(500)
    $('.logreg_pop').fadeOut(500)
    $('.login').fadeOut(500)
    $('#menuToggle input').trigger('click')

})

$('.hero-add').click(function (e) {
    $('.add').fadeIn(500)

})
$('.add_flight_btn').click(function (e) {
    $('.add_flight').fadeIn(500)
    $('.add').fadeOut(500)

})


if (document.querySelector(".hero")) {
    window.addEventListener("scroll", function () {
        if (window.pageYOffset >= $("form.search").offset().top) {
            document.querySelector(".homenavbar h1").classList.add("hide");
            document.querySelector(".nav_search.home").classList.remove("home")


        } else {
            document.querySelector(".homenavbar h1").classList.remove("hide");
            document.querySelector(".nav_search").classList.add("home");


        }
    });
}


if (document.querySelector(".hero") && window.matchMedia("(min-width: 800px)").matches) {
    document.querySelector(".nav_menu").classList.add("hide");
    window.addEventListener("scroll", function () {
        if (window.pageYOffset >= $(".container").offset().top - 62) {
            document.querySelector(".nav_menu").classList.remove("hide")


        } else {
            document.querySelector(".nav_menu").classList.add("hide")


        }
    });
}

function textAreaAdjust(o) {
    o.target.style.height = "1px";
    o.target.style.height = (10 + o.target.scrollHeight) + "px";
}

function doParagraphs(e) {

    if (e.keyCode === 13) {
        console.log(e.target);
    }
}

if (document.querySelector("form.create_story textarea")) {

    document.querySelector("form.create_story textarea").addEventListener("keyup", textAreaAdjust);

    document.querySelector("form.create_story textarea").addEventListener("keydown", doParagraphs);
}


var input = document.querySelectorAll("form.create_story input[type='file']:not(#title_img)")


input.forEach(function (item) {


    function previewImg(input) {

        var parent = input.target.parentElement;
        var idx = parent.getAttribute("data-idx")


        if (input.target.files && input.target.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                console.log(e);
                var preview_cnt = document.createElement("div");
                preview_cnt.setAttribute("class", "preview_cnt")
                var preview_img = document.createElement("img");
                preview_img.setAttribute("src", e.target.result);
                preview_img.setAttribute("width", "200");
                preview_cnt.appendChild(preview_img)


                parent.insertBefore(preview_cnt, input.target.nextElementSibling)


                parent.children[parent.children.length - 1].style.opacity = "0";
                parent.children[parent.children.length - 1].style.visibility = "hidden";

                var new_group = document.createElement("div")
                var new_idx = parseInt(idx) + 1
                new_group.setAttribute("data-idx", new_idx)
                new_group.setAttribute("class", "form-group")

                var new_text = document.createElement("textarea")
                new_text.setAttribute("id", "text_" + new_idx)
                new_text.setAttribute("name", "text_" + new_idx)
                new_text.setAttribute("placeholder", "Continue your story ...")

                var new_input = document.createElement("input");
                new_input.setAttribute("type", "file");
                new_input.setAttribute("id", "upload_" + new_idx)
                new_input.setAttribute("class", "upload")
                new_input.setAttribute("name", "upload_" + new_idx)
                new_input.setAttribute("value", "xx.jpg")

                var new_label = document.createElement("label");
                new_label.setAttribute("for", "upload_" + new_idx)
                new_label.innerHTML = "<span><svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n" +
                    "                           viewBox=\"0 0 58 58\" style=\"enable-background:new 0 0 58 58;\" xml:space=\"preserve\" width=\"20px\" height=\"20px\">\n" +
                    "\t<path d=\"M54.63,10H3.37C1.512,10,0,11.512,0,13.37v35.26C0,50.488,1.512,52,3.37,52h51.26c1.858,0,3.37-1.512,3.37-3.37V13.37\n" +
                    "\t\tC58,11.512,56.488,10,54.63,10z M56,48.63c0,0.756-0.614,1.37-1.37,1.37H3.37C2.614,50,2,49.386,2,48.63V13.37\n" +
                    "\t\tC2,12.614,2.614,12,3.37,12h51.26c0.756,0,1.37,0.614,1.37,1.37V48.63z\"/>\n" +
                    "\t<path d=\"M30,14c-9.374,0-17,7.626-17,17s7.626,17,17,17s17-7.626,17-17S39.374,14,30,14z M30,46c-8.271,0-15-6.729-15-15\n" +
                    "\t\ts6.729-15,15-15s15,6.729,15,15S38.271,46,30,46z\"/>\n" +
                    "                            <path d=\"M20,8h19c0.553,0,1-0.447,1-1s-0.447-1-1-1H20c-0.553,0-1,0.447-1,1S19.447,8,20,8z\"/></svg></span>";

                new_group.appendChild(new_text);
                new_group.appendChild(new_input);
                new_group.appendChild(new_label);

                parent.appendChild(new_group)

                new_text.addEventListener("keyup", textAreaAdjust)
                new_input.addEventListener("change", previewImg)


            }

            reader.readAsDataURL(input.target.files[0]);

        }

    }

    input[0].addEventListener("change", previewImg);

})


function previewTitleImg(input) {
    if (input.target.files && input.target.files[0]) {

        var reader_title = new FileReader();

        reader_title.onload = function (e) {
            console.log("hi");
            console.log(e);
            var title_img = document.querySelector(".titleimg .preview img");
            console.log(title_img);
            title_img.setAttribute("src", e.target.result);
            title_img.setAttribute("width", "200");
        }
        reader_title.readAsDataURL(input.target.files[0]);
    }
}

if (document.querySelector(".titleimg input[type='file']")) {

    document.querySelector(".titleimg input[type='file']").addEventListener("change", previewTitleImg)
}


// Map
var allFlightData = [];

var departurelat = document.querySelectorAll(".departurelat");
var departurelon = document.querySelectorAll(".departurelon");
var arrivallat = document.querySelectorAll(".arrivallat");
var arrivallon = document.querySelectorAll(".arrivallon");

for (var i = 0; i < departurelat.length; i++) {
    console.log(i)
    allFlightData[i] = {
        departure: {
            lat: parseInt(departurelat[i].value),
            lng: parseInt(departurelon[i].value)
        },
        arrival: {
            lat: parseInt(arrivallat[i].value),
            lng: parseInt(arrivallon[i].value)

        }
    };
}
/*
function initMap() {}
    var map;
    $(() => {
        initMap = function() {
            // your code like...
            map = new google.maps.Map(document.getElementById('map'), {center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
            // and other stuff...
        }
})
*/


var map;

if (document.querySelector("div#map")){
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 0, lng: 0},
            zoom: 2,
            /*gestureHandling: 'none',*/
            zoomControl: true
        });
    }

    initMap();

}







var flightPlanCoordinates = [];

console.log(allFlightData.length);

allFlightData.forEach(e => {
    flightPlanCoordinates.push(e.departure)
    flightPlanCoordinates.push(e.arrival)
})
console.log(flightPlanCoordinates);

var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#59545A',
    strokeOpacity: 1.0,
    strokeWeight: 2
});

flightPath.setMap(map);


// API

/*
var add_btn = document.querySelector("#create_flight");

window.axios = require("axios");

add_btn.addEventListener("click", (e) =>{
    e.preventDefault();
    console.log(e.target);
    var flightnumber;
    var date;
    var flight;
    if(e.target.previousElementSibling.children[1].value !== "" && e.target.previousElementSibling.children[2].value !== "") {
        flightnumber = e.target.previousElementSibling.children[1].value;
        date = e.target.previousElementSibling.children[2].value;

        /!*axios.request("POST", {
            url: "https://api.lufthansa.com/v1/oauth/token",
            client_id: "526zxcppnedtg79nprkvqga2",
            client_secret: "dKCza6vJN6",
            grant_type: "YOWO",
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).then(response => {
            console.log(response);
        })*!/

        axios.request('GET', {
            url: "https://api.lufthansa.com/v1/operations/flightstatus/" + flightnumber + "/" + date,
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ajmcnpnfjrsv27bz8n73exfm',
                'X-Originating-IP': "213.225.32.83"
            }
        }).then(response => {
            flight = response.data;
            axios.post("/yourworld", {
                data: flight
            })
            e.target.previousElementSibling.children[3].innerHTML = "Successfully added your flight!";
        })
    } else {
        e.target.previousElementSibling.children[3].innerHTML = "Please fill in all fields";
    }


})
*/


var stories = document.querySelectorAll(".post_tn");


stories.forEach(function (e) {
   var like_btn = e.querySelector("button.like_btn");
   var story_id = e.querySelector("input.story_id").getAttribute('value');
   var delete_btn = e.querySelector("button.delete_btn");
   var fine_btn = e.querySelector("button.reset_btn");
   var like_svg = e.querySelector("#like_svg");
    console.log(e, like_btn, story_id);

    if (like_btn){
        like_btn.addEventListener("click", function (ev) {

            console.log("fin23");

            axios.post("/story/like", {
                story_id: story_id
            }).then(function (response) {
                like_svg.setAttribute("fill", "red");
                console.log(like_svg);
            });
        });
    }



    if(delete_btn){
        delete_btn.addEventListener("click", function (ev) {
            axios.post("/admin/delete", {
                story_id: story_id
            }).then(function (response) {
                e.classList.add("post_tn_red");
            });
        });
    }

    if(fine_btn){
        fine_btn.addEventListener("click", function (ev) {
            axios.put("/admin/reset", {
                story_id: story_id
            }).then(function (response) {
                e.classList.add("post_tn_green");
            });
        });
    }

});

var like_btn = document.querySelector("button.like_btn");
var story_id = document.querySelector("input.story_id").getAttribute('value');
var flag_btn = document.querySelector("button.flag_btn");
var response_p = document.querySelector("p.response");
var like_svg = document.querySelector("#like_svg");

if(like_btn){
    like_btn.addEventListener("click", function (e) {
        if(e.target.dataset.liked == "true"){
            axios.post("/story/like", {
                story_id: story_id,
                delete: true,
            }).then(function(response){
                like_svg.setAttribute("fill", "black");
                e.target.style.backgroundColor="white";
                e.target.setAttribute("data-liked", "false");
            })
        } else {
            axios.post("/story/like", {
                story_id: story_id,
                delete:false
            }).then(function (response) {
                like_svg.setAttribute("fill", "red");
                console.log(e.target);
                e.target.style.backgroundColor="RGBA(249, 22, 40, 0.15)";
                e.target.setAttribute("data-liked", "true");
                console.log(like_svg);
            });
        }

    });

}


if(flag_btn){
    flag_btn.addEventListener("click", function (e) {
        axios.post("/story/flag", {
            story_id: story_id
        }).then(function (response) {
            console.log(response.data);
            response_p.innerHTML=response.data;
        });
    });
}



if(document.querySelector(".alert")){
    setTimeout(function (e) {
        document.querySelector(".alert").classList.add("out")
    }, 3000)
    setTimeout(function (e) {
        document.querySelector(".alert").remove()
    }, 3200)
}

